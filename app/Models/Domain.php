<?php

namespace App\Models;

use Sdkconsultoria\Base\Models\Model as BaseModel;
use Hellsythe\DomainNameApi\Domain as DomainApi;

class Domain extends BaseModel
{
    public $principal_domain;

    public static function checkAvailability(string $search)
    {
        $domain = new Domain();
        $domain->getPrincipalDomain($search);
        $domainApi = new DomainApi();
        $domainApi = $domainApi->checkAvailability($search);

        return $domain->parseDomains($domainApi);
    }

    private function getPrincipalDomain(string $search)
    {
        $parse_domain = explode('.', $search, 2);

        if (!($parse_domain[1] ?? true)) {
            $this->principal_domain .= '.com';
        } else{
            $this->principal_domain = $search;
        }
    }

    private function parseDomains(array $domains)
    {
        $parsed_domains = [];

        foreach ($domains as $index => $domain) {
            $parse_domain = [
                'domain' => $domain["DomainName"] . '.' . $domain["TLD"],
                'status' => $this->parseStatus($domain["Status"]),
                'period' => $domain["Period"],
                'price' => $this->addProfit($domain["Price"]),
                'available' => $domain["Status"]=='available'?true:false,
            ];
            if ($domain["DomainName"] . '.' . $domain["TLD"] != $this->principal_domain) {
                array_push($parsed_domains, $parse_domain);
            } else{
                array_unshift($parsed_domains, $parse_domain);
            }
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
