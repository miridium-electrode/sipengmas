@extends('layouts.data')
@section('contain')
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
@endsection
