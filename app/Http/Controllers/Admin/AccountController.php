<?php

namespace App\Http\Controllers\Admin;

use Sdkconsultoria\Base\Http\Controllers\ResourceController;

class AccountController extends ResourceController
{
    protected $model = \App\Models\Account::class;
    protected $view = 'admin.account.';
}
