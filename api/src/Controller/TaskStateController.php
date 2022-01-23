<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Task;
use App\Entity\TaskStates;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class TaskStateController extends AbstractController
{
    public function __construct()
    {

    }

    public function __invoke(Task $task)
    {
        $task->setState(TaskStates::STATE_DONE);
    }
}
