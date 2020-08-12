<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Color Saver</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body style='background-color: #808B96'>
    
        <h1>Pick a Color</h1>
        <form action="/colors" method="POST">
            @csrf
            <input type="color" name="color" value="#30AF30">
            <button>Add</button>
        </form>
        @foreach ($colors as $color)
        <form action="/colors/{{ $color->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="colorChange" data-id="{{ $color->id }}" type="color" name="colorChange-{{ $color->id }}" value="{{ $color->hex }}">
            <button onclick="return confirm('Are you sure you want to delete this item?');">X</button>
        </form>
        @endforeach
  
    </body>

<script type="text/javascript">


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".colorChange").change(function(){

    let id = $(this).data('id');
    let color = $(this).val();
    $.ajax({
       type:'PUT',
       url:"{{ route('update.post') }}",
       data:{id:id, color:color},
       success:function(response){
          console.log(response);
       }
    });

});

</script>

</html>
