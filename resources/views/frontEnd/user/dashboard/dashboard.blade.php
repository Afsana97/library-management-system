<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}frontEnd/assets/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEnd/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEnd/assets/css/style.css">
</head>

<body class="" style="position:relative;">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow " style="position: fixed; top:0; right:0; left:0 ; z-index:1030">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-book-open-reader fa-2x ms-5"></i>
                    <h3 class="fw-bold">Online Library</h3>
                    <h6 class="ms-4">for learners</h6>
                </a>
                <div class="dropdown flot-start">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @foreach ($categories as $category)
                        <li><a href="{{route('category.books',[$category->name,$user])}}" class="dropdown-item">{{$category->name}}</a></li> 
                      @endforeach
                    </ul>
                  </div>
                
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('borrowed.books',[$user])}}" class="nav-link">Borrowed books</a>
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger ms-3">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
       <div style="height:143px"></div> 
        
    </header>
    
   <main>
    <div class="app-content main-content mt-0">
        <div class="side-app">
    
            <div class="main-container container-fluid">
    
    
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">All book details</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book Tables</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
    
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">All books</h3>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center text-success">{{ session('msg') }}</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">SL</th>
                                                <th class="wd-15p border-bottom-0">Book name</th>
                                                <th class="wd-15p border-bottom-0">Author name</th>
                                                <th class="wd-15p border-bottom-0">Category name</th>
                                                <th class="wd-15p border-bottom-0">Image</th>
                                                <th class="wd-15p border-bottom-0">Status</th>
                                                <th class="wd-15p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $book )
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $book->book_name }}</td>
                                                    <td>{{ $book->author_name }}</td>
                                                    <td>{{ $book->category_name }}</td>
                                                    <td><img src="{{ asset('/') }}{{ $book->image }}" alt="image"
                                                            height="50px" width="50px">
                                                    </td>
                                                    <td>
                                                        @if ($book->status == '1')
                                                         <a href="" class="btn btn-success">Available</a>
                                                        @else
                                                        <a href="" class="btn btn-danger">Unavailable</a>
                                                        @endif
                                                     </td>
                                                     
                                                    <td>
                                                       
                                                        <a href="{{route('borrow-request',[$book->id,$user])}}"  class="btn btn-success">Borrow</a> 
                                                    </td>
                                                    
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
</main>
    <footer>
        <div class="border-bottom border-dark border-5"></div>
        <div class="bg-secondary" style="height: 50px;">
            <p class="text-center text-light">&copy;Online Library Management System</p>
        </div>
    
    </footer>
    

    <script src="{{asset('/')}}frontEnd/assets/js/bootstrap.bundle.min.js"></script>
    <script>
        @if(Request::is('/'))
        $(window).on("load",function(){
            $('#closeCategory').show();
        })
        @else
        $(window).on("load",function(){
            $('#closeCategory').hide();
        })
        $('#openCategory').on("click",function(){
            $('#closeCategory').toggle();
        })
        @endif
    </script>
</body>

</html>