<h1>Articles</h1>

<a class="link1" href="{{ route('blogs.create') }}">Créer nouvel article</a>

<div class="tata">
    @foreach ($allposts as $toto)
        <div class="toto">
            <a class="link2" href="{{ route('blogs.show', $toto->id) }}">
                <h3>{{ $toto->title }}</h3>
                <p>{{ $toto->content }}</p>
                <p>{{ $toto->author }}</p>
                <p>{{ $toto->nb_followers }}</p>
            </a>
            <br>

        </div>

    @endforeach
</div>

<style>
    .toto {
        border: 2px solid white;
        width: 21%;
        text-align: center;
        margin: 1.5%;

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
