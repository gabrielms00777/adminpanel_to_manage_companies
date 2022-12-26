@extends('dashboard.base')

@section('content')
   
<div class="content-wrapper" style="min-height: 2080.32px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Empresas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Empresas</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ route('company.create') }}" class="btn btn-primary">
                <h3 class="card-title">Adicionar empresa</h3>
              </a>

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
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Site</th>
                    <th>Logo</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($companies as $company)         
                  <tr>
                    <td>{{ $company->id }}</td>
                    <td><a href="{{ route('company.show',$company->id) }}">{{ $company->name }}</a></td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website }}</td>
                    <td>
                        @if ($company->logo)
                          <img style="width: 40px;height: 40px; border-radius: 20px" src="{{ asset('storage/'.$company->logo) }}" alt="{{ $company->name }}">
                        @endif
                    </td>
                    <td>
                      <button class="btn btn-warning btn-sm" disabled href=""><i class="fas fa-edit"></i></button> <button disabled class="btn btn-danger btn-sm" href=""><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
              {{ $companies->links() }}
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div> --}}
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection