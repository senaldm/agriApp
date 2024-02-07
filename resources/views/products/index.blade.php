@extends('layouts.app1')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align:center"> <b> Products Management Console </b></h2>
            </div>

            <div class="pull-right">


                <a class="btn btn-success" href="{{ url('/image-upload') }}"> Create New Product</a>

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
            <th>Images</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($products as $product)
	    <tr>
	        <td>{{ ++$i }}</td>
            <td><img src="{{ $product->featured_image }}" width="100px"></td>
	        <td>{{ $product->title }}</td>
	        <td>Price  {{ $product->description }}</td>
            <td>{{ $product->price }}</td>
	        <td>
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                    {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger active']) !!}
                    {!! Form::close() !!}

	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $products->links() !!}




@endsection
