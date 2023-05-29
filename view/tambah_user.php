<?php include('header.php'); ?>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>TAMBAH USER | DURABBAG</h4>
                        </div>
                        <form action="../model/daftar_model.php" method="POST" id="form-pelanggan">
                            <input type="hidden" name="halaman" value="tambah">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                            <small id="text-error-name"></small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com">
                            <small id="text-error-email"></small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <small id="text-error-password"></small>
                        </div>
                        <div class="mb-3">
                            <label for="Ulang Password" class="form-label">Ulang Password</label>
                            <input type="password" class="form-control" name="ulang_password" id="ulang_password" placeholder="Ulang Password">
                            <small id="text-error-ulang_password"></small>
                        </div>
                        <div class="mb-3">
                            <label for="Ulang Password" class="form-label">Role Anggota</label>
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        </div>
                    
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-primary">TAMBAH USER</button>
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
        if ($('#nama').val().length == 0 || $('#password').val().length == 0 || $('#email').val().length == 0  || $('#ulang_password').val().length == 0 || $('#password').val().length !== $('#ulang_password').val().length) {
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
            if($('#password').val().length == 0){
                $('#password').css({"border-color" : "red"});
                $('#text-error-password').text('* Silahkan isi password terlebih dahulu');
                $('#text-error-password').css({"font-style" : "italic"});
                $('#text-error-password').css({"color" : "red"});
            }else{
                if ($('#password').val().length !== $('#ulang_password').val().length) {
                    $('#password').css({"border-color" : "red"});
                    $('#text-error-password').text('* password tidak sama dengan ulang password');
                    $('#text-error-password').css({"font-style" : "italic"});
                    $('#text-error-password').css({"color" : "red"});
                }else{
                    $('#password').css({"border-color" : "#dee2e6"});
                    $('#text-error-password').hide();
                }
            }
            if($('#ulang_password').val().length == 0){
                $('#ulang_password').css({"border-color" : "red"});
                $('#text-error-ulang_password').text('* Silahkan isi ulang_password terlebih dahulu');
                $('#text-error-ulang_password').css({"font-style" : "italic"});
                $('#text-error-ulang_password').css({"color" : "red"});
            }else{
                $('#ulang_password').css({"border-color" : "#dee2e6"});
                $('#text-error-ulang_password').hide();
            }
           
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
<?php include('footer.php'); ?>
