<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#81219c;">
            <div class="container">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Data Tugas</a>
                </div>
            </div>
        </div>
        </nav>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="text text-center">Data Tugas</h4>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <td>NIM</td>
                            <td>Nama Mahasiswa</td>
                            <td>Tugas</td>
                            <td>File</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($tugas as $k) {?>
                        <tr>
                            <td><?= $k->nim ?></td>
                            <td><?= $k->fullname ?></td>
                            <td><?= $k->subjek ?></td>
                            <td><?= $k->files ?></td>
                        </tr>
                    <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        // new DataTable('#example');
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
        </script>
</body>
</html>