<?php include('header.php'); ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6 align-self-center">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search....." aria-label="Search....." aria-describedby="button-addon2">
            <button class="btn btn-dark" type="button" id="button-addon2">SEARCH</button>
        </div>
        </div>
    </div>
    <div class="row m-0">
    <?php
        include ('../model/koneksi.php');

        $data_produk = mysqli_query($conn, "SELECT * FROM produk");
        while ($produk = mysqli_fetch_array($data_produk)) {
            $id_produk_p = $produk['id_produk'];
            $data_produk_foto = mysqli_query($conn, "SELECT * FROM produk_foto WHERE id_produk=$id_produk_p AND status='Utama'");
            while ($produk_foto = mysqli_fetch_array($data_produk_foto)) {
                $foto = $produk_foto['foto']; 
    ?>
    
        <div class="col mb-2">
            <a href="produk_detail.php?id_produk=<?= $produk['id_produk'] ?>" style="text-decoration:none;color:dark;">
            <div class="card" style="width: 15rem;">
                <img src="../assets/image/produk/<?= $foto ?>" class="card-img-top" alt="..." width="200px">
    <?php 
                
            }
    ?>
                <div class="card-body">
                    <h5 class="card-title"><b><?= $produk['nama'] ?></b></h5>
                    <p class="card-text">
                        <?= $produk['jenis'] ?><br>
                        <b><?= "Rp " . number_format($produk['harga'],2,',','.'); ?></b>
                    </p>
                </div>
            </div>
            </a>
        </div>
    <?php
             
        }
    ?>
    </div>
</div>
<?php include('footer.php'); ?>
