<?php

namespace Modules\ProductBrand\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('productbrand::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productbrand::create');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('productbrand::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('productbrand::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
