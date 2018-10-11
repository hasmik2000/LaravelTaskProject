@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
    <strong>{{ $task->title }} </strong> created successfully
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
