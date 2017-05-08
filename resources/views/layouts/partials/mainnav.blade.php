<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ url('images/YLLogo_NoBorder.png') }}" alt="YOUNG LIFE"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="btn-lg"><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="events.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Events</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Leader Training</a></li>
                            <li><a href="#">Out Reach Camp</a></li>
                            <li><a href="#">Campaigners Camp</a></li>
                            <li><a href="#">Other Events</a></li>
                        </ul>
                    </li>
                    <li class="btn-lg"><a href="about.php">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
