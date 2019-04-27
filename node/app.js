let http = require('http')
let fs = require('fs')

const server = http.createServer(function(req,res){
    if(req.url === '/favicon.ico'){
        return res.end();
    }
    console.log('incoming request to ' + req.url)
    
    let i = 2;
    res.writeHead(200, {'Content-Type':'text/plain'})

    setTimeout(function(){
        fs.readFile(__filename,{
            endcoding: 'utf8'
        }, function(error,contents){
            if(error){
                console.error(error)
                return res.end()
            }
            console.log('sending response for' + req.url)
            res.end(contents)
        })
    }, 5000) 

    while(i--){
        console.log('loop value' + i + '\r')
    }
})//.listen(1337,'127.0.0.1:')

server.listen(1337, '127.0.0.1')
console.log('Server running at http://127.0.0.1:1337/')
