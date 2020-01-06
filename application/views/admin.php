<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hasil Pemilihan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="<?php echo base_url()?>public/img/logo/logo_pks.png">
  
  <script src="<?= base_url() ?>public/admin/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= base_url() ?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/morris/css/morris.css">

  <style type="text/css">
    .cardlink{
      color: black;
    }
    .cardlink:hover{
      color: blue;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="content-wrapper">
  <section class="content-header">
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Diagram Hasil Pemilihan</h3>
            </div>
            <div class="card-body">
              <div id="graph" style="height: 370px; width: 100%"></div>
              <br>
                <h3>Jumlah Pemilih : <?= count($all) ?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>

<script src="<?= base_url() ?>public/admin/morris/css/canvasjs.min.js"></script>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("graph", {
  animationEnabled: true,
  title: {
    text: "Data Sementara Hasil Perhitungan"
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0 Pemilih",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo $sa ?>
  }]
});
chart.render();
 
}
</script>
</body>
</html>