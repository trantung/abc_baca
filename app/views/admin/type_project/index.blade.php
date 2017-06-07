@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý thể loại dự án' }}
@stop

@section('content')


	<div class="row margin-bottom">
		<div class="col-xs-12">
			<a href="{{ action('TypeProjectController@create') }}" class="btn btn-primary">Thêm</a>
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
							<th>Tên</th>
							<th>Vị trí</th>
							<th style="width:300px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->weight_number }}</td>
							<td>
								<a href="{{ action('TypeProjectController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('TypeProjectController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
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