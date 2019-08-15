@extends('layout.master')

@section('content_head')

@endsection



@section('content')

<section class="py-10 text-white bg-white " data-overlay="3"
    style="background-image: url('https://bluebottlecoffee.com/assets/our_coffee/bg-img-pouring-1388916512f1d5ee59ed7f28d191201dbc10a757739465a18f6c250e2fd91f24.jpg');background-repeat:no-repeat;background-size:cover;background-position:center ;">

</section>
<section class="section my-1" id="section-open-positions">
    <div class="container">
        <header class="section-header">

            <h2>Open Positions</h2>
            <hr>
            <p class="lead">Following list displays our current required positions. This list will update regularly.</p>
        </header>

        <div id="app_success" class="col-lg-12 mx-auto" style="display:none;">
                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    Thank You for Applying, please wait for our feedback!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                </div>
        </div>
        <div class="accordion accordion-connected shadow-5" id="accordion-job">
            @foreach ($careers as $c =>$crs)
            <input type="hidden" name="id" value="{{$crs->idcareers}}">
            <div class="card">
                <h6 class="card-title">
                    <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-1">
                        <strong class="mr-auto">{{$crs->posisi}}</strong>
                        <span class="small text-lighter">{{$crs->nama_store}} <i
                                class="fa fa-map-marker ml-2"></i></span>
                    </a>
                </h6>

                <div id="collapse-job-1" class="collapse" data-parent="#accordion-job">
                    <div class="card-body">
                        <p>{!!$crs->deskripsi!!}</p>
                        <hr class="w-100px">
                        <p class="text-center"><button type="button" class="btn btn-lg btn-primary"
                                onclick="show_modal_applicants({{$crs->store_id_store}})">Apply Now</button></p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="modal fade" id="modal_applicants" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel"
    aria-hidden="true">

</div>
@endsection

@section('content_footer')
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        function show_modal_applicants(id) {
            $.ajax({
                type: "post",
                url: "/careers/show-modal-applicants",
                data: {
                    id: id
                },
                // dataType:html,
                beforeSend: function () {},
                success: function (msg) {
                    $('#modal_applicants').html(msg);
                    $('#modal_applicants').modal('toggle');
                },
                error: function (xhr) {
                    $('#modal_loading').modal('toggle');
                    alert(xhr.responseJSON.message);
                }
            });
        }
    
    </script>

@endsection
