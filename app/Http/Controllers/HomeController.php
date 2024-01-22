<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('admin.about.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('home-img');
        // dd($request->all());
        $data = $request-> validate([
            'judul'=> 'required|max:255',
            'slug' => 'required|unique:home',
            'decs' => 'required',
            'image' => 'image|file|max:2048'

        ]);
        $data['user_id'] = Auth::id();
        if($request->file('image')) {
            $data['image'] = $request->file('image')->store('home-img');
        }

        Home::create($data);

        return redirect()->route('home.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // return redirect('/admin/home')->with('success', 'Your data has been added!');

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

    public function checkSlug(Request $request)
    {

    $slug = SlugService::createSlug(Home::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);

    }
}
