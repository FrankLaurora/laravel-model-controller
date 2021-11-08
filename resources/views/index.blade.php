<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>VCM Movies</title>
    </head>
    <body>
       <header>
           <h1>Un po' di film</h1>
       </header>
       <main>
           <div class="container">
               @foreach ($movies as $movie)
                    <div class="card">
                        <h2>Titolo: <em>{{$movie['title']}}</em></h2>
                        <h3>Titolo originale: {{$movie['original_title']}}</h3>
                        <h4>Paese di produzione: {{$movie['nationality']}}</h4>
                        <h4>Data d'uscita: {{$movie['date']}}</h4>
                        <h4>Voto: {{$movie['vote']}}</h4>
                    </div>    
               @endforeach
           </div>
       </main>
    </body>
</html>