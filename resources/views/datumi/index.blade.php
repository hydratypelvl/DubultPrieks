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

<p class="float-right mt-5">Pievienot jaunu datumu <a href="/datumi/create" class="btn btn-success"><i class="fas fa-plus"></i></a></p>
    <table class="table table-bordered table-striped table-hover    ">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Datums</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        
        </tr>
    </thead>
    <tbody>
    @foreach($dates as $date)
        <tr>
        <th scope="row">{{ $date->id }}</th>
        <td>{{ $date->date }}</td>
        <td align="center"><button disabled class="btn btn-warning"><i class="far fa-edit"></i></button></td>
        <td align="center">
            <form action="/datumi/{{ $date->id }}" method="POST">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Vai tiešām vēlaties dzēst šo datumu?')"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</body>
</html>