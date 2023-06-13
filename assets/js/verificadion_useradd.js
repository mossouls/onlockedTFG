function validarCampos() {
    // Todas las verificaciones que no se encuentran en este js están realizadas con HTML, limitando los inputs
    var nif_cif = document.forms["signin_form"]["nif_cif"].value;
    var nombre = document.forms["signin_form"]["nombre"].value;
    var apellidos = document.forms["signin_form"]["apellidos"].value;
    var email = document.forms["signin_form"]["email"].value;
    var password = document.forms["signin_form"]["password"].value;
    var password2 = document.forms["signin_form"]["password2"].value;

    if ((nif_cif == "") || (!validarNifCif(nif_cif))) {
        alert("Please enter a valid NIF/CIF.");
        return false;
    }

    if (nombre == "") {
        alert("Please enter your name.");
        return false;
    }

    if ((typeof apellidos !== 'undefined') && (apellidos == "")) {
        alert("Please enter your surname.");
        return false;
    }

    if ((password2 == "") || (password !== password2)) {
        alert("Passwords do not match.");
        return false;
    }

    return true;

    function validarNifCif(nif_cif) {
        var numero
        var letr
        var letra
        var expresion_regular_dni
       
        expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
       
        if(expresion_regular_dni.test (nif_cif) == true){
           numero = nif_cif.substr(0,nif_cif.length-1);
           letr = nif_cif.substr(nif_cif.length-1,1);
           numero = numero % 23;
           letra='TRWAGMYFPDXBNJZSQVHLCKET';
           letra=letra.substring(numero,numero+1);
          if (letra!=letr.toUpperCase()) {
             alert('Please, enter a valid NIF letter');
           }
        }else{
           alert('Please, enter a valid NIF format');
         }
    }
}