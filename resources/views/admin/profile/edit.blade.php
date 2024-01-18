@extends('admin.layouts.master')
@section('content')

	<div class="nk-content ">
		<div class="container-fluid">
			<div class="nk-content-inner">
				<div class="nk-content-body">
					<div class="components-preview wide-md mx-auto">
						<div class="nk-block nk-block-lg">
							<div class="nk-block-head">
								<div class="nk-block-head-content">
									<h4 class="title nk-block-title">تعديل البيانات الشخصية</h4>
								</div>
							</div>
							<div class="card card-preview">

								<div class="card-inner">
                                    <form action="{{url('profile')}}" class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="preview-block">
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="name">الاسم</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="email">الإيميل</label>
                                                        <div class="form-control-wrap">
                                                            <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="password">كلمة المرور</label>
                                                        <div class="form-control-wrap">
                                                            <input type="password" class="form-control" name="password" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="password_confirmation">كلمة المرور</label>
                                                        <div class="form-control-wrap">
                                                            <input type="password" class="form-control" name="password_confirmation" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">{{ trans('admin.photo_profile') }}</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_profile">
                                                                <label class="custom-file-label" for="photo_profile">الصورة الشخصية</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <br />
                                                    @include('admin.show_image',['image'=>auth()->user()->photo_profile])
                                                </div>
                                            </div-->
                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-success btn-flat">تحديث</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

								</div>

							</div><!-- .card-preview -->
						</div><!-- .nk-block -->
					</div><!-- .components-preview -->
				</div>
			</div>
		</div>
	</div>
@endsection
