<?php

namespace App\Models;

use Sdkconsultoria\Base\Models\Model as BaseModel;
use Hellsythe\DomainNameApi\Domain as DomainApi;

class Domain extends BaseModel
{
    public static function checkAvailability(string $search)
    {
        $domainApi = new DomainApi();
        $domainApi = $domainApi->checkAvailability($search);
        $domain = new Domain();

        return $domain->parseDomains($domainApi);
    }

    private function parseDomains(array $domains)
    {
        $parsed_domains = [];

        foreach ($domains as $domain) {
            array_push($parsed_domains, [
                'domain' => $domain["DomainName"] . '.' . $domain["TLD"],
                'status' => $this->parseStatus($domain["Status"]),
                'period' => $domain["Period"],
                'price' => $this->addProfit($domain["Price"]),
            ]);
        }

        return $parsed_domains;
    }

    private function parseStatus(string $status)
    {
        switch ($status) {
            case 'available':
                return __('models.domain.available');
                break;

            default:
                return __('models.domain.notavailable');
                break;
        }
    }

    private function addProfit($price)
    {
        return $price * config('domainnameapi.profit');
    }
}
