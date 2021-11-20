<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('pages.index');
    }


    public function carList()
    {
        return view('pages.store_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create_store');
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
        $stores = new Store();

        $stores->name = $request->name;
        $stores->location = $request->location;
        $stores->owner = $request->owner;
        $stores->net_worth = $request->net_worth;
        $stores->save();


        return redirect('create-store')->with(['success' => 'New Store created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $stores = Store::all();
        // dd($stores);
        return view('pages.store_list',['stores'=>$stores]);

    }
}
