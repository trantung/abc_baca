<?php

class PostController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Post::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.post.index')->with(compact('data'));
	}

	public function search()
	{
		$data = CommonAdmin::searchPost();
		return View::make('admin.post.index')->with(compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name'   => 'required|unique:posts|unique:post_types',
			'slug'   => 'unique:posts|unique:post_types',
		);
		$input = Input::except('_token');
		$input['slug'] = convertToSlug($input['name']);
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('PostController@create')
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$input['image'] = CommonAdmin::uploadImage(UPLOADIMG_POST, 'image');
        	$input['meta_image'] = CommonAdmin::uploadImage(UPLOADIMG_POST, 'meta_image');
        	if($input['start_date'] == '') {
				$input['start_date'] = date('Y-m-d H:i:00');
			}
        	$id = Post::create($input)->id;
        	$post = Post::find($id);
        	//start
        	//thêm thể loại dự án cho bài viết dự án
        	if (isset($input['project_type'])) {
        		$type = $input['project_type'];
        		$post->hasProjectTypes()->attach(array_keys($type));
        	}
        	//thêm thành phố cho bài viết dự án
        	if (isset($input['city'])) {
        		$cities = $input['city'];
        		$post->hasCities()->attach(array_keys($cities));
        	}
        	//end
        	if($id) {
        		Cache::flush();
        		return Redirect::action('PostController@index')->with('success', 'Đã lưu!');
        	} else {
        		dd('Error');
        	}
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = Post::find($id);
        return View::make('admin.post.edit', array('data'=>$data));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name'   => 'required|unique:posts,name,'.$id.'|unique:post_types',
			'slug'   => 'unique:posts,slug,'.$id.'|unique:post_types',
		);
		$input = Input::except('_token');
		$input['slug'] = convertToSlug($input['name']);
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('PostController@create')
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$data = Post::find($id);
        	//start
        	//thêm thể loại dự án cho bài viết dự án
        	if (isset($input['project_type'])) {
        		$type = $input['project_type'];
        		$data->hasProjectTypes()->sync(array_keys($type));
        	} else {
        		$data->hasProjectTypes()->detach();
        	}
        	//thêm thành phố cho bài viết dự án
        	if (isset($input['city'])) {
        		$cities = $input['city'];
        		$data->hasCities()->sync(array_keys($cities));
        	} else {
        		$data->hasCities()->detach();
        	}
        	//end
        	$input['image'] = CommonAdmin::uploadImage(UPLOADIMG_POST, 'image', $data->image);
        	$input['meta_image'] = CommonAdmin::uploadImage(UPLOADIMG_POST, 'meta_image', $data->meta_image);
        	if($input['start_date'] == '') {
				$input['start_date'] = date('Y-m-d H:i:00');
			}
        	$data->update($input);
        	Cache::flush();
    		return Redirect::action('PostController@index')->with('success', 'Đã lưu!');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Post::find($id);
		$data->hasProjectTypes()->detach();
		$data->hasCities()->detach();
		if($data) {
			Cache::flush();
			$data->delete();
		}
		return Redirect::action('PostController@index')->with('success', 'Đã xóa!');
	}

}
