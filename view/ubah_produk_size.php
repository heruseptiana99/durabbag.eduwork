<?php include('header.php'); ?>
<?php 

    $id_produk = $_GET['id_produk'];

    include ('../model/koneksi.php');
    $id_produk_size = $_GET['id_produk_size'];

    $data_size = mysqli_query($conn, "SELECT * FROM produk_size where id_produk_size='$id_produk_size'");
    while ($size = mysqli_fetch_array($data_size)) {
        $id_produk_size = $size['id_produk_size'];
        $ukuran = $size['size'];
    }


?>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>UBAH SIZE | DURABBAG</h4>
                        </div>
                        <form action="../model/produk_size_edit.php" method="POST" id="form-pelanggan">
                            <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                            <input type="hidden" name="id_produk_size" value="<?= $id_produk_size ?>">
                        <div class="mb-3">
                            <label for="size" class="form-label">Ukuran</label>
                            <input type="text" class="form-control" name="size" id="size" placeholder="Ukuran" value="<?= $ukuran ?>">
                            <small id="text-error-size"></small>
                        </div>
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-warning">UBAH SIZE</button>
                            <a href="ubah_produk.php?id_produk=<?= $id_produk ?>" class="btn btn-danger">Batal</a>
                        </div>
                        </form>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#size').val().length == 0) {
            if($('#size').val().length == 0){
                $('#size').css({"border-color" : "red"});
                $('#text-error-size').text('* Silahkan isi size terlebih dahulu');
                $('#text-error-size').css({"font-style" : "italic"});
                $('#text-error-size').css({"color" : "red"});
            }else{
                $('#size').css({"border-color" : "#dee2e6"});
                $('#text-error-size').hide();
            }      
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
<?php include('footer.php'); ?>
