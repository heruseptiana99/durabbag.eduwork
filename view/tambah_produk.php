<?php include('header.php'); ?>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>TAMBAH PRODUK | DURABBAG</h4>
                        </div>
                        <form action="../model/produk_tambah.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                            <input type="hidden" name="halaman" value="tambah">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                            <small id="text-error-name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="Ulang Password" class="form-label">Jenis Bag</label>
                            <select name="jenis" class="form-select" aria-label="Default select example">
                                <option value="Backpack">Backpack</option>
                                <option value="Shoulder Bag">Shoulder Bag</option>
                                <option value="Cases">Cases</option>
                                <option value="Cycling Bag">Cycling Bag</option>
                                <option value="Pouch">Pouch</option>
                                <option value="Waist Bag">Waist Bag</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Ukuran</label>
                            <br>
                            <small><i>*satuan Liters</i></small>
                            <input type="number" class="form-control" name="size" id="size" placeholder="Size">
                            <small id="text-error-size"></small>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga">
                            <small id="text-error-harga"></small>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="4" class="form-control"></textarea>
                            <small id="text-error-keterangan"></small>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto utama Produk</label>
                            <input class="form-control" type="file" name="foto_produk" id="foto_produk" id="formFile">
                            <small id="text-error-foto_produk"></small>
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
        if ($('#nama').val().length == 0 || $('#size').val().length == 0 || $('#harga').val().length == 0  || $('#foto_produk').val().length == 0 || $('#keterangan').val().length == 0 ) {
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-name').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-name').css({"font-style" : "italic"});
                $('#text-error-name').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-name').hide();
            }
            if($('#size').val().length == 0){
                $('#size').css({"border-color" : "red"});
                $('#text-error-size').text('* Silahkan isi Ukuran terlebih dahulu');
                $('#text-error-size').css({"font-style" : "italic"});
                $('#text-error-size').css({"color" : "red"});
            }else{
                $('#size').css({"border-color" : "#dee2e6"});
                $('#text-error-size').hide();
            }
            if($('#harga').val().length == 0){
                $('#harga').css({"border-color" : "red"});
                $('#text-error-harga').text('* Silahkan isi harga terlebih dahulu');
                $('#text-error-harga').css({"font-style" : "italic"});
                $('#text-error-harga').css({"color" : "red"});
            }else{
                $('#harga').css({"border-color" : "#dee2e6"});
                $('#text-error-harga').hide();
            } 
            if($('#foto_produk').val().length == 0){
                $('#foto_produk').css({"border-color" : "red"});
                $('#text-error-foto_produk').text('* Silahkan isi foto produk terlebih dahulu');
                $('#text-error-foto_produk').css({"font-style" : "italic"});
                $('#text-error-foto_produk').css({"color" : "red"});
            }else{
                $('#foto_produk').css({"border-color" : "#dee2e6"});
                $('#text-error-foto_produk').hide();
            }  
            if($('#keterangan').val().length == 0){
                $('#keterangan').css({"border-color" : "red"});
                $('#text-error-keterangan').text('* Silahkan isi keterangan terlebih dahulu');
                $('#text-error-keterangan').css({"font-style" : "italic"});
                $('#text-error-keterangan').css({"color" : "red"});
            }else{
                $('#keterangan').css({"border-color" : "#dee2e6"});
                $('#text-error-keterangan').hide();
            }          
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
<?php include('footer.php'); ?>
