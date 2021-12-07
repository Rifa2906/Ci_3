<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kode Barang</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody id="target">

                </tbody>
            </table>

        </div>
    </section>
</div>
<!-- /.content-wrapper -->

<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            "responsive": true,
            "lengthChange": true,
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'pdf',
                    oriented: 'potrait',
                    pageSize: 'Legal',
                    title: 'Data Barang',
                    download: 'open'
                },
                {
                    extend: 'excel',
                    title: 'Data pasien'
                },
                {
                    extend: 'csv',
                    title: 'Data pasien'
                },
                {
                    extend: 'print',
                    title: 'Data pasien'
                }, 'colvis'

            ],

        });
    })
</script>