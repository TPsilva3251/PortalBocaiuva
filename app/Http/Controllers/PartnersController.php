<?php

namespace App\Http\Controllers;
use App\Models\Partners;
use App\Models\Categories;
use File;

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

    public function index(Request $request)
    {
        $parceiros = $this->partners->all();
        $categorias = $this->categories->all();
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
        $categorias = $this->categories->all();
        $data_form=$request->all();
        // dd($data_form['img']);


        if($request->hasFile('img')  && $request->file('img')->isValid())
        {
            $extensio = $request->img->extension();
            // date_default_timezone_set('America/Sao_Paulo');
            // $date = date('Y-m-d H:i');
            // $name_file = "{$date}.{$extensio}";
            // $new_name=kebab_case(public_path().'/storage/products/'.$name_file);
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/products');


            $image->move($destinationPath, $name);
            // dd($image,$name);
        }

        $data_form['img'] = '/storage/products/'.$name;
        // File::move($data_form['img'],public_path().'/storage/products'.$name_file);
        // $upload = $request->img->store('products');
        // $partners = new Partners($data_form);
// dd($data_form);
        $partners=partners::create($data_form);

        // return view('index', compact('parceiros','categorias'));
        return redirect()-> route('index',compact('parceiros','categorias'));

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
