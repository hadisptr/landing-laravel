<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Website</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p class="subtitle">
      @foreach ($lists as $list)<a href="{{ route('link-list', $list->slug) }}" title="{{ $list->title }}" class="tag is-info is-light">{{ $list->title }} ({{ $list->links()->count() }})</a> @endforeach
 </p>
</body>
</html>
