<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Landing;
use App\Repositories\FormRepository;
use App\Repositories\LandingRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class LandingTwoTypeController extends BaseController
{
    public function __construct(
        private FormRepository $formRepository,
        private LandingRepository $landingRepository,
    ){}

    public function __invoke(string $slug)
    {
        $form = $this->getForm($slug);
        $landing = $this->getLanding($form->id);

        return view('landing', $this->getViewData($form, $landing));
    }

    private function getForm(string $slug): Form
    {
        $form = $this->formRepository->findBySlug($slug);

        if ($form === null) {
            abort(404);
        }
        return $form;
    }

    private function getLanding(int $formId): Landing
    {
        $landing = $this->landingRepository
            ->findByTypeAndFormId(
                Landing::TYPE_ONE_CODE,
                $formId
            );

        if ($landing === null) {
            abort(404);
        }
        return $landing;
    }

    private function getViewData(Form $form, Landing $landing): array
    {
        return [
            'data' => [
                'form_uid' => $form->form_uid,
                'title' => $form->title,
                'description' => $form->description,
                'guide' => $landing->guide,
                'landing_id' => $landing->id,
            ],
            'meta' => [
                'title' => $landing->meta_title,
                'description' => $landing->meta_description,
            ]
        ];
    }
}
