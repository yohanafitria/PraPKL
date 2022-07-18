<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    Hallo Pesanan Anda : {{$material}}
    @if ($material == 'Pasir Urug')
    <br>harga {{$material}} Rp. 50000 
    @elseif ($material == 'Batako besar')
    <br>harga {{$material}} Rp. 30000
    @elseif ($material == 'Bata Merah')
    <br>harga {{$material}} Rp. 40000
    @elseif ($material == 'Batu Apung')
    <br>harga {{$material}} Rp. 65000
    @else
    <br>
    Mohon maaf menu yang anda pilih tidak ada
    @endif <br>
<hr>
    
    Hallo Pesanan Anda : {{$material1}}
    @if ($material1 == 'Pasir Urug')
    <br>harga {{$material1}} Rp. 50000 
    @elseif ($material1 == 'Batako besar')
    <br>harga {{$material1}} Rp. 30000
    @elseif ($material1 == 'Bata Merah')
    <br>harga {{$material1}} Rp. 40000
    @elseif ($material1 == 'Batu Apung')
    <br>harga {{$material1}} Rp. 65000
    @else
    <br>
    Mohon maaf menu yang anda pilih tidak ada
    @endif

</center>
</body>
</html>