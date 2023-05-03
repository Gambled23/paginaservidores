import mysql from 'mysql';

function insertarDatos() {
    let nombreEmpleado = document.getElementById('nombreEmpleado').value
    let edadEmpleado = document.getElementById('edadEmpleado').value

    
    var con = mysql.createConnection({
        host: "localhost",
        user: "root",
        password: "usuario",
    });
    con.connect(function (err) {
        if (err) throw err;
        console.log("Connected!");

        sql = 'USE personas;'
        con.query(sql, function (err, result) {
            if (err) throw err;
            console.log("Result: " + result);
        });
        sql = `INSERT INTO empleado (nombre, edad) VALUES('${nombreEmpleado}', ${edadEmpleado});`
        con.query(sql, function (err, result) {
            if (err) throw err;
            console.log("Result: " + result);
        });
    });
}

function consultarDatos() {
    let idEmpleado = document.getElementById('idEmpleado')
}