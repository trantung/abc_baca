<?php

class SessionUserController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = SessionUser::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.sessionuser.index')->with(compact('data'));
	}

	public function indexuser()
	{
		$data = SessionUser::groupBy('tel')->paginate(PAGINATE);
		return View::make('admin.sessionuser.index')->with(compact('data'));
	}

	public function indextel($tel)
	{
		$data = SessionUser::where('tel', $tel)->orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.sessionuser.index')->with(compact('data', 'tel'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// 
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
		// 
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = SessionUser::find($id);
		if($data) {
			$data->delete();
		}
        return Redirect::action('SessionUserController@index')->with('success', 'Đã xóa!');
	}

	// public function search()
	// {
	// 	$input = Input::all();
	// 	$data = CommonLog::searchSessionUser($input);
	// 	return View::make('admin.sessionuser.index')->with(compact('data'));
	// }

	public function deleteSessionUser()
	{
		$id = Input::get('id');
		SessionUser::whereIn('id', $id)->delete();
		return 1;
	}

	public function deleteAllSessionUser()
	{
		SessionUser::truncate();
	}

}
