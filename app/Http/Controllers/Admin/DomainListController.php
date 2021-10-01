<?php

namespace App\Http\Controllers\Admin;

use Sdkconsultoria\Base\Http\Controllers\ResourceController;

class DomainListController extends ResourceController
{
    protected $model = \App\Models\DomainList::class;
    protected $view = 'admin.domain-list.';
}
