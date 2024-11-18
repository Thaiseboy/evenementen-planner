@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-200">Evenementen</h1>

    <a href="{{ route('events.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded mb-6 inline-block">Nieuw Evenement</a>

    <table class="min-w-full bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg">
        <thead class="bg-gray-200 dark:bg-gray-900">
            <tr>
                <th class="py-3 px-4 text-left">Titel</th>
                <th class="py-3 px-4 text-left">Datum</th>
                <th class="py-3 px-4 text-left">Locatie</th>
                <th class="py-3 px-4 text-left">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr class="border-b border-gray-300 dark:border-gray-600">
                <td class="py-3 px-4">{{ $event->title }}</td>
                <td class="py-3 px-4">{{ $event->event_date }}</td>
                <td class="py-3 px-4">{{ $event->location }}</td>
                <td class="py-3 px-4">
                    <a href="{{ route('events.edit', $event->id) }}" class="text-blue-500 hover:text-blue-400">Bewerken</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-400">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection