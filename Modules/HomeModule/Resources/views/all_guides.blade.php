@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')
<section class="py-12 text-white bg-white " data-overlay="3"
    style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center middle;">
</section>
<section class="coffe-guides">
    <div class="container-fluid pt-8">
        <div class="col-lg-8 mx-auto text-center">
            <h2>Coffee Guides</h2>
            <p class="lead">Meet our small team that make those great products</p>
            <hr />
        </div>
        <div class="row">
            @foreach ($guides as $g=>$gds)
            <div class="col-md-4 mx-auto">
                    <a href="{{ url('/detil_guides/'.$gds->Id)}}">
                        <div class="card bg-img py-7 rounded py-9 mt-3"
                        style="background: url('{{asset('/uploader/guides/'.$gds->pict)}}') no-repeat center center;background-size:cover;min-height:300px"
                        data-overlay="3">
                            <div class="card-body">
                            <h3 class="text-white text-center mt-6">{{$gds->title}}<br>
                                    Start Now ></h3>
                            </div>
                        </div>
                    </a>
                </div>    
            @endforeach
        </div>
        {{-- @if ($guidescount >= )
        <div class="col-xl-12 mt-5 text-center">
            <a href="{{ url('/guides')}}" class="btn btn-lg btn-outline-primary mw-100">View All</a>
        </div>        
        @else
            
        @endif
        
         --}}
    </div>
</section>
@endsection
