const http = require('http');
//Agregar Express
const express = require('express');
//Agregar el Socket que permite hacer conectarnos tr
const sockets = require('socket.io');

//serv con exps
const apps = express();

//crea server
const serverio = http.createServer(apps);
const io = sockets.listen(serverio);

//connec
io.on('connection', socket =>{
    alert('nuevo usuario conectado!!');
})

apps.use(express.static('public'));
//Abre puerto 3000
serverio.listen(3000,() => {
   console.log('Verificando server puerto 30000');
});