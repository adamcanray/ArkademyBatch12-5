// membuat method yang menerima paramter berupa array, yang mana method ini akan menentukan bilangan terbesar ke-3
// jika paramter bukan array, maka print "Parameter should be an array!"
// jika array yang dimasukan panjangnya kurang dari 3, maka print "Minimal array length is 3!"
// method harus menghadle kemungkinan didalam array ada tipe data lain (seperti string, char, bool, dll)

// start method
function thirdHighest(array){
    let result = '';
    // jika yang diinput itu bukan array
    if ( Array.isArray(array) === false){
        // maka print "Parameter should be an array!"
        result = 'Parameter should be an array!';
    } else {
    // else (berarti yang diinput adalah array)
        // cek jika array panjangnya kurang dari 3
        if ( array.length < 3 ){
            // maka print "Minimal array length is 3!"
            result = 'Minimal array length is 3!';
        }
    }
    // array untuk menyimpan angka
    let arrAngka = [];
    // looping menurut panjang array
    for ( var a = 0; a < array.length; a++ ){
        // hilangkan tipe data lain, ambil hanya angka pada array
        if ( typeof array[a] === 'number' ){
            arrAngka.push(array[a]);
        }
    }
    // sort arrAngka menurut angka terbesar
    arrAngka.sort(function(a,b){
        return b-a;
    });
    // keluarkan array index ke-2 (ketiga terbesar)
    result = arrAngka[2];

    // return result
    return console.log(result);
}// end method

// jalankan method
thirdHighest(['adam', true, 10, 30, 'c', 50, 100]);