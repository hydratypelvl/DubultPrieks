<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pievienot datumus</title>
</head>
<body>
    <form action="/datumi" method="post">
    @csrf
        <label for="datums">Datums</label>
        <input type="text" name="date" id="date">
        <button type="submit">Saglabāt</button>
    </form>
</body>
</html>