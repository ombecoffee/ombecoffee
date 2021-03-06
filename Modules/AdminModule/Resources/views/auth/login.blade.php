@extends('adminmodule::layouts.nonavnofooter')

@section('content')
<main>
    <div id="primary" class="p-t-b-100 height-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-md-auto paper-card">
                    <div class="text-center">
                    <img src="{{asset('/images/omb-logo.png')}}" alt="" height="100px">
                        <p class="p-t-b-20">Ombe Kofie Management System</p>
                        @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="form-group has-icon"><i class="far fa-envelope"></i>
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Email Address">
                        </div>
                        <div class="form-group has-icon"><i class="fas fa-key"></i>
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-secondary cyan darken-4 btn-lg btn-block mb-3" value="Log In">
                        <a href="{{route('password.request')}}" class="forget-pass ">Forget Password</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>

@endsection