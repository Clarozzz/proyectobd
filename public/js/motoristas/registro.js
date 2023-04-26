





console.log('registro funcionando')


var token = localStorage.getItem('token');
var datosCliente = '';

validarSesion()






function validarSesion(){

    console.log(token)
    if(token != null){
        validarMotorista()
    }

    
}


function validarMotorista(){

    fetch('http://127.0.0.1:8000/api/motorista/verificar', {
  method: 'GET',
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + token
  }
})
  .then(response => {
    if (!response.ok) {
      console.log('No tiene permisos');
      localStorage.removeItem("token");
    

    }
    return response.json();
  })
  .then(data => {
    console.log('es motorista')
    console.log(data);
    datosCliente = data;
    window.location.replace('solicitud');
    
    
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });

}

function registrarse(){
    
    datosMotorista= {


        nombreUsuario   :  document.getElementById('nombreUsuario').value,
        email   : document.getElementById('email').value,
        password   : document.getElementById('password').value,
        primerNombre   : document.getElementById('primerNombre').value,
        primerApellido   : document.getElementById('primerApellido').value,
        telefono   : document.getElementById('telefono').value,
        dni   : document.getElementById('dni').value,
        rtn   : document.getElementById('rtn').value,
        fechaNacimiento   : document.getElementById('fechaNacimiento').value,
        nombreBanco   : document.getElementById('nombreBanco').value,
        cuentaBancaria   : document.getElementById('cuentaBancaria').value,
        numeroPlaca   : document.getElementById('numeroPlaca').value,
        foto   : document.getElementById('foto').value,
        tipo   : document.getElementById('tipo').value,
        anio   : document.getElementById('anio').value,
        marca   : document.getElementById('marca').value,
        permisoExplitacion   : document.getElementById('permisoExplitacion').value,
        color   : document.getElementById('color').value,
    
    
    }

    console.log(datosMotorista)

   enviarCredenciales()

    //console.log(datosCliente)

    

    


    
}

function enviarCredenciales(){

    const url = "http://127.0.0.1:8000/api/motorista/registro";

   
   fetch(url, {
     method: 'POST',
     headers: {
       'Accept': 'application/json',
       'Content-Type': 'application/json'
     },
     body: JSON.stringify(datosMotorista)
   })
   .then(response => response.json())   
   .then(data => {
    console.log('console data ' + (data.errors == null))
    if(data.errors == null){

        localStorage.setItem('token', data.access_token);
        //console.log(data) 
        window.location.replace('solicitud');
        
    }
        
    throw new Error('Credenciales invalidas');
    
   
    })
   .catch(error => {
    
    console.log(error);
    

    
   document.getElementById('error').innerHTML = `<div class="alert alert-danger" role="alert">
   Credenciales invalidas
</div>`;
   
    

   });

}


