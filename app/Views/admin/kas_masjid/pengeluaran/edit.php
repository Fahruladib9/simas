<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Edit Pengeluaran</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pengeluaran Masjid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">edit-Pengeluaran-masjid</li>
                    </ol>
                </div>
            </div>
            <!-- Button kembali -->
            <div class="section-header ml-4">
                <a href="<?= base_url("admin/pengeluaran-masjid"); ?>" class="btn btn-outline-secondary">Kembali</a>
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
                        <form action="<?= base_url("/admin/update-pengeluaran-masjid/") . $pengeluaran->id_kasMasjid; ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan *</label>
                                    <input type="text" name="keterangan" class="form-control" value="<?= $pengeluaran->keterangan; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah *</label>
                                    <input type="number" name="jumlah" class="form-control" value="<?= $pengeluaran->pengeluaran; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal *</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?= $pengeluaran->tanggal; ?>" required>
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