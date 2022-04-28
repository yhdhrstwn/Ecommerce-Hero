<div class="content-wrapper">
    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2>Detail Pesanan</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Jumlah</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?> 
                                    <?php foreach($detail as $u){ ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $u->Nama_barang ?></td>
                                        <td>IDR <?php echo number_format($u->Harga_barang)?></td>
                                        <td><?php echo $u->Jumlah ?></td>
                                        <td><?php echo $u->Size ?></td>
                                        <?php $hitung = $u->Harga_barang * $u->Jumlah; ?>
                                        <td>IDR <?php echo number_format($hitung)?></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php } ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>IDR <?php echo number_format($detail[0]->Total)?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="<?php echo site_url('pesanan') ?>" class="btn btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>