@extends('admin_template')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
        <!--    <h1 class="m-0 text-dark">Starter Page</h1>  -->

        <a type="button" class="btn btn-block btn-primary" href="{{ route('students.create') }}" > Nuevo</a>

          </div><!-- /.col  data-toggle="modal" data-target="#modal-default" -->
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Evaluaciones</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



  
        <!-- Main content -->
        <div class="content">
      
      <div class="container-fluid">
        <div class="row">
   
     

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif



        
    @if(sizeof($tests) > 0)
        <table class="table table-bordered">
            <tr class="thead-dark">
        
                <th>No</th>
                
                <th>Id</th>
                <th>Name</th>
                <th>Last name</th>
                <th>CI</th>
                <th>Date birth</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($tests as $value)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->last_name_p }}</td>
                    <td>{{ $value->ci }}</td>
                    <td>{{ $value->date_birth }}</td>
                    <td>
                       
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                <!-- <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a> -->
                            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

    


          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- page script -->


@endsection

