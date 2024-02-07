@extends('layouts.app1')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> <b> Users Management Console </b></h2>
        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            <a class="btn btn-warning" href="{{ route('chart-js') }}"> View New Users </a>
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
   <th>Contact NO</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->contact_no }}</td>
    <td>{{ $user->email }}</td>
    <td>

        @if($user->current_team_id==1)

            <label class="badge badge-success">admin</label>
        @elseif($user->current_team_id==2)
            <label class="badge badge-success">seller</label>
        @elseif($user->current_team_id==3)
            <label class="badge badge-success">customer</label>
        @elseif($user->current_team_id==4)
            <label class="badge badge-success">Market Contractor</label>
        @endif

    </td>

    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>



        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger active']) !!}

        {!! Form::close() !!}


    </td>

  </tr>

 @endforeach

</table>


{!! $data->render() !!}



@endsection
