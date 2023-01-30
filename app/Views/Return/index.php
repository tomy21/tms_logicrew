<?= $this->extend('layout/index'); ?>
<?= $this->section('judul'); ?>
<h1>Return</h1>
<?= $this->endsection('judul'); ?>
<?= $this->section('subjudul'); ?>

<?= $this->endsection('subjudul'); ?>
<?= $this->section('isi'); ?>

<div class="row row-cols-2 mb-3">
    <div class="col-6">
        <button class="btn btn-info mr-2" onclick="location.href=('<?= site_url() ?>CReturn/createOutbound')">Outbound Return</button>
        <button class="btn btn-warning mr-2" onclick="location.href=('<?= site_url() ?>CReturn/historyReturn')">History Return</button>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Tabel Return
    </div>
    <div class="card-body">
        <table id="example1" class="table table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <!-- <th>Invoice</th> -->
                    <th>No AWB</th>
                    <th>Service</th>
                    <th>Warehouse</th>
                    <th>Ekspedisi</th>
                    <th>Agen</th>
                    <!-- <th>Status POD</th> -->
                    <th>Status</th>
                    <th>Ongkir</th>
                    <th>Update Date</th>
                    <!-- <th>Pickup Date</th> -->
                    <th>SLA</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
<!-- <script>
    $(document).ready(function() {
        var table = $('#example1').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "order": [],
            "info": true,
            "ajax": {
                "url": "<?php echo site_url('CStatus/dataAjax') ?>",
                "type": "POST",
            },
            dom: 'lBftip', // Add the Copy, Print and export to CSV, Excel and PDF buttons
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }],
        });
    });
</script> -->

<?= $this->endsection('isi'); ?>