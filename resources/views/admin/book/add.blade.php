@extends('admin.master')

@section('title')
Add books
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Books</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Books Add</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Book Add</h3>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center text-success">{{session('msg')}}</h1>
                                <form class="needs-validation" action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book name</label>
                                            <input type="text" class="form-control" id="validationCustom011"
                                               name="book_name" value="" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book author</label>
                                            <input type="text" class="form-control" id="validationCustom011"
                                               name="author_name" value="" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book Quantiy</label>
                                            <input type="text" class="form-control" id="validationCustom011"
                                               name="book_quantity" value="" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book Image</label>
                                            <input type="file" class="form-control" id="validationCustom011"
                                               name="image" value="" accept="image/**">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <select name="category_name" id="" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                  <option value="{{$category->name}}">{{$category->name}}</option>  
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection