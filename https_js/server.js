var fs = require('fs'); 
 
var options = { 
    key: fs.readFileSync('killrot.ru.key'), 
    cert: fs.readFileSync('killrot.ru.crt') 
}; 
 
var app = require('https').createServer(options); 
var io = require('socket.io').listen(app); 
app.listen(8250); 
 
io.sockets.on('connection', function (socket) { 
    console.log('opa'); 
});
