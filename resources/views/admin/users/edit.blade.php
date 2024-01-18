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
									<h4 class="title nk-block-title">{{ !empty($title)?$title:'' }}</h4>
								</div>
							</div>
							<div class="card card-preview">

								<div class="card-inner">
                                    <form action="{{url('users/'.$admins->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="nk-wizard-content">
                                            <div class="row gy-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">الاسم</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="name" value="{{$admins->name}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="mobile">رقم الجوال</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="mobile" value="{{$admins->mobile}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-wizard-content">
                                            <div class="row gy-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="form-label" for="code">الكود</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="code" value="{{$admins->code}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="password">كلمة المرور</label>
                                                        <div class="form-control-wrap">
                                                            <input type="password" class="form-control" name="password" value="">
                                                        </div>
                                                    </div>
                                                </div--><!-- .col -->
                                            </div>
                                            <div class="row gy-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">تحديث</button>
                                                    </div>
                                                </div>
                                            </div><!-- .row -->
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
