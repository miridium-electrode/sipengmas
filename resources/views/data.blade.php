<!--
{{-- @extends('layouts.data') --}}
{{-- @section('contain') --}}
    <div class="container-fluid">
        <form class="form-group form-search m-auto mt-2">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-1 small" placeholder="Search"
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <button class="btn btn-warning mt-2" type="button" data-toggle="collapse" data-target="#collapseFilter"
    aria-expanded="true" aria-controls="collapseFilter">
        <a>Filter</a>
    </button>
    <table class="table table-bordered m-auto mt-2">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul</th>
            <th scope="col">Ketua</th>
            <th scope="col">Anggota</th>
            <th scope="col">Periode</th>
            <th scope="col">Dana</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Lorem</td>
            <td>Ipsum</td>
            <td>Lorem</td>
            <td>Ipsum</td>
            <td>5000</td>
          </tr>
        </tbody>
      </table>
    </div>

    </div>
{{-- @endsection --}}
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Pengmas</title>
  <style>
    body {
      --our-blue: #003899;
      --our-yellow: #E5CD17;
    }

    .bac-color {
      background-color: var(--our-blue);
    }

    thead{
      background-color: blue;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bac-color">
      <div class="container-fluid">
        <a href="#" class="navbar-brand text-white"><span style="color: var(--our-yellow);">SI</span><span>PENGMAS</span></a>
      </div>
      <div class="d-flex">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-nowrap text-white">Data Pengmas</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-nowrap text-white">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container-fluid">
    <div class="row">
      <div id="filter" class="col-3 m-3">
        <div class="text-dark">
          <h5>Filter Pengmas</h5>
        </div>
        <div class="text-dark ml-2">
            <h6>Tahun</h6>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            2022
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            2021
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            2020
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            2019
            </label>
        </div>
        <div class="text-dark ml-2 mt-2">
            <h6>Prodi</h6>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                D3
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                D4
            </label>
        </div>
        <div class="text-dark ml-2 mt-2">
            <h6>Jurusan</h6>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Informatika
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Komputer
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Elektronika
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Elektro Industri
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Telekomunikasi
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Sis. Pembangkit Energi
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Teknologi Game
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Multimedia Broadcasting
            </label>
        </div>
        <div class="form-check ml-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Mekatronika
            </label>
        </div>
      </div>
      <div id="content" class="col-8">
        <div class="input-group mt-3 ml-2 mb-3">
          <input type="text" class="form-control">
          <button class="btn btn-outline-secondary" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </div>
        <button style="background-color: var(--our-yellow);" class="btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
          </svg>
          <span>
            Toggle Filter
          </span>
        </button>
        <table class="table table-bordered m-auto mt-2">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Judul</th>
              <th scope="col">Ketua</th>
              <th scope="col">Anggota</th>
              <th scope="col">Periode</th>
              <th scope="col">Dana</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Lorem</td>
              <td>Ipsum</td>
              <td>Lorem</td>
              <td>Ipsum</td>
              <td>5000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>