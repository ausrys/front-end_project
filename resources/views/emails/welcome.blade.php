@component('mail::message')
<div>
    <h3>Kliento El. Paštas: {{$emailData->customerEmail}}</h3>
    <h3>Kliento Vardas: {{$emailData->customerName}}</h3>
<p>
    Turinys:  {{$emailData->customerText}}

</p>
</div>
@endcomponent
