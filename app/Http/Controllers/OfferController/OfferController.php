<?php

namespace App\Http\Controllers\OfferController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offer;
use Illuminate\Support\Facades\Session;
use App\Models\newsletter;
use App\Models\test;

class OfferController extends Controller
{
    public function addofferpost(Request $request)
    {
        $request->validate([
            'coupon_code'=>'required',
            'amount'=>'required',
            'coupon_valid_date'=>'required',
            'coupon_expire'=>'required',
            'status'=>'required',
        ]);
        $post = new offer();
        $post->coupon_code= $request->coupon_code;
        $post->amount= $request->amount;
        $post->coupon_valid_date= $request->coupon_valid_date;
        $post->coupon_expire= $request->coupon_expire;
        $post->status= $request->status;
        $post->save();
        return redirect()->to('admin/view-offer')->with('offer', 'save sucessful');
    }


    public function addnewsletter(Request $request)
    {
        // dd($request->all());
        $post = new newsletter();
        $post->email= $request->email;
        $post->save();
    }

    public function addtestpage(Request $request)
    {
       
        $test = new test();
        $test->email= $request->email;
        $test->save();

        return ["returnback" => "Thanks For Sumbitting"];
    }
}