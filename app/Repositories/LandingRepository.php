<?php

namespace App\Repositories;

use App\Models\Landing;

class LandingRepository
{
    public function __construct(
        private Landing $model
    ) {}

    public function findByTypeAndFormId(int $type, int $formId): ?Landing
    {
        /** @var Landing|null $landing */
        $landing = $this->model->newQuery()
            ->where('type', $type)
            ->where('form_id', $formId)
            ->first();

        return $landing;
    }

    public function get(int $id): ?Landing
    {
        /** @var Landing|null $landing */
        $landing = $this->model->newQuery()
            ->where('id', $id)
            ->first();

        return $landing;
    }
}
