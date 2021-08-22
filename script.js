// var connection = new ActiveXObject("ADODB.Connection");

// var connectionstring = "Data Source= ;Initial Catalog=leakio-1;Driver={SQLServer};Server=;Database=leakdb;Uid=;Pwd=;";

// connection.Open(connectionstring);
// var rs = new ActiveXObject("ADODB.Recordset");

// rs.Open("SELECT state FROM leakstate", connection);
// rs.MoveFirst
// while (!rs.eof) {
//     if (rs.fields(1))
//     document.write();
//     rs.movenext;
// }

// var cloudData = 0;



// rs.close;
// connection.close;
//DO NOT USE, JANKY CODE


//disallow dragging
document.getElementById('graph').ondragstart = function() { return false; };

