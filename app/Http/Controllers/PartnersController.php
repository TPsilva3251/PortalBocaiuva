<?php

namespace App\Http\Controllers;
use App\Models\Partners;
use App\Models\Categories;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $parceiro;
    private $categoria;

    public function __construct(partners $parceiro, categories $categoria)
    {
        $this->parceiro=$parceiro;
        $this->cateroria=$categoria;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('parceiro_create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_form=$request->all();
        if($request->hasFile('img1')  && $request->file('img1')->isValid())
        {
            // $name="legal1";
            $extensio = $request->img1->extension();
            date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d H:i');
            $name_file = "{$date}.{$extensio}";
            $new_name=kebab_case($name_file);
        }
        dd($new_name);

        dd($data_form);
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
