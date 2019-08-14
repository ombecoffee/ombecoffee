@extends('adminmodule::layouts.master')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> --}}

@endsection
@section('content')
<style>
    .error {
        color: red;
    }
</style>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        {{-- <a class="nav-link active" href="" onclick="get_view({{$companyinfo->id}} ,'detail')" --}}
            id="pills-home-tab" data-toggle="pill" role="tab" aria-controls="pills-home"
            aria-selected="true">Information</a>
    </li>
    
</ul>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<section class="mb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="col-lg-12 p-10 card m-100">
                        {{-- <span style="font-weight:bold">{{$companyinfo->company_name}}</span> --}}
                </div>
            </div>
            {{-- <div class="col-lg-6 ">
                <div class="col-lg-12 card p-10 pb-12 p-10 h-100">
                        <ul class="list-group">
                                <div>
                                    Aktifkan Tender
                                    <div class="material-switch float-right">
                                    <input id="switchOptionsTender" name="someSwitchOption001" value="{{$companyinfo->planning_status_id}}" @if ($companyinfo->planning_status_id==1)
                                        checked @elseif($companyinfo->planning_status_id==2)
                                        
                                    @endif type="checkbox"/>
                                        <label for="switchOptionsTender" class="bg-secondary"></label>
                                    </div>
                                </div>
                            </ul>  
                </div>
                     
                </div> --}}
        </div>
    </div>
</section>
<div class="container-fluid">
<div id="show_pages" class="show-pages paper-card">

</div>
</div>
{{-- <div id="grocery" style="display:none;">
    <div class="paper-card">
    {!! $output !!}
</div>
   </div> --}}



{{-- <input type="hidden" name="idcompany" id="idcompany" value="{{$companyinfo->id}}"> --}}
@endsection
@section('footer')
<div class="modal bg-dangerfade" id="modal_loading" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: transparent; border:none">
            <div class="modal-body text-center">
                <img style="height: 125px !important;" src="{{asset('loading.svg')}}" alt="loading">
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="modalshow">

</div>
<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
// function get_view(id, pages) {
//         $.ajax({
//             type: 'POST',
//             url: '/company/getview',

//             data: {
//                 id: id,
//                 pages: pages
//             },
//             beforeSend: function () {
//                 $('#modal_loading').modal('toggle');
//             },
//             success: function (response) {
//                 $('#modal_loading').modal('toggle');
//                 // $('#show_pages').unblock();
//                 $('#show_pages').html(response)
//             },
//             error:function(){
//             $('#modal_loading').modal('toggle');
//             Command: toastr["error"]("Something is wrong!")

// toastr.options = {
// "closeButton": false,
// "debug": false,
// "newestOnTop": false,
// "progressBar": true,
// "positionClass": "toast-top-right",
// "preventDuplicates": true,
// "onclick": null,
// "showDuration": "300",
// "hideDuration": "1000",
// "timeOut": "5000",
// "extendedTimeOut": "1000",
// "showEasing": "swing",
// "hideEasing": "linear",
// "showMethod": "fadeIn",
// "hideMethod": "fadeOut"
// }
//             }
//         });
       
//     }
//     get_view($('#idmerch').val(),'detail')
</script>
@endsection