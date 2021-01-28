<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\KendaraanService;

final class HomepageController extends Controller
{
    private $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->kendaraanService = $kendaraanService;
    }

    public function index() 
    {
        $outlineInfo = $this->kendaraanService->getCompileOutlineInfoKendaraan();
        return view('user.home-page', compact('outlineInfo'));
    }
}
