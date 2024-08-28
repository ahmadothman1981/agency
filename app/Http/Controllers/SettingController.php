<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    protected $path ;

    public function __construct()
    {
        $this->path = 'admin.settings.';
    }    public function index()
    {
        $setting = Setting::findOrFail(1);
        $setting ??= collect();
        return view("{$this->path}index", get_defined_vars());
    }

    
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $data = $request->validated();
        $setting->update($data);
        return redirect()->route("{$this->path}index")->with('success', 'Setting updated successfully');
    }

   
   
}
