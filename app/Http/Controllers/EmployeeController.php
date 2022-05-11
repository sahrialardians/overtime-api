<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Repositories\EmployeeInterface;

class EmployeeController extends Controller
{
    protected $employeeRepository;

    public function __construct(EmployeeInterface $employeeInterface)
    {
        $this->employeeRepository = $employeeInterface;
    }

    public function store(EmployeeRequest $request)
    {    
        try {
            $this->employeeRepository->save($request->validated());

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
