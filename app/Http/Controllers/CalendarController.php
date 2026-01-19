<?php

namespace App\Http\Controllers;

use App\Models\BookingEvent; 
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $events = BookingEvent::where('status', 'published') 
            ->get();

        $events = $events->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title, 
                'description' => $event->description,
                'location' => $event->location,
                'start' => $event->starts_at,
                'end' => $event->ends_at,
                'color' => $event->color,
            ];
        });

        $blogs = \App\Models\Blog::latest()->take(3)->get();

        return view('calendar', compact('events', 'blogs'));
    }
}