<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;
use Illuminate\Validation\Rule;
// For be able to use the filter() 
use Illuminate\Support\Collection;

class BandController extends Controller
{

    // Scope Filter


    // Show lastest 6 bands (home)
    public function index(Band $band)
    {
        return view('bands.index', [
            'bands' => $band->latest()->where(request(['tag']))->paginate(6)
        ]);
    }

    //Show single band (specific band)
    public function show(Band $band)
    {
        return view('bands.show', [
            'band' => $band
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('bands.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        // Recieve request and validate it before saving it
        $formFields = $request->validate([
            'band_name' => ['required', Rule::unique('bands', 'band_name')],
            'band_location' => 'required',
            'band_website' => 'required',
            'band_email' => ['required', 'email'],
            'band_genre' => 'required',
            'description' => 'required'
        ]);

        // Check if user added their own logo
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Add user to band table as owner
        $formFields['user_id'] = auth()->id();

        // create band 
        Band::create($formFields);

        // redirect to home page
        return redirect('/')->with('message', 'Band is posted');
    }

    // Show Edit Form
    public function edit(Band $band)
    {
        return view('bands.edit', ['band' => $band]);
    }

    // Update Band info
    public function update(Request $request, Band $band)
    {

        // Make sure logged in user is owner
        if ($band->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        // Validate/check new data/info 
        $formFields = $request->validate([
            'band_name' => ['required'],
            'band_location' => ['required'],
            'band_website' => ['required'],
            'band_email' => ['required', 'email'],
            'band_genre' => ['required'],
            'description' => ['required']
        ]);


        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $band->update($formFields);

        return back()->with('message', 'Band updated');
    }

    // Delete Band
    public function destroy(Band $band)
    {
        // Make sure logged in user is owner
        if ($band->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        // delete function to delete selected table.
        $band->delete();
        return redirect('/')->with('message', 'Band deleted successfully');
    }

    // List of bands from user(owner/shared)
    public function manage()
    {
        return view('bands.manage', ['bands' => auth()->user()->bands()->get()]);
    }
}
