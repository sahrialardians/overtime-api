<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OvertimeRequest;
use App\Services\OvertimeServiceInterface;

class OvertimeController extends Controller
{
    protected $overtimeService;

    public function __construct(OvertimeServiceInterface $overtimeServiceInterface)
    {
        $this->overtimeService = $overtimeServiceInterface;
    }

    public function store(OvertimeRequest $request)
    {    
        return $this->overtimeService->save($request->validated());
    }
}
