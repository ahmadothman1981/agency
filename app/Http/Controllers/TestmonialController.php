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
        return view("{$this->path}create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {
        
        $data=$request->validated();
        //save image
        $image = $request->file('image');
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('testmonials', $newImageName,'public');
        $data['image'] = $newImageName;

        Testmonial::create($data);
        return redirect()->route("{$this->path}index")->with('success', 'Testmonial created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
        return view("{$this->path}show", get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        return view("{$this->path}edit", get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
        $data = $request->validated();

    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($testmonial->image) {
            $oldImagePath = public_path("storage/testmonials/{$testmonial->image}");
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Store the new image
        $newImageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->storeAs('testmonials', $newImageName, 'public');
        $data['image'] = $newImageName;
    }

    // Update the testimonial with the new data
    $testmonial->update($data);

    return redirect()->route("{$this->path}index")->with('success', 'Testimonial updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        if($testmonial->image){
            $imagePath = public_path("storage/testmonials/{$testmonial->image}");
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }else{
                return redirect()->route("{$this->path}index")->with('error', 'Image file not found.');
                 }
           
        }
        $testmonial->delete();
        return redirect()->route("{$this->path}index")->with('success', 'Testmonial deleted successfully');
    }
}
