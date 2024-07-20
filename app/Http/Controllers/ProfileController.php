<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::paginate(10);

        return view('training.profile-card.index', [
            'profiles' => $profiles,
        ]);
    }
}
