<h1>Detail Article</h1>

<div class="tata">
    @foreach ($post as $toto)
        <div class="toto">
            <h3>{{ $toto->title }}</h3>
            <p>{{ $toto->content }}</p>
            <p>{{ $toto->author }}</p>
            <p>{{ $toto->nb_followers }}</p>
            <a class="link1" href="{{ route('blogs.edit', $toto->id) }}">Modifier l'article</a>
        </div>

    @endforeach
</div>
<br>
<a class="link1" href="{{ route('blogs.index') }}">Vers les articles</a>





<style>
    .toto {
        border: 2px solid rgb(255, 255, 255);
        width: 20%;
        text-align: center;
    }

    .toto:hover {
        background-color: rgb(0, 128, 128);
    }

    .link1,
    .link1:hover,
    .link1:focus,
    .link1:active {
        border: 1px #78cad8 solid;
        background-color: white;
        padding: 0.5%;
        color: black;
        text-decoration: none;
    }

    body {
        background-color: rgb(43, 70, 145);
    }

    h1,
    h3,
    p {
        margin: 1%;
        color: white;
    }

</style>
