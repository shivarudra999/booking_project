<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\gallery_masters;
use Illuminate\Support\Facades\Session;
use App\Models\event;
use App\Models\blog;
use App\Models\membership;
use App\Models\booking;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function PostAdmin()
    {
        return view('Admin.Event.post-event');
    }

    public function PostBooking()
    {
        return view('Admin.booking.post-booking');
    }

    public function PostGallery()
    {
        return view('Admin.gallery.post-gallery');
    }

    public function PostMembership()
    {
        return view('Admin.membership.post-membership');
    }

    public function PostOffer()
    {
        return view('Admin.offer.post-offer');
    }
    public function PostContactus()
    {
        return view('Admin.contact us.post-contactus');
    }

    public function PostContactReply()
    {
        return view('Admin.Contact Reply.post-contactreply');
    }

    public function PostPdfTicket()
    {
        return view('Admin.PDF Ticket.post-pdfticket');
    }

    public function PostBlog()
    {
        return view('Admin.Blog.post-blog');
    }

    public function PostUser()
    {
        return view('Admin.User.post-user');
    }

    public function ViewEvent()
    {
        $data = event::where('status',1)->orderBy('updated_at','desc')->get();
        return view('Admin.Event.view-event',['data'=>$data]);
    }
    public function ViewMembership()
    {
        $data = membership::where('status',1)->orderBy('updated_at','desc')->get();
        return view('Admin.membership.view-membership',['data'=>$data]);
    }
    public function ViewGallery()
    {
        $data = gallery_masters::where('status',1)->orderBy('updated_at','desc')->get();
        return view('Admin.gallery.view-gallery',['data'=>$data]);
    }
    public function ViewOffer()
    {
        return view('Admin.offer.view-offer');
    }
    public function ViewPdf()
    {
        return view('Admin.PDF ticket.view-pdfticket');
    }
    public function ViewContact()
    {
        return view('Admin.contact us.view-contact');
    }
    public function ViewContactreply()
    {
        return view('Admin.contact reply.view-contactreply');
    }
    public function ViewBooking()
    {
        return view('Admin.booking.view-booking');
    }
    public function ViewBlog()
    {
        $data = blog::where('status',1)->orderBy('updated_at','desc')->get();
        return view('Admin.blog.view-blog',['data'=>$data]);
    }
    public function Admin_login()
    {
        return view('Admin.Admin-auth.login');
    }
    public function loginadmin(Request $request)
   {
    $email = $request->email;
    $password = $request->password;
    $result = admin::where('email', $email)->where('status', 1)->first();
    // dd($result);
    if ($result && !empty($result->password)) {
      // dd('helo');
        $hashedPassword = $result->password;
        if ( $hashedPassword == $password) {
          // dd('hey');
            $request->session()->put('Ljghtoq45!@856Sl56as^%$aslf5DSDFl', 'login');
            Session::put("admin", $result);
            Session::put("id", $result->id);
            Session::put("name", $result->name);
            Session::put("email", $result->email);
                            Session::put("admin", $result->admin);
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->to('admin-login')->with('success', 'Invalid email or password');
        }
    } else {
        return redirect()->to('admin-login')->with('success', 'User not found');
    }



   }

   public function Adminlogout()
   {
    session()->flush();
      return redirect()->to('/');

   }

   public function EventEdit($id)
   {
    // dd('helo');
    $data = event::where('id',$id)->first();
    // dd($data);
    if(!$data)
    {
        return redirect()->to('admin/view-event');
    }
    return view('Admin.Event.edit_event',['data' => $data]);
   }


   public function BlogEdit($id)
   {
    $data = blog::where('id',$id)->first();
    if(!$data)
    {
        return redirect()->to('admin/view-blog');
    }
    return view('Admin.Blog.edit_blog',['data'=>$data]);
   }

   public function MembershipEdit($id)
   {
    $data = membership::where('id',$id)->first();
    if(!$data)
    {
        return redirect()->to('admin/view-membership');
    }
    return view('Admin.Membership.edit_membership',['data'=>$data]);
   }

   public function eventapplication()
   {
    $data = booking::where('bookings.status',1)->orderBy('bookings.updated_at','desc')->
            leftjoin('users', 'bookings.user_id', '=', 'users.id')->
            leftjoin('events', 'bookings.event_id', '=', 'events.id')->
            select('users.*', 'events.*', 'bookings.*')->get();
            // dd($data);
       return view('Admin.event-application.index',['data'=>$data]);
   }






//    public function addpostgallery(Request $request)
//    {
//     $post = new gallery();
//     $post->photo= $request->photo;
//     $post->photo_description= $request->photo_description;
//     $post->photo_title= $request->photo_title;
//     $post->status= $request->status;
//     $post->save();
//    }
}
