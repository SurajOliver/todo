<?php

namespace App\Controllers;  

use CodeIgniter\Exceptions\PageNotFoundException; // add this line
use App\Models\TasksModel;

class Tasks extends BaseController
{
    public function index()
    {

        $TasksModel = new TasksModel();
        $data = [
            'title' => 'Tasks',
            'tasks' => $TasksModel->findAll()
        ];

        return view('templates/header', $data)
            .view('tasks/index' , $data)
            .view('templates/footer');
    }


    public function create()
    {
        $data['title'] = 'Create Task';

        $task_rule = [
            'task_name' => 'required',
            'status' => 'required'
        ];

        if($this->request->getPost()):
            if($this->validate($task_rule)){
                $model = new TasksModel();
                $taskData = array(
                    'task_name' => $this->request->getPost('task_name'),
                    'status' => $this->request->getPost('status')
                );

                if($model->save(esc($taskData)))
                {
                    return redirect()->to('tasks')->with('message_noti', 'Successfully created new task!');
                }else{
                    return redirect()->back()->with('message_error', 'Error creating task');
                }
            }else{
                // Validation fails
                $data['validation'] = $this->validator;
            };
        endif;
        return view('templates/header', $data)
            .view('tasks/create', $data)
            .view('templates/footer');

    }

    public function edit($id)
    {

    }


    public function delete($id)
    {
        $model = new TasksModel();
        $task = $model->find($id);

        if(empty($task)){

            echo 'Delete';
            return redirect()->to('tasks')->with('message_error', 'Unable to find task id for deletion');
        }else{
            $model->delete($id);
            return redirect()->to('tasks')->with('message_noti', 'Tasks deleted succcessfully!');
        }
    }

}
