<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Daftar Pengmas</title>
</head>
<body class="m-0">
    <x-topnav>
        <input type="text" class="mx-2">
        <a href="{{ url('/') }}" class="text-white px-2">Home</a>
        <a href="{{ url('/pengmas') }}" class="text-white px-2">Pengmas</a>
    </x-topnav>
    <div class="p-4 flex">
        <div class="p-2">
            <div class="my-2">
                <div class="text-2xl">Prodi</div>
                <ul>
                    @foreach ($prodi as $p)
                        <li>{{ $p->nama_prodi }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="my-2">
                <div class="text-2xl">
                    Periode
                </div>
                <ul>
                    @foreach ($periode as $p)
                        <li>{{ $p->tahun }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="p-2">
            <div>
                @foreach ($pengmas as $p)
                    <div class="flex">
                        {{ $p->judul }}
                        <select>
                            @foreach ($p->pegawai as $pe)
                                <option>{{ $pe->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>