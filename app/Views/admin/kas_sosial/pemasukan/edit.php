<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Edit Pemasukan</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pemasukan Sosial</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">edit-pemasukan-sosial</li>
                    </ol>
                </div>
            </div>
            <!-- Button kembali -->
            <div class="section-header ml-4">
                <a href="<?= base_url("admin/pemasukan-sosial"); ?>" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Yang Dipilih</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url("/admin/update-pemasukan-sosial/") . $pemasukan->id_kasSosial; ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan *</label>
                                    <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $pemasukan->keterangan; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah *</label>
                                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="<?= $pemasukan->pemasukan; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal *</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $pemasukan->tanggal; ?>" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mx-2">Update</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>