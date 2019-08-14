@extends('adminmodule::layouts.master')
@section('header')
@endsection
@section('content')
<div class="col-12 my-3">
    <div class="card shadow">
        <div class="card-header white">
            <div class="card-body">
                <h5 class="card-title">Store Detail</h5>
                <hr>
                <form id="doc_speciality">
                    <input type="hidden" name="" value="">
                    <div class="form-row">
                        <div class="col-md-4 text-center mb-3 mb-md-0">

                            <img src="{{asset("/uploader/storelocation/".$storeinfo->gambar)}}" alt="" class="img-fluid"
                                width=500px">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="id_store">Store Name</label>
                                    <h5>{{$storeinfo->nama_store}}</h5>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="alamat">Address </label>
                                    <h5>{{$storeinfo->alamat}}</h5>
                                </div>
                                <div class="col-12 text-right">

                                    <button onclick="edit_store()" type="button" id="btn_store_edit"
                                        class="btn btn-primary bg-primary btn-sm mt-2">Edit Store</button>

                                    <button onclick="post_store()" type="button" id="btn_store_add"
                                        class="btn btn-primary bg-primary btn-sm mt-2" style="display:none">Save
                                        Store
                                    </button></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>
<div class="col-12 my-3">
    <div class="card shadow">
        <div class="card-header white">
            <h5 class="card-title">Store Schedule</h5> {{$storeinfo->nama_store}}
            <div class="d-flex justify-content-between">

                <div class="align-self-end">
                    <ul class="nav nav-tabs card-header-tabs nav-material" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link schedule-tab" id="tab_schedule_1" href="#" onclick="get_schedule(1)"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-body no-p">
            <div class="tab-content">
                <div class="tab-pane" id="tab-schedule" style="display: block;">
                    <div class="table-responsive px-3">
                        <table class="table table-hover earning-box">
                            <thead>
                                <tr>
                                    <td width="50%">
                                        Days
                                    </td>
                                    <td>
                                        Start
                                    </td>
                                    <td>
                                        End
                                    </td>
                                    <td>
                                        Actions
                                    </td>
                                </tr>
                            </thead>
                            @isset($jadwal)
                            @foreach ($jadwal as $i=>$jdw)
                                <tr>
                                    <td>{{$jdw->hari}}</td>
                                    <td>{{$jdw->jam_buka}}</td>
                                    <td>{{$jdw->jam_tutup}}</td>
                                    <td>
                                        <div class="inline-block">
                                            <button onclick="show_modal_jadwal({{$jdw->idjadwal}})" class="btn btn-success">
                                                <i class="icon fa fa-edit white-text p-0"></i>
                                            </button>
                                            <button onclick="delete_jadwal({{$jdw->idjadwal}})" class="btn btn-danger">
                                                <i class="icon fa fa-trash white-text p-0"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @endisset
                            <tbody>
                                <input id="id_store" type="hidden" name="id_store" value="{{$storeinfo->id_store}}">
                                <tr class="">
                                    <input type="hidden" id="schedule_id_1" name="">
                                    <td>
                                        <select id="hari" name="hari" class="custom-select form-control weekdays_id"
                                            required="">
                                            <option disabled="" value=""> Select weekdays </option>
                                            <option selected="" value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>

                                    </td>
                                    <td>
                                        <select id="mulai" name="mulai" class="custom-select form-control start_time"
                                            required="">
                                            <option disabled="" selected="" value=""> Start Time </option>
                                            @foreach ($time as $t)
                                            <option value="{{$t->time}}">{{$t->time}}
                                                </option>
                                            @endforeach
                                            
                                        </select>

                                    </td>
                                    <td>
                                        <select id="akhir" name="akhir" class="custom-select form-control end_time"
                                            required="">
                                            <option disabled="" value=""> End Time </option>
                                            @foreach ($time as $t)
                                            <option value="{{$t->time}}">{{$t->time}}
                                                </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <td>
                                        {{-- <div class="inline-block">
                                            <button onclick="edit_schedule(1)" class="btn btn-success">
                                                <i class="icon fa fa-edit white-text p-0"></i>
                                            </button>
                                            <button onclick="delete_schedule(1)" class="btn btn-danger">
                                                <i class="icon fa fa-trash white-text p-0"></i>
                                            </button>
                                        </div> --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="col-12 text-right mt-3">
                        <a class="btn btn-primary bg-primary btn-sm mb-3" onclick="add_jadwal()">Add New Schedule</a>
                    </div>


                    <div class="modal fade" id="modal_edit_jadwal" tabindex="-1" role="dialog" aria-labelledby="edit_jadwalLabel" aria-hidden="true">
                       
                    </div>

                    <script>
                        $(function () {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                        });
                        // function post_education() {
                        //     var education = document.getElementById('doc_education');
                        //     // if ($("#doc_education").valid()) {
                        //         $.ajax({
                        //             type: "post",
                        //             url: "/admin/doctor/education",
                        //             data: new FormData(education),
                        //             processData: false,
                        //             contentType: false,
                        //             beforeSend: function () {

                        //             },
                        //             success: function (msg) {
                        //                 // get_education();
                        //             },
                        //             error: function (xhr) {
                        //                 // $('#modal_loading').modal('toggle');
                        //                 // alert(xhr.responseJSON.message);
                        //             }
                        //         });
                        //     // }
                        // }
                        function add_jadwal() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            // $('#origin').find(":selected").val();                          
                            var hari = $("#hari").find(":selected").val();
                            var mulai = $("#mulai").find(":selected").val();
                            var akhir = $("#akhir").find(":selected").val();
                            var id_store = $("#id_store").val();
                            var datasend = {
                                hari: hari,
                                mulai: mulai,
                                akhir: akhir,
                                id_store: id_store
                            };

                            $.ajax({
                                type: "post",
                                url: "/admin/jadwal",
                                data: datasend,
                                // processData: false,
                                // contentType: false,
                                beforeSend: function () {

                                },
                                success: function (msg) {
                                    // get_education();
                                    console.log(msg);
                                    location.reload();
                                },
                                error: function (xhr) {
                                    // $('#modal_loading').modal('toggle');
                                    // alert(xhr.responseJSON.message);
                                    alert("Error")
                                }
                            });
                        }

                        function close_schedule() {
                            $('.doc_schedule').fadeOut(200);
                            $('#btn_edu_add').fadeIn(600);
                        }

                        $("#doc_schedule").validate();

                        function post_schedule() {
                            var schedule = document.getElementById('');
                            console.log(new FormData(schedule));
                            if ($("#").valid()) {
                                $.ajax({
                                    type: "post",
                                    url: "/admin/jadwal",
                                    data: new FormData(schedule),
                                    processData: false,
                                    contentType: false,
                                    beforeSend: function () {},
                                    success: function (msg) {
                                        get_schedule(1);
                                    },
                                    error: function (xhr) {
                                        // $('#modal_loading').modal('toggle');
                                        // alert(xhr.responseJSON.message);
                                    }
                                });
                            }
                        }

                        function edit_schedule(key) {
                            var id_text = "#schedule_id_" + key;
                            var weekday_text = "#weekdays_id_" + key;
                            var start_text = "#start_time_" + key;
                            var end_text = "#end_time_" + key;

                            var start = $(start_text).val();
                            var end = $(end_text).val();
                            var weekday = $(weekday_text).val();
                            var id = $(id_text).val();
                            var hosp = $('#id_hospital').val();

                            var sch_data = {
                                timeStart: start,
                                timeEnd: end,
                                weekDaysname_idweekDaysname: weekday,
                                iddoc_schedule: key,
                                id_hospital: hosp
                            };

                            console.log(sch_data);
                            $.ajax({
                                type: "post",
                                url: "/admin/jadwal",
                                data: sch_data,
                                beforeSend: function () {},
                                success: function (msg) {
                                    get_schedule(1);
                                },
                                error: function (xhr) {
                                    // $('#modal_loading').modal('toggle');
                                    // alert(xhr.responseJSON.message);
                                }
                            });
                            // $('#btn_edu_add').fadeOut(200);
                            // form = $('.doc_schedule');
                            // // $('form').attr('action', '/partner/update-pengalaman')
                            // // id = $(this).attr('data-id');
                            // old_data = JSON.parse($('#old_data').val())[key];
                            // form.fadeOut();
                            // jQuery.each(old_data, function (key, data) {
                            //     $('#schedule_' + key).val(data)
                            // });
                            // setTimeout(function () {
                            //     form.fadeIn();
                            // }, 600);
                            // // $('#form').attr('data-id', id);
                        }

                        function show_modal_jadwal(id) {
                            
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: "post",
                                url: "/admin/edit-show-jadwal",
                                data: {
                                    id: id
                                },
                                // dataType:html,
                                beforeSend: function () {},
                                success: function (msg) {
                                    $('#modal_edit_jadwal').html(msg);
                                    $('#modal_edit_jadwal').modal('toggle');
                                },
                                error: function (xhr) {
                                    // $('#modal_loading').modal('toggle');
                                    // alert(xhr.responseJSON.message);
                                }
                            });
                        }


                        function delete_jadwal(id) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: "post",
                                url: "/admin/delete-jadwal",
                                data: {
                                    id: id
                                },
                                beforeSend: function () {},
                                success: function (msg) {
                                    location.reload();
                                },
                                error: function (xhr) {
                                    // $('#modal_loading').modal('toggle');
                                    // alert(xhr.responseJSON.message);
                                }
                            });
                        }

                    </script>
                </div>
                @endsection
