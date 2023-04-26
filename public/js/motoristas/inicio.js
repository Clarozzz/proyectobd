var token = localStorage.getItem('token');
const urlLogin = 'http://127.0.0.1:8000/api/motorista/iniciarSesion';

var datosMotorista = '';


validarToken();
setInterval(validarToken, 3000);


function validarToken(){
  if(token != null){
    console.log(token)
      validarMotorista();
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
      console.log('No es un Motorista');
      localStorage.removeItem("token");
      //window.location.replace('inicio');

    }
    
    return response.json();
  })
  .then(data => {
    console.log('es Motorista')
    console.log(data);
    datosMotorista = data;
    window.location.replace('espera');
    
    
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });

}




function login(){
    

  datosMotorista = 
      {
          email : document.getElementById('email').value,          
          password : document.getElementById('password').value,
      } 
  
     enviarCredenciales(datosMotorista)
  
      //console.log(datosMotorista)
  
      
  
      
  
  
      
  }
  
  function enviarCredenciales(datosMotorista){
  
  
  
     
     fetch(urlLogin, {
       method: 'POST',
       headers: {
         'Accept': 'application/json',
         'Content-Type': 'application/json'
       },
       body: JSON.stringify(datosMotorista)
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
      datosMotorista = data;
      console.log(data.user);      
      window.location.replace('espera')
      }
      
      
    })
     .catch(error => {
      
      console.log(error);

      document.getElementById('error').innerHTML = `<div class="alert alert-danger" role="alert">
      Credenciales invalidas
   </div>`;
      
      
      
  
     });
  
    
     
  }
  

  
  
