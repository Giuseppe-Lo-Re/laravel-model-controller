<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Title --}}
    <title>laravel-model-controller</title>
</head>
<body>
    <h1>
        DB FILMS
    </h1>
    <div class="films-container">

        @foreach ($movies as $movie)
            <div class="film">
    
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
            </div>
        @endforeach
    </div>


</body>
</html>