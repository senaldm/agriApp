@extends('layouts.app1')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> <b> Role Management Console </b> </h2>
        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>

        </div>
    </div>
</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>

    @foreach ($roles as $key => $role)

    <tr>


        <td>{{ $role->id}}</td>
        <td>{{ $role->name }}</td>

        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>



                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger active']) !!}
                {!! Form::close() !!}


        </td>
    </tr>

    @endforeach
    {!! $roles->render() !!}
</table>





@endsection
