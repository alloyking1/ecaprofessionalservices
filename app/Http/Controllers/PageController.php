<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'meta' => $this->meta('home'),
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'meta' => $this->meta('about'),
        ]);
    }

    public function careers()
    {
        return view('pages.careers', [
            'meta' => $this->meta('careers'),
        ]);
    }

    public function blog()
    {
        return view('pages.blog', [
            'meta' => $this->meta('blog'),
        ]);
    }

    public function faq()
    {
        return view('pages.faq', [
            'meta' => $this->meta('faq'),
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'meta' => $this->meta('contact'),
        ]);
    }

    private function meta(string $page): array
    {
        return config("site.meta.pages.{$page}", config('site.meta.defaults'));
    }
}
