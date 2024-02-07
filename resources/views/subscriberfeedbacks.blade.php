@extends('layouts.app1')
@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
       <th>Message ID</th>
       <th>Feedbacker Name</th>
       <th>Feedbacker Email</th>
       <th> Feedback</th>
       <th> Feedback uploaded on</th>
    </tr>

      @foreach ($messages as $message)
      <tr>
          <td>{{ $message->id}}</td>
          <td>{{ $message->name }}</td>
          <td>{{ $message->email }}</td>
          <td>{{ $message->feedback }}</td>
          <td>{{ $message->created_at }}</td>

      </tr>

      @endforeach

    </table>

@endsection
