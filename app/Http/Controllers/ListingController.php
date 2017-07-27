<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function __construct()
    {
        // Authorizing all the functions of Listing Controller By auth except of two
        // functions index and show which can be access without authorization of user
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listing = Listing::orderBy('created_at','asc')->get();
        return view('listing')->with('listing',$listing);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('createlistings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
            'email'=>'email'
        ]);


        // Making an object of Listing Model
        $listing = new Listing;

        // Fetching Inputs From Form and storing it to appropriate column:

        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->website = $request->input('website');
        $listing->address = $request->input('address');
        $listing->contact = $request->input('contact');
        $listing->bio_data = $request->input('bio_data');
        $listing->user_id = auth()->user()->id;

        // Saving all information:

        $listing->save();

        return redirect('/home')->with('success','List Added!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('showlisting')->with('listing',$listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editlisting')->with('listing',$listing);

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
        $listing = Listing::find($id);

        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->address = $request->input('address');
        $listing->website = $request->input('website');
        $listing->contact = $request->input('contact');
        $listing->bio_data = $request->input('bio_data');

        $listing->save();

        return redirect('/home')->with('success','List Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/home')->with('success','List Deleted!');
    }
}
