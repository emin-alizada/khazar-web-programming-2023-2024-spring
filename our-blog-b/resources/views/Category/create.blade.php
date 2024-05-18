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

<h1>Create new category</h1>

<form action="{{ route('categories.store') }}" style="display: flex; flex-direction: column; align-items: flex-start" method="post">
    @csrf
    <label>
        <span>Category title</span>
        <input type="text" name="title" value="{{ old('title') }}"/>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
    </label>

    <button>
        Submit
    </button>
</form>
</body>
</html>
