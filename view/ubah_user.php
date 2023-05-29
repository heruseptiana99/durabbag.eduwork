<?php include('header.php'); ?>
<?php
  include ('../model/koneksi.php');
  $id_user = $_GET['id_user'];

  $data_user = mysqli_query($conn, "SELECT * FROM user where id_user='$id_user'");
  while ($user = mysqli_fetch_array($data_user)) {
    $id_user = $user['id_user'];
    $nama = $user['nama'];
    $email = $user['email'];
    $role = $user['role'];
  }
  ?>
    <div class="container mt-2">
        <div class="row justify-content-md-center" >
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>TAMBAH USER | DURABBAG</h4>
                        </div>
                        <form action="../model/user_edit.php?id_user=<?= $id_user ?>" method="POST" id="form-pelanggan">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?= $nama ?>">
                            <small id="text-error-name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com" value="<?= $email ?>">
                            <small id="text-error-email"></small>
                        </div>
                        <div class="mb-3">
                            <label for="Ulang Password" class="form-label">Role user</label>
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option value="admin" <?php if($role=="admin"){ echo "selected"; } ?>>Admin</option>
                            <option value="user" <?php if($role=="user"){ echo "selected"; } ?>>User</option>
                        </select>
                        </div>
                    
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-warning">UBAH USER</button>
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
        if ($('#nama').val().length == 0 || $('#email').val().length == 0 ){
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-name').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-name').css({"font-style" : "italic"});
                $('#text-error-name').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-name').hide();
            }
            if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi emnail terlebih dahulu');
                $('#text-error-email').css({"font-style" : "italic"});
                $('#text-error-email').css({"color" : "red"});
            }else{
                $('#email').css({"border-color" : "#dee2e6"});
                $('#text-error-email').hide();
            }           
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
<?php include('footer.php'); ?>
