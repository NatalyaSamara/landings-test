<?php

namespace App\Http\Controllers;

use App\Repositories\DownloadRepository;
use App\Repositories\LandingRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class DownloadController extends BaseController
{
    public function __construct(
        private DownloadRepository $downloadRepository,
        private LandingRepository $landingRepository
    ){}

    public function __invoke(string $landingId)
    {
        $user = Auth::user();
        $landing = $this->landingRepository->get($landingId);
        $this->downloadRepository->create($user->id, $landing->form_id, $landingId);

        return view('download');
    }
}
