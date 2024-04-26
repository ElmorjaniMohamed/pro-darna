<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        $agentId = Auth::id();

        $messages = Message::whereHas('property', function ($query) use ($agentId) {
            $query->where('user_id', $agentId);
        })->paginate(8);

        return view('agent.messages.index', compact('messages'));
    }

    public function destroy($id)
    {
        try {
            Message::destroy($id);
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to delete message: ' . $e->getMessage()], 500);
        }
    }
}