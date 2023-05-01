<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo "index page"; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user=new User();
        $user->name="Suprabhat Joshi";
        $user->email="sup3.simt@gmail.com";
        $user->password=md5("sup@123");
        $user->save();
        echo"new User created";

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
        $user=User::find($id)->get();
       echo"<pre>";
        print_r($user);
        echo"</pre>";
       
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
