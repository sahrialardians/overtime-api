<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Services\EmployeeServiceInterface;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeServiceInterface $employeeServiceInterface)
    {
        $this->employeeService = $employeeServiceInterface;
    }

    public function store(EmployeeRequest $request)
    {    
        return $this->employeeService->save($request->validated());
    }
}
