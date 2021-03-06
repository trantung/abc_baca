<?php

class TypeProjectController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = TypeProject::orderBy('id', 'asc')->paginate(PAGINATE);
		return View::make('admin.type_project.index')->with(compact('data'));
	}

	public function search()
	{
		$data = CommonAdmin::searchPost();
		return View::make('admin.type_project.index')->with(compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.type_project.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name'   => 'required',
		);
		$input = Input::except('_token');
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('TypeProjectController@create')
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$id = TypeProject::create($input)->id;
        	if($id) {
        		Cache::flush();
        		return Redirect::action('TypeProjectController@index')->with('success', 'Đã lưu!');
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
		$data = TypeProject::find($id);
        return View::make('admin.type_project.edit', array('data'=>$data));
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
			'name'   => 'required',
		);
		$input = Input::except('_token');
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('TypeProjectController@create')
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$data = TypeProject::find($id);
        	$data->update($input);
        	Cache::flush();
    		return Redirect::action('TypeProjectController@index')->with('success', 'Đã lưu!');
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
		$data = TypeProject::find($id);
		if($data) {
			Cache::flush();
			$data->delete();
		}
		return Redirect::action('TypeProjectController@index')->with('success', 'Đã xóa!');
	}

}
