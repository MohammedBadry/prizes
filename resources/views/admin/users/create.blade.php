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
                                    <form action="{{url('users')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="nk-wizard-content">
                                            <div class="row gy-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">الاسم</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="name" value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="mobile">رقم الجوال</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="mobile" value="" required>
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
                                                            <input type="text" class="form-control" name="code" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="password">كلمة المرور</label>
                                                        <div class="form-control-wrap">
                                                            <input type="password" class="form-control" name="password" value="" required>
                                                        </div>
                                                    </div>
                                                </div--><!-- .col -->
                                            </div>
                                        </div>
                                        <div class="row gy-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">إضافة</button>
                                                </div>
                                            </div>
                                        </div><!-- .row -->
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
