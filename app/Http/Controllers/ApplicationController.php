<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index() {

    	$user = auth()->user();

    	$apps = Application::where('user_id', $user->id)->with('condition')->get();

    	return Inertia::render('Applications/Index',[
    		'apps' => $apps
    	]);
    }

    public function show(int $id) {

    	$app = Application::where('id', $id)->with('condition')->first();

    	return Inertia::render('Applications/Show',[
    		'app' => $app
    	]);
    }
}
