@component('mail::message')
# Hi!

An applicant has just uploaded a new resume.

@component('mail::panel')

<strong>Name</strong><br>{{$resume->first_name}} {{$resume->last_name}}

<strong>Email</strong><br>{{$resume->email}}

<strong>Employment type</strong><br>{{implode(', ', $resume->employment_type)}}

<strong>Employment position</strong><br>{{implode(', ', $resume->employment_position)}}

<strong>Additional Info</strong><br>{{$resume->additional_info}}

@endcomponent

@component('mail::button', ['url' => route('resume.download', $resume)])
Download the resume
@endcomponent

Best<br>
{{ config('app.name') }} Team
@endcomponent
