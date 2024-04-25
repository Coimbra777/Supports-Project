<?php

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
  public function getAll(string $filter = null): array
  {
    return [];
  }

  public function findOne(string $id): stdClass | null
  {
    return null;
  }

  public function new(CreateSupportDTO $dto): stdClass
  {
    return new stdClass();
  }

  public function update(UpdateSupportDTO $dto): stdClass | null
  {
    return null;
  }

  public function delete(string $id): void
  {
  }
}
