<?php

namespace App\Http\Controllers;

use App\Models\Impact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImpactController extends Controller
{
    public function index()
    {
        $impacts = Impact::orderBy('id', 'DESC')->where('deleted_at' , null)->get();

        return view('admin.impacts', ['impacts' => $impacts]);
    }

    public function deleteImpacts($id)
    {
        $impacts = Impact::find($id);

        if ($impacts) {
            $impacts->update(['deleted_at' => now()]);
        }

        return redirect()->back();
    }

    public function createImpacts(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);


        $path = $request->file('image')->store('public/uploads');
        $image_path = Storage::url($path);


        $car = Impact::create([
            'title' => $validator['name'],
            'image' => $image_path,
            'description' => $request->input('description'),
            'author' => Auth::user()->id,
        ]);


        return redirect()->back();
    }
}
