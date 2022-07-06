$(document).ready(function() {
    // $('.js-example-basic-single').select2({ dropdownCssClass: "bigdrop" });
    $('.js-example-basic-single').select2();
});


enviando = false; //Obligaremos a entrar el if en el primer submit
function checkSubmit() {
    if (!enviando) {
        enviando= true;
        return true;
    } else {
        return false;
    }
}

function format(input){
    var num = input.value.replace(/\./g,'');
    if(!isNaN(num)){
        if(num == ''){

        }else{
            num = parseInt(num);
            num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            num = num.split('').reverse().join('').replace(/^[\.]/,'');
            input.value = num;
        }

    }
    else{
        input.value = input.value.replace(/[^\d\.]*/g,'');
    }
}


