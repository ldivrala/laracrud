<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('index');
    }

    public function crud_list()
    {

        $table_data = Crud::all();

        return Datatables::of($table_data)
            ->addColumn('action', function ($table_data) {
                return '<a href="' . url('crud') . '/' . $table_data->id . '/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <button class="btn btn-xs btn-primary" onclick="delete_confirm('.$table_data->id.')"><i class="glyphicon glyphicon-edit"></i> Delete</button>
                        <a href="' . url('crud') . '/' . $table_data->id . '" class="btn btn-xs btn-primary" id="delete"><i class="glyphicon glyphicon-edit"></i> Show</a>
                ';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:20|min:2',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:cruds',
            'address' => '',
            'DOB' => 'required|date',
        ]);

        $stored_data = Crud::create($validated_data);

        if ($stored_data) {
            return redirect('/crud');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
       return view('show',compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud)
    {
        return view('edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $crud)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:14|min:2',
            'mobile' => 'required|numeric',
            'email' => 'required|email|unique:users,email,' . $crud . ',id',
            'address' => '',
            'DOB' => 'required|date',
        ]);

        $stored_data = Crud::where('id', $crud)->update($validated_data);

        if ($stored_data) {
            return redirect('/crud');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function delete($crud)
    {

        $deleted_data =Crud::where('id',$crud);
        $deleted_data = $deleted_data->delete();
        if ($deleted_data) {
            return redirect('/crud');
        }
    }
}
