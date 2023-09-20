<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Components</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#categoryLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="categoryLayouts">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('category.add')}}">Add Category</a>
                        <a class="nav-link" href="{{route('category.manage')}}">manage Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#booksLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Books
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="booksLayouts">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('book.add')}}">Add Books</a>
                        <a class="nav-link" href="{{route('book.manage')}}">manage books</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#booksborrowLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Book Borrow
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="booksborrowLayouts">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">Borrow Request</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('borrow.list')}}">Borrow List</a>
                    </nav>
                </div>
                
               
            </div>
        </div>
    </nav>
</div>