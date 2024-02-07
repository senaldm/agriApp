@extends('layouts.app2')
@section('content')

<table class="table">
    <thead class="thead-dark">
    <tr>
       <th> <p class="text-center"> Product ID</th>
       <th> <p class="text-left"> Product Name</th>
       <th> <p class="text-left">  Available Quantity</th>
        <th> <p class="text-left"> Product Pricing Structure </th>
       <th> <p class="text-left"> Product Uploaded Date </th>
    </tr>


      @foreach ($products as $product)
      @if (($product->user_id ==Auth::user()->id ))
      <tr>
          <td> <p class="text-center"> {{ $product->id}}</td>
          <td> <p class="text-left"> {{ $product->title }}  </td>
          <td><p class="text-center"> {{ $product->quantity_in_hand }} </p> </td>
          <td>
          <?php
          if($product->pricing_structure_type=='App\Models\Offer')
            {
                $product->pricing_structure_type='OFFER';
            }

             else if($product->pricing_structure_type=='App\Models\Bid')
            {
                $product->pricing_structure_type='BID';
            }
            else if ($product->pricing_structure_type=='App\Models\Deal')
            {
                $product->pricing_structure_type='DEAL';
            }
            ?>

            <p class="text-center">  </p> {{$product->pricing_structure_type}}
        </td>
          <td><p class="text-left"> {{ $product->created_at }} </p> </td>
      </tr>
        @endif
          @endforeach

        </table>

    @endsection
