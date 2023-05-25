<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h1> Data Mobil </h1>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Mobil</th>
                    <th>Nama Merk</th>
                    <th>CC</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataMobil as $mobil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$mobil['namaMobil']}}</td>
                        <td>{{$mobil['merkMobil']}}</td>
                        <td>{{$mobil['cc']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>