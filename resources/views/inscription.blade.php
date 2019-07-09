@extends('layouts.app')

    @section('content')

        <div class="container">
            <div class="row">
                    <div class="col-12 text-center divinscription">
                        <h1 class="text-uppercase">inscription</h1>
                    </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-8">
                        <form class="" action="" method="post">
                            <input class="form-control col" placeholder="Tapez votre nom" type="text" name="" id=""><br>
                            <input class="form-control col" placeholder="Tapez votre prénom" type="text" name="" id=""><br>
                            <input class="form-control col" placeholder="tapez votre adresse email" type="email" name="email" id=""><br>
                            <input class="form-control col" placeholder="mot de passe" type="text" name="password1" id=""><br>
                            <input class="form-control col" placeholder="mot de passe comfimation" type="text" name="password2" id=""><br>
                    </div>
            </div>
            <div class="row justify-content-center">
                            <div class="col-3">
                                <button class="btnenvoyer text-uppercase col" type="submit"><strong>Envoyer</strong></button>
                            </div>
                        </form>
            </div>


        </div>

    @endsection
