var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "usuario",
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");

  sql = 'USE personas;'
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Result: " + result);
  });

  sql = 'select * from empleado;'
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Result: " + result[0].edad);
  });
});
