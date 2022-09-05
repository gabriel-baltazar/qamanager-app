@extends('layouts.app')

@section('title')
Reports
@stop


@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-dark">
      <div class="card-header">
        <h3 class="card-title">Reports</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Cliente</th>
              <th>Data</th>
              <th>Usuario</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

    </div>

  </div>
</div>
@stop

@section('js')
<script src="{{ asset('js/reportsFunctions.js') }}"></script>
@stop