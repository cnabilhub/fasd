<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = Auth()->user()->companies()->paginate(6);

        return view('companies.index')->with(['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\    
     */
    public function store(Request $request)
    {

        try {

            // request validation 

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required | max:255',
                    'email' => 'required | email | max:255',
                    'desc' => '  max:1000',
                    'phone' => '  max:20',
                    'tax_id' => '  max:20',
                    'note' => '  max:1000',
                ]
            );

            if ($validator->fails()) {

                return response()->json($validator->errors());
            } else {
                // validation if request has image


                // $img = Image::make('foo.jpg')->resize(300, 200);

                $all = $request->all();
                $all['user_id'] = Auth()->user()->id;

                Company::create($all);
                // $company->user_id = Auth()->user()->id;

                return redirect()->back()->with('message', "Succuufuly added");
            }
        } catch (\Throwable $e) {

            # code...
            return dd($request->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
