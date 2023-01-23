<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\CompletedTaskController;
use App\Models\CompletedTask as CompletedTaskModel;
use Illuminate\Support\Facades\Auth;

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
        $per_page = 20;
        
        $list = CompletedTaskModel::where('user_id',Auth::id())
                                  ->orderBy('priority', 'DESC')
                                  ->orderBy('period')
                                  ->orderBy('created_at')
                                  ->paginate($per_page);
            
            
            
        return view('task.completed_list',['list' => $list]);
    }
}