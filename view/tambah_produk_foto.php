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
                            <h4>TAMBAH FOTO | DURABBAG</h4>
                        </div>
                        <form action="../model/produk_foto_tambah.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                            <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto_produk" id="foto" placeholder="Foto">
                            <small id="text-error-foto"></small>
                        </div>
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-primary">TAMBAH FOTO</button>
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
        if ($('#foto').val().length == 0) {
            if($('#foto').val().length == 0){
                $('#foto').css({"border-color" : "red"});
                $('#text-error-foto').text('* Silahkan isi foto terlebih dahulu');
                $('#text-error-foto').css({"font-style" : "italic"});
                $('#text-error-foto').css({"color" : "red"});
            }else{
                $('#foto').css({"border-color" : "#dee2e6"});
                $('#text-error-foto').hide();
            }      
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
<?php include('footer.php'); ?>
