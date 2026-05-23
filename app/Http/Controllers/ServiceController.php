<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index', [
            'meta' => $this->meta('services'),
            'services' => config('site.services.overview', []),
        ]);
    }

    public function tax()
    {
        return $this->servicePage('tax');
    }

    public function audit()
    {
        return $this->servicePage('audit');
    }

    public function accounting()
    {
        return $this->servicePage('accounting');
    }

    public function payroll()
    {
        return $this->servicePage('payroll');
    }

    public function bookkeeping()
    {
        return $this->servicePage('bookkeeping');
    }

    public function compliance()
    {
        return $this->servicePage('compliance');
    }

    public function advisory()
    {
        return $this->servicePage('advisory');
    }

    public function riskManagement()
    {
        return $this->servicePage('risk-management');
    }

    private function servicePage(string $slug)
    {
        $service = config("site.services.detail.{$slug}");

        abort_if(is_null($service), 404);

        return view("services.{$slug}", [
            'meta' => $service['meta'] ?? $this->meta('services'),
            'service' => $service,
        ]);
    }

    private function meta(string $page): array
    {
        return config("site.meta.pages.{$page}", config('site.meta.defaults'));
    }
}
