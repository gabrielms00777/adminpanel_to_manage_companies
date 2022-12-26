@extends('dashboard.base')

@section('content')
   
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Cadastrar Empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">Nome</label>
                          <input value="{{ old('name') }}" type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Digite o nome da empresa...">
                          @if ($errors->has('name')) 
                            <span class="error invalid-feedback">{{ $errors->first('name') }}</span> 
                          @endif
                        </div>

                        <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          {{-- <input type="email" class="form-control" id="email" placeholder="Enter email"> --}}
                          <input value="{{ old('email') }}" type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="exampleInputEmail1" placeholder="Email da empresa" >
                          @if ($errors->has('email')) 
                            <span class="error invalid-feedback">{{ $errors->first('email') }}</span> 
                          @endif
                        </div>

                        <div class="form-group col-md-6">
                          <label for="website">Site</label>
                          <input value="{{ old('website') }}" type="text" name="website" class="form-control" id="website" placeholder="Digite o website da empresa">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="exampleInputFile">Logo</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Escolhe uma foto</label>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection