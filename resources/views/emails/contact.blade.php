@component('mail::message')
# Introduction

<h3>the user name has been sent message is ::{{$name}} in our website</h3>
<h4>the phone is {{$phone}}</h4>
<p>the message is {{$message}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

