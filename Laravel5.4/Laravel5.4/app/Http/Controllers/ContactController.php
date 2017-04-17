<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
 
class ContactController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        // $contact = ContactModel::all();
        $contact = ContactModel::paginate(5);
        return view('contact.index',['contacts' => $contact]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new contact
        return view('contact.create');
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
        $this->validate($request,['name'=>'required','email'=>'required','contact_number'=>'required']);

        //create new data
         $input = $request->all();

          ContactModel::create($input);
        
         return redirect()->route('contact.index')->with('alert success','contact record has been saved!');


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
       $contact = ContactModel::findOrFail($id);
       // return to the edit views
       return view('contact.edit',compact('contact'));

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
         $this->validate($request,['name'=>'required','email'=>'required','contact_number'=>'required']);

         $contact = ContactModel::findOrFail($id);
         $contact->name = $request->name;
         $contact->email = $request->email;
         $contact->contact_number = $request->contact_number;          
         $contact->save();
         return redirect()->route('contact.index')->with('alert success','contact record has been saved!');       
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
        $contact = ContactModel::findOrFail($id);
        $contact->delete();   
        return redirect()->route('contact.index')->with('alert success','contact record has been saved!');
    }
}
