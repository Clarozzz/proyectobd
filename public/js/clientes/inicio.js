var token = localStorage.getItem('token');
const urlLogin = 'http://127.0.0.1:8000/api/cliente/iniciarSesion';

var datosCliente = '';


validarToken();
setInterval(validarToken, 3000);


function validarToken(){
  if(token != null){
    console.log(token)
      validarCliente();
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
      console.log('No es un cliente');
      localStorage.removeItem("token");
      //window.location.replace('inicio');

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




function login(){
    

  datosCliente = 
      {
          email : document.getElementById('email').value,          
          password : document.getElementById('password').value,
      } 
  
     enviarCredenciales(datosCliente)
  
      //console.log(datosCliente)
  
      
  
      
  
  
      
  }
  
  function enviarCredenciales(datosCliente){
  
  
  
     
     fetch(urlLogin, {
       method: 'POST',
       headers: {
         'Accept': 'application/json',
         'Content-Type': 'application/json'
       },
       body: JSON.stringify(datosCliente)
     })
     .then(response => {
      if (!response.ok) {
        
        return response.json();
  
      }
      return response.json();
    })
    .then(data => {
      
      console.log('data log ' + (data.error == null))
      if(data.error == null){

        localStorage.setItem('token', data.accessToken);
      datosCliente = data;
      console.log(data.user);      
      window.location.replace('solicitud')
      }
      
      
    })
     .catch(error => {
      
      console.log(error);
      
      document.getElementById('error').innerHTML = `<div class="alert alert-danger" role="alert">
      Credenciales invalidas
   </div>`;
      
  
     });
  
    
     
  }
  

  
  
