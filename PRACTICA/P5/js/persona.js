class Persona{

    get nombre() {

        return this._nombre;

    }

    set nombre(nombre) {

        this._nombre = nombre;

    }

    get apellido1() {

        return this._apellido1;

    }

    set apellido1(apellido1) {

        this._apellido1 = apellido1;

    }

    get apellido2() {

        return this._apellido2;

    }
    
     set apellido2(apellido2) {

        this._apellido2 = apellido2;

    }

    get id() {

        return this._id;

    }

    set id(id) {

        this._id = id;

    }

    get sexo() {

        return this._sexo;

    }

    set sexo(sexo) {

        this._sexo = sexo;

    }

    get edad() {

        return this._edad;

    }

    set edad(edad) {

        this._edad = edad;

    }

    get fullName(){

        return this.nombre + " " + this.apellido1 + " " + this.apellido2;

    }

    constructor(nombre, apellido1, apellido2, sexo, edad, id) {

       this.nombre=nombre;
       this.apellido1=apellido1;
       this.apellido2=apellido2;
       this.id=id;
       this.sexo=sexo;
       this.edad= edad;

    }
    
    isNameValid(){

        if(this.nombre > 5 && this.nombre < 100){
            return true;
        }
        return false;

    }
    
    isSexoValid(){

        if(this.sexo == true || this.sexo == false){

            return true;
        }

        return false;
    }

    isIdValid(array){

        let retur = true;
        array.forEach(element => {

            if(this.id == element.id){
               
                retur = false;

            }
        });
        
        return retur;
        
    }

    static findIdValid(array){

        let idValid = 0;
        let valid = true;

        while(valid) {

            idValid = Math.floor(Math.random()*(100)-1);
            array.forEach(element => {

                console.log(element.edad);
                if(idValid == element.id){
                    console.log(element.id);
                    console.log(idValid);

                   valid=false

                }
            });

            if(idValid == -1){

                console.log("No hay valores válidos");

            }

            return idValid;
        }
    }

    hasFieldNull(){

        for(var field in this){

            if(field == null){

                return true;
            }
        }

        return false;
    }

    toString(){

        var retur = "ID: <br/>"+ this.id + "Nombre: <br/>" + this.nombre + "Apellido 1: <br/>" + this.apellido1 + "Apellido 2: <br/>" + this.apellido2 + "Sexo: <br/>";
        retur += this.sexo?"Masculino":"Femenino";
        retur += "<br/>Edad: " + this.edad;
        return retur;

    }

}

  let p = new Persona("María", "Gonzalez", "Luna", 12, true, 1);
  let q = new Persona("Raul", "Gutierrez", "Ocaña", 13, true, 2);
  let r = new Persona("Jose", "Ruiz", "Capilla", 14, true, 3);
  let nombres = new Array(p,q,r);