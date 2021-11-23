function updateTabla(){

    element = document.getElementById("tabla");
    element.innerHTML = '';
    var var1  = document.createElement("tr");
    var var2;

        for (var i = 0; i < nombres.length; i++) {

            var1  = document.createElement("tr");
            element.appendChild(var1);
            var2 = document.createElement("td");
            var2.textContent=nombres[i].fullName;
            var1.appendChild(var2);
            
        }
}

function añadirnuevapersona(nombre, apellido1, apellido2){

    if(!nombre || !apellido1 || !apellido2){

        alert("Usted no ha rellenado todos lo campos");

    }else{

    nombres.push(new Persona(nombre, apellido1, apellido2, 15, true, 20));
    updateTabla();

    }
}

function borrarultimapersonatabla(){

    if(!nombres || nombres.length==0){

        alert("No hay ningún elemento en la tabla");

    }else{

    nombres.pop();
    updateTabla();

    }
}