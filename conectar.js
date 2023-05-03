var mysql = require('mysql');
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "usuario",
});
nombreEmpleado = 'meme'
edadEmpleado = 69
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