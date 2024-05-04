<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Galeri</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Galeri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Galeri</li>
                    </ol>
                </div>
            </div>
            <!-- Button Tambah Barang -->
            <div class="section-header mb-3 ml-4">
                <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalTambah">Tambah</a>
                <!-- <a href="" class="btn btn-outline-secondary">
                    <i class="fas fa-print"></i> Cetak
                </a> -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- form popup ketika di klik tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= base_url(); ?>admin/tambah-galeri" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Galeri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Tambahkan elemen-elemen form di sini -->
                        <div class="form-group">
                            <label for="judul">Judul *</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan *</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar (max size 7Mb) *</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jika gagal input -->
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Oops !</b>
                <?= session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Galeri</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="pemasukanMasjid" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Gambar</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($galeri as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $value->judul; ?></td>
                                            <td><?= $value->keterangan; ?></td>
                                            <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/assets/img/galeri/" . $value->gambar; ?>"></td>
                                            <td><?= date('d/m/Y H:i:s', strtotime($value->updated_at)); ?></td>
                                            <td class="text-center">
                                                <!-- proses edit dan hapus data di ambil berdasarkan id data mana yg mau di hapus atau edit -->
                                                <a href="<?= base_url(); ?>admin/edit-galeri/<?= $value->id_galeri; ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="<?= base_url(); ?>admin/delete-galeri/<?= $value->id_galeri; ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data')">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>