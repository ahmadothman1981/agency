<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    protected $path ;

    public function __construct()
    {
        $this->path = 'admin.services.';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $services = Service::paginate(config('pagination.count'));
        //Default to an Empty Collection: If $services can be null, you can default it to an empty collection in the controller:
       // $services = $all ?? collect();
        return view("{$this->path}index", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("{$this->path}create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data=$request->validated();
        Service::create($data);
        return redirect()->route("{$this->path}index")->with('success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view("{$this->path}show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
       return view("{$this->path}edit", get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return redirect()->route("{$this->path}index")->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route("{$this->path}index")->with('success', 'Service deleted successfully');
    }
}
