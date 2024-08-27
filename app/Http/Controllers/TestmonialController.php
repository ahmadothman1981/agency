<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;

class TestmonialController extends Controller
{
    protected $path ;

    public function __construct()
    {
        $this->path = 'admin.testmonials.';
    }
    
    public function index()
    {
        $testmonials = Testmonial::paginate(config('pagination.count'));
        $testmonials  ??= collect();
        return view("{$this->path}index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        //
    }
}
