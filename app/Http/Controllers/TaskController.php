<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use Custom\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return response()->success(custom()->getSuccessfullyListedMessage(),TaskResource::collection(Task::all()));
    }
}
