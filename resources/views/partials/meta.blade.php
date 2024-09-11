<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $description ?? 'Default description for Iza Blog' }}">
<meta name="keywords" content="{{ $keywords ?? 'blog, writing, lifestyle' }}">
<meta name="author" content="Iza">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:title" content="{{ $title ?? 'Iza Blog' }}">
<meta property="og:description" content="{{ $description ?? 'Default description for Iza Blog' }}">
<meta property="og:image" content="{{ $ogImage ?? asset('images/default-og-image.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">
