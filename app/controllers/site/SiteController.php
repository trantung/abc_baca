<?php

class SiteController extends HomeController {

	public function index()
	{
		$configSite = Configsite::first();
		$banners = Slide::where('type', SLIDE_BANNER)->get();
		$partners = Slide::where('type', SLIDE_PARTNER)->get();
		$blocks = Block::all();
		return View::make('site.index')->with(compact('configSite', 'banners', 'partners', 'blocks'));
	}

	public function sitemap()
	{
		$postTypes = PostType::all();
		$posts = Post::all();
		$content = View::make('site.sitemap')->with(compact('postTypes', 'posts'));
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
	}

}
