<div class="modal fade" id="tambahWarehouse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Warehouse</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- <?= form_open('Basket/addBasket', ['class' => 'formBasket']) ?> -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="codeBasket">ID Warehouse</label>
                    <input type="text" class="form-control" name="idbasket" id="codeBasket" aria-describedby="CodeBasket" value="<?= $idWH ?>" readonly>
                </div>
                <div class="form-group row">
                    <label for="panajng" class="col-sm-3 col-form-label">Warehouse Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="panjang" class="form-control" id="panjang" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lebar" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="lebar" class="form-control" id="lebar" value="" min="0">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="tinggi" class="form-control" id="tinggi" value="" min="0">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-sm-3 col-form-label">Latitude</label>
                    <div class="col-sm-9">
                        <input type="text" name="tinggi" class="form-control" id="tinggi" value="" min="0">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-sm-3 col-form-label">Longitude</label>
                    <div class="col-sm-9">
                        <input type="text" name="tinggi" class="form-control" id="tinggi" value="" min="0">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-sm-3 col-form-label">PIC Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="tinggi" class="form-control" id="tinggi" value="" min="0">
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