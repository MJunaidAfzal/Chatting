<link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

<x-mail::message>


Email:- {{ $details['email'] }}.

Name:- {{ $details['name'] }}.


Message:- {{ $details['message'] }}.
<br>

<a href="{{ $details['url'] }}">
    <button class="btn btn-primary">Accept Invitaion</button>
</a>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
