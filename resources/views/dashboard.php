<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
                text-align: center;
                /*display: table-cell;*/
                vertical-align: text-top;
                margin-bottom: 20px;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">AutoMobile Metering System</div>
            </div>
        </div>

        <div class = 'dashboard_buttons'>
            <a href=""><div>Meter</div></a>
            <a href=""><div>Entry</div></a>
            <a href=""><div>Log</div></a>
            <a href=""><div>Statistics</div></a>
            <a href=""><div>Graph</div></a>
            <a href=""><div>Analysis</div></a>
        </div>
    </body>
</html>
