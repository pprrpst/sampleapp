<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Log;
//test hogeeeeeeeeeeeee

//use App\Http\Services\CalculationService;
use App\Http\Services\CalculationService;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, User $user2, CalculationService $service)
    {
        $this->user = $user;
        $this->user2 = $user2;
//echo ">>>aaa<br>\n";
//print_r($user);
//echo ">>>bbb<br>\n";
//print_r($user2);

        // タイプヒントだけで使える気がする
        // 検証元ネタ：https://www.ritolab.com/entry/108
echo ">>>ccc<br>\n";
print_r($service->add(1,1));
$service2 = app()->make(CalculationService::class);
echo ">>>ccc222<br>\n";
print_r($service->add(1,11));



//        $this->middleware('auth');
    }

    public function search(Request $request)
    {
//        Log::debug(">>".$request);
//        \Log::debug(">>".print_r($request->all()));
//        \Log::debug('here');

//        $result = [
//            'status' => '500',
//            'message' => 'error',
//        ];
//        return ['result' => 1];
//        return ['apple' => 'red', 'peach' => 'pink'];
//        return response()->json(['apple' => 'red', 'peach' => 'pink']);
//        return response()->json(['apple' => 'red', 'peach' => 'pink']);
        $result = array(
            'status' => '500',
            'message' => '使用済み',
        );
//        return view('home');
//        return response()->json($result);
        return ['result' => $result];
//        return 1;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('home');
//        return view('home_top');
        return view('home_top_0');
    }

    public function mock_1()
    {
        return view('home_top_1');
    }
    public function mock_2()
    {
        return view('home_top_2');
    }
    public function mock_3()
    {
        return view('home_top_3');
    }
//    public function mock_4(User $user, User $user2)
    public function mock_4(User $user)
    {
        $user2 = app()->make(User::class);
print_r($user);
echo ">>>222<br>\n";
print_r($user2);
//        print_r($user3);
//        return view('home_top_4');
        return view('home_top_4_2');
    }
    public function mock_5()
    {
        return view('home_top_5');
    }
    public function mock_6()
    {
        return view('home_top_6');
    }
}
