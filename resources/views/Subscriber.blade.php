@extends('layouts.app1')
@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
       <th>Subscriber ID</th>
       <th>Subscriber Email</th>
       <th>Subscriber created on</th>
    </tr>

      @foreach ($contacts as $contact)
      <tr>
          <td>{{ $contact->id}}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->created_at }}</td>

      </tr>

      @endforeach

    </table>

@endsection
