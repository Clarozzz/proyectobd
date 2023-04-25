var ip = http://127.0.0.1:8000;
var url = '/api/cliente/verificar';
function validarSesion(token){

    ///console.log(token)
    if(token == null){
        window.location.replace('inicio')
    }

    validarCliente(token)
}


function validarCliente(token){

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
      window.location.replace('inicio');

    }
    return response.json();
  })
  .then(data => {
    console.log('es cliente')
    console.log(data);
    datosCliente = data;
    
    
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });

}