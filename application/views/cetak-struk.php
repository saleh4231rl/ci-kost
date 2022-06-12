<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Kost/title>
</head>

<body>
    <!-- <table>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    </table> -->
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor Faktur</th>
            <th>ID Pesanan</th>
            <th>Nama Pemesan</th>
            <th>Nomor Rekening</th>
            <th>Bukti Transaksi</th>
            <th>Total Bayar</th>
            <th>Status</th>
            <th>Tanggal Transaksi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($data); ++$i) { ?>
        <tr>
            <td><?php echo ($i+1); ?></td>
            <td><?php echo $data[$i]->no_fak_trans_us; ?></td>
            <td><?php echo $data[$i]->id_psn_ks_us; ?></td>
            <td><?php echo $data[$i]->nml_us; ?></td>
            <td><?php echo $data[$i]->no_rek; ?></td>
            <td><img class="img-thumbnail" style="max-height:70px;max-width:120px;min-height:70px;min-width:120px;"
                    src="<?php echo base_url()."assets/"; ?>images/bukti_trans/<?php echo $data[$i]->bkti; ?>">
            </td>
            <td><?php echo $data[$i]->tot_bay; ?></td>
            <td><?php echo $data[$i]->stt_t; ?></td>
            <td><?php echo $data[$i]->tgl_trans_us; ?></td>
            <td>
                <p><a href="<?php echo base_url()."index.php/admin/ok_trans/".$data[$i]->no_fak_trans_us; ?>"
                        class="btn btn-warning" data-placement="bottom" data-toggle="tooltip" title="Print"><i
                            class="fa fa-print"></i></a></p>
            </td>
            </td>

        </tr>
        <?php } ?>
    </tbody>
    <script text="text/javascript">
    window.print();
    </script>
</body>

</html>