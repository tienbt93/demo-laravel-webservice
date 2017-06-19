var io=require("socket.io")(6000);
console.log('connect to port 6000');
io.on('error',function(socket){
    console.log("error");
});
io.on('connection',function(socket){
    console.log("Co nguoi ket noi"+socket.id);
});
var Redis=require('ioredis');
var  redis=new Redis(8888);
redis.on('pmessage',function(partner,channel,msg){
    console.log(channel);
    console.log(msg);
    console.log(partner);
});

