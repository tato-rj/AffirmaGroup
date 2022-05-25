@component('mail::message')
# Hi!

We've got a new message:

@component('mail::panel')

<strong>Name</strong><br>{{$request->first_name}} {{$request->last_name}}

<strong>Email</strong><br>{{$request->email}}

<strong>Phone</strong><br>{{$request->phone}}

<strong>Company</strong><br>{{$request->company}}

<strong>Recruitment needs</strong><br>{{implode(', ', $request->recruitment_needs)}}

<strong>Message</strong><br>{{$request->message}}

@endcomponent

Best<br>
{{ config('app.name') }} Team
@endcomponent
