<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\Camp;
use App\Models\Chekout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Http\Requests\User\Chekout\Store;



class ChekoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Camp $camp, Request $request)
    {
       if ($camp->isRegistered) {
           $request->session()->flash('Error', "You already registered on Bootcamp {$camp->title} .");
           return redirect(route('dashboard'));
       }
        
         return view('chekout/create-chekout', [
             'camp' => $camp
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Camp $camp)
    {

        //Mapping request data
        $data = $request->all();
        $data ['user_id'] = Auth::id();
        $data ['camp_id'] = $camp->id;
    
        //Update User untuk create Chekout di db
        $user = Auth::user();
        $user->name = $data['name'];
        $user->occupation = $data['occupation'];
        $user->save();

        //create Chekout
        $chekout = Chekout::create($data);
        

        
        return redirect (route('chekout.success'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }

    public function success() {
        return view('chekout/success-chekout');
    }
}
