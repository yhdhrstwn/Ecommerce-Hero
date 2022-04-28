        <!-- my css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/umum/')?>style.css">
        <title>Detail</title>
    </head>
    <body>
        
        <!-- main -->
        <section>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="<?php echo base_url('admin/'.$detail->Gambar)?>" class="product-image img-fluid" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <section class="dua">
                            <h1><?php echo $detail->Nama_barang?></h1>
                            <b>IDR <?php echo number_format($detail->Harga_barang)?></b>
                            <p class="mt-2"><?php echo $detail->Deskripsi?></p>
                            <form action="" method="post" id="form">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                    <label class="font-weight-bold">Size</label>
                                    <select class="form-control mt-1" name="Size">
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                    </select>
                                    </div>
                                </div>
                                <input type="hidden" name="Id_barang" value="<?php echo $detail->ID?>">
                                <a href="#" class="btn btn-outline-success mt-2" id="Buy">Buy</a>
                                <a href="#" class="btn btn-outline-primary mt-2" id="Add">Add to cart</a>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main -->
        <script type="text/javascript">
            $(document).ready(function(e){
                $("#Add").on("click", function(e){
                    let formData= $("#form").serialize();
                    $.ajax({
                       data: formData,
                       type: "post",
                       dataType:"json",
                       url:"<?php echo site_url('cart/add') ?>",
                       success: function(e){
                           console.log(e.pesan);
                           alert(e.pesan);
                            if ( e.status){
                                window.location.href = "<?= site_url('home') ?>/";
                            }else{

                            }
                       }
                    });

                    return false;
                })               
            });
            $(document).ready(function(e){
                $("#Buy").on("click", function(e){
                    let formData= $("#form").serialize();
                    $.ajax({
                       data: formData,
                       type: "post",
                       dataType:"json",
                       url:"<?php echo site_url('cart/buy') ?>",
                       success: function(e){
                           console.log(e.pesan);
                           alert(e.pesan);
                            if ( e.status){
                                window.location.href = "<?= site_url('transaksi/detail') ?>/" + e.Id_transaksi;
                            }else{

                            }
                       }
                    });

                    return false;
                })               
            });
        </script>