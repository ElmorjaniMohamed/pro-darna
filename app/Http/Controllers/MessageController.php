<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\Property;

class MessageController extends Controller
{
    public function message(MessageRequest $request, Property $property)
    {
        $validated = $request->validated();

        $message = new Message($validated);
        $message->property()->associate($property);
        $message->save();

        return back()->with('success', 'Your message has been sent successfully');
        
    }
}