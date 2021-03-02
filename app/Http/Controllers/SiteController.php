<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partners;
use App\Models\Categories;

class SiteController extends Controller
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
    public function index(Request $request)
    {
        $data=$request;
        $parceiros = $this->partners
        ->where('nome', 'like', '%' . $data['search'] . '%')
        ->orwhere('descricao', 'like', '%' . $data['search'] . '%')
        ->orderBy('id', 'DESC')
        ->get();
        // dd($parceiros);
        $categorias = $this->categories->all();
        return view('index', compact('parceiros','categorias','data'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
