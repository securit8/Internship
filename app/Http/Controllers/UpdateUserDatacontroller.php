<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateUserDatacontroller extends Controller
{
    function updateData(Request $req)
    {
        $User=User::find($req->id);
        $User->School=$req->School;
        $User->Age=$req->Age;
        $User->Grade=$req->Grade;
        $User->Jprogram=$req->Jprogram;
        $User->save();
return redirect('/dashboard');
    }
}
