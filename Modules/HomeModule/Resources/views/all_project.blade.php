@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')
<section class="py-12 mh-300 text-white bg-white " data-overlay="3"
    style="background-image: url('https://i1.wp.com/ombekofie.co.id/wp-content/uploads/2018/02/ombe-pluit-1.jpg?w=1200&ssl=1');background-repeat:no-repeat;background-size:cover;background-position:center middle;">
</section>
<section class="pt-8 section">
    <div class="container-fluid px-lg-8">
            <div class="col-lg-8 mx-auto text-center">
                    <h2>Project</h2>
                    <hr />
                </div>
        <div class="row">
            <div class="col-md-8 col-xl-9 pt-5">
                <div class="row">
                    @foreach ($project as $p=>$proj)
                    <div class="col-md-5 pt-5">
                            <div class="bg-white"
                            style="background: url('{{asset('/uploader/coffee/'.$proj->pict)}}') no-repeat center center;background-size:cover;min-height:300px">
                        </div>
                    </div>
    
                        <div class="col-md-5">
                            <div class="p-7">
                            <h4>{{$proj->project_name}}</h4>
                            {!!str_limit($proj->deskripsi,80)!!}
                            <a class="small ls-1" href="{{ url('/detil_project/'.$proj->idproject)}}">Read More<span class="pl-1">⟶</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>    
            </div>
        </div>
    </div>
</section>
@endsection
