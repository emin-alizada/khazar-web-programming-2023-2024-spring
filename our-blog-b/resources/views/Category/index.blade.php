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
<a href="{{ route('categories.create') }}">Create category</a>


<h1>All categories</h1>

@forelse ($categories as $category)
    <div style="margin-bottom: 24px;">
        <a href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a>

        <div style="display:flex;">
            <a href="{{ route('categories.edit', $category->id) }}"><button>Edit</button></a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                @csrf
                @method('delete')
                <button>delete category</button>
            </form>
        </div>
    </div>
@empty
    <p>No categories</p>
@endforelse

</body>
</html>
