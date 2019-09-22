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
                <form action="process_contact/<?php echo $id; ?>" method="POST">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input name="phone" class="form-control form-control-lg" placeholder="Masukkan no.telp anda..." type="tel">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control form-control-lg" cols="30" rows="10"></textarea>
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