<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Phonebook;

class PhonebookController extends Controller
{
    private $phonebook;

    public function __construct(Phonebook $phonebook){
        $this->phonebook = $phonebook;
    }

    public function index(){
        $phonebook_list =$this->phonebook->orderBy('first_name')->get();
        return view('index')->with('phonebook_list', $phonebook_list); 
    }

    public function store(Request $request){
        $request->validate([
            'first_name'=>'required|min:3|max:75',
            'last_name'=>'required|min:3|max:75',
            'address'=>'required|min:3|max:75',
            'contact_number'=>'required|min:3|max:75',
            'username'=>'required|min:3|max:75',

        ]);

        $this->phonebook->first_name = $request->first_name;
        $this->phonebook->last_name = $request->last_name;
        $this->phonebook->address = $request->address;
        $this->phonebook->contact_number = $request->contact_number;
        $this->phonebook->username = $request->username;
        $this->phonebook->save();
        return redirect()->route('index');
    }

    public function contact(){
        return view('phonebooks.contact');
    }

    public function edit($phonebook_id){
        $phonebook_details = $this->phonebook->findOrFail($phonebook_id);
        return view('phonebooks.edit')->with('phonebook_details', $phonebook_details);
    }

    public function update($phonebook_id, Request $request) {
        $request->validate([
            'first_name' => 'required|min:3|max:75',
            'last_name' => 'required|min:3|max:75',
            'address' => 'required|min:3|max:75',
            'contact_number' => 'required|min:3|max:75',
            'username' => 'required|min:3|max:75',
        ]);

            $phonebook_details = $this->phonebook->findOrFail($phonebook_id);
            $phonebook_details->first_name = $request->first_name;
            $phonebook_details->last_name = $request->last_name;
            $phonebook_details->address = $request->address;
            $phonebook_details->contact_number = $request->contact_number;
            $phonebook_details->username = $request->username;
            $phonebook_details->save();

        return redirect()->route('index');
    }

    public function profile($phonebook_id){
        $phonebook_details = $this->phonebook->findOrFail($phonebook_id);
        return view('phonebooks.profile')->with('phonebook_details', $phonebook_details);
    }


    public function destroy($phonebook_id){
        $this->phonebook->destroy($phonebook_id);
        return redirect()->back();
    }

}
