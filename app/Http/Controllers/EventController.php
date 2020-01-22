<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'event_name'    => 'required',
            'from_date'     => 'required',
            'to_date'       => 'required|after_or_equal:to_date',
            'from_time'     => 'required',
            'to_time'       => 'required|after_or_equal:from_time',
            'dow'           => 'required'
        ];
    
        $customMessages = [
            'event_name.required' => 'Event Name is required',
            'from_date.required' => 'Start Date is required',
            'to_date.required' => 'End Date is required',
            'from_time.required' => 'Time From is required',
            'to_time.required' => 'Time To is required',
            'dow.required' => 'No selected Day of Week',
        ];
    
        $this->validate($request, $rules, $customMessages);
              

     
        $event = new Event;
        $event->event_name  = $request->event_name;
        $event->from_date   = $request->from_date;
        $event->to_date     = date('Y-m-d', strtotime($request->to_date.' +1 day'));
        $event->from_time   = $request->from_time;
        $event->to_time     = $request->to_time;
        $event->dow         = implode(',',$request->dow);
        $event->save();
        
        
    }

    public function messages()
    {
        return [
            'from_date.required' => 'A title is required',
            'to_date.required'  => 'A message is required',
        ];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $allEvents = [];
        foreach ($event->get() as $key => $value) {
            $allEvents[] = ['title' => $value->event_name,
                            'startRecur' => $value->from_date,
                            'endRecur' => $value->to_date,
                            'startTime' => $value->from_time,
                            'endTime' => $value->to_time,
                            'daysOfWeek' => array_map('intval',explode(',',$value->dow))
                            ];
        }
        return $allEvents;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
