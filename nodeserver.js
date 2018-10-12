var http = require('http');
var port = 8080;

http.createServer(function (req, res){
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.end('Hello World --- nodejs server has been created! welcome~');
//}).listen(8080);
}).listen(port, function() {
  console.log('server listening at port :', port);
});
