<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\UkraineBridgeFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UkraineBridgeFacilityController extends Controller
{
    public function index()
    {
        $UkraineBridgeFacility = UkraineBridgeFacility::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.ukraine_bridge_facility', ['UkraineBridgeFacility' => $UkraineBridgeFacility]);
    }

    public function deleteUkraine_bridge_facility($id)
    {
        $UkraineBridgeFacility = UkraineBridgeFacility::find($id);

        if ($UkraineBridgeFacility) {
            $UkraineBridgeFacility->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

    public function createUkraine_bridge_facility(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);


        $path = $request->file('image')->store('public/uploads');
        $image_path = Storage::url($path);


        UkraineBridgeFacility::create([
            'title' => $validator['name'],
            'image' => $image_path,
            'description' => $request->input('description'),
            'author' => Auth::user()->id,
        ]);


        return redirect()->back();
    }
}
