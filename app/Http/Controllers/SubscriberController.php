<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    protected $path ;

    public function __construct()
    {
        $this->path = 'admin.subscribers.';
    }
    public function index()
    {
        $subscribers = Subscriber::paginate(config('pagination.count'));
        $subscribers  ??= collect();
        return view("{$this->path}index", get_defined_vars());
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route("{$this->path}index")->with('success', 'Subscriber  deleted successfully');
    }
}
