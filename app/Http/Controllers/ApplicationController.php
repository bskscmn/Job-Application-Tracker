<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Application;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DateTime;

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

    public function create() {

    	return Inertia::render('Applications/Create',[]);
    }

    public function store(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'company' => 'required|max:255',
            'post_title' => 'required',
        ])->validate();

    	$user = auth()->user();
        $request['user_id'] = $user->id;

        $d = DateTime::createFromFormat('d / m / Y H : i : A', $request['date'].' '.$request['time']);
        $request['app_date'] = $d->format('Y-m-d H:i:s');

        Application::create($request->all());

        return Redirect::route('/applications');
    }
}
