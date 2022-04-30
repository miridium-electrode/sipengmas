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
  <link rel="stylesheet" href="{{ asset('css/bs.css') }}">
  <style>
    .filter-hide {
      display: none
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-sm sticky-top bg-primary">
      <div class="container-fluid">
        <a href="#" class="navbar-brand text-white"><span class="text-secondary">SI</span><span>PENGMAS</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
      </div>
    </nav>
  </header>
  <div class="container-fluid">
    <div class="row g-0">
      <div id="filter" class="col-sm-3 m-3">
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
      <div id="content" class="col-sm-8">
        <div class="input-group mt-3 ml-2 mb-3">
          <input type="text" class="form-control">
          <button class="btn btn-outline-dark" type="button">
            <i class="bi bi-search"></i>
          </button>
        </div>
        <button id="filter-toggle" class="btn btn-secondary">
          <i class="bi bi-funnel-fill"></i>
          <span>
            Toggle Filter
          </span>
        </button>
        <div class="table-responsive-sm">
          <table class="table table-bordered m-auto mt-2">
            <thead class="bg-primary text-white">
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
  </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script>
  $("#filter-toggle").click(function() {
    $("#filter").toggleClass("filter-hide")
  });
</script>
</html>