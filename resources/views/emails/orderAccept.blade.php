@component('mail::message')
Hi user,
Your order is accepted successfully.


@component('mail::button', ['url' => ''])
check your order


@endcomponent



{{ config('app.name') }}
@endcomponent