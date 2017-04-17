<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use Mail;
use App\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        // $customer = CustomerModel::all(); If you want to display everything without pagination
      // $customer = CustomerModel::paginate(5); 
      //   return view('customer.index',['customers' => $customer]);

       // Search Customers and pagination code 
        $search = \Request::get('search');
        $customer = CustomerModel::where('company_name','like','%'.$search.'%')->orderBy('id','desc')->paginate(5);
         return view('customer.index',['customers' => $customer]);
         // Search Customers and pagination code
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new customer
        return view('customer.create');
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
        $this->validate($request,['company_name'=>'required','address'=>'required','business_registration_number'=>'required', 'website'=>'required']);

        //create new data
         $input = $request->all();

          CustomerModel::create($input);
    
           $message = 'empty';
           $title ='empty';
                  Mail::send('customer.mail', ['title' => $title, 'message' => $message], function ($message)
             {
                $message->from('royalborough12@gmail.com', 'CRM WebNatics');
                $message->to('srilanka.jobs@webnatics.biz')->subject('CRM Automail');
            });
  
         return redirect()->route('customer.index')->with('alert success','Customer record has been saved!');
        
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
       $customer = CustomerModel::findOrFail($id);
       // return to the edit views
       return view('customer.edit',compact('customer'));

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
         $this->validate($request,['company_name'=>'required','address'=>'required','business_registration_number'=>'required', 'website'=>'required']);

         $customer = CustomerModel::findOrFail($id);
         $customer->company_name = $request->company_name;
         $customer->address = $request->address;
         $customer->business_registration_number = $request->business_registration_number;
         $customer->website = $request->website;  
         $customer->save();
         return redirect()->route('customer.index')->with('alert success','Customer record has been saved!');       
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
        $customer = CustomerModel::findOrFail($id);
        $customer->delete();   
        return redirect()->route('customer.index')->with('alert success','Customer record has been saved!');
    }
}
