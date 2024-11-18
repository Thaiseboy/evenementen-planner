<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Bepalen of de gebruiker geautoriseerd is om deze aanvraag te doen.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Zorg ervoor dat de gebruiker geautoriseerd is om evenementen aan te maken
    }

    /**
     * Verkrijg de validatieregels die moeten worden toegepast op de aanvraag.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ];
    }
}