@extends('layouts.layout')
@section('content')
    <div class="email-thank">
        <div class="thank-message">
            <h3>
                Dėkojame už jūsų laišką, susisieksime su jumis netrukus
            </h3>
        </div>
        <div class="email-content">
            <h4>
                Jūsų laiško informacija:
            </h4>
            <h3>Kliento El. Paštas: <span>{{$emailData->customerEmail}}</span></h3>
            <h3>Kliento Vardas:  <span>{{$emailData->customerName}}</span></h3>
            <p>
                Turinys: <span>{{$emailData->customerText}}</span>
            </p>
        </div>
        
    </div>
@endsection