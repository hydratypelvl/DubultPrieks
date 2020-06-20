<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tev & Man</title>
        <link rel="shortcut icon" href="{{ asset('images/icon.png') }}"/>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
</head>
<body style="background-color: #ffd600;">
<div class="container mt-5">
    <form action="/anketa" method="post">
    @csrf
        <div class="form-group">
        <label>Vieta un Datums *</label>
        @foreach($dates as $date)
            <div class="form-check form-check">
                <input class="form-check-input" type="checkbox" value="{{ $date->date }}" name="date[]">
                <label class="form-check-label">{{ $date->date }}</label>
            </div>
        @endforeach
        </div>

        <div class="form-row mb-3">
            <div class="col">
                <!-- First name -->
                <label class="label" for="name">Vārds *</label>
                <input class="form-control @error('name') border-danger @enderror" 
                    type="text" 
                    name="name" 
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Ievadiet savu vārdu">
                @error('name')
                <p class="text-danger">{{ $errors->first('name') }}</p>
                @enderror
            </div>
            <div class="col">
                <!-- Last name -->
                <label class="label" for="surname">Uzvārds *</label>
                <input class="form-control @error('surname') border-danger @enderror" 
                    type="text" 
                    name="surname" 
                    id="surname"
                    value="{{ old('surname') }}"
                    placeholder="Ievadiet savu uzvārdu">
                @error('surname')
                <p class="text-danger">{{ $errors->first('surname') }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="carnumber">Automašīnas Reģistrācijas Numurs *</label>
            <div>
                <input class="form-control @error('carnumber') border-danger @enderror" 
                    type="text" 
                    name="carnumber" 
                    id="carnumber"
                    value="{{ old('carnumber') }}"
                    placeholder="Ievadiet automašīnas reģistrācijas numuru">
                @error('carnumber')
                <p class="text-danger">{{ $errors->first('carnumber') }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="email">E-pasta adrese *</label>
            <div>
                <input class="form-control @error('email') border-danger @enderror" 
                    type="email" 
                    name="email" 
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="Ievadiet savu e-pasta adresi">
                @error('email')
                <p class="text-danger">{{ $errors->first('email') }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="number">Tālruņa numurs *</label>
            <div>
                <input class="form-control @error('number') border-danger @enderror" 
                    type="text" 
                    name="number" 
                    id="number"
                    value="{{ old('number') }}"
                    placeholder="Ievadiet savu tālruņa numuru">
                @error('number')
                <p class="text-danger">{{ $errors->first('number') }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="comment">Komentāri</label>
                    <textarea class="form-control @error('error') border-danger @enderror" name="comment" id="comment" rows="3">{{ old('coment') }}</textarea>
                @error('comment')
                <p class="text-danger">{{ $errors->first('comment') }}</p>
                @enderror
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary mr-4">Nosūtīt</button>
            <a href="/" type="submit" class="btn btn-danger">Atgriezties</a>
        </div>
    </form>
</div>
</body>
</html>