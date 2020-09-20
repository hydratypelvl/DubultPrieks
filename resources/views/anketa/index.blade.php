<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset ('css/styles.css') }}" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Tev & Man</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/anketa">Pieteikties</a></li>
                        @if(Auth::user())
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/pieteikumi">Pieteikumi</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
@include('sweetalert::alert')
    <div class="row">
        <div class="col">
            Kopā aizpildītās anketas: {{ $pieteikumi }}
        </div>
        <div class="col">
            Kopā aizpildītās anketas: {{ $pieteikumi }}
        </div>
        <div class="col">
            Kopā aizpildītās anketas: {{ $pieteikumi }}
        </div>
    </div>
    
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vārds</th>
                <th scope="col">Uzvārds</th>
                <th scope="col">Tālrunis</th>
                <th scope="col">Datums</th>
                <th scope="col">NR</th>
                <th scope="col">E-pasts</th>
                <th scope="col">Info</th>
                <th scope="col">Edit</th>
                <th scope="col">Dzēst</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anketas as $anketa)
            <tr>
                <th scope="row">{{ $anketa->id }}</th>
                <td>{{ $anketa->name }}</td>
                <td>{{ $anketa->surname }}</td>
                <td>{{ $anketa->number }}</td>
                <td>
                @foreach($anketa->date as $datums)
                    <li>{{ $datums }}</li>
                @endforeach</td>
                <td>{{ $anketa->carnumber }}</td>
                <td>{{ $anketa->email }}</td>
                <td><a href="/pieteikumi/{{ $anketa->id }}" class="btn btn-primary"><i class="fas fa-info"></i></a></td>
                <td><a href="/pieteikumi/edit/{{ $anketa->id }}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                <td>
                    <form action="/pieteikumi/{{ $anketa->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Vai tiešām vēlaties dzēst šo pieteikumu?')"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $anketas->links() }}
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Scripts -->
    <script src="js/scripts.js"></script>
</body>
</html>