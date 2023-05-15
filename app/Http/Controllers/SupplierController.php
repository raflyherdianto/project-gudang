<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.supplier.index', [
            'title' => 'Data Supplier',
            'suppliers' => Supplier::all(),
            'total' => Supplier::all()->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.supplier.create', [
            'title' => 'Tambah Data Supplier',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_supplier'=>'required|unique:suppliers|min:3|max:5',
            'nama'=>'required|min:3|max:50',
            'alamat'=>'required|min:3|max:50',
            'kota'=>'required|min:3|max:24',
            'provinsi'=>'required|min:3|max:24',
            'negara'=>'required|min:3|max:24',
            'kode_pos'=>'required|min:3|max:12',
        ]);

        Supplier::create($validateData);
        return redirect('/dashboard/supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('dashboard.supplier.edit', [
            'title' => 'Edit Data Supplier',
            'supplier'=>$supplier,
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $rules = [
            'nama' => 'required|min:3|max:50',
            'alamat'=>'required|min:3|max:50',
            'kota'=>'required|min:3|max:24',
            'provinsi'=>'required|min:3|max:24',
            'negara'=>'required|min:3|max:24',
            'kode_pos'=>'required|min:3|max:12',
        ];

        if ($request->kode_supplier != $supplier->kode_supplier) {
            $rules['kode_supplier'] = 'required|unique:suppliers';
        }

        $validateData = $request->validate($rules);

        Supplier::where('id', $supplier->id)->update($validateData);
        return redirect('/dashboard/supplier');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);
        return redirect('/dashboard/supplier');
    }
}
