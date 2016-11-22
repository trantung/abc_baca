@extends('admin.layout.default')
<?php $tel = isset($tel)?': '.$tel:''; ?>
@section('title')
{{ $title='Log users'.$tel }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('SessionUserController@index') }}" class="btn btn-success">Toàn bộ</a>
		<a href="{{ action('SessionUserController@indexuser') }}" class="btn btn-success">Danh sách SĐT</a>
		<a onclick="deleteSelected();" class="btn btn-primary">Xóa</a>
		<a onclick="deleteSelectedAll();" class="btn btn-primary">Xóa toàn bộ</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tr>
						<th><input type="checkbox" id="checkall" onClick="toggle(this)" /></th>
						<th>SĐT</th>
						<th>URL</th>
						<th>Thời gian</th>
						<th style="width:300px;">Action</th>
					</tr>
					@foreach($data as $key => $value)
					<tr>
						<td><input type="checkbox" class="id" name="id[]" value="{{ $value->id }}" /></td>
						<td><a href="{{ action('SessionUserController@indextel', $value->tel) }}"><strong>{{ $value->tel }}</strong></a></td>
						<td>{{ $value->url }}</td>
						<td>{{ date('Y-m-d H:i:s', $value->create_time) }}</td>
						<td>
							{{ Form::open(array('method'=>'DELETE', 'action' => array('SessionUserController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
							<button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		{{ $data->appends(Request::except('page'))->links() }}
	</div>
</div>

@include('admin.sessionuser.script')

@stop
