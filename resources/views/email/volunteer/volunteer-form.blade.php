@component('mail::message')
# Thank you for contacting us

<strong>Name</strong> {{$data['name']}}
<strong>Email</strong> {{$data['email']}}

<strong>State</strong> {{$data['state']}}
@endcomponent
