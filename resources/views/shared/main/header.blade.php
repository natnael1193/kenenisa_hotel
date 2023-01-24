    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->

            {{-- <div class="logo-wrapper navbar-brand valign">
                    <a href="/">
                        <div class="logo">
                            <img src="assets/main/img/logo.png" class="logo-img" alt="">
                        </div>
                    </a>
                </div> --}}
            <img src="assets/main/img/logo1.png" alt="" style="width: 100px; hight: 60px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="icon-bar"><i class="ti-line-double"></i></span>
            </button>


            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item dropdown"> <span class="nav-link active"> Home <i
                                class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item active"><a href="index.html">Home Layout 1</a></li>
                            <li class="dropdown-item"><a href="index2.html">Home Layout 2</a></li>
                            <li class="dropdown-item"><a href="index3.html">Home Layout 3</a></li>
                            <li class="dropdown-item"><a href="index4.html">Home Layout 4</a></li>
                            <li class="dropdown-item"><a href="index5.html">Video 1</a></li>
                            <li class="dropdown-item"><a href="index6.html">Video 2</a></li>
                            <li class="dropdown-item"><a href="index7.html">Video 3</a></li>
                            <li class="dropdown-item"><a href="index8.html">Slideshow 1</a></li>
                            <li class="dropdown-item"><a href="index9.html">Slideshow 2</a></li>
                            <li class="dropdown-item"><a href="index10.html">Slideshow 3</a></li>
                            <li class="dropdown-item"><a href="index11.html">Parallax Image 1</a></li>
                            <li class="dropdown-item"><a href="index12.html">Parallax Image 2</a></li>
                            <li class="dropdown-item"><a href="index13.html">Parallax Image 3</a></li>
                            <li class="dropdown-item"><a href="index14.html">Grid Background 1</a></li>
                            <li class="dropdown-item"><a href="index15.html">Grid Background 2</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('services') }}">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('rooms') }}">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
