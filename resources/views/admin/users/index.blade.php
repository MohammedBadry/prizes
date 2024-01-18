@extends('admin.layouts.master')
@section('content')

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
											&nbsp;
										</div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">{{!empty($title)?$title:''}}</h4>
                                                <a href="#" data-toggle="modal" data-target="#addUsers" class="btn btn-primary">استيراد العملاء</a>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <form action="{{url('users')}}" method="get">
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                        <div class="row gy-4">
                                                            <div class="col-sm-4">
                                                                <div class="form-group mt-2">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="search_text" value="{{request()->get('search_text')}}" placeholder="اسم المستخدم - رقم الجوال - الكود" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" class="btn btn-primary">بحث</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    <table class="table table-orders nowrap nk-tb-list is-separate">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>الاسم</th>
                                                                <th>الجوال</th>
                                                                <th>الكود</th>
                                                                <th>تاريخ الإضافة</th>
                                                                <th>الإجراء</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($users as $key=>$user)
                                                            <tr>
                                                                <td>{{ $key+ $users->firstItem() }}<td>
                                                                <td>{{$user->name}}</td>
                                                                <td>{{$user->mobile}}</td>
                                                                <td>{{$user->code}}</td>
                                                                <td>{{$user->created_at}}</td>
                                                                <td class="tb-odr-action">
                                                                    @include('admin.users.buttons.actions', ['id' => $user->id])
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div>{{ $users->links() }}</div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addUsers">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">استيراد العملاء</h4>
                                <button class="close" data-dismiss="modal">x</button>
                            </div>
                            <form action="{{route('users.import')}}" class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="preview-block">
                                        <div class="row gy-4">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="default-06">الملف</label>
                                                    <a href="{{asset('assets/dashboard/excel/users_template.xlsx')}}" style="float: left"> تحميل النموذج <em class="icon ni ni-download"></em></a>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" name="excel_file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">اختر الملف</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-flat">استيراد</button>
                                    <a class="btn btn-default btn-flat" data-dismiss="modal">{{trans('admin.cancel')}}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

@endsection
