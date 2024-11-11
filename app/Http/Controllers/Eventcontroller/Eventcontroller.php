<?php

namespace App\Http\Controllers\EventController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\booking;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Traits\UploadImage;
use App\Mail\usermailticket;
use App\Models\User;
use App\Models\ticket_pdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
// use Dompdf\Dompdf;


class EventController extends Controller
{
    use UploadImage;

    public function addeventpost(Request $request)
    {
        $request->validate([
            'events_name' =>'required',
            'events_description' =>'required',
            'events_title' =>'required',
            'events_date' =>'required',
            'start_booking_date' =>'required',
            'end_booking_date' =>'required',
            'events_time' =>'required',
            'amount' =>'required',
            'status' =>'required',
        ]);
        $checkdate = event::where('events_date',$request->events_date)->first();
        if($checkdate)
        {
            return redirect()->to('admin/view-event')->with('event', 'Event date & time same');
        }else{
            $imgProduct = null;
        if ($request->hasFile("events_photo")) {
            $imgProductFile = $request->file("events_photo");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/events_photo/', '', $imgProductFile, $new_name_of_profile_photo3);
        }
        $post = new event();
        $post->events_name= $request->events_name;
        $post->events_description= $request->events_description;
        $post->events_title= $request->events_title;
        $post->events_date= $request->events_date;
        $post->start_booking_date= $request->start_booking_date;
        $post->end_booking_date= $request->end_booking_date;
        $post->events_time= $request->events_time;
        $post->amount= $request->amount;
        $post->events_photo = $imgProduct;
       
        $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-event')->with('event', 'save sucessful');
        }
        
    }

    public function UpdateEvent(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'events_name' =>'required',
            'events_description' =>'required',
            'events_title' =>'required',
            'events_date' =>'required',
            'start_booking_date' =>'required',
            'end_booking_date' =>'required',
            'events_time' =>'required',
            'amount' =>'required',
            'status' =>'required',
        ]);
        $id = $request->id;
        $imgProduct = null;
        if ($request->hasFile("events_photo")) {
            $imgProductFile = $request->file("events_photo");
            $new_name_of_profile_photo3 = uniqid('', true) . "." . $imgProductFile->getClientOriginalExtension();
            $imgProduct = $this->UploadImage('assets/events_photo/', '', $imgProductFile, $new_name_of_profile_photo3);
            event::where('id',$id)->update([
                'events_photo' => $imgProduct,
            ]);
        }
        event::where('id',$id)->update([
            'events_name'=>$request->events_name,
            'events_description'=> $request->events_description,
            'events_title'=> $request->events_title,
            'events_date'=> $request->events_date,
           'start_booking_date'=> $request->start_booking_date,
        'end_booking_date'=> $request->end_booking_date,
        'events_time'=> $request->events_time,
        'amount'=> $request->amount,
       'status'=> $request->status,
        ]);
        return redirect()->to('admin/view-event')->with('sucess', 'event update sucessful');
    }

    public function DeleteEvent($id)
    {
        $delete = event::where('id',$id)->delete();
        return redirect()->to('admin/view-event')->with('sucess', 'event delete sucessful');
    }

    public function bookticket($id)
    {
        // dd($id);
        $check = booking::where('event_id',$id)->where('user_id',Auth::user()->id)->first();
        if($check)
        {
            return redirect()->to('/')->with('success', 'Already Ticket Booked');

        }

        $booking = new booking();
        $booking -> event_id=$id;
        $booking -> user_id=Auth::user()->id;
        $booking -> status=1;
        $booking -> save();

        $event_pdf = event::where('id',$id)->first();
        $user = User::where('id',Auth::user()->id)->first();

        $pdf = App::make('dompdf.wrapper');

        $pdfticket = new ticket_pdf();
        $pdfticket -> events_name = $event_pdf->events_name;
        $pdfticket -> events_time = $event_pdf->events_time;
        $pdfticket -> events_date = $event_pdf->events_date;
        $pdfticket -> events_amount = $event_pdf->amount;
        $pdfticket -> name = $user->name;
        $pdfticket -> email = $user->email;
        $pdfticket -> save();

        $id = $pdfticket->id;

        $data = ticket_pdf::where('id',$id)->first();

        $pdf->loadView('frontend.ticket_pdf', [
            'data' => $data
        ]);
        
        // Set the filename for the PDF
        $filename = 'ticket_' . $id . '.pdf';
        
        return $pdf->stream($filename);


        // $pdf = Pdf::loadView('frontend.ticket_pdf', $data);

        // return redirect()->to('ticket-pdf');

        // $event = event::where('id',$id)->first();
        // $data =[
        //     "name"=>Auth::user()->name,
        //     "events_name"=>$event->events_name,
        //     "amount"=>$event->amount,
        //     "event_date"=>$event->events_date,
        //     "time"=>$event->events_time,
        // ];
        // Mail::to(Auth::user()->email)->send(new usermailticket($data));

        return redirect()->to('/')->with('success', 'Ticket Booking sucessful');
    }

}