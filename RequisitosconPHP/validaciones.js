function validar(){

    let nameUser = document.getElementById("nameUser").value;
    if (nameUser == "" || !nameUser.length || nameUser.length <= 6){
        alert("Ingrese el NOMBRE CORRECTAMENTE");
        return false;
    }
    let mailUser = document.getElementById("mailUser").value;
    if (mailUser == "" || !mailUser.length || mailUser.length <= 6){
        alert("Ingrese el NOMBRE CORRECTAMENTE");
        return false;
    }
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(mailUser) ){
        alert('Error: La dirección de correo ' + mailUser + ' no es valida.');
        return false;
    }
    let idUser = document.getElementById("idUser").value;
    if (idUser == "" || isNaN(parseInt(idUser, 10))){
        alert("Ingrese el campo con el numero del Documento correctamente");
        return false;
    }
    let password =  document.getElementById("password").value;
    if (password == "" || !password.length || password<=6){
        alert("Ingrese correctamente el campo contraseña")
        return false;
    }
}

