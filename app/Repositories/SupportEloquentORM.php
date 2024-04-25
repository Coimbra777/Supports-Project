<?php

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Models\Support;
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
  public function __construct(protected Support $model)
  {
  }
  public function getAll(string $filter = null): array
  {
    return $this->model
      ->where(function ($query) use ($filter) {
        if ($filter) {
          $query->where('subject', $filter);
          $query->orWhere('body', 'like', $filter);
        }
      })
      ->all()
      ->toArray();
  }

  public function findOne(string $id): stdClass | null
  {

    $support = (object) $this->model->find($id);
    if (!$support) {
      return null;
    }
    return (object) $support->toArray();
  }
  public function delete(string $id): void
  {
    $this->model->find($id)->delete();
  }

  public function new(CreateSupportDTO $dto): stdClass
  {
    return new stdClass();
  }

  public function update(UpdateSupportDTO $dto): stdClass | null
  {
    return null;
  }
}
