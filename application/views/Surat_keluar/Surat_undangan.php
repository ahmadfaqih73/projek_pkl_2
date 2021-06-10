<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Surat Undangan</h1>

                </div><!-- /.col -->

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Surat</th>
                            <th scope="col">Jenis_Surat</th>
                            <th scope="col">file</th>
                            <th scope="col">tanggal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($surat_out as $value) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>
                                <td><?php echo $value['Nama_Surat'] ?></td>
                                <td><?php echo $value['jenis_surat'] ?></td>
                                <td><?php echo $value['nama_file'] ?></td>
                                <td><?php echo $value['Tanggal_keluar'] ?></td>




                                <!-- Modal -->
                                <div class="modal fade" id="updateTIF<?= $value['id_surat_keluar'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <!--                                     <?php echo form_open_multipart('Surat_Undangan/update_Surat_Undangan') ?> -->

                                                <form class="col-md-6" enctype="multipart/form-data" method="post" action="<?php echo base_url('Surat_Undangan/update_Surat_Undangan') ?>">

                                                    <!-- Id Pelanggan -->
                                                    <input type="hidden" name="id" value="<?php echo $value['id_surat_keluar'] ?>">

                                                    <div class="form-group">
                                                        <label>Nama Surat</label>
                                                        <input type="text" class="form-control" name="nama" required="" value="<?php echo $value['Nama_Surat'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kategori">Kategori</label>
                                                        <select class="form-control" id="kategori_surat" name="kategori_surat">
                                                            <?php foreach ($kategori_surat as $ks) : ?>
                                                                <?php if ($ks == $kategori_surat['kategori_surat']) : ?>
                                                                    <option value="<?= $ks; ?>" selected><?= $ks ?> </option>
                                                                <?php else : ?>
                                                                    <option value="<?= $ks; ?>"><?= $ks ?> </option>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <!-- <?php var_dump($kategori_surat); ?> -->
                                                    </div>

                                                    <div class=" form-group">
                                                        <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                                        <div class="col-sm-10">
                                                            <input name="tanggal" id="tanggal_lahir" placeholder="contoh 2021-05-23" type="date" class="form-control" value="<?php echo $value['Tanggal_keluar']; ?>">
                                                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="varchar">file surat</label>
                                                        <input class="float-right" type="file" name="filename" value="<?php echo $value['nama_file'] ?>">
                                                        <a class="float-left" target="_blank" href="<?php echo base_url('uploads/' . $value['nama_file']) ?>"><?php echo $value['nama_file'] ?></a>
                                                        <input type="hidden" name="oldFiles" value="<?php echo $value['nama_file'] ?>">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success float-right">Update data</button>
                                                    </div>
                                                </form>
                                                <!-- <?php echo form_close(); ?> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <td>
                                    <!-- <a href="<?= base_url(); ?>TIF/lihat_TIF/<?= $value['Id_mhs_tif']; ?> " class=" fas fa-eye badge badge-primary"> detail</a> -->

                                    <a href="" class="fas fa-edit badge badge-pill badge-success" data-toggle="modal" data-target="#updateTIF<?= $value['id_surat_keluar'] ?>"> edit</a>

                                    <!-- <a href="<?= base_url('TIF/hapus_mahasiswa_tif/' . $value['Id_mhs_tif']) ?> " class="fas fa-trash badge badge-pill badge-danger"> delete</a> -->
                                </td>

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