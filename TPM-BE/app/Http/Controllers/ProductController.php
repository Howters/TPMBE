<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension = $request -> file('Image')->getClientOriginalExtension();
        $filename = $request -> NamaMakanan.'_'.$request->AsalMakanan.'.'.$extension;

        $request->file('Image')->storeAs('/public/Product/', $filename);
        Product::create([
            'NamaMakanan' => $request->NamaMakanan,
            'AsalMakanan' => $request->AsalMakanan,
            'TanggalExpired' => $request->TanggalExpired,
            'Kuantitas' => $request->Kuantitas,
            'Image' => $filename
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findorfail($id);
        return view('showProduct', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $product  = Product ::findorfail($id);
        return view ('editProduct', compact ('products'));
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
        
        $extension = $request -> file('Image')->getClientOriginalExtension();
        $filename = $request -> NamaMakanan.'_'.$request->AsalMakanan.'.'.$extension;

        $request->file('Image')->storeAs('/public/Product/', $filename);
        Product::findorfail($id)->update([
            'NamaMakanan' => $request->NamaMakanan,
            'AsalMakanan' => $request->AsalMakanan,
            'TanggalExpired' => $request->TanggalExpired,
            'Kuantitas' => $request->Kuantitas,
            'Image' => $filename
        ]);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        Product::destroy ($id);

        return redirect ('/home');
    }
}
