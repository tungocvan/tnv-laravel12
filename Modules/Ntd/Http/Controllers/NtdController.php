<?php

namespace Modules\Ntd\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NtdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
         $this->middleware('permission:ntd-list|ntd-create|ntd-edit|ntd-delete', ['only' => ['index','show']]);
         $this->middleware('permission:ntd-create', ['only' => ['create','store']]);
         $this->middleware('permission:ntd-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:ntd-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        return view('Ntd::ntd');
    }
    public function tracuu()
    {
        return view('Ntd::tracuu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
