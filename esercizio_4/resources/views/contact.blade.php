@extends('layouts.front')
@section('content')
        <section id="contact">
            <h2>Contattami</h2>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="forma">
                    <label for="name">Nome</label>
                    <input id="name" type="text" name="name" placeholder="Inserisci il tuo nome">
                    @error('name')
                        <div class="error-style">{{$message}}</div>
                    @enderror
                </div>
                <div class="forma">
                    <label for="surname">Cognome</label>
                    <input id="surname" type="text" name="surname" placeholder="Inserisci il tuo cognome">
                    @error('surname')
                        <div class="error-style">{{$message}}</div>
                    @enderror
                </div>
                <div class="forma">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Inserisci la tua email">
                    @error('email')
                        <div class="error-style">{{$message}}</div>
                    @enderror
                </div>
                <input id="sub" type="submit" value="Invia">
            </form>
        </section>
@endsection