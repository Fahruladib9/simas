<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Edit Kepengurusan</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Kepengurusan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">edit-kepengurusan</li>
                    </ol>
                </div>
            </div>
            <!-- Button kembali -->
            <div class="section-header ml-4">
                <a href="<?= base_url("admin/kepengurusan"); ?>" class="btn btn-outline-secondary">Kembali</a>
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
                        <form action="<?= base_url("/admin/update-kepengurusan/") . $kepengurusan->id_kepengurusan; ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama *</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $kepengurusan->nama; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan *</label>
                                    <input type="text" name="jabatan" class="form-control" value="<?= $kepengurusan->jabatan; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Pesan</label>
                                    <input type="text" name="pesan" class="form-control" value="<?= $kepengurusan->pesan; ?>">
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