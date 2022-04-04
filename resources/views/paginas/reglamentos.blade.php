@extends('principal')
@section('content')

<div class="content-wrapper" style="min-height: 1602px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reglamentos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Reglamentos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card m-2">

      <div class="card-header p-2 migasPan">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link tab active" href="#activity" data-toggle="tab">Principal</a></li>
          <li class="nav-item"><a class="nav-link tab" href="#timeline" data-toggle="tab">Mis Cursos</a></li>
          <li class="nav-item"><a class="nav-link tab" href="#settings" data-toggle="tab">Anuncios</a></li>
        </ul>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.content -->
  </div>
  @endsection