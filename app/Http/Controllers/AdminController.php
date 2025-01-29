<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Payment;

use Illuminate\Support\Facades\Auth;
use App\Models\appoinment;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)

            {
                 return view('admin.add_doctor');
            }
            else
            {
                return redirect()->back();

            }
        }

        else 
        {
            return redirect('login');
        }
    }


    public function upload(Request $request)
    {
          //dd($request->all());

        $doctor=new doctor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;


        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialty=$request->speciality;


        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');


    }

    public function showappointment()
    {
        $data=appoinment::all();

        return view('admin.showappointment',compact('data'));
    }


    public function approved($id)
    {
        $data=appoinment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }


    public function canceled($id)
    {
        $data=appoinment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);

        $data->delete();
        return redirect()->back();
    }

    

    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor( Request $request , $id)
    {
        $doctor = doctor::find($id);


        // if($image)
        // {
        // $imagename= time().'.'.$image->getOriginalClientExtension();
        // $request->file->move('doctorimage',$imagename);
        // $doctor->image=$imagename;
        // }

        // if ($files = $request->file('image')) {
        //     $imagename= time().'.'.$image->getOriginalClientExtension();
        //     $files->move('doctorimage', $imagename);
        //     $update['image'] = "$imagename";
        //  }

        // $fileName = '';

        // if ($request->file != null) {
        //     $f = $request->file;
        //     dd($f->mimeType);
        //   $file = time() . '.' . $request->image->extention();
        //   $request->image->storeAs('public/doctorimage', $file);
        //   if ($user->image) {
        //     Storage::delete('public/doctorimage/' . $request->image);
        //   }
        // } else {
        //   $file = $request->image;
        // }
    

        // //dd($request->all());
       
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specialty=$request->specialty;
        $doctor->room=$request->room;

        $image=$request->file;
        //$user->image = $fileName;
        if($image)
        {

$imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }


        $doctor->save();
        return redirect()->back()->with('message','doctor Details Updated Successfully.');
    }


    public function emailview($id)
    {

        $data =appoinment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendmail(Request $request,$id)
    {
        $data= appoinment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));
        return redirect()->back()->with('message','Email Send Successfully.');


    }

    public function token(){
        return view('admin.admin_token_view');
    }

    public function Payment(Request $request)
    {
       //dd($request->all());
       Payment::create([
          'token_name'=>$request->payment_name,
          'token_amount'=>$request->payment_amount
       ]);
       return redirect()->back()->with('message','Token Generate Successfully.');
    }

    public function TokenShow()
    {
         $show=Payment::select('token_name','token_amount')->get();
         //return $show;
         return view('admin.token_view',compact('show'));
      
    }

}
