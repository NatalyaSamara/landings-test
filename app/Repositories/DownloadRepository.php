<?php

namespace App\Repositories;

use App\Models\Download;

class DownloadRepository
{
    public function __construct(
        private Download $model
    ) {}

    public function create(int $userId, int $formId, int $landingId): void
    {
        $this->model->newQuery()->create([
            'user_id' => $userId,
            'form_id' => $formId,
            'landing_id' => $landingId,
        ]);
    }
}
