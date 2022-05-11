<?php

namespace App\Services;

use App\Repositories\EmployeeInterface;

class EmployeeService implements EmployeeServiceInterface
{
    protected $employeeRepository;

    public function __construct(EmployeeInterface $employeeInterface)
    {
        $this->employeeRepository = $employeeInterface;
    }

    public function save($data)
    {
        $this->employeeRepository->save($data);
    }
}
