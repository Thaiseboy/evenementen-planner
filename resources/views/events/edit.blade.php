@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-gray-100 dark:bg-gray-800 shadow-md rounded-lg p-6 mt-6">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 dark:text-gray-200">Evenement Bewerken</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Titel</label>
            <input type="text" name="title" value="{{ $event->title }}" class="w-full p-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Datum</label>
            <input type="date" name="event_date" value="{{ $event->event_date }}" class="w-full p-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Tijd</label>
            <input type="time" name="event_time" value="{{ $event->event_time }}" class="w-full p-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Locatie</label>
            <input type="text" name="location" value="{{ $event->location }}" class="w-full p-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Beschrijving</label>
            <textarea name="description" class="w-full p-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg focus:outline-none focus:border-blue-500">{{ $event->description }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg">Bijwerken</button>
        </div>
    </form>
</div>
@endsection