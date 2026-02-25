<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task', compact('tasks'));
    }

    public function store(Request $request)
    {
        // Pega apenas o que é necessário, ignorando o _token
        $data = $request->only(['title', 'completed']);

        Task::create($data);

        return redirect()->back();
    }
}