@guest

<div class="header">
    <div class="menu-bar">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link nav-text" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="group">Food Group</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="welcome#about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="#contact">Contact Us</a>
            </li>

        </ul>
        </div>
    </nav>
    </div>
</div>  
@else

<div class="header">
    <div class="menu-bar">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link nav-text" href="home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="profile">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="container">Container</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="group">Food Group</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="home#about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="home#contact">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
            </li>

        </ul>
        </div>
    </nav>
    </div>
</div>  
    
            <!-- <li class="nav-item active">
            <a class="nav-link nav-text" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="#">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="#">Container</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="#">Food Group</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="#about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link nav-text" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout</a>
                            
            </li> -->
<!-- <li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
</li> -->
@endguest