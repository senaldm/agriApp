@extends('layouts.app1')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


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


    {!! Form::model($product, ['method' => 'PATCH','route' => ['products.update', $product->id]]) !!}



    <div class="row">

       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Name:</strong>
               {!! Form::text('title', null, array('placeholder' => 'Product Name','class' => 'form-control text-xl')) !!}
           </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Category Id:</strong>
               {!! Form::text('category_id', null, array('placeholder' => 'Enter Product Category Id (1-Vegetables, 2-Fruits, 3-Crops, 4-Groceries, 5-Spices, 6-Coconuts)','class' => 'form-control text-xl')) !!}
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Price:</strong>
               {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control text-xl')) !!}
           </div>
       </div>


       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Available Quantity in Kg </strong>
               {!! Form::number('quantity_in_hand', null, array('placeholder' => 'Enter Available stock in hands:','class' => 'form-control text-xl')) !!}
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>User Id: </strong>
               {!! Form::number('user_id', null, array('placeholder' => 'Enter your User ID:','class' => 'form-control text-xl')) !!}
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Contact Number: </strong>
               {!! Form::text('contact_no', null, array('placeholder' => 'Enter your Contact No:','class' => 'form-control text-xl')) !!}
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Product Image:</strong>
               {!! Form::text('featured_image', null, array('placeholder' => 'Paste your Product Image link here:','class' => 'form-control text-xl')) !!}
           </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <button type="submit" class="btn btn-primary active">Submit</button>
       </div>

   </div>
   {!! Form::close() !!}




@endsection
