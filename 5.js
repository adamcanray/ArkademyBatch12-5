// buat method yang menghitung berapa banyak karakter(parameter 2) di dalam string(parameter 1)

// start method
function countChar(string,char){
    // var menyimpan berapa banyak karakter
    let charFound = '';
    // 
    let strToArray = string.split('');
    // buat var regex, method RegExp (Regex Expression) bisa berfungsi untuk menggabungkan regex dengan variabel
    // contoh: let reg = new RegExp(char); <--- sama aja kaya nulis let reg = /a/; jika isi char adalah 'a'
    let reg = new RegExp(char);
    // looping
    for ( var a = 0; a < strToArray.length; a++ ) {
        // 
        if ( strToArray[a].match(reg) ){
            charFound += strToArray[a];
        }
    }
    
    // result
    let result = '';
    // jika charFound panjangnya itu '0' atau tidakada char tersebut pada string
    if ( charFound.length === 0 ){
        // maka keluarkan pesan kesalahan
        result = "Not Found!";
    } else{
        // jika charFount berisi
        result = charFound.length;
    }


    // kembalikan nilai
    return console.log(result);
}// end method

// jalankan method
countChar("arkademy","a");