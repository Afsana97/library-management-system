@extends('admin.master')

@section('title')
    Borroed Books List
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
                            <h3 class="card-title">Borrowed Books</h3>
                        </div>
                        <div class="card-body">

                            <h1 class="text-center text-success">{{ session('msg') }}</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Student Id</th>
                                            <th class="wd-15p border-bottom-0">Book name</th>
                                            <th class="wd-15p border-bottom-0">Author name</th>
                                            <th class="wd-15p border-bottom-0">Category name</th>
                                            <th class="wd-15p border-bottom-0">Date & Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($borrowlists as $borrowlist)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $borrowlist->student_id }}</td>
                                                <td>{{ $borrowlist->book_name }}</td>
                                                <td>{{ $borrowlist->author_name }}</td>
                                                <td>{{ $borrowlist->category_name }}</td>
                                                <td>{{ $borrowlist->created_at }}</td>
                                            </tr>
                                        @endforeach

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