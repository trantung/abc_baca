@extends('admin.layout.default')

@section('title')
{{ $title='Thêm bài viết' }}
@stop

@section('content')

<div class="row margin-bottom">
	<div class="col-xs-12">
		<a href="{{ action('PostController@index') }}" class="btn btn-success">Danh sách</a>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<!-- form start -->
			{{ Form::open(array('action' => 'PostController@store', 'files' => true)) }}
				<div class="box-body">
					<div class="form-group">
						<label>Tiêu đề</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control" name="name" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Ngày đăng</label>
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control datetimeformat" name="start_date" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Thể loại</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('type', Common::getSelectArray('PostType', 1), '', array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mô tả ngắn</label>
						<div class="row">
							<div class="col-sm-6">
								<textarea class="form-control" name="summary" rows="4"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="description" id="editor1"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Ảnh</label>
						<p>Kích cỡ: 390x250</p>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::file('image') }}
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
					<div class="form-group">
						<label>Code nhúng</label>
						<p>Ví dụ: https://my.matterport.com/show/?m=c93sVvjFZaF</p>
						<div class="row">
							<div class="col-sm-6">
							<textarea class="form-control" name="embed" rows="4"></textarea>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label>Thể loại dự án</label>
						<div class="row">
                            @foreach(TypeProject::all() as $value)
                            <div class="col-sm-6">
                                {{ $value->name }}: {{ Form::checkbox("project_type[".$value->id."]", $value->id, null) }}
                            </div>
                            @endforeach
                        </div>
					</div>
					<div class="form-group">
						<label>Thành phố</label>
						<div class="row">
                            @foreach(City::all() as $city)
                            <div class="col-sm-6">
                                {{ $city->name }}: {{ Form::checkbox("city[".$city->id."]", $city->id, null) }}
                            </div>
                            @endforeach
                        </div>
					</div>
					<div class="form-group">
						<label>Hot</label>
						<div class="row">
							<div class="col-sm-6">
								{{ Form::select('is_hot', Common::selectHot(), ACTIVE, array('class' =>'form-control')) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Form liên hệ tự nhập </label>
						<div class="row">
							<div class="col-sm-10">
								<textarea class="form-control" name="form_manual"></textarea>
							</div>
						</div>
					</div>
					@include('admin.common.meta')
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
