<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $limit = $req->input('per_page') ?? 10;
        $list_id = $req->list_id ?? 1;
        return Todo::select(['id', 'name', 'list_id'])
        ->where('list_id', $list_id)
        ->orderBy('id', 'DESC')
        ->paginate($limit);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
