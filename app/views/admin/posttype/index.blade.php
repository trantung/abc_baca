@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý thể loại bài viết' }}
@stop

@section('content')

	<div class="row margin-bottom">
		<div class="col-xs-12">
			<a href="{{ action('PostTypeController@create') }}" class="btn btn-primary">Thêm</a>
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
							<th>ID</th>
							<th>Tiêu đề</th>
							<th>Có slide</th>
							<th>Ngày sửa</th>
							<th style="width:300px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							@if($value->is_slide == ACTIVE)
							<td>Có slide</td>
							@else
							<td>Không có slide</td>
							@endif
							<td>{{ $value->updated_at }}</td>
							<td>
								<a href="{{ action('PostTypeController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('PostTypeController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
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

@stop
