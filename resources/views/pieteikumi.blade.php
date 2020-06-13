<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    @foreach($anketas->chunk(3) as $chunk)
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>