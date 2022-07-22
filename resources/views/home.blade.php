@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table>
                        <thead>
                            <tr>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($pokemons as $pokemon)
                                <tr>
                                    <td>{{ $pokemon->id }}</td>
                                    <td>{{ $pokemon->name}}</td>
                                    <td>{{ $pokemon->description }}</td>
                                    <td>{{ $pokemon->weight}}</td>
                                    <td>{{ $pokemon->height }}</td>
                                    <td>{{ $pokemon->color }}</td>
                                    <td>{{ $pokemon->type }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
