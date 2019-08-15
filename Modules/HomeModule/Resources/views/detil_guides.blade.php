@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')
<section class="py-12 text-white bg-white " data-overlay="3"
    style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center middle;">
</section>
<section class="detil_guides mt-8 mh-500">
    <div class="container">
        <header class="col-lg-8 mx-auto text-center">
            {{-- @foreach ($guides as $g=>$guid) --}}
            <h2>{{$guides->title}}</h2>
            <hr />
        </header>
        <div class="row">
            <div class="col-md-12 m-auto text-center">
                <p>{!!$guides->step!!}</p>
            </div>
        </div>
    </div>
</section>
@endsection
