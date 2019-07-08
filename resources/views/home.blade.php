@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            {{-- @foreach ($articles as $article)
                <h2>    {{ $article->title }}           </h2>
                <h4>    {{ $article->auteur->name }}    </h4>
                <p>     {{ $article->content }}         </p>
            @endforeach --}}

        </div>


        <table class="table table-striped table-bordered table-dark text-center">
                <thead>
                    <tr>
                        <th class="text-uppercase" scope="col">Titre</th>
                        <th class="text-uppercase" scope="col">Nom de l'auteur</th>
                        <th class="text-uppercase" scope="col">le Blabla-bla</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($articles as $article)
                    <tr>
                        <th scope="row">
                            {{ $article->title }}
                        </th>
                        <td>
                            {{ $article->auteur->name }}
                        </td>
                        <td>
                            {{ $article->content }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>



    <table class="table table-striped table-bordered table-dark text-center">
        <thead>
            <tr>
                <th class="text-uppercase" scope="col">Vélo</th>
                <th class="text-uppercase" scope="col">Text</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($Philippe as $philippe)
        <tr>
            <th>{{ $philippe->vélo }}</th>
            <td>{{ $philippe->pédale_douce }}</td>
        </tr>
        @endforeach

            </tbody>
        </table>

        </div>
    </div>
</div>
@endsection
