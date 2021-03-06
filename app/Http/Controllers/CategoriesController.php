<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Partners;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $categories;
    private $partners;

    public function __construct(categories $categories, partners $partners)
    {
        $this->categories=$categories;
        $this->partners=$partners;
    }
    public function index()
    {
        $categorias = $this->categories->all();
        return view('categoria_create',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = $this->categories->all();
        return view('categoria_create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = $this->categories->all();
        $data=$request->only('nome');
        $categories = categories::create($data);
        return redirect()-> route('index_categoria',compact('categorias'));

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
    public function edit($whats)
    {
        $teste = $this->partners->where('whats',$whats)->first();
        dd($teste);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("deletar");
    }
}
