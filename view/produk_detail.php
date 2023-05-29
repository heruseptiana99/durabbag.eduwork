<?php include('header.php'); ?>
<?php
        include ('../model/koneksi.php');
        $id_produk = $_GET['id_produk'];

        $data_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk=$id_produk");
        while ($produk = mysqli_fetch_array($data_produk)) {
            $nama = $produk['nama'];
            $harga = $produk['harga'];
            $keterangan = $produk['keterangan'];
            $jenis = $produk['jenis'];
        }
?>        
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <?php 
                              $data_produk_foto = mysqli_query($conn, "SELECT * FROM produk_foto WHERE id_produk=$id_produk");
                                while ($produk_foto = mysqli_fetch_array($data_produk_foto)) {
                                
                        ?>
                            <div class="carousel-item active">
                            <img src="../assets/image/produk/<?= $produk_foto['foto'] ?>" class="d-block w-100" >
                            </div>
                        <?php       
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col ">
                <h2><b><?= $nama ?></b></h2>
                <hr>
                <p class="mt-3">HARGA :</p>
                <p><b><?= "Rp " . number_format($harga,2,',','.'); ?></b></p>
                <p class="mt-3">JENIS :</p>
                <p><b><?= $jenis ?></b></p>
                <p class="mt-3">DESKRIPSI :</p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           DESKRIPSI PRODUK
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><?= nl2br($keterangan) ?></p>
                        </div>
                        </div>
                    </div>
                </div>
                <p class="mt-3">SIZE :</p>
                <?php $i=0; ?>
                <?php 
                              $data_produk_ukuran = mysqli_query($conn, "SELECT * FROM produk_size WHERE id_produk=$id_produk");
                                while ($produk_ukuran = mysqli_fetch_array($data_produk_ukuran)) {
                                
                        ?>

                            <input type="radio"  class="cek" name="id_produk_size" id="<?= $produk_ukuran['size']; ?>" value="<?= $produk_ukuran['id_produk_size']; ?>" <?php if($i==0){echo "checked";} ?>>
					        <label class="btn btn-radio" id="featuredimage<?= $i ?>" for="<?= $produk_ukuran['size']; ?>"><?= $produk_ukuran['size']; ?>L</label>
                        <?php  
                        $i++;     
                            }
                ?>
                <br>
                <div class="d-grid gap-2">
               					<a href="" class="btn btn-success mt-4"><i class="fa-brands fa-whatsapp"></i> Pesan Sekarang Lewat WhatsApp</a>
                        </div>

            </div>
        </div>
    </div>

<?php include('footer.php'); ?>
