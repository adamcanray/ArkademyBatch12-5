<?php
// 
require 'functions.php';
// jalankan fungsi
$data = query("SELECT name.name, name.id_salary, work.name as work, salary FROM name INNER JOIN work ON name.id_work = work.id INNER JOIN salary ON name.id_salary = salary.id ORDER BY name.id_salary DESC");
// var_dump($data);


var_dump($data_edit);

// jika btn-add ditekan
if ( isset($_POST["btn-add"]) ) {
    // 
    // echo "
    //     <script>
    //         alert('ok!');
    //     </script>
    // ";

    // cek apakah data telah di tambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                // alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                // alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
// var_dump($_POST);
// echo mysqli_last_id($konek);

// ambil data yang dikirim lewat $_GET dari hapus.php
$showmdd = $_GET['showmdd'];
// var_dump($showmd); 

$showmde = $_GET['id'];
var_dump($showmde);

// data edit
$data_edit = query("SELECT name.name, name.id_salary, work.name as work, salary FROM name INNER JOIN work ON name.id_work = work.id INNER JOIN salary ON name.id_salary = salary.id WHERE name.id_salary = '$showmde' ");


?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- self css -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css">
</head>
<body>

<!-- menu -->
<nav class="menu navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo_arkademy.png" alt="logo" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link logo-text" href="#">ARKADEMY BOOTCAMP <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- container body -->
<div class="container">
    <!-- button add -->
    <div class="row mt-5" style="background:;">
        <div class="col-md text-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn-add" data-toggle="modal" data-target="#modalAdd">
                ADD
            </button>
        </div>
    </div>
    <!-- tabel -->
    <div class="row mt-5 mb-5">
        <div class="col-md">
            <table border="1" align="">
                <tr class="tb-head">
                    <th>Name</th>
                    <th>Work</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>

                <?php foreach ($data as $row) : ?>
                <tr class="tb-body">
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['work'] ?></td>
                    <td><?= $row['salary'] ?></td>
                    <td>
                        <a class="" href="hapus.php?id=<?= $row['id_salary'] ?>&name=<?= $row['name'] ?>">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#modalDelete">
                                <img src="assets/img/trash_icon.png" alt="trash">
                            </button>
                        </a>
                        <a class="" href="index.php?id=<?= $row['id_salary'] ?>">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#modalEdit">
                                <img src="assets/img/edit_icon.png" alt="edit">
                            </button>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div><!-- end container -->

<!-- MODALS -->

<!-- Modal ADD -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-radius">
    <div class="modal-header no-border">
        <!-- <div class="row"> -->
        <div class="col-md pl-4 pt-3" style="background:;">
            <h5 class="modal-title" id="exampleModalCenterTitle">ADD DATA</h5>
        </div>
        <div class="col-md pr-2" style="background:;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <!-- <span aria-hidden="true">&times;</span> -->
                <img src="assets/img/close_button.png" alt="close" width="25">
            </button>
        </div>
        <!-- </div> -->
    </div>
    <div class="modal-body modal-body-padding">
        <!-- input form -->
        <form action="" method="post">
            <div class="form-group">
                <input name="name" class="form-control form-control-lg black-border placeholder" type="text" placeholder="Name ..">
            </div>
            <div class="form-group mt-5">
                <div class="select-side" id="click-me">
                    <!-- <label for="sel1"> -->
                        <!-- <img src="assets/img/downwards-arrow-key.png" alt="arrow" width="30"> -->
                    <!-- </label> -->
                </div>
                <select name="work" class="form-control form-control-lg black-border placeholder appearance-none" id="sel1">
                    <option value="Frontend Dev">Frontend Dev</option>
                    <option value="Backend Dev">Backend Dev</option>
                    <option value="Database Dev">Database Dev</option>
                    <option value="IOS Dev">IOS Dev</option>
                    <option value="Android Dev">Android Dev</option>
                </select>
            </div>
            <div class="form-group mt-5">
                <div class="select-side"></div>
                <select name="salary" class="form-control form-control-lg black-border placeholder appearance-none" id="sel2">
                    <option value="Rp.8.000.000">Rp.8.000.000</option>                    
                    <option value="Rp.10.000.000">Rp.10.000.000</option>                    
                    <option value="Rp.12.000.000">Rp.12.000.000</option>                    
                    <option value="Rp.18.000.000">Rp.18.000.000</option>                    
                </select>
            </div>
    </div>
    <div class="modal-footer no-border pr-5 pb-4">
        <button type="submit" class="btn-add" name="btn-add">ADD</button>
        </form>
    </div>
    </div>
</div>
</div>
<!-- end moda ADD -->

<!-- modal DELETE -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalDelete">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-radius">
            <div class="modal-header no-border">
                <div class="col-md pr-2" style="background:;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/img/close_button.png" alt="close" width="25">
                    </button>
                </div>
            </div>
            <div class="modal-body text-center">
                <img src="assets/img/checked.png" alt="checked" width="110">
                <?php
                    $name = $_GET["name"];
                ?>
                <p class="placeholder mt-4 mb-5">Data <?= $name; ?> telah berhasil dihapus</p>
            </div>
        </div>
    </div>
</div>
<!-- end moda DELETE -->

<!-- Modal EDIT -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-radius">
    <div class="modal-header no-border">
        <!-- <div class="row"> -->
            <div class="col-md pl-4 pt-3" style="background:;">
                <h5 class="modal-title" id="exampleModalCenterTitle">EDIT DATA</h5>
            </div>
            <div class="col-md pr-2" style="background:;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                    <img src="assets/img/close_button.png" alt="close" width="25">
                </button>
            </div>
        <!-- </div> -->
    </div>
    <div class="modal-body modal-body-padding">
        <!-- input form -->
        <form action="" method="post">
            <?php foreach ( $data_edit as $row ) : ?>
                <div class="form-group">
                    <input name="name" class="form-control form-control-lg black-border placeholder" type="text" value="<?= $row['name'] ?>">
                </div>
                <div class="form-group mt-5">
                    <div class="select-side"></div>
                    <select name="work" class="form-control form-control-lg black-border placeholder appearance-none" id="sel1">
                        <option>Fronend Dev</option>
                        <option>Backend Dev</option>
                        <option>UX Designer</option>
                        <option>UI Designer</option>
                    </select>
                </div>
                <div class="form-group mt-5">
                    <div class="select-side">
                        <!-- <label for="sel2">
                            <img src="assets/img/downwards-arrow-key.png" alt="arrow" width="30">
                        </label> -->
                    </div>
                    <select name="salary" class="form-control form-control-lg black-border placeholder appearance-none" id="sel2">
                        <option selected>Rp.10.000.000</option>
                        <option>Rp.12.000.000</option>
                        <option>Rp.8.000.000</option>
                        <option>Rp.9.000.000</option>
                    </select>
                </div>
            <?php endforeach; ?>
    </div>
    <div class="modal-footer no-border pr-5 pb-4">
        <button type="submit" class="btn-add">EDIT</button>
        </form>
    </div>
    </div>
</div>
</div>
<!-- end moda EDIT -->

<!-- js online -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- self js -->
<script>
    // anythink
    // jika ada data yang dikitimkan lewat url
    if ( <?= $showmdd; ?> === 1 ){
        // 
        $('#modalDelete').modal('show')
    }
    
</script>

<script>
    // anythink
    // jika ada data yang dikitimkan lewat url
    if ( <?= $showmde; ?> > -1 ){
        // 
        $('#modalEdit').modal('show')
    }
    
</script>

</body>
</html>