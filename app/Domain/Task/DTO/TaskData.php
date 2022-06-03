<?php

namespace Domain\Task\DTO;


use phpDocumentor\Reflection\Types\Self_;
use Spatie\DataTransferObject\DataTransferObject;

class TaskData extends DataTransferObject
{
    /** @var string */
    public $task;


    /** @var string|null */
    public $category;

    public function fromRequest(TaskRequest $taskRequest): TaskData
    {
     return new self([
        'task' => $taskRequest['task'],
        'category' => $taskRequest['category']
     ]);
    }
}
