<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieteikums</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Pieteikums</h1>
    <table class="table table-striped table-dark table-bordered table-hover">
        <tbody>
            <tr>
                <td><strong>Vārds:</strong></th>
                <td>{{ $anketa->name}}</th>
            </tr>
            <tr>
                <td><strong>Uzvārds:</strong></th>
                <td>{{ $anketa->surname}}</th>
            </tr>
            <tr>
                <td><strong>Tālrunis:</strong></th>
                <td>{{ $anketa->number}}</th>
            </tr>
            <tr>
                <td><strong>Datumi:</strong></th>
                <td>@foreach($anketa->date as $datums)
            <li>{{ $datums  }}</li>
            @endforeach</th>
            </tr>
            <tr>
                <td><strong>Automašīnas Numurs:</strong></th>
                <td>{{ $anketa->carnumber}}</th>
            </tr>
            <tr>
                <td><strong>E-pasts:</strong></th>
                <td>{{ $anketa->email}}</th>
            </tr>
            <tr>
                <td><strong>Komentāri:</strong></th>
                <td>{{ $anketa->comment}}</th>
            </tr>
        </tbody>
    </table>
    <a href="/pieteikumi" class="btn btn-primary">Atgriezties</a>
</div>
</body>
</html>