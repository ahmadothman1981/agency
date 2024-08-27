<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    protected $path ;

    public function __construct()
    {
        $this->path = 'admin.messages.';
    }
    public function index()
    {
        
        $messages = Message::paginate(config('pagination.count'));
        $messages  ??= collect();
        return view("{$this->path}index", get_defined_vars());
    }

  
    public function show(Message $message)
    {
        return view("{$this->path}show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route("{$this->path}index")->with('success', 'Message deleted successfully');
    }
}
