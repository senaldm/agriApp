@extends('layout')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price </th>
            <th style="width:8%">Scale</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <p class="btn-holder"><a href="/emptycart" class="btn btn-danger font-weight-bold font-sans btn-block text-xl font-bold" role="button">Empty Cart</a> </p>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('empty'))
                <div class="bg-green-100 rounded-lg py-3 px-6  text-center text-black-700 mb-1 width-180 ml-12 mt-4"  role="alert">
                            <mark class="text-bl"> Oooppps, Your cart is Empty.. </mark>
                      </li>
                  </div>

                    </div>
                @endif
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"> <img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-4">
                                <h4 class="nomargin">{{ $details['name'] }} </h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rs.{{ $details['price'] }}/-</td>
                    <td data-th="Price">{{ $details['description'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total Rs.{{ $total }}/-</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-success" onclick="window.location.href='/checkout'">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',  
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
