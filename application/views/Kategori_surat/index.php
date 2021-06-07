<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kategori Surat</h1>
                </div><!-- /.col -->

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis_Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kategori_surat as $value) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>
                                <td><?php echo $value['Kategori'] ?></td>

                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->