<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class FromDrsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct ()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index ()
    {
        $fromdrs = Patient::paginate(3);
        return view('fromdrs.fromdrs', compact('fromdrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('fromdrs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $input = $request->all();
        $user = Auth::user();
        if(isset($input['image']))
        {
            $input['image'] = $this->upload($input['image']);

        }
        else
        {
            $input['image'] ='images/default.jpg';
        }
        $input['user_id' ]=Auth::user()->id;
        Patient::create($input);
        return redirect()->back();
    }
    public function upload ($file)
    {
        $extension = $file->getClientOriginalExtension();
        $sha1 = sha1($file->getClientOriginalName());
        $filename= time()."_".$sha1.".".$extension;
        $path=public_path('images/');
        $file->move($path,$filename);
        return  'images/'.$filename;
    }
    /**
     * @param $file
     * @return string
     */



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fromdrs =Patient::findOrfail($id);
        return view('fromdrs.edit', compact('fromdrs'));
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
        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $input = $request->all();
        $user = Auth::user();
        if(isset($input['image']))
        {
            $input['image'] = $this->upload($input['image']);

        }
        $input['user_id' ]=Auth::user()->id;
        Patient::findOrFail($id)->update($input);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fromdrs =Patient::findOrfail($id)->delete();
        return redirect()->back();

    }

}
