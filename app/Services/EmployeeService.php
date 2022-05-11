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
        
        try {
            $this->employeeRepository->save($data);

            return response()->json([
                'code' => 201,
                'status' => true,
                'message' => 'Succesfully created employee.'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
