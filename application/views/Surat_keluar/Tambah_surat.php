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

            <?php echo form_open_multipart('TIF/add') ?>

            <div class="form-group">
                <label>Nama Surat</label>
                <input type="text" class="form-control" name="Nim" required="">
            </div>

            <div class="form-group">
                <label for="selectJenisSurat">Pilih Jenis</label>
                <select class="form-control" id="id" name="idkategori">

                    <option value="">--Piih Kategori--</option>
                    <?php foreach ($kategori_surat as $row) {
                        echo "<option>" .  $row['Kategori'] . "</option>";
                        echo $row->idkategori == $kategori_surat['id_kategori_surat'] ? 'selected' : '';
                    }
                    echo "</select>" ?>
                    <!-- <?php var_dump($row); ?> -->
                </select>


            </div>

            <div class=" form-group">
                <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input name="tanggal_lahir" id="tanggal_lahir" placeholder="contoh 2021-05-23" type="date" class="form-control" value="<?= set_value('tanggal_keluar'); ?>">
                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="varchar">Nama file</label>
                    <input type="file" name="filename" required="">
                </div>

            </div>
            <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
            <button type="submit" class="btn btn-success float-right">Tambah data</button>

            <?php echo form_close() ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->