<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Landing;
use App\Repositories\FormRepository;
use App\Repositories\LandingRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class HomePageController extends BaseController
{
    public function __construct(
        private FormRepository $formRepository
    ) {}

    public function __invoke()
    {
        return view('home', ['forms' => $this->formRepository->getAll()->all()]);
    }
}
