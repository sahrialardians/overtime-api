<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository implements EmployeeInterface
{
    public function save($data)
    {
        $employee = new Employee();

        $employee->create($data);
    }
}
