<?= $this->extend('layout/index'); ?>
<?= $this->section('judul'); ?>
<h1>Warehouse</h1>
<?= $this->endsection('judul'); ?>
<?= $this->section('subjudul'); ?>

<?= $this->endsection('subjudul'); ?>
<?= $this->section('isi'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Seller</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="btn btn-sm btn-primary p-2 m-2" id="tambahModal"><i class="fa fa-plus mr-3"></i> Tambah Data Warehouse</div>
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Warehouse Name
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Contact
                    </th>
                    <th>
                        Volume
                    </th>
                    <th>
                        Tagihan Ongkir
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="d-flex">
                                <img alt="Avatar" class="table-avatar mr-4" src="../../dist/img/avatar.png">
                                <p class="font-weight-bold">Seller Uhuwa</p>
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <p>Jakarta Pusat</p>
                    </td>
                    <td class="project_progress">
                        <p>08129382123</p>
                    </td>
                    <td class="project_progress">
                        <p><?= number_format('2000', 2, ',', '.') ?></p>
                    </td>
                    <td class="project_progress">
                        <p><?= "Rp" . number_format('10000000', 2, ',', '.') ?></p>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="d-flex">
                                <img alt="Avatar" class="table-avatar mr-4" src="../../dist/img/avatar.png">
                                <p class="font-weight-bold">Seller Uhuwa</p>
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <p>Jakarta Pusat</p>
                    </td>
                    <td class="project_progress">
                        <p>08129382123</p>
                    </td>
                    <td class="project_progress">
                        <p><?= number_format('2000', 2, ',', '.') ?></p>
                    </td>
                    <td class="project_progress">
                        <p><?= "Rp" . number_format('10000000', 2, ',', '.') ?></p>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<div class="modalTambahWarehouse" style="display: none;"></div>

<script>
    $(document).ready(function() {
        $("#tambahModal").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url() ?>CWarehouseList/modalTambah",
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        $('.modalTambahWarehouse').html(response.data).show();
                        $('#tambahWarehouse').modal('show');
                    }
                }
            });
        })
    })
</script>

<?= $this->endsection('isi'); ?>