@extends('admin.layout.default')

@section('title')
{{ $title='Sửa bài viết' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostController@index') }}" class="btn btn-success">Danh sách</a>
		<a href="{{ action('PostController@create') }}" class="btn btn-primary">Thêm bài viết</a>
		<a href="{{ action('PostImageController@index2', $data->id) }}" class="btn btn-primary">Danh sách ảnh</a>
		<a href="{{ action('PostImageController@create2', $data->id) }}" class="btn btn-primary">Thêm ảnh</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => array('PostController@update', $data->id), 'method' => 'PUT', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tiêu đề</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="{{ $data->name }}">
							</div>
						</div>
					</div>
					<div class="form-group" style="position: relative;">
						<label>Ngày đăng</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control datetimeformat" name="start_date" value="{{ $data->start_date }}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Thể loại</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('type', Common::getSelectArray('PostType', 1), $data->type, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mô tả ngắn</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="summary" rows="4">{{ $data->summary }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="description" id="editor1">{{ $data->description }}</textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Ảnh</label>
						<p>Kích cỡ: 390x250</p>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
								@if($data->image != '')
								<img class="image_fb" src="{{ url($data->image) }}" />
								@endif
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('status', Common::selectStatus(), $data->status, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Code nhúng</label>
						<p>Ví dụ: https://my.matterport.com/show/?m=c93sVvjFZaF</p>
						<div class="row">
							<div class="col-sm-6">
							<textarea class="form-control" name="embed" rows="4">{{ $data->embed }}</textarea>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label>Thể loại dự án</label>
						<div class="row">
                            @foreach(TypeProject::all() as $value)
                            <div class="col-sm-6">
                                {{ $value->name }}: {{ Form::checkbox("project_type[".$value->id."]", $value->id, checkValueChecked('RelationProject', ['post_id' => $data->id, 'type_project_id' => $value->id])) }}
                            </div>
                            @endforeach
                        </div>
					</div>
					<div class="form-group">
						<label>Thành phố</label>
						<div class="row">
                            @foreach(City::all() as $city)
                            <div class="col-sm-6">
                                {{ $city->name }}: {{ Form::checkbox("city[".$city->id."]", $city->id, checkValueChecked('CityProject', ['post_id' => $data->id, 'city_id' => $value->id])) }}
                            </div>
                            @endforeach
                        </div>
					</div>
					<div class="form-group">
						<label>Hot</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('is_hot', Common::selectHot(), $data->is_hot, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Form liên hệ tự nhập </label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="form_manual">{{ $data->form_manual }}</textarea>
							</div>
						</div>
					</div>
					@include('admin.common.meta', array('isEdit'=>1))
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Lưu lại" />
					<input type="reset" class="btn btn-default" value="Reset" />
				</div>
			{{ Form::close() }}
		</div>
		<!-- /.box -->
	</div>
</div>

@include('admin.common.ckeditor')

@stop
