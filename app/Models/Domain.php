<?php

namespace App\Models;

use Sdkconsultoria\Base\Models\Model as BaseModel;
use Hellsythe\DomainNameApi\Domain as DomainApi;

class Domain extends BaseModel
{
    public static function checkAvailability(string $search)
    {
        $domain = new DomainApi();
        return $domain->checkAvailability($search);
    }
}
