@extends('layouts.front')
@section('content')
        <section id="chisono">
            @if ($message = Session::get('success'))
            <div class="message-style">
                {{$message}}
            </div>
            @endif 
            <h2>Chi sono</h2>
            <p>
                Innamorato di Procida, una piccola isola nel golfo di Napoli, ho svolto negli anni diverse attività nel settore turistico.
            </p>
            <p>
                Con la promozione del territorio è nata in parallelo una passione per il web.
            </p>
            <p>
                Per questo motivo nel 2017 ho iniziato ad occuparmi dell'applicazione Procida Island e nel 2020 ho colto il momento difficile, dettato dalla pandemia, per lanciarmi in corsi intensivi da Full Stack Developer.
            </p>
            <p>
                Spero di poter apprendere sempre di più su questo mondo, di ampliare costantemente le mie conoscenze e di trovare una realtà lavorativa stimolante che mi faccia crescere ulteriormente.
            </p>
        </section>
@endsection