var x = new Boolean(false);
$(document).ready(function () {
    saveCliente();
    sesionactive();
  });
  function sesionactive(){
    $.ajax({
      url: '/configuracion/getData',
      type: 'GET',
      success: function(e){
        
          
          //si no esta logeado enviar un mensaje que empieza con <
          if (e[0] == "<") {
            
            var x = false;
            console.log(x);
            console.log("No logeado"); 
          } 
          else{
            var x = true;
            console.log(x);
          }
      }   
  });
}

  function saveCliente(){
    if( x == false){
    $("#formRegistro").submit(function(e){
      e.preventDefault();
  
      let cli_nombre = $("#nombre").val();
      let cli_apellidos = $("#apellidos").val();
      let cli_clave = $("#clave").val();
      let cli_email = $("#email").val();
      let cli_telefono = $("#telefono").val();

      
      const data = {
        cli_nombre: cli_nombre,
        cli_apellidos: cli_apellidos,
        cli_email: cli_email,
        cli_clave: cli_clave,
        cli_telefono: cli_telefono,
        cli_estado: 1,
        cli_rol: 2,
        cli_verificado: 2,
      };
      console.log(data);
          if (cli_nombre == "" || cli_apellidos == "" || cli_email == "" || cli_clave == ""  || cli_telefono == ""){//si todos los campos estan en verde, se ejecuta la funcion savecliente
            swal({
              title: 'Complete los campos',//si hay como minimo un campo rojo (false) no se ejecute
              icon: "error",
            });
          }else{
            register(data);
          }
      });
    }
}

function register(data) {
  $.ajax ({
    url: "/cliente/createRegistro",
    data: data,
    type: "POST",
    success: function(e) {
      console.log(e);
      let json = JSON.parse(e);
      switch (json.STATUS) {
        case 1:
          swal({
            title: json.mensaje,
            icon: "success"
          }).then(()=>{
            window.location.href ="/"; 
          });     
          break;
        case 2:
          swal({
            title: json.mensaje,
            icon: "error",
          });
          break;
      }
    },
  });
}


//------------------------------------


// const formulario = document.getElementById('formRegistro'); 
// const inputs = document.querySelectorAll('#formRegistro input')
// const expresiones = {

// 	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, 
// 	password: /^.{4,12}$/, 
// 	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
// 	telefono: /^\d{7,14}$/ 
// }


// const campos = {
//   nombre: false,
//   telefono: false,
//   apellidos: false,
//   clave:false,
//   email:false
// }
// const validarform = (e) => {
//   if(e.target.name == 'nombre'){
//     if(expresiones.nombre.test(e.target.value)){
//       document.getElementById('nombre').classList.remove('is-invalid');
//       document.getElementById('nombre').classList.add('is-valid');
//       campos[nombre]=true;
//     }else{
//       document.getElementById('nombre').classList.add('is-invalid');
//       campos[nombre]=false;
//     }
//   }if(e.target.name == 'telefono'){
//     if(expresiones.telefono.test(e.target.value)){
//       document.getElementById('telefono').classList.remove('is-invalid');
//       document.getElementById('telefono').classList.add('is-valid');
//       campos[telefono]=true;
//     }else{
//       document.getElementById('telefono').classList.add('is-invalid');
//       campos[telefono]=false;
//     }
//   }if(e.target.name == 'apellidos'){
//     if(expresiones.nombre.test(e.target.value)){
//       document.getElementById('apellidos').classList.remove('is-invalid');
//       document.getElementById('apellidos').classList.add('is-valid');
//       campos[apellidos]=true;
//     }else{
//       document.getElementById('apellidos').classList.add('is-invalid');
//       campos[apellidos]=false;
//     }
//   }if(e.target.name == 'clave'){
//     if(expresiones.password.test(e.target.value)){
//       document.getElementById('clave').classList.remove('is-invalid');
//       document.getElementById('clave').classList.add('is-valid');
//       campos[clave]=true;
//     }else{
//       document.getElementById('clave').classList.add('is-invalid');
//       campos[clave]=false;
//     }
//   }if(e.target.name == 'email'){
//     if(expresiones.correo.test(e.target.value)){
//       document.getElementById('email').classList.remove('is-invalid');
//       document.getElementById('email').classList.add('is-valid');
//       campos[email]=true;
//     }else{
//       document.getElementById('email').classList.add('is-invalid');
//       campos[email]=false;
//     }
//   }

// }

// inputs.forEach((input) => {
//   input.addEventListener('keyup', validarform);
//   input.addEventListener('blur', validarform)
// });

// formulario.addEventListener('submit', (e) =>{
//   e.preventDefault();
//   if(campos.apellidos && campos.clave && campos.email && campos.nombre && campos.telefono){
//     campos.reset();
//     clean();
//   }
//   else{
//     swal({
//       title: 'Verifique los datos ingresados',
//       icon: "error",
//     });
//   }
// });


function clean() {
  $("#nombre").val("");
  $("#apellidos").val("");
  $("#email").val("")
  $("#clave").val("")
  $("#telefono").val("")
}