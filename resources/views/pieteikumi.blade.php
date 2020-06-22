<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset ('css/styles.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Tev & Man</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto"> 
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/pieteikumi">Pieteikumi</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/date">Pievienot Datumus</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="container-fluid">
   {{-- @foreach($anketas->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $anketa)    
                <div class="col-sm" style="border: 1px solid black;padding: 5px;margin: 5px;width:300px;">
                    <h1>{{ $anketa->name }} {{ $anketa->surname }}</h1>
                    <p><strong>Datums: </strong>{{ $anketa->date }}</p>
                    <p><strong>E-pasts: </strong>{{ $anketa->email }}</p>
                    <p><strong>Talruna Nr: </strong>{{ $anketa->number }}</p>
                    <p><strong>Automasinas Nr: </strong>{{ $anketa->carnumber }}</p>
                    <!-- <p><strong>Pievienosanas Datums: </strong>{{ $anketa->created_at }}</p> -->
                </div>
            @endforeach
        </div>
    @endforeach
    --}}
    <table class="table table-striped table-dark table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vārds</th>
                <th scope="col">Uzvārds</th>
                <th scope="col">Tālrunis</th>
                <th scope="col">Datums</th>
                <th scope="col">NR</th>
                <th scope="col">E-pasts</th>
                <th scope="col">Darbības</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anketas as $anketa)
            <tr>
                <th scope="row">{{ $anketa->id }}</th>
                <td>{{ $anketa->name }}</td>
                <td>{{ $anketa->surname }}</td>
                <td>{{ $anketa->number }}</td>
                <td>{{ $anketa->date }}</td>
                <td>{{ $anketa->carnumber }}</td>
                <td>{{ $anketa->email }}</td>
                <td><a href="/" class="btn btn-success">edit</a>
                <a href="/" class="btn btn-success">edit</a>
                <a href="/" class="btn btn-success">edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>