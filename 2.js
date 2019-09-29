// start method
function validationForm(username,password){
    // username
    // panjangnya harus tepat 6 karakter
    if ( username.length == 6 ) {
        // true
        // username kombiasi huruf besar dan kecil
        // regex
        let bkRegex = /([A-Z][a-z])/;
        if ( !username.match(bkRegex) ) {
            // pesan error
            let bkMsg = "username harus kombinasi huruf besar dan huruf kecil";
            alert(bkMsg);
            console.log(bkMsg);
        }
        // username tidak boleh mengandung angka dan karakter spesial
        // regex angka dan karkter spesial
        let acRegex = /[0-9|~`!@#$%^&*()_+-=\/?.,<>]/;
        if ( username.match(acRegex) ){
            // pesan error
            let angkChar = "username tidak boleh mengandung angka dan karakter spesial";
            alert(angkChar);
            console.log(angkChar);
        }
    } else {
        // false
        let sixKarakter = "username harus memiliki panjang 6 karakter"
        alert(sixKarakter);
        console.log(sixKarakter);
    }

    // password
    // panjang password adalah 5-10
    if ( password.length < 5 || password.length > 10 ){
        // false
        let pwLen = "panjang password adalah 5 sampai 10 karakter";
        alert(pwLen);
        console.log(pwLen);
    } else{
        // true
        // password harus diawali dengan angka 7
        if ( password[0] != '7'){
            let fSeven = "password harus diawali dengan angka 7";
            alert(fSeven);
            console.log(fSeven);
        } else{
            // jika ada '7' diawal password, true
            // password harus kombinasi huruf kecil, huruf besar minimal 1 karakter, angka minimal 1 karakter
            // regex
            let comRegex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]/;
            if ( !password.match(comRegex) ){
                let comMsg = "password harus kombinasi huruf kecil, huruf besar dan angka";
                alert(comMsg);
                console.log(comMsg);
            } else{
                // jika lolos, cek
                // karakter spesial minimal 1 karakter
                if ( !password.match(/[|~`!@#$%^&*()_+?.,<=>-]/) ){
                    let charPwMsg = "password harus mengandung minimal 1 karakter spesial";
                    alert(charPwMsg);
                    console.log(charPwMsg);
                }
            }
        }
    }
    // kembalikan nilai lolos atau tidaknya
    return console.log('username: '+username+' pasword: '+password);
}// end method

// jalakna fungsi, berikan argument berupa username dan password
validationForm('adAmCn', '7Ark@demi');