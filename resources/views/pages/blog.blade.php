@extends('layouts.app')

@section('content')
    @php
        $articles = [
            [
                'title' => 'Tax Compliance Tips for Nigerian Businesses',
                'category' => 'Tax',
                'summary' => 'Improve filing discipline, documentation readiness, and tax planning confidence in 2026.',
                'author' => 'David Ojo',
                'date' => 'May 2026',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'title' => 'Financial Planning Strategies for Growth-Stage Companies',
                'category' => 'Advisory',
                'summary' => 'Build resilient planning models and improve board-level visibility on performance outcomes.',
                'author' => 'Mariam Yusuf',
                'date' => 'May 2026',
                'image' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'title' => 'Accounting Best Practices for Multi-Entity Operations',
                'category' => 'Accounting',
                'summary' => 'Standardize reporting, improve controls, and maintain clean monthly close cycles.',
                'author' => 'Ezinne Anyanwu',
                'date' => 'April 2026',
                'image' => 'https://images.unsplash.com/photo-1552581234-26160f608093?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'title' => 'Audit Preparation Guide for Mid-Sized Businesses',
                'category' => 'Audit',
                'summary' => 'Prepare your records, controls, and team before audit season to reduce friction and delays.',
                'author' => 'Ezinne Anyanwu',
                'date' => 'April 2026',
                'image' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'title' => 'Payroll Compliance Checklist for HR and Finance Teams',
                'category' => 'Compliance',
                'summary' => 'A practical checklist to keep payroll operations and remittances on track.',
                'author' => 'David Ojo',
                'date' => 'March 2026',
                'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1400&q=80',
            ],
            [
                'title' => 'Cash Flow Forecasting for Better Business Decisions',
                'category' => 'Advisory',
                'summary' => 'Use scenario-based forecasting to reduce uncertainty and guide strategic investments.',
                'author' => 'Mariam Yusuf',
                'date' => 'March 2026',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1400&q=80',
            ],
        ];

        $categories = collect($articles)->pluck('category')->unique()->values()->all();
        $featured = $articles[0];
    @endphp

    <x-hero
        eyebrow="Insights"
        title="Blog and Insights"
        subtitle="Actionable financial and compliance insights for founders, finance teams, and business leaders."
    >
        <x-slot:media>
            <div class="media-frame h-72 md:h-80">
                <img src="{{ $featured['image'] }}" alt="African finance professionals discussing insights">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell">
        <div class="container-shell">
            <p class="section-kicker">Featured Article</p>
            <article class="mt-6 grid gap-6 rounded-3xl border border-slate-200 bg-white p-6 md:grid-cols-2 md:p-8">
                <div class="media-frame h-56 md:h-full">
                    <img src="{{ $featured['image'] }}" alt="{{ $featured['title'] }}">
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">{{ $featured['category'] }}</p>
                    <h2 class="mt-3 font-heading text-3xl font-bold text-slate-900">{{ $featured['title'] }}</h2>
                    <p class="mt-3 text-slate-600">{{ $featured['summary'] }}</p>
                    <p class="mt-4 text-sm text-slate-500">{{ $featured['author'] }} • {{ $featured['date'] }}</p>
                    <a href="#" class="mt-6 inline-flex text-sm font-semibold text-primary hover:text-primary-deep">Read full insight</a>
                </div>
            </article>
        </div>
    </section>

    <section class="section-shell bg-slate-50" x-data='{
        search: "",
        activeCategory: "All",
        articles: @json($articles),
        matches(article) {
            const query = this.search.toLowerCase();
            const inCategory = this.activeCategory === "All" || article.category === this.activeCategory;
            const inSearch = query === "" || article.title.toLowerCase().includes(query) || article.summary.toLowerCase().includes(query);
            return inCategory && inSearch;
        }
    }'>
        <div class="container-shell">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div>
                    <p class="section-kicker">All Articles</p>
                    <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Explore by category or search topic</h2>
                </div>
                <div class="w-full max-w-sm">
                    <label for="blog-search" class="sr-only">Search articles</label>
                    <input id="blog-search" type="search" x-model="search" placeholder="Search insights..." class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none">
                </div>
            </div>

            <div class="mt-6 flex flex-wrap gap-2">
                <button type="button" @click="activeCategory='All'" :class="activeCategory==='All' ? 'bg-primary text-white' : 'bg-white text-slate-700'" class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium">All</button>
                @foreach ($categories as $category)
                    <button type="button" @click="activeCategory='{{ $category }}'" :class="activeCategory==='{{ $category }}' ? 'bg-primary text-white' : 'bg-white text-slate-700'" class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium">{{ $category }}</button>
                @endforeach
            </div>

            <div class="mt-8 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                <template x-for="article in articles" :key="article.title">
                    <article x-show="matches(article)" class="card-shell" x-transition>
                        <div class="media-frame h-44">
                            <img :src="article.image" :alt="article.title">
                        </div>
                        <p class="mt-4 text-xs font-semibold uppercase tracking-[0.18em] text-primary" x-text="article.category"></p>
                        <h3 class="mt-2 font-heading text-xl font-bold text-slate-900" x-text="article.title"></h3>
                        <p class="mt-2 text-sm text-slate-600" x-text="article.summary"></p>
                        <p class="mt-3 text-xs text-slate-500"><span x-text="article.author"></span> • <span x-text="article.date"></span></p>
                    </article>
                </template>
            </div>

            <p class="mt-6 text-sm text-slate-500" x-show="articles.filter(a => matches(a)).length === 0" x-cloak>
                No articles match your current search or category filter.
            </p>
        </div>
    </section>
@endsection