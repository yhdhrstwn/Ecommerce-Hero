        <!-- my css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/umum/')?>style.css">
        <title>Cart</title>
    </head>
    <body>
        
        <!-- main -->
        <section>   
            <div class="container"> 
                <?php if($listCart != NULL) {?>
                <form action="" id="form" method="post">
                <?php 
                $hasil = 0;
                foreach ($listCart as $u){ ?>
                    <div class="row d-flex justify-content-center mb-3">
                        <div class="col-4">
                            <section class="dua">
                            <img src="<?php echo base_url("admin/".$u->Gambar)?>" alt="..." width="200px" height="200px" style=" margin-top: 20px; margin-left: 70px;">
                            </section>
                        </div>
                        <div class="col-4">
                            <section class="dua" style="margin-top: 40px;">
                            <h3><?php echo $u->Nama_barang ?></h3>
                            <p>Jumlah</p>
                            <p>SIze</p>
                            <p>Harga</p>
                            </section>
                        </div>
                        <div class="col-4">
                            <section class="dua" style="margin-top: 80px;">
                            <p><?php echo $jumlah = $u->Jumlah; ?></p>
                            <p><?php echo $u->Size ?> <a href="<?php echo site_url('cart/hapus/'.$u->ID)?>" style="margin-left: 155px; color: black;" title="Hapus"><i class="fa fa-trash fs-4"></i></a></p>
                            <p>IDR <?php echo number_format($harga = $u->Harga_barang) ?></p>
                            </section>
                        </div>
                        <hr class="mt-3">
                    </div>
                    <?php 
                        $hasil += $jumlah * $harga;
                    } ?>
                    <div class="row">
                        <div class="col-4">
                            <?php foreach($listCart as $c) {?>
                            <input type="hidden" name="Id_barang[]" value="<?php echo $c->Id_barang ?>">
                            <input type="hidden" name="Jumlah[]" value="<?= $c->Jumlah ?>">
                            <input type="hidden" name="Size[]" value="<?= $c->Size ?>">
                            <?php } ?>
                            <input type="hidden" name="Total" value="<?= $hasil ?>">
                            <a href="#" class="btn btn-outline-success mb-3 me-2 ms-3" id="check">Checkout</a>
                            <a href="<?php echo site_url('home') ?>" class="btn btn-outline-secondary mb-3">Kembali</a>
                        </div>
                        <div class="col-4">
                            <p>Total</p>
                        </div>
                        <div class="col-4">
                            <p>IDR <?php echo number_format($hasil) ?></p>
                        </div>
                    </div>
                </form>
                <?php } else{ ?>
                    <section class="tiga">
                        <h1 class="mt-4" style="text-align: center;">Keranjang anda kosong! Silahkan memilih produk kami</h1>
                        <a href="<?= site_url('home')?>">
                            <img src="<?= base_url('admin/assets/images/')?>pp.png" alt="ss" width="550px" height="550px" style="margin-left: 280px; margin-top: -25px;">
                        </a>
                    </section>
                <?php } ?>
            </div>
        </section>
        <!-- end main -->

        <script type="text/javascript">
            $(document).ready(function(e){
                $("#check").on("click", function(e){
                    let formData= $("#form").serialize();
                    $.ajax({
                       data: formData,
                       type: "post",
                       dataType:"json",
                       url:"<?php echo site_url('cart/checkout') ?>",
                       success: function(e){
                           console.log(e.pesan);
                           alert(e.pesan);
                            if ( e.status){
                                window.location.href = "<?= site_url('transaksi/detail') ?>/" + e.Id_transaksi;
                            }else{

                            }
                       },
                       error: function (e) {
                           console.log(e.responseText);
                       }
                    });

                    return false;
                })               
            });
        </script>