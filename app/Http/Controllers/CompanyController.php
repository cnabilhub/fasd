<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('companies.index')
            ->with(['companies' => Auth()->user()->companies()
                ->latest()->paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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

            $validated = $request->validate(
                [
                    'name' => ['required', 'max:255'],
                    'email' => ['required', 'email', 'max:255'],
                    'desc' => ['present', 'max:1000'],
                    'phone' => ['present', 'max:20'],
                    'RCS' => ['present', 'max:20'],
                    'TVA' => ['present', 'max:20'],
                    'NTVA' => ['present', 'max:20'],
                    'country' => ['present', 'max:20'],
                    'note' => ['present', 'max:1000'],
                ]
            );

            $validated['user_id'] = Auth()->user()->id;

            // dd($validated);

            // validation if request has image

            // $img = Image::make('foo.jpg')->resize(300, 200);


            Company::create($validated);

            return redirect()->back()->with('message', "La société a été ajoutée avec succès");
        } catch (ValidationException $e) {

            return back()->withErrors(['title' => $e->getMessage()]);
            # code...
            // return dd($e);
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
    public function edit(Company $company)
    {
        return view('companies.edit')->with(['company' => $company]);
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
        $compay = Company::find($id);
        if ($compay) {
            Company::destroy($id);
            return redirect()->route('companies.index')->with(['message' => 'La société (' . $compay->name . ')a été supprimée avec succès']);
        } else {
            return redirect()->route('companies.index')->withErrors(['error' => 'Erreur lors de la suppression de cette entreprise, veuillez actualiser la page et réessayer']);
        }
    }
}
