<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;
use App\Services\ApiServices;

class eradivisieController extends Controller
{
    //
    protected $apiService;
    // Menambahkan dependensi pada constructor
    public function __construct(ApiService$apiService)
    {
        $this->apiService = $apiService;
    }
    // Method untuk mendapatkan semua tim
    public function getAllTeams()
    {
        // Ambil data tim dari API
        $teams = $this->apiService->getAllTeams();
        return view('teams', ['data' => $teams]);
    }
}
