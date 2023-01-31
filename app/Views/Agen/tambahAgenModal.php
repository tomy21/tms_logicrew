<div class="modal fade" id="tambahAgen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel">Tambah Agen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= form_open('CListAgen/addAgen', ['class' => 'formAgen']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="idAgen">ID Agen</label>
                    <input type="text" class="form-control" name="idAgen" aria-describedby="CodeBasket" value="<?= $idAgen ?>" readonly>
                </div>
                <div class="form-group row">
                    <label for="nameAgen" class="col-sm-3 col-form-label">Agen Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="nameAgen" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="long" class="col-sm-3 col-form-label">Longitude</label>
                    <div class="col-sm-9">
                        <input type="text" name="long" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lat" class="col-sm-3 col-form-label">Latitude</label>
                    <div class="col-sm-9">
                        <input type="text" name="lat" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="owner" class="col-sm-3 col-form-label">Owner Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="owner" class="form-control" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<script>
    $('.formAgen').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Tambah Agen',
            text: 'Apakah sudah diisi semua ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Add Agen !'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.success,
                                showConfirmButton: false,
                                timer: 1000
                            });
                            window.location.reload();
                            play_notif();
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + '\n' + thrownError);
                    }
                });
            }
        });


    });
</script>