var http = require('http');

var count = 0;

var server = http.createServer(function(request, response) {
    count += 1;
    console.log('got a request! ' + count);
    response.write('Request count: ' + count);
    response.end();
});

server.listen(80);
