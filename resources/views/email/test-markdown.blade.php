@component('mail::message')
# Introduction

The body of your message.
-one
-two
-nine
-ten

@component('mail::button', ['url' => 'http://laracast.com'])
Laracast Here
@endcomponent

@component('mail::panel',['url' => ''])
Hellooooo

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
