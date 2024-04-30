<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
class TaskList extends Component
{    public $tasks;
    protected $layout = 'layouts.app';

    public function render()
    {        $this->tasks = Task::all();

        return view('livewire.task-list');
    }
}
