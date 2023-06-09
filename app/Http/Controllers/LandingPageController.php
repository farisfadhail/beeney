<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;

class LandingPageController extends Controller
{
    public function index()
    {
        $plans = SubscriptionPlan::all();

        return view('pages.index', compact('plans'));
    }
}
