//Establecer opciones de mapa



//establecer opciones de mapa crear un objeto DirectionsService para usar el método route y obtener un resultado para nuestra solicitud
var directionsService = new google.maps.DirectionsService();

//crear un representador de indicaciones que usaremos para mostrar la ruta
var directionsDisplay = new google.maps.DirectionsRenderer();

//enlazar el representador de indicaciones al mapa
directionsDisplay.setMap(map);


//definimos la funcion de calcular ruta
function calcRoute() {
    //Creamos la solicitud
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    //Pasar la solicitud al método Route
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Obtenemos la distancia y el tiempo
            const output = document.querySelector('#output');
            output.innerHTML = "<div class='alert-info'>Origen: " + document.getElementById("from").value + ".<br />Destino: " + document.getElementById("to").value + ".<br />Distancia<i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duracion <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";

            //Mostrar la ruta
            directionsDisplay.setDirections(result);
        } else {
            //Eliminar la ruta del mapa
            directionsDisplay.setDirections({ routes: [] });
            //Centrar en Honduras
            map.setCenter(myLatLng);

            //Mostrar mensaje de error
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> No se pudo recuperar la distancia de conducción.</div>";
        }
    });

}



//Autocompletacion de los inputs
const options = {
    componentRestrictions: { country: "hnd" },
    fields: ["address_components", "geometry", "icon", "name"],
    strictBounds: false,
    //Tipo que desea buscar
    types: ["address"],
};

// Autocompletado del input from
const input1 = document.getElementById("from");
const autocomplete1 = new google.maps.places.Autocomplete(input1, options);

// Autocompletado del input to
const input2 = document.getElementById("to");
const autocomplete2 = new google.maps.places.Autocomplete(input2, options);



