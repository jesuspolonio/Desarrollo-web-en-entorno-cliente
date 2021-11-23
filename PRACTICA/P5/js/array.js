import{Persona} from persona.js;

class List{

    get array(){

        return this._array;

    }

    set array(array){

        this._array=array;

    }

    constructor() {

        this.array=  Array();
      
    }

    añadirnuevapersona(persona){

        if(persona.isIdValid(this.array)){

            console.log("si");
            this.array.push(persona);
        }
        else{

            let idValid = Persona.findIdValid(this.array);
            if(idValid != -1){

                persona.id = idValid;
                this.array.push(persona);
            }
        }
    }

    mostrarArray(){
        
        var retur = "";
        this.array.forEach(persona=> retur += "<br/>" + persona.toString());
        return retur;
        
    }
}