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

   
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Cadastrar Funcionario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('employee.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="name">Empresa</label>
                          <select name="company_id" class="form-control">
                            <option disabled>Escolha uma Empresa</option>
                            @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                          </select>
                          @if ($errors->has('company_id')) 
                            <span class="error invalid-feedback">{{ $errors->first('company_id') }}</span> 
                          @endif
                        </div>
                        <div class="form-group col-md-6">
                          <label for="name">Primeiro Nome</label>
                          <input value="{{ old('first_name') }}" type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name" placeholder="Digite o nome...">
                          @if ($errors->has('first_name')) 
                            <span class="error invalid-feedback">{{ $errors->first('first_name') }}</span> 
                          @endif
                        </div>
                        <div class="form-group col-md-6">
                          <label for="email">Sobrenome</label>
                          <input value="{{ old('last_name') }}" type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" placeholder="Digite o sobrenome..." >
                          @if ($errors->has('last_name')) 
                            <span class="error invalid-feedback">{{ $errors->first('last_name') }}</span> 
                          @endif
                        </div>
                        <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          {{-- <input type="email" class="form-control" id="email" placeholder="Enter email"> --}}
                          <input value="{{ old('email') }}" type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="exampleInputEmail1" placeholder="Digite o email" >
                          @if ($errors->has('email')) 
                            <span class="error invalid-feedback">{{ $errors->first('email') }}</span> 
                          @endif
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="name">Telefone</label>
                          <input value="{{ old('phone') }}" type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" placeholder="Digite o telefone">
                          @if ($errors->has('phone')) 
                            <span class="error invalid-feedback">{{ $errors->first('phone') }}</span> 
                          @endif
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