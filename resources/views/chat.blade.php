<html>
    <head>
        <title>
            Demo chat
        </title>

    </head>
    <body>
        <div>
            @foreach($messages as $msg)
            <p><strong>{{$msg->author}}</strong>: {{$msg->message}}</p>
            @endforeach
        </div>
        <div>
            <form action="send-message" method="POST"> 
            {{csrf_field()}}
                Name: <input type="text" name="author"/>
                <br>
                Content:
                <textarea name="message" rows="5" style="with: 100%"></textarea>
                <br>
                <button>send</button>
            </form>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" >
                var socket=io('http://localhost:6000');
                socket.on('');
            </script>
        </div>
    </body>
</html>