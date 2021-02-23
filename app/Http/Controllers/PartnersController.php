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

    public function search(Request $request)
    {
        dd('chegou');
    }
    public function index(Request $request)
    {
        // dd('esta');
        $parceiros = $this->partners->all();
        // dd($parceiros);
        $categorias = $this->categories->all();
        // dd($parceiros,$categorias);
        // $request->imagem;
        // dd($request);
        return view('index', compact('parceiros','categorias'));
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
        $parceiros = $this->partners->all();
        // dd($parceiros);
        $categorias = $this->categories->all();
        $data_form=$request->all();
        // dd($data_form);

        // if($request->hasFile('img')  && $request->file('img')->isValid())
        // {
        //     $extensio = $request->img1->extension();
        //     date_default_timezone_set('America/Sao_Paulo');
        //     $date = date('Y-m-d H:i');
        //     $name_file = "{$date}.{$extensio}";
        //     $new_name=kebab_case($name_file);
        // }

        // $data_form['img'] = $new_name;
        // $upload = $request->img->store('products');
        // $partners = new Partners($data_form);

        $partners=partners::create($data_form);

        return view('index', compact('parceiros','categorias'));

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
