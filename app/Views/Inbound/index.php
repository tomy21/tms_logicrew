<?= $this->extend('layout/index'); ?>
<?= $this->section('judul'); ?>
<h1>Inbound</h1>
<?= $this->endsection('judul'); ?>
<?= $this->section('subjudul'); ?>

<?= $this->endsection('subjudul'); ?>
<?= $this->section('isi'); ?>

<div class="row justify-content-between pl-2 pr-2">
    <div class="card card-secondary" style="width: 30%;">
        <div class="card-header">
            <h6>Scan Inbound</h6>
        </div>
        <div class="card-body">
            <input type="text" name="barcode" class="form-control mb-3 font-weight-bold" value="MI-01231" readonly>
            <div class="row">
                <div class="form-group col-6">
                    <select class="form-control select2bs4" style="width: 100%;">
                        <option selected="selected"> -- Pilih Warehouse -- </option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <select class="form-control select2bs4" style="width: 100%;">
                        <option selected="selected"> -- Pilih Ekspedisi -- </option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
            </div>
            <input type="text" id="noawb" name="barcode" class="form-control" autofocus value="" placeholder="Scan awb here">
            <p class="mt-3 mb-0 font-italic font-weight-bold">NB : Pilih warehouse dulu</p>
        </div>
    </div>

    <div class="card card-secondary" style="width: 30%;">
        <div class="card-header">
            <h3 class="card-title">Import Data Manifest</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="barcode" class="form-control mb-3 font-weight-bold" value="MI-01231" readonly>
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="card card-secondary" style="width: 30%;">
        <div class="card-header">
            <h6>Total Pickup</h6>
        </div>
        <div class="card-body row">
            <h3 style="margin-right: 30%;">Total</h3>
            <h3><?= number_format('4000', 0, ',', '.') ?></h3>
        </div>
        <div class="card-body row">
            <h3 style="margin-right: 12%;">Scan Current</h3>
            <h3><?= number_format('4000', 0, ',', '.') ?></h3>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white">
        <h5 class="float-left">Table List Resi</h5>
        <button class="btn btn-success float-sm-right" title="Simpan Manifest" id="simpanResi"><i class="fa fa-save"></i> Selesai</button>
    </div>
    <div class="card-body">
        <div class="row" id="tampilTableInbound">
        </div>
    </div>
</div>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })

    function manifestTemp() {
        let manifest = $('#noawb').val();
        $.ajax({
            type: "post",
            url: "<?= site_url('CInbound/tableInbound') ?>",
            data: {
                manifest: manifest
            },
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('#tampilTableInbound').html(response.data);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }
        });
    }

    $(document).ready(function() {
        manifestTemp();
    });
</script>

<?= $this->endsection('isi'); ?>