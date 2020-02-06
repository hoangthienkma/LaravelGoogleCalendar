<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\GoogleClient;
use Google_Service_Calendar;
use Google_Service_Calendar_EventDateTime;

class GoogleCalendarController extends Controller
{
    protected $client;

    public function __construct(GoogleClient $client)
    {
        $this->client = $client->getClient();
    }

    public function index()
    {
        return view('calendar');
    }

    public function getAttendees($emails) {
    $attendees = [];

    foreach ($emails as $email) {
        if ($email) {
            $attendees[] = [
                'email' => $email
            ];
        }
    }

    return $attendees;
}

    public function createEvent(Request $request) {
    	// dd($request->all());
	    $calendarService = new Google_Service_Calendar($this->client);

	    $emailAttendees[] = ['afdfdf', 'dsfdsfdf', 'afdfdf'];
	    $event = new \Google_Service_Calendar_Event([
	        'summary' => $request->title,
	        'description' => $request->description,
	        'start' => [
	            'dateTime' => $request->start_date
	        ],
	        'end' => [
	            'dateTime' => $request->end_date
	        ],
	        'attendees' => array (
	        	array('email' => 'quyhp@ominext.com'),
    			array('email' => 'quangpt@ominext.com'),
	        )
	    ]);
	    

	    // dd($result = $calendarService->events->insert('primary', $event));
	    $result = $calendarService->events->insert('primary', $event);

	    if(!$result) {
	    	return response()->json(['status' => 'error', 'message' => 'Something went wrong!']);
	    }
	    return response()->json(['status' => 'success', 'message' => "Event created!"]);
	}
}