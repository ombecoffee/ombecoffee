@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')
<section class="py-12 text-white bg-white " data-overlay="3"
    style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center middle;">
</section>
<section class="detil_guides mh-600">
    <div class="container">
        <input type="hidden" value="">  
        <header class="col-lg-8 mx-auto text-center pt-8">
            <h2>{{$project->project_name}}</h2>
            <hr />
        </header>
        <div class="row">
            <div class="col-md-5 rounded py-9"
                style="background-image: url('https://blue-bottle-cms.global.ssl.fastly.net/hbhhv9rz9/image/upload/v1475191851/v3eiwz6ay2et3qvyrba5.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;">
            </div>
            <div class="col-md-6 ml-auto text-center text-md-left">
                <p>{!!$project->deskripsi!!}</p>
                {{-- <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained
                    opinion, by he neighbours even again. Is and by value and that like can could from world takes of
                    great copy and delicacy compared he such that the in and with himself a the man.</p> --}}
            </div>
        </div>
    </div>
</section>
@endsection
