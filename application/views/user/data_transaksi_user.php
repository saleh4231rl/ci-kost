<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
</head>

<body>
    <h3>Data Transaksi</h3>

    <table border="1" width="500">
        <tr>
            <td>No</td>
            <td>Nomor Faktur</td>
            <td>Nama Kos</td>
            <td>Alamat</td>
            <td>Harga</td>
            <td>Tanggal Pesanan</td>
            <td>Metode Pembayaran</td>
            <td>Tanggal Transaksi</td>
            <td>Total Bayar</td>
            <td>Status</td>
            <td>AKSI</td>
        </tr>

        <?php 
        $no= 1;
        foreach ($tb_data_transaksi as $user):
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $user['no_faktur']; ?></td>
            <td><?php echo $user['nama_kos']; ?></td>
            <td><?php echo $user['alamat']; ?></td>
            <td><?php echo $user['harga']; ?></td>
            <td><?php echo $user['tgl_pesanan']; ?></td>
            <td><?php echo ($user['metode_pembayaran'] == 'C') ? 'Cash' : 'Bayar Nanti'; ?></td>
            <td><?php echo $user['tanggal_transaksi']; ?></td>
            <td><?php echo $user['total_bayar']; ?></td>
            <td><?php echo $user['status']; ?></td>
            <td><?php echo $user['aksi']; ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="5" align="center">
                <a href="<?php echo site_url('user/tambah_data_transaksi')?>">Kirim</a>
            </td>
        </tr>
    </table>
</body>

</html>