
console.log("holaaa");

var personasRegistradas = [];
var user= {

first_name: "",
 last_name: "",
 telefono: "",
email: "",
password: "",
password_confirmation : ""
};

/*$(function() {



})*/

var registrar_persona = function(){
    
    
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var password_confirmation = document.getElementById("password_confirmation").value;

  

    var usuario = document.getElementById("email").value;
    
 
    if(password != password_confirmation  ){
       
        alert("LAS CONTRASEÑA DEBEN DE SER IGUALES");
       
       } else {
    
    saveToLocalStorage( first_name,last_name,telefono,email,password,password_confirmation);

     
    }
};




var users = JSON.parse(localStorage.getItem('users'));

if (!users) {
	users = [];
}


function saveToLocalStorage( first_name,last_name,telefono,email,password,password_confirmation) {
    
                
    
    var user = {
	
        
  "first_name": first_name,
  "last_name": last_name,
  "telefono": telefono,
  "email": email,
  "password":  password,
  "password_confirmation":  password_confirmation
	};
    
	users.push(user);

	localStorage.setItem('users', JSON.stringify(users));
    
          alert('USUARIO AGREGADO' );
       
	
    
}





var validar = function() {

      console.log("hola validar");
    var contra = document.getElementById("passwordLogin").value;


    var emailLogin = document.getElementById("emailLogin").value;
    
    
   

    if (document.getElementById("emailLogin").value == 0) {
        arlet("Nombre requerido");
    } else if (document.getElementById("passwordLogin").value == 0) {
        arlet("Contraseña requerida");

    } else if (verificacionLogin(emailLogin, contra) == 'n') {
       arlet("El nombre de emailLogin o contraseña son incorrectos");
    } else {
            saveToLocalStoragelogueados(emailLogin);
        window.open("file:///C:/Users/mariv/Documents/GitHub/mypetscr/parte4/perfil.html");
       
    }

};

function getPersonasRegistradas() {
    var user = localStorage.getItem('users');
    
        personasRegistradas = JSON.parse(user);

 
    return personasRegistradas;

}

function verificacionLogin(emailLogin, contra) {
    var emailLogin = emailLogin;
    var contra = contra;
    var existe = 'n';

      console.log("verificacionLogin" + contra + emailLogin +existe);

    var lista = getPersonasRegistradas();
    

    for (var i = 0; i < lista.length; i++) {
        var nombre = lista[i].first_name;
        var apellido = lista[i].last_name;
        var telefono = lista[i].telefono;
        var correo = lista[i].email;
        var password_confirmation = lista[i].password_confirmation;
        var passw = lista[i].password;




        var user = {

            first_name: nombre,
            last_name: apellido,
            telefono: telefono,
            email:correo,
            password_confirmation: password_confirmation,
            password: passw
        };



        if (correo == emailLogin && passw == contra) {
            existe = 's';
            //personaLogueadaInformacion.push(persona);
            return existe;
        } else {
            existe = 'n';
        }
    }
    return existe;
}







var logueados = JSON.parse(localStorage.getItem('logueados'));

if (!logueados) {
	logueados = [];
}




function saveToLocalStoragelogueados( emailLogin) {
    
var logueado ={
    "emailLogin": emailLogin         
};
    console.log("logueado + logueado");
   logueados.push(logueado);
   localStorage.setItem('logueados', JSON.stringify(logueados)); 
    
    
}







function eliminar_usuario(){
    
        var usuario = document.getElementById("usuario").value;
    
     var lista = getPersonasRegistradas();
    
    console.log("lista vieja" + lista);
    
    
    
    var item = lista.indexOf(usuario);
    lista.splice(item, 1);
    
    
    console.log("lista nueva" + lista);
    
    
}




