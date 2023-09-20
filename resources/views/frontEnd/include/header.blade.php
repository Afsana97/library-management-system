<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow " style="position: fixed; top:0; right:0; left:0 ; z-index:1030">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-book-open-reader fa-2x ms-5"></i>
                <h3 class="fw-bold">Online Library</h3>
                <h6 class="ms-4">for learners</h6>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}"> User Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.loginForm')}}" target="_blank">Admin Signin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
   <div style="height:143px"></div> 
    
</header>