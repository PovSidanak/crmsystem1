<?php

namespace App\Http\Controllers;
use App\Models\lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lead= Lead::orderBy('created_at', 'DESC')->get();

        return view('lead.index', compact('lead'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lead.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Lead::create($request->all());

       return redirect()->route('admin/lead')->with('success', 'Lead add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lead = Lead::findOrFail($id);

        return view('lead.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $lead = lead::findOrFail($id);

       return view('lead.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lead = Lead::findOrFail($id);

        $lead->update($request->all());

        return redirect()->route('admin/lead')->with('success', 'lead updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lead = Lead::findOrFail($id);

        $lead->delete();

        return redirect()->route('admin/lead')->with('success', 'Lead deleted sucessfully');
    }
}
