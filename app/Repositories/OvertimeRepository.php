<?php

namespace App\Repositories;

use App\Models\Overtime;

class OvertimeRepository implements OvertimeRepositoryInterface
{
    public function save($data)
    {
        $overtime = new Overtime();

        $overtime->create($data);
    }
}
