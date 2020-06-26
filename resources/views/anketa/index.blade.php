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
    <!-- <link rel="stylesheet" href="{{ asset ('css/styles.css') }}" /> -->
</head>
<body>
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
</body>
</html>