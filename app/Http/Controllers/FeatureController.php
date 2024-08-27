<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeatureController extends Controller
{
    protected $path ;

    public function __construct()
    {
        $this->path = 'admin.features.';
    }
    public function index()
    {
    
        $features = Feature::paginate(config('pagination.count'));
        $features  ??= collect();
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
    public function store(StoreFeatureRequest $request)
    {
      
        $data=$request->validated();
        Feature::create($data);
        return redirect()->route("{$this->path}index")->with('success', 'Feature created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        return view("{$this->path}show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view("{$this->path}edit", get_defined_vars());
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $data = $request->validated();
        $feature->update($data);
        return redirect()->route("{$this->path}index")->with('success', 'Feature updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route("{$this->path}index")->with('success', 'Service deleted successfully');
    }
}
