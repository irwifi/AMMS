<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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

            .container {
                text-align: left;
                vertical-align: text-top;
                margin-bottom: 20px;
            }

            .content {
                text-align: right;
                padding-right: 24px;
                display: inline-block;
            }

            .title {
                font-size: 60px;
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
        <div class="container">
            <div class="content">
                <div class="title"> AMMS: METER </div>
            </div>
        </div>

        <div>
            <div class = 'meter'>
                <div class = 'balancer'> </div>
                <div class = 'display'> 100.00 </div>
                <div class = 'unit'> KM </div>
                <div> Odometer </div>
            </div>

            <div class = 'meter'>
                <div class = 'balancer'> </div>
                <div class = 'display'> 100.00 </div>
                <div class = 'unit'> Liter </div>
                <div> Fuel Meter </div>
            </div>

            <div class = 'meter'>
                <div class = 'balancer'> </div>
                <div class = 'display'> 100.00 </div>
                <div class = 'unit'> KM / Liter</div>
                <div> Mileage Meter </div>
            </div>
        </div>
    </body>
</html>
