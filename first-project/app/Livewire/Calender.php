<?php





// new code


namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Calender extends Component
{

    public function newEvent($name, $startDate, $endDate)
    {

        // Parse ISO 8601 datetime strings and convert to MySQL format
        $startDateTime = Carbon::parse($startDate)->toDateTimeString();
        $endDateTime = Carbon::parse($endDate)->toDateTimeString();

        $validated = Validator::make(
            [
                'name' => $name,
                'start_time' => $startDateTime,
                'end_time' => $endDateTime,
            ],
            [
                'name' => 'required|min:1|max:40',
                'start_time' => 'required',
                'end_time' => 'required',
            ]
        )->validate();

        $event = Event::create(
            $validated
        );

        

        return $event->id;
    }

    public function updateEvent($id, $name, $startDate, $endDate)
    {

        // Parse ISO 8601 datetime strings and convert to MySQL format
        $startDateTime = Carbon::parse($startDate)->toDateTimeString();
        $endDateTime = Carbon::parse($endDate)->toDateTimeString();

        $validated = Validator::make(
            [
                'start_time' => $startDateTime,
                'end_time' => $endDateTime,
            ],
            [
                'start_time' => 'required',
                'end_time' => 'required',
            ]
        )->validate();

        Event::findOrFail($id)->update($validated);
    }

    public function render()
    {
        $events = [];

        foreach (Event::all() as $event) {
            $start = Carbon::parse($event->start_time)->toIso8601String();
            $end = Carbon::parse($event->end_time)->toIso8601String();

            $events[] =  [
                'id' => $event->id,
                'title' => $event->name,
                'start' => $start,
                'end' => $end,
            ];
        }

        return view('livewire.calender', [
            'events' => $events
        ]);
    }
}