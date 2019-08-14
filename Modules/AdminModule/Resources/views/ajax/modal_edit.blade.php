<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input id="edit_id_jadwal" type="hidden" name="id_jadwal" value="{{$jadwal->idjadwal}}">
            <input id="edit_id_store" type="hidden" name="id_store" value="{{$jadwal->store_id_store}}">
            <tr class="">
                <input type="hidden" id="schedule_id_1" name="">
                <td>
                    <select id="edit_hari" name="hari" class="custom-select form-control weekdays_id" required="">
                        <option disabled="" value=""> Select weekdays </option>
                        <option @if($jadwal->hari=="Monday") selected @endif value="Monday">Monday</option>
                        <option @if($jadwal->hari=="Tuesday") selected @endif value="Tuesday">Tuesday</option>
                        <option @if($jadwal->hari=="Wednesday") selected @endif value="Wednesday">Wednesday</option>
                        <option @if($jadwal->hari=="Thursday") selected @endif value="Thursday">Thursday</option>
                        <option @if($jadwal->hari=="Friday") selected @endif value="Friday">Friday</option>
                        <option @if($jadwal->hari=="Saturday") selected @endif value="Saturday">Saturday</option>
                        <option @if($jadwal->hari=="Sunday") selected @endif value="Sunday">Sunday</option>
                    </select>
                </td>
                <td>
                    <select id="edit_mulai" name="mulai" class="custom-select form-control start_time" required="">
                        <option disabled="" selected="" value=""> Start Time </option>
                        @foreach ($time as $t)
                        <option @if($t->time==$jadwal->jam_buka) selected @endif value="{{$t->time}}">{{$t->time}}
                        </option>
                        @endforeach

                    </select>

                </td>
                <td>
                    <select id="edit_akhir" name="akhir" class="custom-select form-control end_time" required="">
                        <option disabled="" value=""> End Time </option>
                        @foreach ($time as $t)
                        <option @if($t->time==$jadwal->jam_tutup) selected @endif value="{{$t->time}}">{{$t->time}}
                        </option>
                        @endforeach
                    </select>

                </td>
                <td>
                </td>
            </tr>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="edit_jadwal()">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

<script>
    function edit_jadwal() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $('#origin').find(":selected").val();                          
        var hari = $("#edit_hari").find(":selected").val();
        var mulai = $("#edit_mulai").find(":selected").val();
        var akhir = $("#edit_akhir").find(":selected").val();
        var id_store = $("#edit_id_store").val();
        var idjadwal = $("#edit_id_jadwal").val();
        var datasend = {
            hari: hari,
            mulai: mulai,
            akhir: akhir,
            id_store: id_store,
            idjadwal: idjadwal
        };

        $.ajax({
            type: "post",
            url: "/admin/edit-jadwal",
            data: datasend,
            beforeSend: function () {

            },
            success: function (msg) {
                console.log(msg);
                location.reload();
            },
            error: function (xhr) {
                alert("Error")
            }
        });
    }

</script>
