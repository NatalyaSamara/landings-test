<?php

namespace App\Repositories;

use App\Models\Form;
use Illuminate\Support\Collection;

class FormRepository
{
    public function __construct(
        private Form $model
    ) {}

    public function findBySlug(string $slug): ?Form
    {
        /** @var Form|null $form */
        $form = $this->model->newQuery()
            ->where('slug',$slug)
            ->first();

        return $form;
    }

    public function getAll(): Collection
    {
        return $this->model->newQuery()
            ->limit(50)
            ->get();
    }
}
