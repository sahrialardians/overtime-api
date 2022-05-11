<?php

namespace App\Services;

use App\Repositories\OvertimeRepositoryInterface;

class OvertimeService implements OvertimeServiceInterface
{
    protected $overtimeRepository;

    public function __construct(OvertimeRepositoryInterface $overtimeServiceInterface)
    {
        $this->overtimeRepository = $overtimeServiceInterface;
    }

    public function save($data)
    {
        
        try {
            $this->overtimeRepository->save($data);

            return response()->json([
                'code' => 201,
                'status' => true,
                'message' => 'Succesfully created overtime.'
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
