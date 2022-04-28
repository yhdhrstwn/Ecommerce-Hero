<?php
//import koneksi ke database
?>
<html>
<head>
  <title>Laporan Barang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Laporan Barang</h2>
                        <h4>(Penjualan Barang)</h4>
                        <a href="<?php echo site_url('home') ?>" class="btn btn-outline-primary mb-2" style="margin-left: 200px;position: absolute; z-index: 10;">Kembali</a>
                        <div class="data-tables datatable-dark">
                            
                            <table class="table" id="mauexport">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Beli</th>
                                    <th>Nama Pembeli</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Beli</th>
                                    <th>Total</th>
                                    <th>Size</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                <?php foreach($laporan as $u){ ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $u->tanggal_beli ?></td>
                                    <td><?php echo $u->Nama_lengkap ?></td>
                                    <td><?php echo $u->Nama_barang ?></td>
                                    <td><?php echo $u->Jumlah ?></td>
                                    <td><?php echo $u->Total ?></td>
                                    <td><?php echo $u->Size ?></td>
                                </tr>
                                <?php $i++; ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            
                </div>
            </div>
        </section>
    </div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>