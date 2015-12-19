<?php
if (!isset($page)) {$page = '';}

if ($page == "home")
    {$home_button = '';}
else
    {$home_button = '<a href="/"><i class="fa fa-home fa-2x"></i></a>';}

if ($page == "settings")
    {$settings_button = '';}
else
    {$settings_button = '<a href="settings"><i class="fa fa-cog fa-2x"></i></a>';}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>@yield( 'title' )</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .containerhome {
                text-align: center;
                vertical-align: text-top;
            }

            .contenthome {
                text-align: center;
                display: inline-block;
            }

            .container {
                text-align: left;
                vertical-align: text-top;
                margin-bottom: 20px;
                padding-left: 20px;
            }

            .content {
                text-align: right;
                padding-right: 24px;
                display: inline-block;
            }

            .heading {
                font-size: 60px;
            }

            .dashboard_buttons {
                font-size: 38px;
                width: 100%;
                margin: auto;
                text-align: center;
            }

            .dashboard_buttons div {
                height:200px;
                width:320px;
                text-align: center;
                display: inline-block;
                margin: 20px 10px;
                vertical-align: bottom;
                border: 1px solid;
                border-radius: 15px;
            }

            a {
                color: #000;
            }

            .buttons {
                text-align: right;
                display: inline-block;
                float:right;
                padding-top: 20px;
                padding-right: 20px;
            }

            .buttonshome {
                text-align: right;
                display: block;
                padding-right: 20px;
                float: none;
                padding-top: 0;
            }
            .buttonshome a {
                color:#6E6E6E;
            }
            .buttons a {
                color:#6E6E6E;
            }

            .buttons a i {
                border: solid thin;
                padding: 3px 5px;
                border-radius: 5px;
                cursor: pointer;
            }

            .buttons a i:hover {
                color: white;
                background-color: #6E6E6E;
            }

            .meter {
                width: 100%;
                text-align: center;
                font-size: 30px;
                padding-bottom: 48px;
                margin: auto 0px;
                font-weight: bold;
            }

            .display {
                width: 240px;
                margin: 0 auto;
                display: inline-block;
                font-size: 52px;
                font-weight: bold;
                background-color: #000;
                color: #D60909;
                text-align: right;
                padding: 0 10px;
                border: double;
            }

            .unit {
                display: inline-block;
                width: 140px;
                text-align: left;
                font-size: 26px;
                font-weight: bold;
                color: #D60909;
                font-style: italic;
            }

            .balancer {
                display: inline-block;
                width: 140px;
            }
        </style>
    </head>

    <body>
        <div class="container{{$page}}">
            <div class="content{{$page}}">
                <div class="heading">@yield('heading')</div>
            </div>

            <div class="buttons buttons{{$page}}">
                {!! $home_button !!}
                {!! $settings_button !!}
            </div>
        </div>

        <div class = 'body_content'>
            @yield('body_content');
        </div>
    </body>
</html>
