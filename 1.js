// start method
function biodata() {
    // siapkan variabel
    var name = "Muhammad Adam Canrayneldy";
    var age = 18;
    var address = "Kp.Cikoneng Girang RT 01/RW 05, Kel.Manis Jaya, Kec.Jatiuwung, Kota Tangerang, Banten.";
    var hobbies = ['learn something new','coding','futsal','traveling'];
    var is_married = false;
    var list_school = {
        name : {
            'SD Negeri Jatake 4' : {
                year_in : 2007,
                year_out : 2013,
                major : null
            },
            'SMP Negeri 6 Kota Tangerang' : {
                year_in : 2013,
                year_out : 2016,
                major : null
            },
            'SMK Negeri 1 Kota Tangerang' : {
                year_in : 2016,
                year_out : 2019,
                major : 'Multimedia'
            }
        }
    };
    var skills = {
        skill_name : {
            photoshop : { level : 'advanced' },
            illustrator : { level : 'beginner' },
            javascript : { level : 'advanced' },
            php : { level : 'advanced' },
            css : { level : 'advanced' },
            html : {level : 'advenced'},
        }
    };
    var interest_in_coding = true;
    
    // variabel hasil
    let result = {name, age, address, hobbies, is_married, list_school, skills, interest_in_coding};
    let json_result = JSON.stringify(result);

    // return hasil
    return console.log(json_result);
}// end method

// jalankan function
biodata();