<?php
// koneksi ke database
$konek = mysqli_connect('localhost','root','','arkademy_batch_12_5');

// fungsi query
function query($query){
    // global koneksi
    global $konek;
    // result adalah query ke paramter yang diberikan
    $result = mysqli_query($konek, $query);
    //  array untuk menampung data
    $rows = [];
    // buat perulangan sebanyak data yang ada didatabase
    // ambil semua data dari hasil query di $result berdasarkan baris nya
    while ($row = mysqli_fetch_assoc($result)){
        // masukan setiap baris dari $row ke array $rows
        $rows[] = $row;
    }
    // kembalikan nilai $rows
    // ps: tanpa $rows dan $row sebenarnya bisa langsung return ke $result, hanya saja agar bisa dilihat data apa saja yang didapat ketika menjalankan query
    return $rows;
}

// fungsi tambah
function tambah($data){
    // globalkan koneksi
    global $konek;
    // simpan data
    $name = $data['name'];
    $work = $data['work'];
    $salary = $data['salary'];

    // $last_id = mysqli_insert_id($conn)

    // $salary_last_id = query("SELECT max(id) FROM salary");
    // $work_last_id = query("SELECT max(id) FROM work");

    // saipkan query
    // $sql = "INSERT INTO salary VALUES ('','$salary')";
    // $sql .= "INSERT INTO work VALUES ('','$work', SELECT MAX(id) FROM salary)";
    // $sql .= "INSERT INTO name VALUES ('','$name', SELECT MAX(id) FROM work, SELECT MAX(id) FROM salary)";
    $query1 = "INSERT INTO salary VALUES ('','$salary')";
    $query2 = "SELECT LAST_INSERT_ID() INTO @salary_id";
    $query3 = "INSERT INTO work VALUES ('','$work', @salary_id)";
    $query4 = "SELECT LAST_INSERT_ID() INTO @work_id";
    $query5 = "INSERT INTO name VALUES ('','$name', @work_id, @salary_id)";
    
    // insert ke database
    // mysqli_multi_query($konek, $sql);
    mysqli_query($konek, $query1);
    mysqli_query($konek, $query2);
    mysqli_query($konek, $query3);
    mysqli_query($konek, $query4);
    mysqli_query($konek, $query5);
    
    return mysqli_affected_rows($konek);

}

// method hapus
function hapus($id){
    // 
    global $konek;
    //
    mysqli_query($konek, "DELETE FROM salary WHERE id = $id");
    // 
    return mysqli_affected_rows($konek);
}

// edit method
function edit($id){
    
}