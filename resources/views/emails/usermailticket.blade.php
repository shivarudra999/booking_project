<x-mail::message>
<p>{{$data['name']}}</p><br>
<p>Event Name - {{$data['events_name']}}</p><br>
<p>Event Amount{{$data['amount']}}</p><br>
<p>Event Date{{$data['event_date']}}</p><br>
<p>Event Time{{$data['time']}}</p><br>

Thank You Book Ticket.


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
