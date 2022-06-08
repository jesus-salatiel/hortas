<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::all();
        return view('admin.downloads.index', compact('downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $downloads = Download::all();
        $action    = route('admin.downloads.store');
        return view('admin.downloads.form', compact('action', 'downloads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Download::create($request->all());
        $request->session()->flash('sucesso', "Apostila {$request->name} incluida com sucesso!!!");
        return redirect()->route('admin.downloads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $download = Download::find($id);
        $action    = route('admin.downloads.update', $download->id);
        return view('admin.downloads.form', compact('action', 'download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $download = Download::find($id);
        $download->update($request->all());
        $request->session()->flash('sucesso', "Apostila $request->name alterada com sucesso!!!");
        return redirect()->route('admin.downloads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Download::destroy($id);
        $request->session()->flash('sucesso', "Apostila excluida com sucesso!!!");
        return redirect()->route('admin.downloads.index');
    }
}
