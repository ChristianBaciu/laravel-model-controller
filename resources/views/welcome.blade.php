{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')
<header>
    <div class="container" style="width: 400px;">
        @foreach ($movie as $element)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $element['title'] }}</h5>
                    <p class="card-text">{{ $element['original_title'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    {{-- {{ dd($movie) }} --}}
</header>
