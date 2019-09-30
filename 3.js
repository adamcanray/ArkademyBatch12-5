// membuat method yang menerima parameter berupa string
    // cek jika string tersebut mengandung angka, maka urutkan dan keluarkan angka tersebut
    // jika tidak ada angka, maka keluarkan "No number found in parameter!"

// start method
function sortNumber(string){
    // untuk menyimpan angka yang ada di dalam string
    let angka = '';
    // string to array
    let strToArray = string.split('');
    // looping array, mencari angka
    for ( var a = 0; a < strToArray.length; a++ ){
        // cek jika index ke-a adalah angka
        if ( strToArray[a].match(/[0-9]/) ){
            // maka simpan angka tersebut ke dalah var result
            angka += strToArray[a];
        } 
    }
    // untuk hasil
    let result = '';
    // sort angka dari terkecil keterbesar
    let sortResult = angka.split('').sort();
    // tambahkan semua angka yang sudah di sort ke var result
    for ( var b = 0; b < sortResult.length; b++ ) {
        result += sortResult[b];
    }
    // jika result kosong / tidak ada angka yang diisi
    if ( angka === '' ){
        // maka isi result dengan pesan kesalahan
        result = 'No number found in parameter!';
    }
    // kembalikan nilai
    return console.log(result);
}// end method

// jalankan method
sortNumber('11adamcanray09');