@extends('layouts.main') @section('title', ' | About') @section('content')

<div class="ui three column centered grid">
    <div class="column">
        <div class="ui raised segments">
            <div class="ui segment">
                <img class="ui centered small circular image" src="{{asset('images/vampc.jpg')}}">
                <div class="ui center aligned container">
                    <h1 class="ui header">
                        Vampc Mahundi
                        <div class="sub header">Computer Engineer</div>
                    </h1>
                </div>
            </div>
            <div class="ui segment">
                <h3 class="ui header">
                    <i class="student icon"></i>
                    <div class="content">
                        Education
                        <div class="sub header"> Bsc. in Computer Engineering and IT at University Of Dar Es Salaam.</div>
                    </div>
                </h3>
            </div>
            <div class="ui segment">
                <h3 class="ui header">
                    <i class="marker icon"></i>
                    <div class="content">
                        Location
                        <div class="sub header"> Arusha, Tanzania</div>
                    </div>
                </h3>
            </div>
            <div class="ui segment">
                <h3 class="ui header">
                    <i class="write icon"></i>
                    <div class="content">
                        Skills
                        <div class="ui medium labels">
                            <div class="ui red label">
                                PHP
                            </div>
                            <div class="ui orange label">
                                Java
                            </div>
                            <div class="ui yellow label">
                                Linux Sys Admin
                            </div>
                            <div class="ui olive label">
                                HTML/CSS
                            </div>
                            <div class="ui green label">
                                Graphic Design
                            </div>
                            <div class="ui brown label">
                                IT Security
                            </div>
                            <div class="ui blue label">
                                Hacking
                            </div>
                            <div class="ui violet label">
                                Gaming
                            </div>
                        </div>
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>



@endsection