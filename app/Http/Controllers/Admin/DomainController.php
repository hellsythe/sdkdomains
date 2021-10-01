<?php

namespace App\Http\Controllers\Admin;

use Sdkconsultoria\Base\Http\Controllers\ResourceController;

class DomainController extends ResourceController
{
    protected $model = \App\Models\Domain::class;
    protected $view = 'admin.domain.';
}
