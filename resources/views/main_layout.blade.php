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

/*            .container {
                text-align: left;
                vertical-align: text-top;
                margin-bottom: 20px;
                padding-left: 20px;
            }

            .content {
                text-align: right;
                padding-right: 24px;
                display: inline-block;
            }*/

            .container {
                text-align: center;
                vertical-align: text-top;
            }

            .content {
                text-align: center;
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
                display: block;
                padding-right: 20px;
                color:#6E6E6E;
            }

            .buttons i {
                border: solid thin;
                padding: 3px 5px;
                border-radius: 5px;
                cursor: pointer;
            }

            .buttons i:hover {
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
            }        </style>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="heading">@yield('heading')</div>
            </div>

            <div class="buttons">
                <i class="fa fa-home fa-2x"></i>
                <i class="fa fa-cog fa-2x"></i>
            </div>
        </div>

        <div class = 'body_content'>
            @yield('body_content');
        </div>
    </body>
</html>
