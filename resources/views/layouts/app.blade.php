<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Berkemah Team - Mahya HRIS & Mahya HSE')</title>
    <meta name="description" content="@yield('meta_description', 'Berkemah Team membangun Mahya HRIS dan Mahya HSE, platform SaaS untuk merapikan operasional HR dan keselamatan kerja perusahaan.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Berkemah Team, Mahya HRIS, Mahya HSE, SaaS HRIS Indonesia, software HSE, startup Bandung')">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://berkemah.com/">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Berkemah Team">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title')) ?: 'Berkemah Team - Mahya HRIS & Mahya HSE')">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description')) ?: 'Berkemah Team membangun Mahya HRIS dan Mahya HSE, platform SaaS untuk merapikan operasional HR dan keselamatan kerja perusahaan.')">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('title')) ?: 'Berkemah Team - Mahya HRIS & Mahya HSE')">
    <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('meta_description')) ?: 'Berkemah Team membangun Mahya HRIS dan Mahya HSE, platform SaaS untuk merapikan operasional HR dan keselamatan kerja perusahaan.')">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="JkVGsGLT3J_9j22pO8DRtf_V-JCCbJctrbmJsjbRPnU">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
    @stack('styles')
</head>
<body class="antialiased text-slate-900">
    <x-navbar />

    <main>
        @yield('content')
    </main>

    @yield('scripts')
</body>
</html>
