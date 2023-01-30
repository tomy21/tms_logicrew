<?= $this->extend('layout/index'); ?>
<?= $this->section('judul'); ?>
<h1>Outbound Return</h1>
<?= $this->endsection('judul'); ?>
<?= $this->section('subjudul'); ?>

<?= $this->endsection('subjudul'); ?>
<?= $this->section('isi'); ?>
<div class="row mb-2">
    <div class="col-6">
        <button class="btn btn-info mr-2" onclick="location.href=('<?= site_url() ?>CReturn/index')"><i class="fa fa-backward"></i> Back</button>
    </div>
</div>

<div class="card col-6">
    <div class="card-body">
        <input type="text" name="idSorting" class="form-control mb-3 font-weight-bold" value="RTN-230130" readonly>
        <input type="text" name="barcode" class="form-control mb-3 font-weight-bold" value="" placeholder="Scan Here" autofocus>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white">
        <h5 class="float-left">Table List Resi</h5>
        <button class="btn btn-success float-sm-right" title="Simpan Manifest" id="simpanResi"><i class="fa fa-save"></i> Selesai</button>
    </div>
    <div class="card-body">
        <div class="row" id="tampilTableReturn">
        </div>
    </div>
</div>

<script>
    function manifestTemp() {
        let manifest = $('#noawb').val();
        $.ajax({
            type: "post",
            url: "<?= site_url('CReturn/tableReturn') ?>",
            data: {
                manifest: manifest
            },
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('#tampilTableReturn').html(response.data);
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