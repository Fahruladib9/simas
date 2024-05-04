<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Edit Data User</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">edit-data-user</li>
                    </ol>
                </div>
            </div>
            <!-- Button kembali -->
            <div class="section-header ml-4">
                <a href="<?= base_url("admin/data-user"); ?>" class="btn btn-outline-secondary">Kembali</a>
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
                        <form action="<?= base_url("/admin/update-data-user/") . $user->id_user; ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">Username *</label>
                                    <input type="text" name="username" class="form-control" value="<?= $user->username; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input type="text" name="password" class="form-control" value="<?= $user->password; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama *</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $user->nama; ?>" required>
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