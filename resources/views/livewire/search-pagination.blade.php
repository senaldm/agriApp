
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Product Image</th>
                    <th class="text-center">Seller Contact Number</th>
                    <th class="text-center">Product Price</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>
                        {{ $product->title }}

                    </td>
                    <td class="text-center">
                        <img class="aspect-video bg-cover rounded-t-md " src="{{$product->featured_image}}" height= 100px width=100px  />
                    </td>
                    <td class="text-center">
                        {{ $product->contact_no }}
                    </td>
                    <td class="text-center">
                        Rs.{{ $product->price }}/-
                    </td>
                    @if ($product->pricingStructureLabel != 'BID')
                    <td class="text-center">
                        <div class="flex justify-end mt-5 absolute w-full bottom-0 left-0 pb-5 ">
                            <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-xl font-bold" role="button">Add to Cart</a> </p>
                        </div>
                    </td>
                    @else
                    <td class="text-center">
                        <div class="flex justify-end mt-5 absolute w-full bottom-0 left-0 pb-5 ">
                            <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-xl font-bold" role="button">Bid Now</a> </p>
                        </div>
                    </td>
                    @endif

                </tr>
                @endforeach
            </table>
            {{ $products->links() }}
        </div>
    </div>
</div>

