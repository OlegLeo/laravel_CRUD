<?php

namespace App\Http\Controllers;

use App\Todo;
use Exception;
use Illuminate\Http\Request;
use Vtiful\Kernel\Excel;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {

        try {
            return response()->json(Todo::all(), 200);
        } catch (Exception $exception)
    {
        return response()->json(['error' => $exception], 500);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $todo = Todo::create($request->all());
        return response()->json($todo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Todo $todo)
    {
        try
        {return response()->json($todo, 200);    }
        catch (Exception $exception)
        {return response()->json(['error' => $exception], 500);    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Todo $todo)
    {
        try {
            $todo->update($request->all());
            return response()->json($todo, 200);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Todo $todo)
    {
        try {
            $todo->delete();
            return response()->json(['message' => 'Deleted'], 205);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }

    public function search(Request $request)
    {
        try {
            return response()->json(Todo::orderBy("updated_at", "desc")->where('todo', 'LIKE', '%' . $request->search . '%')->get(), 200);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }
    public function storeExcel()
    {
        // Store on default disk
        Excel::store(new InvoicesExport(2018), 'invoices.xlsx');
    }
}
