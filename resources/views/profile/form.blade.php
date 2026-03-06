<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kompletný Formulár</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .section { margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; }
        label { font-weight: bold; }
    </style>
</head>
<body>

<h1>Registrácia profilu a generátor postupnosti</h1>

<form method="POST" action="/profile/result">
    @csrf

    <!-- SEKCIJA 1: Osnovni podaci -->
    <div class="section">
        <p>
            <label>Meno:</label><br>
            <input type="text" name="name" required>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>

        <p>
            <label>Vek:</label><br>
            <input type="number" name="age" required>
        </p>
    </div>

    <!-- SEKCIJA 2: Rola i Veštine -->
    <div class="section">
        <p>
            <label>Rola:</label><br>
            <select name="role">
                @foreach ($roles as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </p>

        <p>
            <label>Zručnosti:</label><br>
            @foreach ($skills as $skill)
                <label>
                    <input type="checkbox" name="skills[]" value="{{ $skill }}"> {{ $skill }}
                </label><br>
            @endforeach
        </p>
    </div>

    <!-- SEKCIJA 3: Broj n (Matematički zadatak) -->
    <div class="section" style="background-color: #f9f9f9;">
        <p>
            <label>Štartovacie číslo (n) pre postupnosť:</label><br>
            <small>Zadajte číslo od ktorého začne výpočet (Lucasova postupnosť).</small><br>
            <input type="number" name="n" value="0" required>
        </p>
    </div>

    <button type="submit" style="padding: 10px 20px; cursor: pointer;">Odoslať všetko</button>
</form>

</body>
</html>
