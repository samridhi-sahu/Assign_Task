<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function user(){
        return view('user');
        
        }
        function admin(){
            $users=User::all();
            return view('admin',compact('users'));
            
            }
            function adduser(Request $request){
                $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            
            $user->mobile = $request->mobile;
            $user->save();
            
            return "User Created Successfully";
            }
            public function addtask(Request $request){
                
                $task = new Task;
            $task->name = $request->name;
            $task->task = $request->task;
            $task->type = $request->type;
            $task->save();
            return "Task Created Successfully";
    
            }
    
            public function view(){
                $view=User::all();
                return view('view',compact('view'));
                
              }
              public function show(){
                $show=Task::all();
                return view('show',compact('show'));
                
              }
}
