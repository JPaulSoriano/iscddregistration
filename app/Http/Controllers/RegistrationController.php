<?php

namespace App\Http\Controllers;
use App\Registration;
use Illuminate\Http\Request;
use App\Mail\RegisteredStudent;
use App\Mail\RegisteredComplete;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index','details']]);
    }

    public function index()
    {
        $registrations = Registration::latest()->paginate(5);
        return view('registrations.index',compact('registrations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('registrations.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'school_year' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'grade' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'birthday' => 'required',
            'birth_place' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'email' => 'required',
            'no_brothers' => 'nullable',
            'brother_ages' => 'nullable',
            'no_sisters' => 'nullable',
            'sister_ages' => 'nullable',
            'father' => 'required',
            'father_occupation' => 'required',
            'father_phone' => 'required',
            'mother' => 'required',
            'mother_occupation' => 'required',
            'mother_phone' => 'required',
            'parent_address' => 'required',
            'guardian' => 'nullable',
            'guardian_occupation' => 'nullable',
            'guardian_phone' => 'nullable',
            'guardian_address' => 'nullable',
            'payment_method' => 'nullable',
            'payment_ref' => 'nullable|unique:registrations,payment_ref',
            'image' => 'nullable|image'
        ]);


        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $image = $request->image->store('images', 'public');
            $input['image'] = "$image";
        }

        do{
           $ref = mt_rand(1000000000, 9999999999);
           $exists = Registration::where('reg_ref', $ref)->exists();
        }while($exists);

        $input['reg_ref'] = $ref;

    
        $registration = Registration::create($input);

        Mail::to($request->email)->send(new RegisteredStudent($registration));
    
        return redirect()->route('registrations.show', $registration)->with('success','Registration Success');
    }
    
    public function show(Registration $registration)
    {
        return view('registrations.show', compact('registration'));
    }

    public function details(Registration $registration)
    {
        return view('registrations.details', compact('registration'));
    }


    public function unverify(Registration $registration)
    {
        $registration->status = '0';
        $registration->save();

        return redirect()->route('registrations.index');
    }

    public function verify(Registration $registration)
    {
        $registration->status = '1';
        $registration->save();

        return redirect()->route('registrations.index');
    }

    public function unadmit(Registration $registration)
    {
        $registration->status_admission = '0';
        $registration->save();

        return redirect()->route('registrations.index');
    }

    public function admit(Registration $registration)
    {
        $registration->status_admission = '1';
        $registration->save();

        return redirect()->route('registrations.index');
    }


    public function unenroll(Registration $registration)
    {
        $registration->status_enrollment = '0';
        $registration->save();

        return redirect()->route('registrations.index');
    }

    public function enroll(Registration $registration)
    {
        $registration->status_enrollment = '1';
        $registration->save();

        Mail::to($registration->email)->send(new RegisteredComplete($registration));

        return redirect()->route('registrations.index');
    }

    public function status(Request $request){
        // Get the search value from the request
        $search = $request->input('status');
    
        // Search in the title and body columns from the posts table
        $registrations = Registration::query()
            ->where('reg_ref', '=', "{$search}")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('registrations.status', compact('registrations'));
    }
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'image' => 'required|image',
            'payment_method' => 'required',
            'payment_ref' => 'required|unique:registrations,payment_ref',
            'auth_first_name' => 'nullable',
            'auth_middle_name' => 'nullable',
            'auth_last_name'=> 'nullable'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {

            $image = $request->image->store('images', 'public');
            $input['image'] = "$image";

        }else{
            unset($input['image']);
        }
          
        $registration->update($input);
    
        return redirect('/')->with('success','Payment Success');
    }


    public function edit(Registration $registration)
    {
        return view('registrations.edit',compact('registration'));
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('registrations.index')->with('success','Registration deleted successfully');
    }
}
