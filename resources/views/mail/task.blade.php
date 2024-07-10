<x-mail::message>
# Tasks for the week

The body of your message.

<x-mail::button :url="'https://laravel.com'">
Review Task
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
