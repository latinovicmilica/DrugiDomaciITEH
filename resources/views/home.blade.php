@extends('layouts.app')

@section('content')

<div class="flex">
        <div class="card">
            <img src="{{URL('/images/indiv.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Individualni treninzi</b></h4>
                    <p>Uz individualnog trenera sigurni smo da cete doci do zeljenih rezultata</p>
                
                </div>
        </div>

        <div class="card">
            <img src="{{URL('/images/grupni.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Grupni treninzi</b></h4>
                    <p>Mozete izabrati koji grupni trening Vam najvise odgovara!</p>
    
                </div>
        </div>
</div>



<script type="text/javascript" src="{{ URL::asset('js/libs/app.js') }}"></script>
@endsection
