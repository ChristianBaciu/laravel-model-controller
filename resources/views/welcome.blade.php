{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')


<header>
    <div class="container">
        <div class="row">

            @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p class="card-text">{{ $movie['original_title'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    {{-- {{ dd($movie) }} --}}
</header>
