<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class ApiController extends Controller
{ 
    use ApiResponse;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getDateUtc(Request $request)
    {
        $rules = [
            'timezone' => 'required',
            'time' => 'required|date_format:H:i:s'
        ];

        $this->validate($request, $rules);

        //get request params
        $time = $request->input('time');
        $timezone = $request->input('timezone');

        // Instance of date
        $date = gmdate('d/m/Y H:i:s', strtotime($time));

        // Instace of timezone
        $timezone = new DateTimeZone($timezone);

        // Create new Datetime 
        $newDatetime = new DateTime($date);
        $newDatetime->setTimezone($timezone);

        //response
        $response = [
            'timezone' => 'UTC',
            'time' => $newDatetime->format('H:i:s')
        ];

        return $this->successResponse($response);
    }
}
