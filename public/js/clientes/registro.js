
console.log('registro funcionando')


var token = localStorage.getItem('token');
var datosCliente = '';

validarSesion()






function validarSesion(){

    console.log(token)
    if(token != null){
        validarCliente()
    }

    
}


function validarCliente(){

    fetch('http://127.0.0.1:8000/api/cliente/verificar', {
  method: 'GET',
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + token
  }
})
  .then(response => {
    if (!response.ok) {
      console.log('No es tiene permisos');
      localStorage.removeItem("token");
    

    }
    return response.json();
  })
  .then(data => {
    console.log('es cliente')
    console.log(data);
    datosCliente = data;
    window.location.replace('solicitud');
    
    
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });

}

function registrarse(){
    

datosCliente = 
    {
        primerNombre : document.getElementById('primerNombre').value,
        segundoNombre : document.getElementById('segundoNombre').value,
        primerApellido : document.getElementById('primerApellido').value,
        segundoApellido : document.getElementById('segundoApellido').value,
        nombreUsuario : document.getElementById('nombreUsuario').value,
        email : document.getElementById('email').value,
        telefono : document.getElementById('telefono').value,
        dni : document.getElementById('dni').value,
        rtn : document.getElementById('rtn').value,
        fechaNacimiento : document.getElementById('fechaNacimiento').value,
        nombreEmpresa : document.getElementById('nombreEmpresa').value,
        password : document.getElementById('password').value,





    } 

    console.log(datosCliente)

   enviarCredenciales(datosCliente)

    //console.log(datosCliente)

    

    


    
}

function enviarCredenciales(datosCliente){

    const url = "http://127.0.0.1:8000/api/cliente/registro";

   
   fetch(url, {
     method: 'POST',
     headers: {
       'Accept': 'application/json',
       'Content-Type': 'application/json'
     },
     body: JSON.stringify(datosCliente)
   })
   .then(response => response.json())   
   .then(data => {
    console.log('console data ' + (data.errors == null))
    if(data.errors == null){

        localStorage.setItem('token', data.access_token);
        //console.log(data) 
        window.location.replace('espera');
        
    }
    console.log(error);


    
    throw new Error('Credenciales invalidas');

    
    
    
   
    })
   .catch(error => {
    
    console.log(error);
    

    document.getElementById('error').innerHTML = `<div class="alert alert-danger" role="alert">
    Credenciales invalidas
 </div>`;
        

    

    

   });

}


function irUsuarios(){

    window.location.replace('factura')


}