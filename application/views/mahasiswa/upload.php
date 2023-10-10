<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <title>Transfer File</title>
  </head>
  <body>
  <div class="container" >
    <div class="card">
        <div class="card-header">
          <h3 class="text-center">Transfer File</h3>
        </div>
        <div class="card-body">
        <?= $this->session->flashdata('Msg') ?>
            <div class="content">
                <form action="<?= base_url('mahasiswa/upload/proses') ?>" class="dropzone" >
                <input class="form-control mb-3" type="text" name="nim" id="nim" placeholder="Masukkan NIM (Ex. 20900xxx)" required>
                <input class="form-control mb-3" type="text" name="fullname" id="fullname" placeholder="Masukkan Nama Lengkap (Ex. Jhon Watson)" required>
                <input class="form-control" type="text" name="subject" id="subject" placeholder="Masukkan Judul Tugas (Ex. Tugas 1)" required>
                </form> 
            </div>
            <input class="btn btn-block btn-outline-info" type="button" id='uploadfiles' value='Upload Files' >
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script>
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", { 
        autoProcessQueue: false,
        method:"post",
        paramName:"userFile",
        // maxFiles:5
        parallelUploads: 10, // Number of files process at a time (default 2)
        addRemoveLinks: true
        });

        $('#uploadfiles').click(function(){
        myDropzone.processQueue();
        window.location.href = "<?= base_url('mahasiswa/multiupload') ?>"
        });
    </script>

  </body>
</html>