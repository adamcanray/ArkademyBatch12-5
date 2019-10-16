<?php
// 
require 'functions.php';
// tampilkan data ke tabel, jalankan fungsi
$data = query("SELECT name.id, name.name, name.id_salary, work.name as work, salary FROM name INNER JOIN work ON name.id_work = work.id INNER JOIN salary ON name.id_salary = salary.id ORDER BY name.id DESC");
// query data tabel work dan salary
$data_work = query("SELECT * FROM work");
$data_salary = query("SELECT * FROM salary");

// ambil id di url untuk modal edit
$edit_id = $_GET['id'];
// query untuk form edit
$data_edit = query("SELECT * FROM name WHERE id = '$edit_id'");

// var_dump($data_edit);

// jika button add ditekan
if (isset($_POST['btn-add'])) {

    // jalankan fungsi tambah dan cek apakah yang dikembalikan fungsi tambah itu lebih dari 0(berarti berhasil)
    if (tambah($_POST) > 0) {
        // berhasil
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        // gagal
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
            </script>     
        ";
    }
}
// jika button edit ditekan
if (isset($_POST['btn-edit'])) {

    // jalankan fungsi tambah dan cek apakah yang dikembalikan fungsi tambah itu lebih dari 0(berarti berhasil)
    if (ubah($_POST) > 0) {
        // berhasil
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        // gagal
        echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
            </script>     
        ";
    }
}

// var_dump($_POST);

// ambil url
// $url = "$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI]";
// // jadikan url menjadi array assoc
// $parse = parse_url($url);
// // ini url tanpa parameter yang sudah menjadi sebuah string
// $header_loc = $parse['path'];
// // 
// // dengan php gunakan header("Location: $header_loc"); -- untuk mengarahkan url kesitu
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
                                <a class="" href="hapus.php?id=<?= $row['id'] ?>">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn" data-toggle="modal" data-target="#modalDelete">
                                        <img src="assets/img/trash_icon.png" alt="trash">
                                    </button>
                                </a>
                                <a class="" href="index.php?id=<?= $row['id'] ?>">
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
                        <!-- ambil data work dan salary dari database langsung -->

                        <div class="form-group mt-5">
                            <div class="select-side" id="click-me"></div>
                            <select name="work" class="form-control form-control-lg black-border placeholder appearance-none" id="sel1">
                                <?php foreach ($data_work as $row) : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mt-5">
                            <div class="select-side"></div>
                            <select name="salary" class="form-control form-control-lg black-border placeholder appearance-none" id="sel2">
                                <?php foreach ($data_salary as $row) : ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['salary'] ?></option>
                                <?php endforeach; ?>
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
    <!-- end modal ADD -->

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
                        <h5 class="modal-title" id="exampleModalCenterTitle">ADD DATA</h5>
                    </div>
                    <div class="col-md pr-2" style="background:;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.location.href='index.php';">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            <img src="assets/img/close_button.png" alt="close" width="25">
                        </button>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="modal-body modal-body-padding">
                    <!-- input form -->
                    <form action="" method="post">
                        <?php foreach ($data_edit as $row) : ?>
                            <div class="form-group">
                                <input name="id" class="form-control form-control-lg black-border placeholder" type="hidden" value="<?= $row['id'] ?>">
                            </div>
                            <div class=" form-group">
                                <input name="name" class="form-control form-control-lg black-border placeholder" type="text" placeholder="Name .." value="<?= $row['name']; ?>">
                            </div>
                        <?php endforeach; ?>
                        <div class="form-group mt-5">
                            <div class="select-side" id="click-me"></div>
                            <select name="work" class="form-control form-control-lg black-border placeholder appearance-none" id="sel1">
                                <?php foreach ($data_work as $row_work) : ?>
                                    <?php foreach ($data_edit as $row_edit) : ?>
                                        <!-- cek jika id_work dari tabel name dengan id tabel work itu sama -->
                                        <?php if ($row_work['id'] === $row_edit['id_work']) { ?>
                                            <!-- maka selected -->
                                            <option selected value="<?= $row_work['id'] ?>"><?= $row_work['name']; ?></option>
                                        <?php } else { ?>
                                            <!-- jika tidak, tampilkan saja agar bisa dipilih -->
                                            <option value="<?= $row_work['id'] ?>"><?= $row_work['name']; ?></option>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mt-5">
                            <div class="select-side"></div>
                            <select name="salary" class="form-control form-control-lg black-border placeholder appearance-none" id="sel2">
                                <?php foreach ($data_edit as $row_edit) : ?>
                                    <?php foreach ($data_salary as $row_salary) : ?>
                                        <!-- jika id_salary dari tabel name dengan id pada tabel salary itu sama -->
                                        <?php if ($row_salary['id'] === $row_edit['id_salary']) { ?>
                                            <!-- maka selected -->
                                            <option selected value="<?= $row_salary['id']; ?>"><?= $row_salary['salary'] ?></option>
                                        <?php } else { ?>
                                            <!-- jika tidak, tampilkan saja agar bisa dipilih -->
                                            <option value="<?= $row_salary['id']; ?>"><?= $row_salary['salary'] ?></option>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                </div>
                <div class="modal-footer no-border pr-5 pb-4">
                    <button type="submit" class="btn-add" name="btn-edit">EDIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal EDIT -->

    <!-- js online -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- self js -->
    <script>
        // jika ada id yang dikirimkan pada halaman index
        if (<?= $edit_id; ?> > 0) {
            // maka tampilkan modal edit
            $('#modalEdit').modal('show');

        } else {
            // jika tidak maka hidden modal edit
            $('#modalEdit').modal('hide');

        }
    </script>

</body>

</html>