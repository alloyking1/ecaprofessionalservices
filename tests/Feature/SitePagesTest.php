<?php

namespace Tests\Feature;

use Tests\TestCase;

class SitePagesTest extends TestCase
{
    public function test_public_pages_load_successfully(): void
    {
        $urls = [
            '/',
            '/about',
            '/services',
            '/services/tax',
            '/services/audit',
            '/services/accounting',
            '/services/payroll',
            '/services/bookkeeping',
            '/services/compliance',
            '/services/advisory',
            '/services/risk-management',
            '/careers',
            '/blog',
            '/faq',
            '/contact',
        ];

        foreach ($urls as $url) {
            $this->get($url)->assertOk();
        }
    }
}
