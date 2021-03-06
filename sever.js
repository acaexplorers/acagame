const http=require("http");
const app=require("express")();
app.listen(9091, ()=> console.log("listening on port 9091"))
app.get("/", (req,res)=> res.sendFile(__dirname + "/student.php"))
const webScocketServer=require("websocket").server
const httpServer=http.createServer();
httpServer.listen(9090,()=>console.log(" listening at 80"))
const clients={};
const wsserver=new webScocketServer({
   
    "httpserver": httpServer

})

wsserver.on("request",request => {
    const connection = request.accept(null,request.origin)
    connection.on("open", () => console.log("open"))
    connection.on("close", () => console.log("clode"))
    connection.on("message", message => {
     const result=JSON.parse(message.utf8Data)   
        // recived the message 

    })

    // generate  new client id 

    const clientid=guid();
    clients[clientid]={
        "connection": connection

    }
    const payload={
        "method": "connect",
        "clientid": clientid
    }
    // send back the client connect 
    connection.send(JSON.stringify(payload))
})

function S4() {
    return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
}
 
// then to call it, plus stitch in '4' in the third group
const guid = () => (S4() + S4() + "-" + S4() + "-4" + S4().substr(0,3) + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
 

