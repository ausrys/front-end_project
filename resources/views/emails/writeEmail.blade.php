@extends('layouts.layout')
@section('content')
<div class="write-email">
    <form class="rounded msg-form p-4" method="POST" action="/mail">
        @csrf
            <div>
                <h3 class="text-white">Viskas prasideda nuo pokalbio!</h3>
            </div>
            <br>
            <div class="form-group"> 
                <div class="name">
                    <div class="input-group border-bottom border-light">
                        <input type="name" placeholder="Vardas" name="customerName" required = 'true'>
                    </div>
                </div>    
                <br>
            </div>
            <div class="form-group"> 
                <div class="email">
                    <div class="input-group border-bottom border-light">
                        <input type="email" placeholder="El. paštas" name="customerEmail" required = 'true'>
                    </div>
                </div>    
                <br>
            </div>
            <div class="subject border-bottom border-light">
                <select placeholder="Subject line" name="customerSubject" required= 'true'>
                    <option disabled hidden selected>Tema</option>
                    <option>Norėčiau pradėti projektą</option>
                    <option>Turiu klausimą</option>
                    <option>Kita</option>
                </select>
            </div>
            <br>
            <div class="message border-bottom border-light">
                <textarea placeholder="Žinutė" id="message_input" cols="30" rows="2" name="customerText" required= 'true'></textarea>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required= 'true'>
                <label class="form-check-label" for="flexCheckDefault">
                    Sutinku su <a href="#" id="ppBtn" class="text-reset"> Privatumo politika.</a>
                </label>
            </div>
            <div class="form-group d-flex justify-content-end"> 
                <button class="btn btn-dark"><span> Siūsti <i class="ti-arrow-right"></i></span></button>
            </div>
        </form>
</div>

@endsection