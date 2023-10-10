<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <title><?= $title ?></title>
</head>
<body>
    <div class="container">
        <!-- <div class="card-header">
            <h3 class="text-center">Form Upload</h3>
        </div> -->
        <div class="col-sm-12">
          <div class="card" style="width: auto;">
            <div class="card-body">
              <h3 class="card-title text-center">Upload File</h3>
              <p class="card-text text-center">Silahkan upload file disini</p>
              <?= $this->session->flashdata('Msg') ?>
            </div>
            <div class="dropzone">
              <div class="dz-message">
              <h3>klik file disini</h3>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
      Dropzone.autoDiscover = false;
      var file_upload = new Dropzone('.dropzone',{
          url:"<?= base_url('mahasiswa/upload/proses') ?>",
          method:"post",
          paramName:"userFile",
          maxFiles:5,
      });
    </script>

</body>
</html>