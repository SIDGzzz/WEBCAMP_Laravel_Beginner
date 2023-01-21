<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\CompletedTaskController;

class CompletedTaskController extends Controller
{
    /**
     * 完了タスクの一覧を表示する
     *
     * 
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('task.completed_list');
    }
}