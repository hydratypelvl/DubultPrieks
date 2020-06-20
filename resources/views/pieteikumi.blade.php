<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
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
                <th scope="col">Komentārs</th>
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
                <td>{{ $anketa->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>