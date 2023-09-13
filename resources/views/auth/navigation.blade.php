<html>
    <head>
        <title>Tour Booking</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    
        <div class="navigationbar">
            <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" aria-label="Toggle navigation"
        aria-controls="navbarSupportedContent" aria-expanded="false" data-mdb-target="#navbarSupportedContent" >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

            <!-- Icons -->
            <ul class="navbar-nav d-flex flex-row me-1">
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="{{ url('home') }}"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="far fa-clock"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="fas fa-image"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="far fa-calendar-alt"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="fas fa-align-justify"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="fas fa-download"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link mx-1 text-white" href="#"><i class="fas fa-edit"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
        </div>
        <div class="container">
            @yield('content')
        </div>
   
</html>