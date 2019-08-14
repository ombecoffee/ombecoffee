@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')
<section class="bg-gray">
    <section class="py-10 text-white bg-white " data-overlay="3"
        style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center ;">

    </section>

    <section class="section pt-4">
        <div class="container">
            <div class="row">
                @foreach ($subs as $s=>$cfsb)
                <div class="col-lg-8 mx-auto text-center">
                        <h2>{{$cfsb->judul}}</h2>
                        <p>{!!$cfsb->deskripsi!!}</p>
                    </div>  
                </div>
            <div class="row mt-5">
                <div class="col-6 col-lg-4 mx-auto ">
                    <div class="card d-block p-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <img class="card-img-top" src="{{ asset('images/logo.png')}}" alt="Card image cap">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"
                                        style="background: url('{{asset('/uploader/subscription/'.$cfsb->gambar)}}') no-repeat center center;background-size:cover;min-height:318px">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
</section>
@endsection
