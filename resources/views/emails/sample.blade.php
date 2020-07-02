@component('mail::message')
# Welcome {{ $profile->name }},

The body of your message.
<p>{{ $profile->token }}</p>
@component('mail::button', ['url' => ''])
Click Here
@endcomponent

Thanks,<br>
Injamamul Haque
@endcomponent
