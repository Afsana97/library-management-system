@extends('admin.master')

@section('title')
    Borrow Request
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Data Tables</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Basic Datatable</h3>
                        </div>
                        <div class="card-body">

                            <h1 class="text-center text-success">{{ session('msg') }}</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Student name</th>
                                            <th class="wd-15p border-bottom-0">Category name</th>
                                            <th class="wd-15p border-bottom-0">Book name</th>
                                            <th class="wd-15p border-bottom-0">Author name</th>
                                            <th class="wd-15p border-bottom-0">Status</th>
                                            <th class="wd-15p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $book->category_name }}</td>
                                                <td>{{ $book->book_name }}</td>
                                                <td>{{ $book->author_name }}</td>
                                                <td>
                                                    @if ($book->status == '1')
                                                         <a href="" class="btn btn-success">Available</a>
                                                        @else
                                                        <a href="" class="btn btn-danger">Unavailable</a>
                                                        @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.accept.boorow',[$book->id,$user->id])}}" class="btn btn-success">Accept Request</a>
                                                    
                                                    <a href="{{route('admin.cancel.boorow')}}"class="btn btn-danger">Deny Request</a>
                                                
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection