<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>

            <h1 class="text-center m-5">
                Movies
            </h1>
            {{-- contenitore --}}
            <div class="container">

                {{-- riga --}}
                <div class="row g-3">

                    @foreach ($movies as $movie)
                        {{-- colonna --}}
                        <div class="col-4">
                            {{-- card --}}
                            <div class="card p-3">
                                <h4>
                                    {{ $movie->title }}
                                </h4>

                                <ul>
                                    <li>
                                       <strong>Data:</strong>
                                        {{ $movie->date }}
                                    </li>
                                    <li>
                                        <strong>Voto:</strong>
                                        {{ $movie->vote }}
                                    </li>
                                    <li>
                                        <strong>Nazionalità:</strong> 
                                        {{ $movie->nationality }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

            </div>
        </main>

    </body>
</html>
