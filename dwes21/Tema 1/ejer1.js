var http=require('http')

var server=http.createServer((function(request,response)

{
    response.writeHead(200,
        
        {'Context-Type' : "test/plain"});
    response.end("Jesus Polonio Castejon\n");
}));

server.listen(7000);