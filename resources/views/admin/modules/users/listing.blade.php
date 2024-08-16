@extends('admin.master')
@section('css')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableCssFiles');
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2CssFiles');
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Users Management</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-layout mr-2 fs-14"></i>Users</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Users Management</a></li>
            </ol>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:users.form') }}" class="btn btn-success"><i class="fe fe-user mr-1"></i> Add New
                    User </a>

            </div>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Users Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    <th class="wd-15p border-bottom-0">DOB</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($user)
                                    @foreach ($user as $item)
                                    @php
                                        $status = ($item->status ?? 0);
                                    @endphp
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->dob}}</td>
                                    <td><span class="m-badge  m-badge--{{$status != "1" ? "danger" : "info"}} m-badge--wide">{{$status != "1" ? "Unactive" : "Active"}}</span></td>
                                    <td>{{$item->dob}}</td>
                                </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
    </div>
    </div><!-- end app-content-->
    </div>
@endsection
@section('js')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableJsFiles')
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2JsFiles')
@endsection
