@extends('admin.layout.default')

@section('title')
{{ $title='Thêm thành phố' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('CityController@index') }}" class="btn btn-success">Danh sách</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => 'CityController@store', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tên</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Vị trí</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="weight_number" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('status', Common::selectStatus(), ACTIVE, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Lưu lại" />
					<input type="reset" class="btn btn-default" value="Nhập lại" />
				</div>
			{{ Form::close() }}
		</div>
		<!-- /.box -->
	</div>
</div>

@include('admin.common.ckeditor')

@stop
