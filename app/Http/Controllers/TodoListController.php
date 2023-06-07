<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Http\Requests\UpdateTodoListRequest;
use illuminate\Contracts\Support\jsonable;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $limit = $req->input('per_page') ?? 10;
        return TodoList::select(['id', 'name', 'user_id'])
        ->orderBy('id', 'DESC')
        ->paginate($limit);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $list = new TodoList();
        $list->name = $request->name;
        //TODO Reads user id from Session
        $list->user_id = 1;
        $res = $list->save();
        return $this->getResult($list, $res, 'List created');
    }

    /**
     * Display the specified resource.
     */
    public function show(TodoList $todoList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TodoList $todoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoListRequest $request, TodoList $todoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoList $todoList)
    {
        //
    }

    public function getResult( Jsonable $data, $success = true, $message = '') 
    {
        return [
            'data' => $data,
            'success' => $success,
            'message' => $message
        ];
    }


}
