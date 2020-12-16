<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Platform;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class PlatformController extends Controller
{
    public function index(Request $request) {

        $user = auth()->user();

        if( $request['search'] != null) {

            $q = $request['search'];

            $platforms = Platform::where('user_id', $user->id)
                ->where('platform_name','LIKE','%'.$q.'%')
                ->orWhere('link','LIKE','%'.$q.'%')
                ->orWhere('email','LIKE','%'.$q.'%')
                ->orWhere('username','LIKE','%'.$q.'%')
                ->orWhere('note','LIKE','%'.$q.'%')
                ->orderBy('id', 'DESC')->paginate(5);

            return Inertia::render('Platforms/Index',['platforms' => $platforms, 'search' => $q]);

        }else{

            $platforms = Platform::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(5);

            return Inertia::render('Platforms/Index',['platforms' => $platforms]);
        }
        	
    }


    public function create() {

    	return Inertia::render('Platforms/Create',[]);
    }

    public function store(Request $request)
    {
        
    	$validator = Validator::make($request->all(), [
            'platform_name' => 'required|max:255',
        ])->validate();

    	$user = auth()->user();
        $request['user_id'] = $user->id;

        
        Platform::create($request->all());

        return Redirect::route('platforms.index')->with('success', 'New platform is added succesfully.');
    }

    public function edit(int $id,Request $request) {

    	$platform = Platform::where('id', $id)->first();

    	return Inertia::render('Platforms/Edit',[
    		'platform' => $platform,
    	]);
    }

    public function update(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'platform_name' => 'required|max:255',
        ])->validate();
    	
        $platform = Platform::where('id', $request->id)->first();
        $platform->update($request->all());
        
        return redirect()->back()->with('success', 'Platform updated successfully');
    }


    public function destroy(Request $request)
    {
        $platform = Platform::find($request->id);
        $platform->delete();

        return redirect('/platforms')->with('success', 'Platform deleted successfully');
    }}
