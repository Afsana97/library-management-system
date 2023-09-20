@extends('admin.master')

@section('title')
Edit books
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
                            <li class="breadcrumb-item active" aria-current="page">Books Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Book Edit</h3>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center text-success">{{session('msg')}}</h1>
                                <form class="needs-validation" action="{{route('book.update',['id'=>$book->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book name</label>
                                            <input type="text" class="form-control" id="validationCustom011"
                                               name="book_name" value="{{ $book->book_name }}" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book author</label>
                                            <input type="text" class="form-control" id="validationCustom011"
                                               name="author_name" value="{{$book->author_name}}" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Book Image</label>
                                            <img src="{{asset('/')}}{{$book->image}}" alt="" height="50px" width="50px">
                                            <input type="file" class="form-control" id="validationCustom011"
                                               name="image" value="{{asset('/')}}{{$book->image}}" accept="image/**">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <select name="category_name" id="" class="form-control">
                                                <option value="">{{$book->category_name}}</option>
                                                @foreach ($categories as $category)
                                                  <option value="{{$category->name}}">{{$category->name}}</option>  
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <button class="btn btn-primary" type="submit">Edit book</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection