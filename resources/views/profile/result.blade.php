<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Výsledok postupnosti</title>
</head>
<body>
<h1>Generovaná postupnosť</h1>
<h1>Výsledok postupnosti</h1>
<ul>
    @foreach($sequence as $broj)
        <li>{{ $broj }}</li>
    @endforeach
</ul>
<a href="/profile/edit">Späť</a>

</body>
</html>
