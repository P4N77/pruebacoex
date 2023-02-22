const mysql = require("mysql");
const conec = mysql.createConnection({
    host: 'localhost',
    user: 'german',
    password:'pan123',
    database:'basescreditos'
})

let btn= document.getElementById("boton")
btn.preventDefault();
function datos() {
    let nombre=document.getElementById("nombre").value;
    let ntit=document.getElementById("nit").value;
    let ciudad=document.getElementById("ciudad").value;
    let estado=document.getElementById("estado").value;
    let apellidos=document.getElementById("apellido").value;
    let direccion=document.getElementById("direccion").value;
    let telefono=document.getElementById("telefono").value;
    let cupoTotal=document.getElementById("cupototal").value;
    let cupoDisponible=document.getElementById("cupodis").value;
    let dias=document.getElementById("dias").value;
    console.log(nombre);
    console.log(ntit);
    console.log(ciudad);
    console.log(estado);
    console.log(apellidos);
    console.log(direccion);
    console.log(telefono);
    console.log(cupoTotal);
    console.log(cupoDisponible);
    console.log(dias);
    
}

conec.connect((err)=>{
    if(err) throw err
    console.log("Connection")
})
const insert = `INSERT INTO tbl_usuario (id_usu,nom_usu,ape_usu,ciu_usu,tel_usu,dir_usu,cup_tot_usu,dia_usu) VALUES 
(${ntit},${nombre},${apellidos},${ciudad},${telefono},${direccion},${cupoTotal},${dias})`
conec.query(insert,(err,rows)=>{
    if(err) throw err
    console.log("datos de la tabla")
    console.log(rows);
})
conec.end()



