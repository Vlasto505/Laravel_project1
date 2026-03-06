<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Výsledky spracovania</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; color: #333; }
        .result-box { border: 1px solid #ccc; padding: 20px; background-color: #f4f4f4; border-radius: 8px; }
        h1 { color: #2c3e50; }
        .label { font-weight: bold; color: #555; }
        .sequence-list { background: #fff; border-left: 4px solid #3498db; padding: 10px; list-style: none; }
    </style>
</head>
<body>

<div class="result-box">
    <h1>Odoslané údaje</h1>

    <ul>
        <li><span class="label">Meno:</span> {{ $data['name'] }}</li>
        <li><span class="label">Email:</span> {{ $data['email'] }}</li>
        <li><span class="label">Vek:</span> {{ $data['age'] }} ({{ $additional_data['isAdult'] ? 'Dospelý' : 'Maloletý' }})</li>
        <li><span class="label">Rola:</span> {{ $additional_data['roleLabel'] }}</li>

        <li><span class="label">Zručnosti ({{ $additional_data['skillsCount'] }}):</span>
            @if(!empty($data['skills']))
                <ul>
                    @foreach($data['skills'] as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <br><em>Žiadne zručnosti neboli vybrané.</em>
            @endif
        </li>

        <hr>

        <!-- OVDE SE POJAVLJUJE TVOJ BROJ N I NIZ -->
        <li>
            <span class="label">Lucasova postupnosť (začínajúca od n = {{ $data['n'] }}):</span>
            <p><small>Pravidlo: n, n+1, a potom súčet dvoch predošlých.</small></p>
            <ul class="sequence-list">
                @foreach($additional_data['sequence'] as $index => $broj)
                    <li>{{ $index + 1 }}. hodnota: <strong>{{ $broj }}</strong></li>
                @endforeach
            </ul>
        </li>
    </ul>

    <p style="margin-top: 20px;">
        <a href="/profile/edit">← Späť na formulár</a>
    </p>
</div>

</body>
</html>
