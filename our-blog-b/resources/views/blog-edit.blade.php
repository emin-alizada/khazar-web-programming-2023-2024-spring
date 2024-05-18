<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Edit your blog</h1>

<form action="{{ route('blogs.update', $blog->id) }}" style="display: flex; flex-direction: column; align-items: flex-start" method="post">
    @csrf
    @method('put')
    <label>
        <span>Blog title</span>
        <input type="text" name="title" value="{{ old('title') ?? $blog->title }}" />
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </label>

    <label>
        <span>Blog content</span>
        <textarea name="content">{{ old('content') ?? $blog->content }}</textarea>
        @error('content')
        <div>{{ $message }}</div>
        @enderror
    </label>

    <button>
        Submit
    </button>
</form>
</body>
</html>
