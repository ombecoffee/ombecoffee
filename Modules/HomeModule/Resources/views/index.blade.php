@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')

<section class="py-12 text-white bg-white " data-overlay="3"
    style="background-image: url('https://cdn.foodism.co.uk/gallery/58de1557be264.jpeg');background-repeat:no-repeat;background-size:cover;background-position:center middle;min-height:700px">
    <div class="container text-center pt-9">
        <h1 class="text-align-center fw-700">Summer Solstice<br />
            Welcome Summer with our Seasonal Blend
        </h1>
    </div>
</section>
<section class="our-story mh-600 bg-primary text-white">
    <div class="container pt-10">
        <div class="row align-items-center h-100">
            <div class="col-lg-8 mx-auto text-center">
                <h1>Our Story</h1>
                <hr />
                <p class="lead-3 text-justify">Our company was founded in 2013 with a mission to create pretty templates
                    for great
                    startups. We can combine beautiful, modern designs with clean, functional and high-performance code
                    to produce stunning websites. And best of all, we are super passionate about our work. Thought does
                    cognitive into follow and rationale annoyed.</p>
            </div>
        </div>
    </div>
</section>
<section class="coffe-guides">
    <div class="container-fluid pt-8">
        <div class="col-lg-8 mx-auto text-center">
            <h2>Coffee Guides</h2>
            <p class="lead">Meet our small team that make those great products</p>
            <hr />
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/detil_guides')}}">
                    <div class="card bg-img py-7 rounded py-9 mt-3"
                        style="background-image: url('https://blue-bottle-cms.global.ssl.fastly.net/hbhhv9rz9/image/upload/v1475191851/v3eiwz6ay2et3qvyrba5.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;"
                        data-overlay="3">
                        <div class="card-body">
                            <h3 class="text-white text-center mt-6">My coffee shop and my love<br>
                                Start Now ></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="hr">
                    <div class="card bg-img py-7 rounded py-9 mt-3"
                        style="background-image: url('https://blue-bottle-cms.global.ssl.fastly.net/hbhhv9rz9/image/upload/v1475191851/v3eiwz6ay2et3qvyrba5.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;"
                        data-overlay="3">
                        <div class="card-body">
                            <h3 class="text-white text-center mt-6">My coffee shop and my love<br>
                                Start Now ></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="hr">
                    <div class="card bg-img py-7 rounded py-9 mt-3"
                        style="background-image: url('https://blue-bottle-cms.global.ssl.fastly.net/hbhhv9rz9/image/upload/v1475191851/v3eiwz6ay2et3qvyrba5.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;"
                        data-overlay="3">
                        <div class="card-body">
                            <h3 class="text-white text-center mt-6">My coffee shop and my love<br>
                                Start Now ></h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-12 mt-5 text-center">
            <a href="{{ url('/guides')}}" class="btn btn-lg btn-outline-primary mw-100">View All</a>
        </div>
    </div>
</section>
<section class="project pt-4 bg-primary section mt-8">
    <div class="container-fluid  pt-8">
        <div class="col-lg-8 mx-auto text-center text-white">
            <h2>Project</h2>
            <p class="lead">Meet our small team that make those great products</p>
            <hr />
        </div>
        <div class="row">
            @foreach ($projects as $i=>$prj)
            <div class="col-lg-4 team-1 mt-2 mx-auto">
                <a href="{{ url('/detil_project')}}">
                    <div class="bg-white"
                        style="background: url('{{asset('/uploader/coffee/'.$prj->pict)}}') no-repeat center center;background-size:cover;min-height:318px">
                    </div>
                    <div class="text-left">
                        <div class="text-white">
                            <h3>{{$prj->project_name}}</h3>
                        </div>
                        <small>{!!$prj->deskripsi!!}</small>
                    </div>
                </a>
            </div>
            @endforeach

        <div class="col-xl-12 mt-5 text-center">
            <button type="button" class="btn btn-lg btn-light mw-100">View All</button>
        </div>
    </div>
    </div>
</section>
@endsection
