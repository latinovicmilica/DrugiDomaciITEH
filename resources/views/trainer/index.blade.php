@extends('layouts.app')

@section('content')
<div class="flexContainer">
    <div id="login-container">
    <div class="profile-img"></div>
    <h1>
        Anja Atanasijevic
    </h1>
    <div class="description">
        Anja Atanasijevic je nas najbolji trener. U ovom poslu je vec 5 godina i iza sebe ima dosta klijenata koji su uz njenu pomoc uspeli da skinu visak kilograma.
    </div>
    
    <a href="editTrainer/1" class="btn btn-primary trenerDugme">Izaberi</a>
    
    </div>

    <div id="login-container">
    <div class="profile-img2"></div>
    <h1>
        Milica Latinovic
    </h1>
    <div class="description">
        Milica je nas novi trener, nema iskustva kao Anja ali pruzite joj sansu!
    </div>
    
    <button>Izaberi</button>
    
    </div>
</div>
@endsection
