<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        
        $user = User::where('email',$request->email)->first();
    
    	    	if($user == null){
    	    		\Session::flash('error', 'Email tidak terdaftar');
    	    			return redirect('/login');
    	    		// return response()->json(['status'=>true,'value'=>0,'message'=>'Email tidak terdaftar!']);
    	    		// return response()->json();
    	    	}
    	    		if(\Hash::check($request->password, $user->password)){
    	    			// \Session::put('user', $user);
    	    			// return redirect('/home');
    	    			// return response()->json(['status'=>true,'value'=>1,'message'=>'Anda Berhasil Login!', 
    	    			// 	'id'=>(string)$user->id,
    	    			// 	'fullname'=>$user->fullname,
    	    			// 	'lastname'=>$user->lastname,
    	    			// 	'username'=>$user->username,
    	    			// 	'email'=>$user->email,
    	    			// 	'img'=>$user->img,
    	    			// 	'token'=>$user->token,
    	    			// 	'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
    	    			// ]);
                        if($user->hak_akses == 'superadmin'){
                            \Session::put('admin', $user);
                            return redirect(url('/admin'));
                        } else if($user->hak_akses == 'superadmin'){
                            \Session::put('guru', $user);
                            return redirect(url('/guru'));
                        } else {
                            \Session::put('siswa', $user);
                            return redirect(url('/siswa'));
                        }
    	    		} else {
    	    			\Session::flash('error', 'Email atau password salah');
    	    			return redirect('/login');
    	    			// return response()->json(['status'=>true,'value'=>2,'message'=>'Email atau password salah!']);
    	    		}
        // $input = $request->all();
   
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
   
        // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        // {
        //     if (auth()->user()->hak_akses == 'superadmin') {
        //         return redirect()->route('superadmin');
        //     }elseif (auth()->user()->hak_akses == 'guru') {
        //         return redirect()->route('guru');
        //     }elseif (auth()->user()->hak_akses == 'siswa') {
        //         return redirect()->route('siswa');
        //     }
        //     else{
        //         return redirect()->route('home');
        //     }
        // }else{
        //     return redirect()->route('login')
        //         ->with('error','Email-Address And Password Are Wrong.');
        // }

          
    }
}
