<?= $this->extend('layout/index'); ?>
<?= $this->section('judul'); ?>
<h1>Sorting</h1>
<?= $this->endsection('judul'); ?>
<?= $this->section('subjudul'); ?>

<?= $this->endsection('subjudul'); ?>
<?= $this->section('isi'); ?>
<div class="row">
    <div class="col-sm-2">
        <div class="small-box bg-success">
            <div class="inner">
                <h1 style="font-weight: 500;">1000</h1>
                <h5>Total Paket</h5>
            </div>
            <div class="icon">
                <i class="ion ion-cube"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="small-box bg-danger">
            <div class="inner">
                <h1 style="font-weight: 500;">10000</h1>
                <h5>Total JNT</h5>
            </div>
            <div class="icon">
                <i class="ion ion-cube"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="small-box bg-primary">
            <div class="inner">
                <h1 style="font-weight: 500;">10000</h1>
                <h5>Total JNE</h5>
            </div>
            <div class="icon">
                <i class="ion ion-cube"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="small-box bg-warning">
            <div class="inner">
                <h1 style="font-weight: 500;">10000</h1>
                <h5>Total Shopee Xpress</h5>
            </div>
            <div class="icon">
                <i class="ion ion-cube"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="small-box bg-danger">
            <div class="inner">
                <h1 style="font-weight: 500;">10000</h1>
                <h5>Total Sicepat</h5>
            </div>
            <div class="icon">
                <i class="ion ion-cube"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h1 style="font-weight: 500;">10000</h1>
                <h5>Total Manual</h5>
            </div>
            <div class="icon">
                <i class="ion ion-cube"></i>
            </div>
        </div>
    </div>
</div>

<div class="card col-6">
    <div class="card-body">
        <input type="text" name="idSorting" class="form-control mb-3 font-weight-bold" value="SRT-230130" readonly>
        <input type="text" name="barcode" class="form-control mb-3 font-weight-bold" value="" placeholder="Scan Here" autofocus>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white">
        <h5 class="float-left">Table List Resi</h5>
        <button class="btn btn-success float-sm-right" title="Simpan Manifest" id="simpanResi"><i class="fa fa-save"></i> Selesai</button>
    </div>
    <div class="card-body">
        <div class="row" id="tampilTableSorting">
        </div>
    </div>
</div>

<script>
    function manifestTemp() {
        let manifest = $('#noawb').val();
        $.ajax({
            type: "post",
            url: "<?= site_url('CSorting/tableSorting') ?>",
            data: {
                manifest: manifest
            },
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    $('#tampilTableSorting').html(response.data);
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