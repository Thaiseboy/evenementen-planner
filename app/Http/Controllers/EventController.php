<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest; // Gebruik de StoreEventRequest
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Toon een lijst van alle evenementen.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Toon het formulier voor het aanmaken van een nieuw evenement.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Sla een nieuw evenement op in de database.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreEventRequest $request)
    {
        // Zorg ervoor dat de gebruiker ingelogd is
        if (!auth()->check()) {
            return redirect()->route('events.index')->with('error', 'Je moet ingelogd zijn om een evenement aan te maken.');
        }

        // Verkrijg alle gegevens na validatie
        $eventData = $request->validated();
        $eventData['user_id'] = auth()->id();

        // Sla het evenement op
        Event::create($eventData);

        // Redirect naar de evenementen index met succesbericht
        return redirect()->route('events.index')->with('success', 'Evenement aangemaakt!');
    }

    /**
     * Toon de details van een specifiek evenement.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\View\View
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Toon het formulier om een evenement te bewerken.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\View\View
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Werk de gegevens van een specifiek evenement bij.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreEventRequest $request, Event $event)
    {
        // Werk het evenement bij
        $event->update($request->validated());

        // Redirect naar de evenementen index met succesbericht
        return redirect()->route('events.index')->with('success', 'Evenement bijgewerkt!');
    }

    /**
     * Verwijder een specifiek evenement.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Event $event)
    {
        // Verwijder het evenement
        $event->delete();

        // Redirect naar de evenementen index met succesbericht
        return redirect()->route('events.index')->with('success', 'Evenement verwijderd!');
    }
}