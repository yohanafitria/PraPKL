<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>
        <b>Stasiun Televisi</b>
    </legend>
    @foreach ($tv as $data)
    @php
        $total = 0;
    @endphp
    Stasiun: {{ $data['stasiun'] }} <br>
    Siaran: {{ $data['siaran'] }} <br>
    Jam Tayang : {{ $data['jam_tayang'] }} <br>
    Tanggal Tayang : {{ $data['tgl_tayang'] }} <br>
    <hr>
    @endforeach
</fieldset>
</body>
</html>