<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seting;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class SetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Seting::first();
        if($data===null) //if seting table is empty add one record
        {
            $data = new Seting();
            $data->title = 'Project Title';
            $data->save();
            $data = Seting::first();
        }
        return view('admin.seting_edit', ['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seting  $seting
     * @return \Illuminate\Http\Response
     */
    public function show(Seting $seting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seting  $seting
     * @return \Illuminate\Http\Response
     */
    public function edit(Seting $seting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seting  $seting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seting $seting)
    {
        $id =$request->input('id');

        $data = Seting::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_seting');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seting  $seting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seting $seting)
    {
        //
    }
}
