@component('mail::message')
Hi,
Your product is ordered by a customer.


@component('mail::button', ['url' => ''])
check orders.


@endcomponent



{{ config('app.name') }}
@endcomponent