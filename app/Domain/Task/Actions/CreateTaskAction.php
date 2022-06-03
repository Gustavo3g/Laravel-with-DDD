<?php

namespace Domain\Task\Actions;

use Domain\Task\DTO\TaskData;
use Domain\Task\Models\Task;

final class CreateTaskAction
{
    public function _invoke(TaskData $taskData): Task
    {
        return Task::create([
           'task' => $taskData->task,
            'category' => $taskData->category
        ]);
    }
}

