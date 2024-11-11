<?php

namespace App\Http\Controllers\Membershipcontrolle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\membership;
use Illuminate\Support\Facades\Session;

class Membershipcontroller extends Controller
{
    public function addmembership(Request $request)
    {
        $post = new membership();
        $post->user_id= $request->user_id;
        $post->paid_payment= $request->paid_payment;
        $post->cancel_payment= $request->cancel_payment;
        $post->payment_option= $request->payment_option;
        $post->refund_payment= $request->refund_payment;
        $post->order_id= $request->order_id;
        $post->transation_id= $request->transation_id;
        $post->fee= $request->fee;
        $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-membership')->with('membership', 'save sucessful');
    }

    public function UpdateMembership(Request $request)
    {
        // // dd($request->all());
        // $request->validate([
        //     'blog_name'=>'required',
        //     'blog_description'=>'required',
        //     'blog_title'=>'required',
        //     'publish_date'=>'required',
        //     'keyword'=>'required',
        //     'status'=>'required',
        // ]);
        $id = $request->id;
        membership::where('id',$id)->update([
            'user_id'=>$request->user_id,
            'paid_payment'=>$request->paid_payment,
            'cancel_payment'=>$request->cancel_payment,
            'payment_option'=>$request->payment_option,
            'refund_payment'=>$request->refund_payment,
            'order_id'=>$request->order_id,
            'transation_id'=>$request->transation_id,
            'fee'=>$request->fee,
        ]);
        return redirect()->to('admin/view-membership')->with('membership', 'Update membership sucessful');
    }

    public function Deletemembership($id)
    {
        $delete = membership::where('id',$id)->delete();
        return redirect()->to('admin/view-membership')->with('success', 'membership delete sucessful');
    }

}
