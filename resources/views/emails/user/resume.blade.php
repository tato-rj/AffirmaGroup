@component('mail::message')
# Hi {{$name}}

We have received your resume and will be in touch soon.

Best<br>
{{ config('app.name') }} Team
@endcomponent
