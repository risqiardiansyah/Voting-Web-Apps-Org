<!DOCTYPE html>
<html lang="en">
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
    <script src="<?= base_url() ?>public/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script src="<?= base_url() ?>public/js/bootstrap/bootstrap.min.js" ></script>
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
    <title>Pemilihan Komandan Batalyon - PKS Batalyon GanaBalinAdibrata 1701 SMKN 1 Bawang</title>
</head>
<body>

<div class="jumbotron maroon text-center text-white">
    <img src="<?= base_url() ?>public/img/logo/smk.png" alt="smk" width="100px;">
    <img src="<?= base_url() ?>public/img/logo/logo_pks.png" alt="pks" width="70px;">
    <h4 class="text-center">Pemilihan Komandan Batalyon</h4>
    <h5>PKS GanaBalinAdibrata 1701</h5>
</div>

<div class="container"><h2 class="display-5">Silahkan Pilih Salah Satu Kandidat..</h2>
    <div class="row">
        <?php $no = 1 ?>
        <?php foreach ($calon as $c) { ?>
        <div class="col-12 col-lg-4 col-md-4 col-sm-12 mt-2 mb-5">
            <div class="card">
            <div class="media">
            <h4><span class="badge badge-warning"><?= $no++ ?></span></h4>
            </div>
                <img src="<?= base_url() ?>public/img/calon/<?= $c->foto; ?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title"><strong><?= $c->nama; ?></strong></h4>
                    <p><?= $c->kelas; ?></p>
                </div>
                <!-- <div class="card-body text-center">
                    <button class="card-link btn btn-success" data-toggle="modal" data-target="#modal-pilih" id="pilih">pilih</button>
                </div> -->
                <div class="btn btn-success btn-md btn-flat" data-toggle="modal" data-target="#modal-pilih<?= $c->id_calon ?>"> 
                  Pilih
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>
    
    <?php foreach ($calon as $l) { ?>
    <div class="modal fade" id="modal-pilih<?= $l->id_calon; ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
        <input type="text" name="id_calon" hidden value="<?= $l->id_calon ?>">
            <h4 class="modal-title">Konfirmasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Yakin Ingin Memilih <?= $l->nama ?>??</p>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" name="btn-pilih" id="button-pilih"
            onclick="pilih_calon(<?= $l->id_calon; ?>)">Pilih</button>
        </div>
        </div>
    </div>
    </div>
    <?php } ?>
    
