@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')
<section>
    <section class="py-10 text-white bg-white " data-overlay="3"
        style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center ;">
    </section>
    <div class="container py-7">
        <div class="row">
            <div class="col-lg-3 my-7 bg-secondary p-5">
                <a href="/merch"><h2 class="sidebar-title">Categories</h2></a>
                @foreach ($category as $c=>$cat)
                <div class="col-12 pt-2" style="@isset($id_cat)@if($id_cat==$cat->idmerchkategori) border-bottom:2px solid; @endif @endisset"><a href="/merch/{{$cat->idmerchkategori}}">{{$cat->merch_name}}</a></div>
                @endforeach
            </div>
            <div class="col-lg-9 pt-7">
                <div class="row">
                    @foreach ($merchs as $m=>$mrch)
                    <div class="col-lg-4">
                        <div class="product-3 mb-3">
                            <a class="product-media" href="item.html">
                                <div class="bg-gray"
                                    style="background: url('{{asset('/uploader/merch/'.$mrch->pic)}}') no-repeat center center;background-size:cover;min-height:318px">
                                </div>
                            </a>
                            <div class="product-detail text-left">
                                <h6><a href="#">{{$mrch->name}}</a></h6>
                                <div class="product-price">{{$mrch->harga}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
