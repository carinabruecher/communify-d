@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="padding-top: 30px; padding-left: 30%">Wilkommen, {{ Auth::user()->name }}</h1>

        <div class="text-center p-4" style="border-bottom: 1px solid black">
            <img class="rounded-circle" src="/img/olympicflag.jpg"
                 style="height: 100px; width: 100px; border: 1px solid black"/>
            <img class="rounded-circle" src="/img/starwars.jpg"
                 style="height: 100px; width: 100px; border: 1px solid black"/>
            <img class="rounded-circle" src="/img/katzenbaby.jpg"
                 style="height: 100px; width: 100px; border: 1px solid black"/>
        </div>

        <div class="pt-2">
            <p class="text-center">Meine Communities</p>
        </div>

        <div class="text-center">
            <div class="btn btn-outline-dark "> Erstelle einen neuen Post!</div>
        </div>

        <div class="pt-3">
            <div class="card mb-5">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/fanart.jpg" class="card-img" style="height: 100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="rounded-circle" src="/img/basketballkid.jpg"
                                     style="width: 50px; height: 50px"/>
                                <div>
                                    <h4 class="card-title pl-3 m-0" style="color: red">Crazy Basketball Kid</h4>
                                    <small class="pl-3 pt-0">11. Januar 2020 > Fandom</small>
                                </div>
                            </div>

                            <div class="pt-3 pb-2" style="border-bottom: 1px solid grey">
                                Best Duel Of All Time!!!11!1 Anakin is so cool! Fuck all haters… realtalk!
                                <span style="color: blue">#StarWars</span>
                            </div>

                            <div class="pt-3">
                                Kommentare
                            </div>

                            <div class="d-flex pt-2">
                                <img class="rounded-circle" src="/img/quigon.jpg"
                                     style="width: 40px; height: 40px"/>
                                <div>
                                    <p class="card-title pl-3 m-0" style="color: green">Qui-Gon Jinn</p>
                                    <small class="pl-3 pt-0">Wtf... this fight was not fair at all! I should have won… :(</small>
                                </div>
                            </div>

                            <div class="mt-2 w-100 d-flex">
                                <div class="btn btn-outline-dark mt-3 mr-3 w-100">
                                    Kommentieren
                                </div>
                                <img class="mt-4" src="/img/heart-solid.svg" style="width: 27px; height: 27px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="pt-0">
            <div class="card mb-5">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/darthmaul.jpg" class="card-img" style="height: 100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="rounded-circle" src="/img/leia.jpg"
                                     style="width: 50px; height: 50px"/>
                                <div>
                                    <h4 class="card-title pl-3 m-0" style="color: blue">Darth Vader</h4>
                                    <small class="pl-3 pt-0">09. Januar 2020 > Starwars</small>
                                </div>
                            </div>

                            <div class="pt-3 pb-2" style="border-bottom: 1px solid grey">
                                My best Buddy, yor Makeup is amazing
                                <span style="color: blue">#StarWars</span>
                            </div>

                            <div class="pt-3">
                                Kommentare
                            </div>

                            <div class="d-flex pt-2">
                                <img class="rounded-circle" src="/img/darthmaul.jpg"
                                     style="width: 40px; height: 40px"/>
                                <div>
                                    <p class="card-title pl-3 m-0" style="color: red">Darth Maul</p>
                                    <small class="pl-3 pt-0">Thank you so much, love you to <<<<<33333</small>
                                </div>
                            </div>

                            <div class="mt-2 w-100 d-flex">
                                <div class="btn btn-outline-dark mt-3 mr-3 w-100">
                                    Kommentieren
                                </div>
                                <img class="mt-4" src="/img/heart-solid.svg" style="width: 27px; height: 27px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
