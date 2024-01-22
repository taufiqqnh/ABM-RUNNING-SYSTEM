<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $activity = Activity::latest()->paginate(5);
        $activity = Activity::all();
        return view('admin.activity.index', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required|min:5',
            'decs'   => 'required|min:10'
        ]);

        Activity::create([
            'judul'     => $request->judul,
            'decs'   => $request->decs
        ]);
        return redirect()->route('activity.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
