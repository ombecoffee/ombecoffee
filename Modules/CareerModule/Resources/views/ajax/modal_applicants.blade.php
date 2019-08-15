    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body p-md-0">
                <div class="row no-gutters">
                    <div class="col-md-4 col-xl-6 d-none d-md-flex bg-img rounded-left"
                        style="background-image: url(https://www.intelligentsiacoffee.com/media/wysiwyg/cms/locations/Logan_Square/Logan-Square-THUMBNAIL.jpg);background-repeat:no-repeat;background-size:cover;background-position:center middle;">
                    </div>

                    <div class="col-md-8 col-xl-5 mt-4 mx-auto">
                        <input type="hidden" name="id_store" id="id_store" value="{{$store->id_store}}">
                        <input type="hidden" name="idcareers" id="idcareers" value="{{$careers->idcareers}}">
                        <form id="form_applicant">
                            <h3><strong>you apply to become : <br />{{$careers->posisi}}</strong></h3>
                            <p>at {{$store->nama_store}}</p>
                            <hr class="w-10 mt-2 mb-2">
                            <div class="form-group">
                            <input class="form-control" id="nama" type="text" name="nama" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="email" type="text" name="email"
                                    placeholder="Your Email" required>
                            </div>

                            <button type="button" class="btn btn-lg btn-block btn-primary" onclick="apply_applicants()">Apply this
                                position</button>
                        </form>

                        <hr>


                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        function apply_applicants() {
            // $('#origin').find(":selected").val();                          
            var nama = $("#nama").val();
            var email = $("#email").val();
            var id_store = $("#id_store").val();
            var idcareers = $("#idcareers").val();
            var datasend = {
                nama: nama,
                email: email,
                id_store: id_store,
                idcareers: idcareers
            };
            if($('#form_applicant').valid()){
                $.ajax({
                type: "post",
                url: "/careers/entry-applicants",
                data: datasend,
                beforeSend: function () {
                },
                success: function (msg) {
                    console.log(msg);
                    // location.reload();
                    $('#modal_applicants').modal('toggle');
                    $('#app_success').fadeIn();
                },
                error: function (xhr) {
                    // alert("Error")
                    console.log(xhr);
                }
            });
            }
        }

    </script>
