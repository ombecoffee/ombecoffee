<!-- Navbar -->

<nav class="navbar navbar-expand-lg  navbar-light  py-2" style="top:0px;">
    <div class="container">
        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
            <img class="logo-dark" src="{{asset('/images/omb-logo.png')}}" alt="logo" >
                <img class="logo-light" src="{{asset('/images/omb-logo.png')}}" alt="logo" style="height:90px;max-height: 90px;">
            </a>
        </div>
        <section class="navbar-mobile">
            <nav class="nav nav-navbar ml-auto">
            <a class="nav-link active" href="{{ url('/')}}">Home</a>
                <a class="nav-link active" href="{{ url('/our')}}">Our Story</a>
                <a class="nav-link active" href="{{ url('/location')}}">Store Location</a>
                <a class="nav-link active" href="{{ url('/merch')}}">Merch</a>
                <a class="nav-link active" href="{{ url('/subs')}}">Coffee Subcriptions</a>
                <a class="nav-link active" href="{{ url('/careers')}}">Careers</a>
              
            </nav>
        </section>
    </div>
</nav>
<!-- /.navbar -->