<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
    <link href="<?php echo base_url("assets/open-iconic/font/css/open-iconic-bootstrap.css")?>" rel="stylesheet">
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url("assets/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  
    <title>Profilku - New User</title>
  </head>
  <body>
    <div class="container-fluid h-100">
        <div class="px-3 py-3 pt-md-5 pb-md-4 mt-5 mx-auto text-center">
            <h3>Hai, terimakasih telah menggunakan layanan Profilku.</h3>
        </div>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <form action="process_name" method="POST">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="name" class="form-control form-control-lg" placeholder="Masukkan nama anda..." type="text">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" class="form-control form-control-lg" placeholder="Masukkan email anda..." type="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" class="form-control form-control-lg" placeholder="Masukkan password anda..." type="password">
                    </div>
                    <div class="float-right mt-3">
                        <button class="btn btn-info btn-lg"><ion-icon name="arrow-round-forward"></ion-icon></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>