<?php include('header.php'); ?>
    <div class="container mt-3">
         <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">USER DURABBAG</a>
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
                      Berhasil diHapus data user! 
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    }elseif($_GET['berhasil']==3){
                      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      Berhasil diUbah data user! 
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                  }
                }
                ?>
                <a href="tambah_user.php" class="btn btn-primary mt-3 mb-3">Tambah User</a>
                <table id="myTable" class=" display">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                          <th scope="col">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                        include('../model/koneksi.php');
                        $data_user = mysqli_query($conn, "SELECT * FROM user");
                        $i=1;
                        while($user = mysqli_fetch_array($data_user)) {
                    ?>
                      <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $user['nama'] ?></td>
                          <td><?= $user['email'] ?></td>
                          <td><?= $user['role'] ?></td>
                          <td>
                            <a href="ubah_user.php?id_user=<?php echo $user['id_user']; ?>" class="btn btn-warning">Ubah</a>
                            <a href="../model/user_delete.php?id_user=<?php echo $user['id_user']; ?>" onclick="return confirm('Yakin dihapus')"  class="btn btn-danger">Hapus</a>
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
