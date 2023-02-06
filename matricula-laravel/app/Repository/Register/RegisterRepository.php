<?php

namespace App\Repository\Register;

use App\Models\register\Regiter;
use App\Repository\Abstracts\AbstractRepository;
use App\Repository\Contracts\Register\RegisterRepositoryInterface;

class RegisterRepository extends AbstractRepository implements RegisterRepositoryInterface
{
    protected $model = Register::class;
}
