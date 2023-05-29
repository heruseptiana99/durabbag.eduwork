<?php include('header.php'); ?>
    <div class="container mt-2">
        <div class="row">
            <div class="col text-center align-self-center">
                <img src="../assets/image/tampilan/bag2.png" width="600px">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>MASUK | DURABBAG</h4>
                        </div>
                        <form action="../model/masuk_model.php" method="POST" id="form-pelanggan">
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
                            <small for="">Belum punya akun? <a href="daftar.php">Klik disini!</a></small>
                        </div>
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-dark">MASUK</button>
                        </div>
                        </form>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#password').val().length == 0 || $('#email').val().length == 0) {
            if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi email terlebih dahulu');
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
                    $('#password').css({"border-color" : "#dee2e6"});
                    $('#text-error-password').hide();
            }
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
<?php include('footer.php'); ?>
