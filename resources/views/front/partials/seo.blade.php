@if (!empty($seo))
    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ $seo->keywords }}">
    <meta property="og:site_name" value="{{ $seo->site_name }}">
    <meta property="og:title" content="{{ $seo->title }}">
    <meta property="og:url" content="{{ $seo->site_url }}">
    <meta property="og:description" content="{{ $seo->description }}">
    <meta name="twitter:title" content="{{ $seo->twitter_name }}">
    <meta name="twitter:description" content="{{ $seo->twitter_description }}">
    <title>{{ $seo->title }}</title>
@else
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:site_name" value="">
    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <title></title>
@endif
