<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityModel;

class ActivityController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        // $activity = ActivityModel::all();
        $activity = ActivityModel::paginate(5);
        return view('activity.index',['activities' => $activity]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new activity
        return view('activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation will be written here
        $this->validate($request,['company_name'=>'required','date'=>'required','type_of_activity'=>'required','outcome'=>'required','sales_person_name'=>'required']);

        //create new data
         $input = $request->all();

          ActivityModel::create($input);
        
         return redirect()->route('activity.index')->with('alert success','activity record has been saved!');


    }

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
       $activity = ActivityModel::findOrFail($id);
       // return to the edit views
       return view('activity.edit',compact('activity'));

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
        //validations
         $this->validate($request,['company_name'=>'required','date'=>'required','type_of_activity'=>'required','outcome'=>'required','sales_person_name'=>'required']);

         $activity = ActivityModel::findOrFail($id);
         $activity->company_name = $request->company_name;
         $activity->date = $request->date;
         $activity->type_of_activity = $request->type_of_activity;  
         $activity->outcome = $request->outcome;   
         $activity->sales_person_name = $request->sales_person_name;         
         $activity->save();
         return redirect()->route('activity.index')->with('alert success','activity record has been saved!');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $activity = ActivityModel::findOrFail($id);
        $activity->delete();   
        return redirect()->route('activity.index')->with('alert success','Activity record has been saved!');
    }
}
