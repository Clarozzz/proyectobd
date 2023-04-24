console.log('registro funcionando')





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

   enviarCredenciales(datosCliente)

    //console.log(datosCliente)



    


    
}

function enviarCredenciales(datosCliente){

    //const url = "http://127.0.0.1:8000/api/cliente/registro";
   // const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
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
    console.log(data)
    

    localStorage.setItem('token', data.access_token);
    window.location.replace('factura');
    })
   .catch(error => {
    
    console.log(error);
    

   });

   document.getElementById('error').innerHTML = `<div class="alert alert-danger" role="alert">
   Credenciales invalidas
</div>`;
   
}

