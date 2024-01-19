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
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <form action="{{url('winners')}}" method="get">
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
                                                        <a href="@if($users->count()>0){{route('winners.export')}}/?search_text={{request()->search_text}} @else javascript:; @endif" @if($users->count()<1) onclick="alert('لا يوجد فائزين');" @endif style="float: left"> تصدير <em class="icon ni ni-file-xls"></em></a>
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>الاسم</th>
                                                                <th>الجوال</th>
                                                                <th>الكود</th>
                                                                <th>تاريخ الإضافة</th>
                                                                <th>تاريخ الفوز</th>
                                                                <th>الإجراء</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($users as $key=>$user)
                                                            <tr>
                                                                <td>{{ $key+ $users->firstItem() }}</td>
                                                                <td>{{$user->name}}</td>
                                                                <td>{{$user->mobile}}</td>
                                                                <td>{{$user->code}}</td>
                                                                <td>{{$user->created_at}}</td>
                                                                <td>{{$user->win_date}}</td>
                                                                <td class="tb-odr-action">
                                                                    @include('admin.winners.buttons.actions', ['id' => $user->id])
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

@endsection
