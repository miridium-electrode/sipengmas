<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pengmas</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .bg {
            margin: 0;
            width: 100vw;
            height: 100vh;
            display: grid;
            place-items: center;
        }

        .bg .container {
            width: 85%;
            height: 85%;
            display: flex;
            flex-direction: column
        }

        .container .search {
            width: 100%;
            padding: 2em;
        }

        .search input {
            width: 100%;
            padding: .5em;
        }

        .container .row2 {
            display: flex;
            flex-direction: row;
        }

        .row2 .filter {
            width: 30%;
        }

        .row2 .list-pengmas {
            width: 70%;
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="search">
                <input type="search">
            </div>
            <div class="row2">
                <div class="filter">
                    filter
                    @foreach ($prodi as $p)
                        <div>
                            {{ $p->nama_prodi }}
                        </div>
                    @endforeach
                </div>
                <div class="list-pengmas">
                    pengmas
                    @foreach ($pengmas as $p)
                        <div>
                            {{ $p->judul }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>