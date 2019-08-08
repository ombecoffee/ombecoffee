<!-- Navbar -->

<nav class="navbar navbar-expand-lg  navbar-light  py-2" style="top:0px;">
    <div class="container">
        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
                <img class="logo-dark" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/The_Boring_Company_Logo.svg/1200px-The_Boring_Company_Logo.svg.png" alt="logo">
                <img class="logo-light" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/The_Boring_Company_Logo.svg/1200px-The_Boring_Company_Logo.svg.png" alt="logo">
            </a>
        </div>
        <section class="navbar-mobile">
            <nav class="nav nav-navbar ml-auto">
            <a class="nav-link active" href="{{ url('/')}}">Home</a>
                <a class="nav-link active" href="{{ url('/our')}}">Our Story</a>
                <a class="nav-link active" href="{{ url('/location')}}">Store Location</a>
                <a class="nav-link active" href="{{ url('/merch')}}">Merch</a>
                <a class="nav-link active" href="{{ url('/subs')}}">Coffee Subcriptions</a>
                <a class="nav-link active" href="#">Careers</a>
              
            </nav>
        </section>
    </div>
</nav>
<!-- /.navbar -->