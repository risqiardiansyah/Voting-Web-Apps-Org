<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"
    />
    <!-- my styles -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/data_diri.css"
    />
    <!-- sweetalert -->
    <link
        rel="stylesheet"
        href="<?= base_url() ?>public/css/sweetalert2/sweetalert2.min.css"
    />
    <!-- icon -->
    <link 
			rel="shortcut icon" 
			href="<?= base_url() ?>public/img/logo/logo_pks.png"
		/>
    <style>
        .maroon {
            background-color:maroon;
            
        }
        .bd-maroon {
            border-color:maroon;
        }
        .text-maroon{
            color:maroon;
        }
        .btn-maroon{
            background-color:maroon;
            color:white;
        }
    </style>
    <title>Pemilihan Komandan Batalyon - PKS GanaBalinAdibrata 1701 SMKN 1 Bawang</title>
</head>
<body>
<div class="jumbotron maroon text-center text-white">
    <img src="<?= base_url() ?>public/img/logo/smk.png" alt="smk" width="100px;">
    <img src="<?= base_url() ?>public/img/logo/logo_pks.png" alt="pks" width="70px;">
    <h4 class="text-center">Pemilihan Komandan Batalyon</h4>
</div>

<div class="container">
<div class="container-fluid">
    <div class="col col-lg-12 col-sm-12">
        <div class="card bd-maroon mb-3 mt-4 text-center">
            <div class="card-header maroon text-white">PKS Batalyon GanaBalinAdibrata 1701 <br> SMKN 1 Bawang</div>
            <div class="card-body text-maroon">
                <h5 class="card-title">Pemilihan Komandan Batalyon</h5>
                <p class="card-text">Klik tombol dibawah ini untuk menggunakan hak pilih Anda.</p>
                <a href="<?= base_url() ?>home/memilih" class="btn btn-maroon">Memilih</a>
            </div>
        </div>
    </div>
</div>
</div>

    <!-- <script src="<?= base_url() ?>public/js/fontawesome/fontawesome.js"></script> -->
    <script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script src="<?= base_url() ?>public/js/bootstrap/bootstrap.min.js" ></script>
</body>
</html>