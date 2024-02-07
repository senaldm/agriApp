@extends('layouts.app1')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><p class="font-weight-bold"> <mark> Show User </mark></h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if($user->current_team_id==1)

            <label class="badge badge-success">Admin</label>
        @elseif($user->current_team_id==2)
            <label class="badge badge-success">seller</label>
        @elseif($user->current_team_id==3)
            <label class="badge badge-success">customer</label>
        @elseif($user->current_team_id==4)
            <label class="badge badge-success">Market Contractor</label>
        @endif
        </div>
    </div>

</div>



@endsection
