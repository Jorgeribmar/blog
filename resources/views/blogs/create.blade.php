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
    <h1>Formulaire de création d'article</h1>
    <form action="{{ route('blogs.index') }}" method="post" class="form">
        @csrf
        <input type="text" name="title" placeholder="title" class="form-control
        @if ($errors->has('title')) is-invalid @endif">
        <br>
        <input type="text" name="content" placeholder="content" class="form-control
        @if ($errors->has('content')) is-invalid @endif">
        <br>
        <input type="text" name="author" placeholder="author" class="form-control
        @if ($errors->has('author')) is-invalid @endif">
        <br>
        <input type="number" name="nb_followers" placeholder="nb_followers"
            class="form-control
        @if ($errors->has('nb_followers')) is-invalid @endif">
        <br>
        <button class="link" type="submit">Valider</button>
    </form>
    <a class="link1" href="{{ route('blogs.index') }}">Vers les articles</a>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif

    <br>




    <style>
        body {
            background-color: rgb(43, 70, 145);
        }

        h1,
        h3,
        p {
            margin: 1%;
            color: white;
        }

        .form {
            margin: 1%;
        }

        .form-control {
            width: 50%;
        }

        .link {
            border: 1px #78cad8 solid;
            padding: 0.5%;
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

    </style>
</body>

</html>
