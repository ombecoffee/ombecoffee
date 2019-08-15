@extends('layout.master')

@section('content_head')

@endsection

@section('content_footer')

@endsection

@section('content')

<section class="py-10 text-white bg-white " data-overlay="3"
    style="background-image: url('https://bluebottlecoffee.com/assets/our_coffee/bg-img-pouring-1388916512f1d5ee59ed7f28d191201dbc10a757739465a18f6c250e2fd91f24.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;">

</section>
<section class="section pt-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Our locations</h2>
            </div>
        </div>
        <div class="row mt-5 ">
            @foreach ($store as $s=>$str)
            <div class="col-lg-5 mb-5 mx-auto">
                <div class="row">
                    <div class="col-lg-12"
                            style="background: url('{{asset('/uploader/storelocation/'.$str->gambar)}}') no-repeat center center;background-size:cover;min-height:318px">
                        </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <h4>{{$str->nama_store}}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <p class="fw-700 mb-0">Address</p>
                        <p>{{$str->alamat}}</p>
                    </div>
                    <div class="col-lg-6 col-6">
                        <p class="fw-700 mb-0">Hours</p>
                        @foreach ($jadwal as $j=>$jdw)
                        @if ($str->id_store==$jdw->store_id_store)
                            <p class="p-0 m-0">{{$jdw->jam_buka}} - {{$jdw->jam_tutup}} / {{$jdw->hari}}</p>
                        @endif
                        @endforeach
                        {{-- <p>6:30am-8pm / Monday-Friday<br>7am-8pm / Saturday<br>7am-7pm / Sunday<br></p> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
@endsection
