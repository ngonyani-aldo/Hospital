<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\doctor;

use App\Models\Appointment;

class HomeController extends Controller
{
    //
    public function redirect(){

    	if (Auth::id())
    	 {
    		if (Auth::user()->usertype=='0')
             {
                $doctor = doctor::all();
    			return view('user.home',compact('doctor'));
    		}

    		else
            {
    			return view('admin.home');
    		}
    	}

    	else{
    		return redirect()->back();
    	}
    }

    public function index()
    {
        if (Auth::id()) 
        {
            return redirect('home');
        }

        else

        {
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
        }
    }

    public function appointment(Request $Request)
    {
        $data = new appointment;

        $data->name=$Request->name;

        $data->email=$Request->email;

        $data->date=$Request->date;

        $data->phone=$Request->number;

        $data->message=$Request->message;

        $data->doctor=$Request->doctor;

        $data->status='In progress';

        if(Auth::id()) 
        {

            $data->user_id=Auth::user()->id;
            
        }

        $data->save(); 

        return redirect()->back()->with('message','Your Appointment request Successful . We will contact with you soon');       


    }

    public function myappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {

                $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));

            }
            
        }

        else
        {
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();

    }
}
