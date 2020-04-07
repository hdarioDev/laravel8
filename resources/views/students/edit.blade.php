@extends('admin_template')

@section('content')


     <!-- Main content -->
     <div class="content" style="padding-top: 15px">
      
      <div class="container-fluid">
        <div class="row">



    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                <h3 class="card-title">Editar registro</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
   
              <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
  <div class="column card-body">

  

  
  <div class="form-group">
                <label for="exampleEmail" class="form-label">Nombre</label>
           
       <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
          
                </div>
        
         
                <div class="form-group">
                <label for="exampleEmail" class="form-label">Apellido paterno</label>
                    <input type="text" name="last_name_p" value="{{ $student->last_name_p }}" class="form-control" >
                </div>
          

     
                <div class="form-group">
                      <label for="exampleEmail" class="form-label">Apellido materno</label>
                     <input type="text" name="last_name_m" value="{{ $student->last_name_m }}" class="form-control" >
                </div>

         
  <div class="form-group">
                <label for="exampleEmail" class="form-label">CI</label>
                    <input type="text" name="ci" class="form-control" value="{{ $student->ci }}" >
                </div>
         

  <div class="form-group">
                <label for="exampleEmail" class="form-label">Fecha cumpleaños</label>
                    <input type="text" name="date_birth" class="form-control" value="{{ $student->date_birth }}">
                </div>






  </div>
  <div class="column card-body" >

            
           
  <div class="form-group">
                <label for="exampleEmail" class="form-label">Usuario</label>
                    <input type="text" name="user" class="form-control" value="{{ $student->user }}" placeholder="">
                </div>
         

                <div class="form-group">
                <label for="exampleEmail" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" value="{{ $student->password }}" placeholder="">
                </div>

                <div class="form-group" style="display: none">
                <label for="exampleEmail" class="form-label">Nivel</label>
                    <select class="form-control" id="levels_id" name="levels_id" >
                        @foreach ($levels as $id => $level)                                     
                                <option value="{{$id}}" {{ $student->levels_id == $id ? 'selected="selected"' : '' }} >{{$level}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="display: true">
                <label for="exampleEmail" class="form-label">Genero</label>

                    <select class="form-control" id="genders_id" name="genders_id" >
                        @foreach ($genders as $id => $gender)                                     
                                <option value="{{$id}}"  {{ $student->gender_id == $id ? 'selected="selected"' : '' }}>{{$gender}}</option>
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






