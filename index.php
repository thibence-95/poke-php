<?php

$getData = file_get_contents('`https://pokeapi.co/api/v2/pokemon/');







echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PokéDex</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div id="jumbotron">
    <header class="text-center">
        <h1 style="font-size: 50px; font-weight: 600;">PokéDex</h1>
    </header>
</div>

<div class="container" id="promptContainer">
    <div class="row">
        <h3 id="find">Find a Pokémon</h3>
        <span id="error"></span>
    </div>

    <div class="row form-group form-inline" id="inputDiv">
        <input type="text" name="pokémon" id="input" class="form-control" placeholder="Don\'t use capital letters, please">
        <button id="submit" class="btn btn-primary">Search</button>
    </div>
</div>

<div id="pokedex">

    <!--//// L E F T  P A R T ////-->
    <div id="left">
        <div id="logo"></div>
        <div id="bg_curve1_left"></div>
        <div id="bg_curve2_left"></div>
        <div id="curve1_left">
            <div id="buttonGlass">
                <div id="reflect"> </div>
            </div>
            <div id="miniButtonGlass1"></div>
            <div id="miniButtonGlass2"></div>
            <div id="miniButtonGlass3"></div>
        </div>
        <div id="curve2_left">
            <div id="junction">
                <div id="junction1"></div>
                <div id="junction2"></div>
            </div>
        </div>
        <div id="screen">
            <div id="topPicture">
                <div id="buttontopPicture1"></div>
                <div id="buttontopPicture2"></div>
            </div>
            <div id="picture">
                <img id="sprite"/>
            </div>
            <div id="buttonbottomPicture"></div>
            <div id="speakers">
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
            </div>
        </div>
        <div id="bigbluebutton"></div>
        <div id="barbutton1"></div>
        <div id="barbutton2"></div>
        <div id="cross">
            <div id="leftcross">
                <div id="leftT"></div>
            </div>
            <div id="topcross">
                <div id="upT"></div>
            </div>
            <div id="rightcross">
                <div id="rightT"></div>
            </div>
            <div id="midcross">
                <div id="midCircle"></div>
            </div>
            <div id="botcross">
                <div id="downT"></div>
            </div>
        </div>
    </div>

    <!--//// R I G H T  P A R T ////-->
    <div id="right">
        <div id="stats" class="row">
            <article>
                <div class="col">
                    <div id="submit-output">
                        <p id="pokéId"></p>
                    </div>

                    <div id="moves">
                    </div>
                </div>
                <div class="col">
                    <div class="evolution" id="evolution">
                    </div>
                </div>
            </article>
        </div>
        <div id="blueButtons1">

        </div>

        <div id="yellowBox1"></div>
        <div id="yellowBox2"></div>
        <div id="bg_curve1_right"></div>
        <div id="bg_curve2_right"></div>
        <div id="curve1_right"></div>
        <div id="curve2_right"></div>
    </div>
</div>


<script rel="script" src="script.js" lang="js"></script>
</body>
</html>';