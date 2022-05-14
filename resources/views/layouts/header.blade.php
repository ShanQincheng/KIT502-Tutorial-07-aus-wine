<!-- Bootstrap .navbar-brand for your company, product, or project name. -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- As a Heading -->
        <span class="navbar-brand mb-0 h1">AusWine</span>
{{--        <!-- As a link -->--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"--}}
{{--                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- Add the .active class on .nav-link to indicate the current page.
                     Please note that you should also add the aria-current attribute on the active .nav-link.-->
                <a class="nav-link {{ request() -> is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                <a class="nav-link {{ request() -> is('wines') ? 'active' : '' }}" href="{{route('wines')}}">Wines</a>
            </div>
        </div>
    </div>
</nav>
