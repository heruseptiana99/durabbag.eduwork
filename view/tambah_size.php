<?php include('header.php'); ?>
<?php 

    $id_produk = $_GET['id_produk'];

?>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>TAMBAH PRODUK | DURABBAG</h4>
                        </div>
                        <form action="../model/produk_size_tambah.php" method="POST" id="form-pelanggan">
                            <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                        <div class="mb-3">
                            <label for="size" class="form-label">Ukuran</label>
                            <input type="text" class="form-control" name="size" id="size" placeholder="Ukuran">
                            <small id="text-error-size"></small>
                        </div>
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-primary">TAMBAH PRODUK</button>
                            <a href="admin_user.php" class="btn btn-danger">Batal</a>
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
