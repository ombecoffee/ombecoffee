@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')

<section class="py-12 text-white bg-white " data-overlay="3"
    style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center middle;">
</section>
<section class="section bg-gray">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3>Our Coffee</h3>
            </div>
        </div>
        <div class="col-12 mt-7">
            <div class="row">
                @foreach ($coffees as $c=>$cfe)
                <div class="col-lg-3 mx-auto">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="#">
                            <div class="bg-gray"
                                style="background: url('{{asset('/uploader/coffee/'.$cfe->pict)}}') no-repeat center center;background-size:cover;min-height:318px">
                            </div>
                        </a>
                        <div class="product-detail text-left">
                            <h6>{{$cfe->coffee_name}}</h6>
                            <div class="product-price">{{$cfe->harga}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @if ($coffeecount >=3)
        <div class="col-xl-12 mt-7 text-center">
                <a href="{{ url('/allcoffee')}}" class="btn btn-lg btn-outline-primary mw-100">View All</a>
            </div>        
        @else
            
        @endif
    </div>
</section>
<section class="section py-11"
    style="background-image: url('https://www.intelligentsiacoffee.com/media/wysiwyg/hero/BANNER-SelectEnjoy.jpg')">
    <div class="overlay opacity-90" style="background-image: linear-gradient(90deg, #fff 0%, transparent 100%);"></div>
    <div class="container">

        <div class="row">
            <div class="col-10 col-md-7 col-xl-5">
                <div class="section-dialog shadow-4">
                    <h5 class="fw-500">Our Mission</h5>
                    <blockquote class="blockquote text-left lead-1 mb-0 mt-5">
                        <p>All it harmonics; Such based to pity of and rank people brief three their time and the this
                            the should service employed.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="our-story mh-500 bg-primary text-white">
    <div class="container py-8">
        <div class="row align-items-center h-100">
            <div class="col-lg-10 mx-auto text-center">
                <h1>Early Days</h1>
                @foreach ($early as $e=>$erl)
                <hr />
                <div class="text-justify">
                    <p>{!!$erl->isi!!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<section class="our-story mh-500 bg-gray">
    <div class="container py-8">
        <div class="row align-items-center h-100">
            <div class="col-lg-8 mx-auto text-center">
                <h3>#PeopleOfOmbe</h3>
            </div>
            <div class="col-12 mt-7">
                <div class="row">
                    @foreach ($people as $p=>$plp)
                    <div class="col-lg-3 mx-auto">
                        <div class="product-3 mb-3">
                            <a class="product-media" href="#">
                                <div class="bg-gray"
                                    style="background: url('{{asset('/uploader/people/'.$plp->pict)}}') no-repeat center center;background-size:cover;min-height:318px">
                                </div>
                            </a>
                            <div class="product-detail text-left">
                                <h6>{{$plp->people_name}}</h6>
                                <div class="product-price">{!!$plp->deskripsi!!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
