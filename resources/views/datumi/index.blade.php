<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datumi</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col"><a href="/datumi/create" class="btn btn-success"><i class="fas fa-plus"></i></a></th>
        <th scope="col">#</th>
        <th scope="col">Datums</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        
        </tr>
    </thead>
    <tbody>
    @foreach($dates as $date)
        <tr>
        <th></th>
        <th scope="row">{{ $date->id }}</th>
        <td>{{ $date->date }}</td>
        <td><button class="btn btn-warning"><i class="far fa-edit"></i></button></td>
        <td>
            <form action="/datumi/{{ $date->id }}" method="POST">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</body>
</html>