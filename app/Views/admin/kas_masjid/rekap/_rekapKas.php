<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Rekap Kas Masjid</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rekap Kas Masjid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Rekap-Kas-Masjid</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>Rp. <?= number_format($saldo, 2, ",", "."); ?></h4>
                            <p>Saldo Kas Masjid</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-solid fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4>Rp. <?= number_format($pemasukan, 2, ",", "."); ?></h4>
                            <p>Jumlah Pemasukan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-solid fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4>Rp. <?= number_format($pengeluaran, 2, ",", "."); ?></h4>
                            <p>Pengeluaran Masjid</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-solid fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <form action="<?= base_url("admin/sortir"); ?>" method="POST">
                <div class="row">
                    <div class="col-sm-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tanggal Awal</label>
                            <input type="date" class="form-control" name="tanggal_awal" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Tanggal Akhir</label>
                            <input type="date" class="form-control" name="tanggal_akhir" required>
                        </div>
                    </div>
                    <div class="row-sm-2 align-self-center mt-3">
                        <button type="submit" class="btn btn-primary">Cari Data</button>
                        <a href="<?= base_url("admin/rekap-kas-masjid"); ?>" class="btn btn-primary ml-1">Lihat Semua Data</a>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Kas Masjid</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="rekapMasjid" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rekap as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value->keterangan ?></td>
                                            <!-- jika pemasukan 0 tampilkan "-" -->
                                            <?php if ($value->pemasukan == "0") : ?>
                                                <td>-</td>
                                            <?php endif; ?>
                                            <!-- jika pemasukan tidak sama dengan 0 tampilkan jumlahnya -->
                                            <?php if ($value->pemasukan != "0") : ?>
                                                <td>Rp. <?= number_format($value->pemasukan, 2, ",", "."); ?></td>
                                            <?php endif; ?>
                                            <!-- jika pengeluaran 0 tampilkan "-" -->
                                            <?php if ($value->pengeluaran == "0") : ?>
                                                <td>-</td>
                                            <?php endif; ?>
                                            <!-- jika pengeluaran tidak sama dengan 0 tampilkan jumlahnya -->
                                            <?php if ($value->pengeluaran != "0") : ?>
                                                <td>Rp. <?= number_format($value->pengeluaran, 2, ",", "."); ?></td>
                                            <?php endif; ?>
                                            <td><?= date('d/m/Y', strtotime($value->tanggal)); ?></td>
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