<?php

class SiteController extends HomeController {

	public function index()
	{
		//cache name
        $cacheName = 'index';
        //get cache
        // if(Cache::has($cacheName)) {
        //     return Cache::get($cacheName);
        // }
		$configSite = Configsite::first();
		$banners = Slide::where('type', SLIDE_BANNER)->get();
		$partners = Slide::where('type', SLIDE_PARTNER)->get();
		$partnersOther = Slide::where('type', SLIDE_PARTNER_OTHER)->get();
		$blocks = Block::all();
		$posts = Post::where('type', 1)
				->where('start_date', '<=', date('Y-m-d H:i:s'))
				->where('status', ACTIVE)
				->orderBy('start_date', 'desc')
				->take(6)->get();
		//put cache
        // $html = View::make('site.index')->with(compact('configSite', 'banners', 'partners', 'blocks', 'posts'))->render();
        // Cache::forever($cacheName, $html);
        //return view
        return View::make('site.index')->with(compact('configSite', 'banners', 'partners', 'blocks', 'posts', 'partnersOther'));
	}

	public function slug($slug)
	{
		//check page
        $page = (Input::get('page'))?Input::get('page'):1;
        //cache name
        $cacheName = $slug.'_'.$page;
        //get cache
        // if(Cache::has($cacheName)) {
        //     return Cache::get($cacheName);
        // }
        //config site
        $configSite = Configsite::first();
        //blocks trang dich vu
        if($slug == 'dich-vu') {
        	$blocks = Block::all();
    	} else {
    		$blocks = null;
    	}
    	if ($slug == 'du-an') {
    		$hotProject = true;
    	}
    	if ($slug == 'dich-vu') {
    		$servicesPage = true;
    	}
		//type
		$type = PostType::where('slug', $slug)->first();
		if(isset($type)) {
			$posts = Post::where('type', $type->id)
				->where('start_date', '<=', date('Y-m-d H:i:s'))
				->where('status', ACTIVE)
				->orderBy('start_date', 'desc')
				->paginate(PAGINATION);
			//put cache
	        // $html = View::make('site.type')->with(compact('type', 'posts', 'blocks', 'configSite', 'hotProject'))->render();
	        // Cache::forever($cacheName, $html);
	        //return view
	        return View::make('site.type')->with(compact('type', 'posts', 'blocks', 'configSite', 'hotProject', 'servicesPage'));
		}
		//post
		$post = Post::where('slug', $slug)
			->where('start_date', '<=', date('Y-m-d H:i:s'))
			->where('status', ACTIVE)
			->first();
		if(isset($post)) {
			$images = PostImage::where('post_id', $post->id)->get();
			$categoryId = RelationProject::where('post_id', $post->id)->first()->type_project_id;
			$listPostInCategory = RelationProject::where('type_project_id', $categoryId)
				->where('post_id', '!=', $post->id)
				->lists('post_id');
			$postInCategory = Post::where('status', ACTIVE)
				->whereIn('id', $listPostInCategory)
				->get();
			//put cache
	        // $html = View::make('site.post')->with(compact('post', 'images', 'configSite'))->render();
	        // Cache::forever($cacheName, $html);
	        //return view
	        return View::make('site.post')->with(compact('post', 'images', 'configSite', 'postInCategory'));
		}
		return Response::view('site.404', [], 404);
	}

	public function sitemap()
	{
		$postTypes = PostType::all();
		$posts = Post::all();
		$content = View::make('site.sitemap')->with(compact('postTypes', 'posts'));
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
	}

	public function contact()
	{
		$configSite = Configsite::first();
		return View::make('site.contact')->with(compact('configSite'));
	}

	public function sendContact()
	{
		$rules = array(
			'name'   => 'required|max:255',
			'email'   => 'required|max:255',
			'phone'   => 'required|max:255',
			'message'   => 'required|max:1000',
		);
		$input = Input::except('_token');
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('SiteController@contact')
	            ->withErrors($validator)
	            ->withInput($input);
        } else {
        	$id = Contact::create($input)->id;
        	if($id) {
        		return Redirect::action('SiteController@contact')->with('success', 'Đã gửi thành công! Cảm ơn bạn!');
        	}
        	return Redirect::action('SiteController@contact')->with('warning', 'Có lỗi xảy ra! Mời bạn thử lại');
        }
	}

	public function order()
	{
		return View::make('site.order');
	}

	public function sendOrder()
	{
		return Redirect::action('SiteController@index');
	}

	public function getFilterProject()
	{
		$input = Input::except('slug');
		$page = (Input::get('page'))?Input::get('page'):1;
		$inputAll = Input::all();
		$type = PostType::where('slug', $inputAll['slug'])->first();
		if(isset($type)) {
			if (isset($input['city_id'])) {
				$arrTag = CityProject::where($input)->lists('post_id');
			} else {
				$arrTag = RelationProject::where($input)->lists('post_id');
			}
			
			$posts = Post::where('type', $type->id)
				->where('start_date', '<=', date('Y-m-d H:i:s'))
				->whereIn('id', $arrTag)
				->where('status', ACTIVE)
				->orderBy('start_date', 'desc')
				->paginate(PAGINATION);
	        return View::make('site.project-render')->with(compact('posts'));
		}
	}
}
