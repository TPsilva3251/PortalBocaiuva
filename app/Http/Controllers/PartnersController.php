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
    private $partners;
    private $categories;

    public function __construct(partners $partners, categories $categories)
    {
        $this->partners=$partners;
        $this->categories=$categories;
    }
    public function index()
    {
        $parceiros = $this->partners->all();
        // dd($parceiros);
        $categorias = $this->categories->all();
        // dd($parceiros,$categorias);
        return view('parceiro_index', compact('parceiros','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categorias = $this->categories->all();
    //    dd($categorias);
        return view ('parceiro_create_edit', compact('categorias'));
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
            $extensio = $request->img1->extension();
            date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d H:i');
            $name_file = "{$date}.{$extensio}";
            $new_name=kebab_case($name_file);
        }
        if($request->hasFile('img2')  && $request->file('img1')->isValid())
        {
            $extensio = $request->img1->extension();
            date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d H:i');
            $name_file = "{$date}.{$extensio}";
            $new_name1=kebab_case($name_file);
        }
        $data_form['img1'] = $new_name;
        $data_form['img2'] = $new_name1;
        $upload = $request->img1->store('products');
        $upload = $request->img2->store('products');
        $upload = $request->img3->store('products');
        $partners = new Partners($data_form);
        $partners->save();

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
