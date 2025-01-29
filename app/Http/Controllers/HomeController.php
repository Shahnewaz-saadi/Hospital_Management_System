<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\payment;
use App\Models\userpayment;

use App\Models\Doctor;

use App\Models\Appoinment;

class HomeController extends Controller
{
    public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {

                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }

            else
            {
                return view('admin.home');
            }


        }

        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
        $doctor = doctor::all();

        return view('user.home',compact('doctor'));
        }
    }


    public function appoinment(Request $request)

    {
        $data = new appoinment;
// dd($request->all());




        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->status= 'In progress';

        if(Auth::id())
        {
             $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Submited Successfully. We will Contract with You soon.');

    }

    public function myappointment()
    {

        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appoinment::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));
        }
        else {
            return redirect()->back();
        }

    }

    public function cancel_appoint($id)
    {

        $data=appoinment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function about()
    {

        return view('user.about');
    }

    public function doctor()
    {

        return view('user.doctors');
    }

    public function contract()
    {

        return view('user.contract');
    }


    // public function userPayment(Request $request)
    // {

    //    //dd($request->all());
    //    if (!Auth::check()) {
    //     return redirect()->back();
    // }

    // $check = Payment::where('token_name', $request->name)
    //     ->select('token_amount')
    //     ->first(); // Use first() to get a single result

    // if ($check) {
    //     userpayment::create([
    //         'amount' => $check->token_amount
    //     ]);
    //     toastr()->success('Payment successfully!');
    //     $check->delete();

    //     return redirect()->back()->with('message', 'Payment successfully');

    // } else {
    //     // Handle the case where the payment information wasn't found
    //     toastr()->error('Token Invalid!');
    //     return redirect()->back()->with('message', 'Payment information not found');
    // }


    //         //dd($check);
    // }
    public function userPayment(Request $request)
{
    if (!Auth::check()) {
        return redirect()->back()->with('error', 'Please log in to make a payment.');
    }

    $payment = Payment::where('token_name', $request->name)
                      ->select('token_amount')
                      ->first();

    if ($payment) {
        UserPayment::create([
            'amount' => $payment->token_amount
        ]);

        //toastr()->success('Payment successful!');

        // Delete the token from the database
        //$payment->delete();

        return redirect()->back()->with('success', 'Payment successful.');
    } else {
        //toastr()->error('Invalid token!');
        return redirect()->back()->with('error', 'Payment information not found.');
    }
}


}
