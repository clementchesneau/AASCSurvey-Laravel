<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class AccountsController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        if (Auth::check()) {
            return view('accounts.index');
        }
        else {
            return view('auth.login');
        }
    }

    public function edit($locale)
    {
        if (Auth::check()) {
            return view('accounts.edit');
        }
        else {
            return view('auth.login');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccount $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->name = request()->input('name');
            $user->firstname = request()->input('firstname');
            $user->email = request()->input('email');
            $user->save();

            //$path = request()->file('image')->storeAs(
            //    'avatars', Auth::id()
            //);

            //$image = InterventionImage::make ($request->image)->widen (500)->encode ();
            //Storage::put ('thumbs/' . $path, $image);
        }
        else {
            return view('auth.login');
        }
        //return Storage::get('avatars/' . Auth::id() .'.png');;
        return redirect()->route('account', app()->getLocale());
    }
}
