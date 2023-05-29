<?php include('header.php'); ?>
<?php
  include ('../model/koneksi.php');
  $id_produk = $_GET['id_produk'];

  $data_produk = mysqli_query($conn, "SELECT * FROM produk where id_produk='$id_produk'");
  while ($produk = mysqli_fetch_array($data_produk)) {
    $id_produk = $produk['id_produk'];
    $nama = $produk['nama'];
    $jenis = $produk['jenis'];
    $harga = $produk['harga'];
    $keterangan = $produk['keterangan'];
  }
?>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>TAMBAH PRODUK | DURABBAG</h4>
                        </div>
                        <form action="../model/produk_edit.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                            <input type="hidden" name="halaman" value="ubah">
                            <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $nama; ?>">
                            <small id="text-error-name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="Ulang Password" class="form-label">Jenis Bag</label>
                            <select name="jenis" class="form-select" aria-label="Default select example">
                                <option value="Backpack" <?php if($jenis=="Backpack"){ echo"selected"; } ?>>Backpack</option>
                                <option value="Shoulder Bag" <?php if($jenis=="Shoulder Bag"){ echo"selected"; } ?>>Shoulder Bag</option>
                                <option value="Cases" <?php if($jenis=="Cases"){ echo"selected"; } ?>>Cases</option>
                                <option value="Cycling Bag" <?php if($jenis=="Cycling Bag"){ echo"selected"; } ?>>Cycling Bag</option>
                                <option value="Pouch" <?php if($jenis=="Pouch"){ echo"selected"; } ?>>Pouch</option>
                                <option value="Waist Bag" <?php if($jenis=="Waist Bag"){ echo"selected"; } ?>>Waist Bag</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?= $harga; ?>">
                            <small id="text-error-harga"></small>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="4" class="form-control"><?= $keterangan; ?></textarea>
                            <small id="text-error-keterangan"></small>
                        </div>
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-warning">UBAH PRODUK</button>
                            <a href="admin_produk.php" class="btn btn-danger">Batal</a>
                        </div>
                        </form>
        
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                        <div class="card-body">
                        <div class="mb-3">
                            <h4>SIZE PRODUK</h4>
                        </div>
                        <div class="mb-3">
                            <a href="tambah_size.php?id_produk=<?= $id_produk; ?>" class="btn btn-primary">TAMBAH SIZE</a>
                        </div>
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Size</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include('../model/koneksi.php');
                            $data_size= mysqli_query($conn, "SELECT * FROM produk_size WHERE id_produk=$id_produk");
                            $i=1;
                            while($size= mysqli_fetch_array($data_size)) {
                        ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $size['size'] ?></td>
                                <td>
                                    <a href="ubah_produk_size.php?id_produk_size=<?php echo $size['id_produk_size']; ?>&id_produk=<?= $id_produk ?>" class="btn btn-warning">Ubah</a>
                                    <a href="../model/produk_size_delete.php?id_produk_size=<?php echo $size['id_produk_size']; ?>&id_produk=<?= $id_produk ?>" onclick="return confirm('Yakin dihapus')"  class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>   
                <div class="card mt-2">
                        <div class="card-body">
                        <div class="mb-3">
                            <h4>FOTO PRODUK</h4>
                        </div>
                        <div class="mb-3">
                            <a href="tambah_produk_foto.php?id_produk=<?= $id_produk ?>" class="btn btn-primary">TAMBAH FOTO</a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include('../model/koneksi.php');
                            $data_foto= mysqli_query($conn, "SELECT * FROM produk_foto WHERE id_produk=$id_produk");
                            $i=1;
                            while($foto= mysqli_fetch_array($data_foto)) {
                        ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="../assets/image/produk/<?= $foto['foto'] ?>" alt="" width="100px"></td>
                                <td>
                                    <form action="../model/produk_foto_edit.php" method="POST" id="form-pelanggan">
                                        <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                                        <input type="hidden" name="id_produk_foto" value="<?= $foto['id_produk_foto'] ?>">
                                        <div class="mb-3">
                                            <select class="form-select" aria-label="Default select example" name="status">
                                                <option value="Utama" <?php if($foto['status']=="Utama"){ echo"selected"; } ?>>Utama</option>
                                                <option value="Anggota" <?php if($foto['status']=="Anggota"){ echo"selected"; } ?>>Anggota</option>
                                            </select>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-warning">Ubah</button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <a href="../model/produk_foto_delete.php?id_produk_foto=<?php echo $foto['id_produk_foto']; ?>&id_produk=<?= $id_produk ?>&foto=<?= $foto['foto'] ?>" onclick="return confirm('Yakin dihapus')"  class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    <br>
                    <small><i>*maxsimal 5 foto</i></small>
                    </div>
                </div>                                                                          
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#nama').val().length == 0 || $('#harga').val().length == 0  || $('#keterangan').val().length == 0 ) {
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-name').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-name').css({"font-style" : "italic"});
                $('#text-error-name').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-name').hide();
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
