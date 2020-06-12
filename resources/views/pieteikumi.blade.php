<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
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
</div>
</body>
</html>