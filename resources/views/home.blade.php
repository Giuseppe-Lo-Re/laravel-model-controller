<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Title --}}
    <title>laravel-model-controller</title>
</head>
<body>
    <h1>
        DB FILMS
    </h1>

    @foreach ($movies as $movie)
        <ul>
            <li>
                <span class="form">
                    Titolo:    
                </span>

                <span class="query">
                    {{ $movie->title }}    
                </span>
            </li>

            <li>
                <span class="form">
                    Titolo originale:    
                </span>
                  
                <span class="query">
                    {{ $movie->original_title }}    
                </span>
            </li>

            <li>
                <span class="form">
                    Nazionalità:    
                </span>
                  
                <span class="query">
                    {{ $movie->nationality }}    
                </span>
            </li>

            <li>
                <span class="form">
                    Data di uscita:    
                </span>
                  
                <span class="query">
                    {{ date('d-m-Y', strtotime($movie->date)) }}    
                </span>
            </li>

            <li>
                <span class="form">
                    Voto medio:    
                </span>
                  
                <span class="query">
                    {{ $movie->vote }}    
                </span>
            </li>
        </ul>
    @endforeach

</body>
</html>