<?php

namespace App\Entity;

interface TaskStates
{
    const STATE_CURRENT = 'current';

    const STATE_FUTURE = 'future';

    const STATE_DONE = 'done';
}
