<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMesssageRequest;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Message;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index',get_defined_vars());
    }

    public function about()
    {
        return view('front.about',get_defined_vars());
    }

    public function service()
    {
        return view('front.service',get_defined_vars());
    }

    public function contact()
    {
        return view('front.contact',get_defined_vars());
    }

    public function subscribe(StoreSubscriberRequest $request)
    {
           $data = $request->validated();
            Subscriber::create($data);

            return back()->with('success', 'Subscribed successfully');
        
    }

    public function contactstore(StoreMesssageRequest $request)
    {
            $data = $request->validated();
            Message::create($data);
            return back()->with('success', 'Message sent successfully');
    }
}
