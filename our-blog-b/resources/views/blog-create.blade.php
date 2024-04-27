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

<h1>Create new blog</h1>

<form action="{{ route('blogs.store') }}" method="post">
    @csrf
    <label>
        <span>Blog title</span>
        <input type="text" name="title" />
    </label>

    <label>
        <span>Blog content</span>
        <textarea name="content"></textarea>
    </label>

    <button>
        Submit
    </button>
</form>
</body>
</html>
