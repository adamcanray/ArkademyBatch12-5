<?php
// koneksi ke database
$konek = mysqli_connect('localhost', 'root', '', 'arkademy_batch_12_5');

// fungsi query
function query($query)
{
    // global koneksi
    global $konek;
    // result adalah query ke paramter yang diberikan
    $result = mysqli_query($konek, $query);
    //  array untuk menampung data
    $rows = [];
    // buat perulangan sebanyak data yang ada didatabase
    // ambil semua data dari hasil query di $result berdasarkan baris nya
    while ($row = mysqli_fetch_assoc($result)) {
        // masukan setiap baris dari $row ke array $rows
        $rows[] = $row;
    }
    // kembalikan nilai $rows
    // ps: tanpa $rows dan $row sebenarnya bisa langsung return ke $result, hanya saja agar bisa dilihat data apa saja yang didapat ketika menjalankan query
    return $rows;
}

// fungsi tambah
function tambah($data)
{
    // 
    global $konek;

    // siapkan data
    $name = $data['name'];
    $work = $data['work'];
    $id_salary = $data['salary'];

    // insert ke database
    query("INSERT INTO name VALUES ('','$name','$work','$id_salary')");

    return mysqli_affected_rows($konek);
}

// fungsi hapus
function hapus($id)
{
    // 
    global $konek;

    // dalete data
    query("DELETE FROM name WHERE id = $id");

    return mysqli_affected_rows($konek);
}

// fungsi ubah
function ubah($data)
{
    // globalkan $konek
    global $konek;
    // siapkan data
    $id = $data['id'];
    $name = $data['name'];
    $work = $data['work'];
    $salary = $data['salary'];
    // query ke database
    // contoh:
    // UPDATE name SET name = 'canray', id_work = 1, id_salary = 1 WHERE id = 90
    query("UPDATE name SET name.name = '$name', name.id_work = $work, name.id_salary = $salary WHERE id = $id");
    // kembalikan nilai
    return mysqli_affected_rows($konek);
}
