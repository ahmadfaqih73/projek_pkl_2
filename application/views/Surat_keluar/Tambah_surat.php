<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Surat</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <?php echo form_open_multipart('Input_surat/add') ?>
            <form class="surat_out" method="POST">
                <div class="form-group">
                    <label>Nama Surat</label>
                    <input type="text" class="form-control" name="Nama">
                    <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="selectJenisSurat">Pilih Jenis</label>
                    <select class="form-control" id="id" name="kategori">
                        <option value=""> Pilih Kategori</option>
                        <?php foreach ($kategori_surat as $ks) : ?>
                            <option value="<?= $ks['id_kategori_surat'] ?>"><?= $ks['Kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>


                </div>

                <div class=" form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input name="tanggal" id="tanggal_lahir" placeholder="contoh 2021-05-23" type="date" class="form-control" value="<?= set_value('tanggal_keluar'); ?>">
                        <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label for="varchar">Nama file</label>
                        <input type="file" name="filename">
                    </div>

                </div>
                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                <button type="submit" class="btn btn-success float-right">Tambah data</button>

            </form>

            <?php echo form_close() ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->