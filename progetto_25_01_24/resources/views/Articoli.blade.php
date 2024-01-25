<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>ARTICOLI</h1>
    <ul>
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a href="{{ route('contatti')}}">Chi sono</a></li>
    </ul>

    <div class="container mt-5">
        @foreach($articoli as $indice => $articolo)
            <div class="card" style="width: 18rem;">
                <h5 class="card-title">{{$articolo['titolo']}}</h5>
                <p class="card-text">{{$articolo['categoria']}}</p>
                <a href="{{ route('articolo', ['id'=>$indice])}}">Dettaglio</a>
            </div>
        @endforeach
    </div>

</body>
</html>