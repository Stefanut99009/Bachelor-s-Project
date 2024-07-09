<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logare;
use App\Models\Event;

class FullCalenderController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('full-calendar');
    }

    public function action(Request $request)
    {
        $email = null;
        if ($request->session()->has('email')) {
            $email = $request->session()->get('email');
        } else if ($request->session()->get('email2')) {
            $email = $request->session()->get('email2');
        }
        $user = Logare::where('email', $email)->firstOrFail();

        if ($request->ajax()) {
            if ($request->type == 'add') {
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                    'userid' => $user->id
                ]);

                return response()->json($event);
            }

            if ($request->type == 'update') {
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end
                ]);

                return response()->json($event);
            }

            if ($request->type == 'delete') {
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            }
        }
    }
}
?>
