<html>

<head>
    <title>Cetak Kas Masjid</title>
    <style>
        @page {
            size: A4
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            margin: 0;
            padding: 0;
        }

        .sheet {
            padding: 10mm;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        h1 {
            font-weight: bold;
            font-size: 16pt;
            text-align: center;
            line-height: 1.2;
            margin-bottom: 10px;
        }

        h2 {
            font-weight: bold;
            font-size: 10pt;
            text-align: center;
            line-height: 0.5;
        }

        .banyuasin {
            width: 90px;
            float: left;
            margin-right: 10px;
        }

        .logo_dt {
            width: 90px;
            float: right;
            margin-left: 10px;
            margin-top: -8px;
        }

        hr {
            border: none;
            border-top: 2px solid black;
            margin: 10px 0;
        }

        .satu {
            font-size: 17pt;
            text-align: center;
            line-height: 1.2;
            margin-bottom: 10px;
        }

        .alamat {
            font-weight: bold;
            font-size: 10pt;
            text-align: center;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 6px;
            border: 1px solid black;
        }

        .kode-pengembalian,
        .nama,
        .nama-barang,
        .jumlah,
        .keterangan,
        .tanggal-pengembalian,
        .tanggal-pengembalian {
            font-weight: bold;
        }

        .ttd {
            text-align: right;
            margin-top: 100px;
        }

        .pak-ahmat {
            position: relative;
            right: 100px;
            line-height: 0.5;
        }

        .tertanda {
            position: relative;
            right: 90px;
            line-height: 0.5;
            margin-bottom: 100px;
        }

        .nip {
            position: relative;
            right: 51px;
            line-height: 0.5;
        }
    </style>
</head>

<body class="A4">
    <section class="sheet">

        <img src="data:image/jpeg;base64,<?= $banyuasin; ?>" alt="" class="banyuasin">
        <img src="data:image/jpeg;base64,<?= $logo_dt; ?>" alt="" class="logo_dt">
        <!-- <img src="/assets/img/tut wuri.png" alt="Logo Tut Wuri" class="tut-wuri"> -->

        <h1>YAYASAN PONDOK PESANTREN DARUT TAQWA</h1>
        <h1>SUMBER JAYA</h1>
        <h1>SDN 13 SUMBER MARGA TELANG</h1>
        <p class="alamat">Jalur 3 – Jembatan 2, Desa Sumber Jaya, Kecamatan Sumber Marga Telang</p>
        <hr>

        <div class="container">
            <h1 style="margin-top: 30px; margin-bottom: 30px;">LAPORAN KAS MASJID</h1>
            <p>Laporan Tanggal : <?= date('d/m/Y', strtotime($tanggal_awal)); ?> - <?= date('d/m/Y', strtotime($tanggal_akhir)); ?></p>
            <table>
                <thead style="font-size: 13pt; font-weight: bold;">
                    <tr>
                        <td>No</td>
                        <td>Keterangan</td>
                        <td>Pemasukan</td>
                        <td>Pengeluaran</td>
                        <td>Tanggal</td>
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
                    <tr>
                        <td colspan="2" style="text-align: center;">Jumlah Pemasukan</td>
                        <td colspan="3" style="text-align: center;">Rp. <?= number_format($jumlahPemasukan, 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">Jumlah Pengeluaran</td>
                        <td colspan="3" style="text-align: center;">Rp. <?= number_format($jumlahPengeluaran, 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">Total Saldo Kas </td>
                        <td colspan="3" style="text-align: center;">Rp. <?= number_format($totalSaldo, 2, ",", "."); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="ttd">
                <p class="tertanda">Ketua Masjid,</p>
                <p>____________________________</p>
                <p class="pak-ahmat">Fahrul Adib</p>
            </div>
        </div>
    </section>
</body>


</html>