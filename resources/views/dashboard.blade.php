@extends('main_layout')

@section('title')
    AutoMobile Metering System
@stop

@section('heading')
    AutoMobile Metering System
@stop

@section('body_content')
    <div class = 'dashboard_buttons'>
        <a href="meter"><div>
            Meter
            <img src="resources/assets/images/odometer.jog" alt="meter" />
        </div></a>
        <a href="entry"><div>Entry</div></a>
        <a href="log"><div>Log</div></a>
        <a href="stats"><div>Statistics</div></a>
        <a href="graph"><div>Graph</div></a>
        <a href="analysis"><div>Analysis</div></a>
    </div>
@stop
