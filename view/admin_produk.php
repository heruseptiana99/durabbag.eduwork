<?php include('header.php'); ?>
    <div class="container mt-3">
         <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">PRODUK DURABBAG</a>
    </div>
    </nav>
    <div class="container mb-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <?php 
                  if($_GET){
                    if ($_GET['berhasil']==1) {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Berhasil menambahkan data baru anggota! 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }elseif($_GET['berhasil']==2){
                      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      Berhasil diHapus data produk! 
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    }elseif($_GET['berhasil']==3){
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      Berhasil diUbah data produk! 
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                  }
                }
                ?>
                <a href="tambah_produk.php" class="btn btn-primary mt-3 mb-3">Tambah Produk</a>
                <table id="myTable" class=" display">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Jenis</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                        include('../model/koneksi.php');
                        $data_produk = mysqli_query($conn, "SELECT * FROM produk");
                        $i=1;
                        while($produk = mysqli_fetch_array($data_produk)) {
                    ?>
                      <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $produk['nama'] ?></td>
                          <td><?= $produk['jenis'] ?></td>
                          <td><?= $produk['harga'] ?></td>
                          <td>
                            <a href="ubah_produk.php?id_produk=<?php echo $produk['id_produk']; ?>" class="btn btn-warning">Ubah</a>
                            <a href="../model/produk_delete.php?id_produk=<?php echo $produk['id_produk']; ?>" onclick="return confirm('Yakin dihapus')"  class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>  
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
    </div>
<?php include('footer.php'); ?>
