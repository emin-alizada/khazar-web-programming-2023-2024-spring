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
<a href="{{ route('blogs.create') }}">Create blog</a>


<h1>All blogs</h1>

@foreach($blogs as $blog)
    <div style="margin-bottom: 24px;">
        <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
        <p>{{ $blog->content }}</p>
        <div style="display:flex;">
            <a href="{{ route('blogs.edit', $blog->id) }}"><button>Edit</button></a>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                @csrf
                @method('delete')
                <button>delete blog</button>
            </form>
        </div>
    </div>
@endforeach
</body>
</html>
