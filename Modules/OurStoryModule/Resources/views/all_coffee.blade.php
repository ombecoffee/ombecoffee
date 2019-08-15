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
        <div class="col-12 pt-3">
            <div class="row">
                @foreach ($coffees as $c=>$cfe)
                <div class="col-lg-3 mt-7 mx-auto">
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
    </div>
</section>
@endsection