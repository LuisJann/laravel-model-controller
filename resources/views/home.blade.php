<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>

<body>
    <main>
        @yield('content')
    </main>
    <section>
        <div class="container">
            <div class="row row-cols-4 mx-3">
                @foreach ($movies as $movie)
                    <div class="col my-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text"> <strong>Original Title: </strong> {{ $movie->original_title }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                                <li class="list-group-item">Date: {{ $movie->date }}</li>
                                <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
