@extends('layouts.app2')
@section('content')

<!DOCTYPE html>
<head>

    @livewireStyles

</head>
<body>
<div class="container">

    <div class="card">
      <div class="card-header font-weight-bold ">
      </div>
      <div class="card-body">
        @livewire('file-upload')
      </div>
    </div>

</div>

</body>

@livewireScripts

</html>
@endsection
