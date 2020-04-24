<div>
    <h3 style="color:black"><strong>Mensajes</strong></h3>
    <div class="jumbotron">
      @foreach ($mensajes as $mensaje)
    <li style="color:black">{{$mensaje["user"]}} dice {{$mensaje["mensaje"]}}</li>
      @endforeach
    </div>

    <script>
       
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('1dddfe80bf66aaee3a43', {
          cluster: 'eu',
          forceTLS: true
        });
    
        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
          alert(JSON.stringify(data));
        });
      </script>
</div>
