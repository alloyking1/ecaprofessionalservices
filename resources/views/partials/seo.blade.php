@php
    $defaults = config('site.meta.defaults');
    $meta = $meta ?? $defaults;
    $title = $meta['title'] ?? $defaults['title'];
    $description = $meta['description'] ?? $defaults['description'];
    $image = $meta['image'] ?? 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1400&q=80';
    $canonical = url()->current();
    $siteName = config('site.name');
@endphp

<title>{{ $title }} | {{ $siteName }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index,follow">
<link rel="canonical" href="{{ $canonical }}">

<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title }} | {{ $siteName }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:image" content="{{ $image }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }} | {{ $siteName }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">