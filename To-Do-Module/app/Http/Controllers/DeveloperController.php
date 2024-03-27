<?php

namespace App\Http\Controllers;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = Developer::getRecord($request);
        return view('developers.list', $data);
    }
    public function add(Request $request)
    {
        return view('developers.add');
    }
    public function add_post(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'required',
            'address' => 'required',
            'blood_group' => 'required',
            'mobile_number' => 'required',
        ]);

        $user = new Developer();
        $user->name = trim($validatedData['name']);
        $user->designation = trim($validatedData['designation']);
        $user->email = trim($validatedData['email']);
        $user->address = trim($validatedData['address']);
        $user->blood_group = trim($validatedData['blood_group']);
        $user->mobile_number = trim($validatedData['mobile_number']);
        $user->save();

        return redirect('developers')->with('success', 'Developer Successfully Created.');
    }
    public function edit($id)
    {
        $data['getRecord'] = Developer::find($id);
        return view('developers.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'blood_group' => 'required',
            'mobile_number' => 'required',
        ]);
        $user = Developer::find($id);
        $user->name = trim($request->name);
        $user->designation = trim($request->designation);
        $user->email = trim($request->email);
        $user->address = trim($request->address);
        $user->blood_group = trim($request->blood_group);
        $user->mobile_number = trim($request->mobile_number);
        $user->save();
        return redirect('developers')->with('success', 'Developer Successfully Updated');
    }
    public function delete($id)
    {
        $user = Developer::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Developer not found');
        }

        $user->delete();

        return redirect()->back()->with('error', 'Developer Successfully Deleted');
    }
}
