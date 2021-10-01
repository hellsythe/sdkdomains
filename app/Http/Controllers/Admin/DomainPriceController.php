<?php

namespace App\Http\Controllers\Admin;

use Sdkconsultoria\Base\Http\Controllers\ResourceController;

class DomainPriceController extends ResourceController
{
    protected $model = \App\Models\DomainPrice::class;
    protected $view = 'admin.domain-price.';
}
