@extends('admin_template')

@section('content')

        <!-- Main content -->
        <div class="content" style="padding-top: 15px">
      
      <div class="container-fluid">
        <div class="row">
   

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    



<!-- left column -->
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo registro</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="row">
  <div class="column card-body">

  

  
  <div class="form-group">
                <label for="exampleEmail" class="form-label">Nombre</label>
           
                    <input type="text" class="form-control" name="name" >
          
                </div>
        
         
                <div class="form-group">
                <label for="exampleEmail" class="form-label">Apellido paterno</label>
                    <input type="text" name="last_name_p" class="form-control" >
                </div>
          

     
                <div class="form-group">
                <label for="exampleEmail" class="form-label">Apellido materno</label>
                    <input type="text" name="last_name_m" class="form-control" >
                </div>

         
  <div class="form-group">
                <label for="exampleEmail" class="form-label">CI</label>
                    <input type="text" name="ci" class="form-control" >
                </div>
         

  <div class="form-group">
                <label for="exampleEmail" class="form-label">Fecha cumpleaños</label>
                    <input type="text" name="date_birth" class="form-control" >
                </div>






  </div>
  <div class="column card-body" >

            
           
  <div class="form-group">
                <label for="exampleEmail" class="form-label">Usuario</label>
                    <input type="text" name="user" class="form-control" placeholder="">
                </div>
         

                <div class="form-group">
                <label for="exampleEmail" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="">
                </div>
   
                <div class="form-group">
                <label for="exampleEmail" class="form-label">Nivel</label>
                    <select class="form-control" id="levels_id" name="levels_id" >
                        @foreach ($levels as $id => $level)                                     
                                <option value="{{$id}}">{{$level}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                <label for="exampleEmail" class="form-label">Genero</label>

                    <select class="form-control" id="genders_id" name="genders_id" >
                        @foreach ($genders as $id => $gender)                                     
                                <option value="{{$id}}">{{$gender}}</option>
                        @endforeach
                    </select>
                    
                </div>
  </div>
</div>

        
 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>

                
                  <a class="btn btn-default" href="{{ route('students.index') }}"> Volver</a>

                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@endsection