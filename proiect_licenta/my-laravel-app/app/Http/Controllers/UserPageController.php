<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Logare;
use App\Models\Event;

class UserPageController extends Controller
{
    public function userpage(Request $request){

        $email = null;
        if ($request->session()->has('email')) {
            $email = $request->session()->get('email');
        } else if ($request->session()->get('email2')) {
            $email = $request->session()->get('email2');
        }
        $user=Logare::where('email',$email)->firstOrFail();
        $imageUrl = Storage::url($user->image);
        $backgroundImageUrl = Storage::url($user->background_image);

        // Update user experience


        return view('userpage', compact('user', 'imageUrl', 'backgroundImageUrl'));
    }
    function ceva(Request $request){
        $specificTitles = [
            "Cooking",
            "cooking",
            "learning",
            "Learning",
            "date",
            "Date",
            "Work",
            "work",
            "Sleep",
            "sleep",
            "exercise",
            "Exercise"
        ];
        $specificExperience = [
            100,
            120,
            144,
            173,
            208,
            250,
            300,
            360,
            432,
            518,
            622,
            746,
            895,
            1074,
            1289,
            1547,
            1856,
            2227,
            2672,
            3206,
            3847,
            4616,
            5539,
            6647,
            7976,
            9571,
            11485,
            13782,
            16538,
            19846,
            23815,
            28578,
            34294,
            41153,
            49384,
            59261,
            71113,
            85336,
            102403,
            122884,
            147461,
            176953,
            212344,
            254813,
            305776,
            366931,
            440317,
            528380,
            634056,
            760867,
            913040,
            1095648,
            1314778,
            1577734,
            1893281,
            2271937,
            2726324,
            3271589,
            3925907,
            4711088,
            5653306,
            6783967,
            8140760,
            9768912,
            11722694,
            14067233,
            16880680,
            20256816,
            24308179,
            29169815,
            35003778,
            42004534,
            50405441,
            60486529,
            72583835,
            87100602,
            104520722,
            125424866,
            150509839,
            180611807,
            216734168,
            260081002,
            312097202,
            374516642,
            449419970,
            539303964,
            647164757,
            776597708,
            931917250,
            1118300700,
            1341960840,
            1610353008,
            1932423610,
            2318908332,
            2782689998,
            3339227998,
            4007073598,
            4808488318,
            5770185982,
            6924223178,
            8309067814,
            9970881377,
            11965057652,
            14358069182,
            17229683018,
            20675619622,
            24810743546,
            29772892255,
            35727470706,
            42872964847,
            51447557816,
            61737069379,
            74084483255,
            88901379906,
            106681655887,
            128017987064,
            153621584477,
            184345901372,
            221215081646,
            265458097975,
            318549717570,
            382259661084,
            458711593301,
            550453911961,
            660544694353,
            792653633224,
            951184359869,
            1141421231843,
            1369705478212,
            1643646573854,
            1972375888625,
            2366851066350,
            2840221279620,
            3408265535544,
            4089918642653,
            4907902371184,
            5889482845421,
            7067379414505,
            8480855297406,
            10177026356887,
            12212431628264,
            14654917953917,
            17585901544700,
            21103081853640,
            25323698224368,
            30388437869242,
            36466125443090,
            43759350531708,
            52511220638050,
            63013464765660,
            75616157718792,
            90739389262550,
            108887267115060,
            130664720538072,
            156797664645686,
            188157197574823,
            225788637089788,
            270946364507746,
            325135637409295,
            390162764891154,
            468195317869385,
            561834381443262,
            674201257731914,
            809041509278297,
            970849811133956,
            1165019773360747,
            1398023728032896,
            1677628473639475,
            2013154168367370,
            2415785002040844,
            2898942002449013,
            3478730402938816,
            4174476483526579,
            5009371780231895,
            6011246136278274,
            7213495363533929,
            8656194436240714
        ];
        $email = null;
        if ($request->session()->has('email')) {
            $email = $request->session()->get('email');
        } else if ($request->session()->get('email2')) {
            $email = $request->session()->get('email2');
        }

        $user=Logare::where('email',$email)->firstOrFail();

        $data = Event::select('id', 'userid', 'title', 'start', 'end')
        ->where('userid', $user->id)
        ->get();;


        $filteredData = $data->filter(function ($event) use ($specificTitles) {

            return in_array($event->title, $specificTitles);

        });


        if ($filteredData->isNotEmpty()) {

            $user->experience += 100;

            $filteredExperience = collect($specificExperience)->filter(function ($event) use ($user) {
                return $user->experience > $event;
            });
            $count=$filteredExperience->count();

            $user->lvl=1;
            $user->lvl+=$count;

            $user->save();
        }


        return redirect()->route('userpage');
    }
}
