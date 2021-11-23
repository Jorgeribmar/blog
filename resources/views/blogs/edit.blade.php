<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Blog posts</title>
</head>

<body>
    <h1>EDIT</h1>

    <form class="form" action="{{ route('blogs.update', $post->id) }}" method="post">
        @method('PUT')
        @csrf
        <label for="title">Title</label>
        <input value="{{ $post->title }}" type="text" name="title" placeholder="title"
            class="form-control
        @if ($errors->has('title')) is-invalid @endif">
        <br>
        <label for="content">Content</label>
        <input value="{{ $post->content }}" type="text" name="content" placeholder="content"
            class="form-control
        @if ($errors->has('content')) is-invalid @endif">
        <br>
        <label for="author">Author</label>
        <input value="{{ $post->author }}" type="text" name="author" placeholder="author"
            class="form-control
        @if ($errors->has('author')) is-invalid @endif">
        <br>
        <label for="nb_followers">Followers</label>
        <input value="{{ $post->nb_followers }}" type="number" name="nb_followers" placeholder="nb_followers"
            class="form-control
        @if ($errors->has('nb_followers')) is-invalid @endif">
        <br>
        <button class="link" type="submit">Valider Modifications</button>
    </form>
    <form action="{{ route('blogs.destroy', $post->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button class="link" type="submit">Supprimer article</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif





    <style>
        .form {
            margin: 1%;
        }

        .form-control {
            width: 50%;
        }

        .toto {
            border: 2px solid white;
            width: 21%;
            text-align: center;
            margin: 1.5%;
        }

        label {
            color: white;
        }

        .tata {
            display: flex;
            flex-wrap: wrap;
            margin: 1%;
        }

        .toto:hover {
            background-color: rgb(0, 128, 128);
        }

        h1,
        h3,
        p {
            margin: 1%;
            color: white;
        }

        body {
            background-color: rgb(43, 70, 145);
        }

        .link1,
        .link1:hover,
        .link1:focus,
        .link1:active {
            border: 1px #78cad8 solid;
            background-color: white;
            padding: 0.5%;
            margin: 1%;
            color: black;
            text-decoration: none;
        }

        .link2,
        .link2:hover,
        .link2:focus,
        .link2:active {
            padding: 0.5%;
            margin: 1%;
            color: black;
            text-decoration: none;
        }

    </style>


</body>

</html>
