<!DOCTYPE html>
<html>
    <head>
    <title>Sim racing Latvia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/dizains.css" />
	<!--
    <script type="text/javascript" src="simlist.js"></script>
	<script type="text/javascript" src="skripts.js"></script>
    -->
</head>
<body>

<div class="lapas-centrs">	
    <div class="headeris" id="Sākums">
        <img src="/images/headeris.jpg" alt="LFS header">
    </div>
    <div id="top-menu">

        <div class="area-center">
            <ul class="menu">
                <li><a href="/">Sākums</a></li>
                <li><a href="/forum">Forums</a></li>
                <li><a href="/leagues">Līgas</a></li>
                <li><a href="/cockpit">Kokpits</a></li>
                <li><a href="/aboutsims">Ceļvedis</a></li>
            </ul>
        </div>
        <div id="login-box">
            <ul class="menu">
            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
            </ul>
        </div>
    </div>
    @yield('header')
    <div id="left-menu" class="side-menu">
        <!-- <h3> Ārējās saites </h3>-->
        <ul class="menu">
            <li><a href="/LFS">Live for Speed</a></li>
            <li><a href="http://www.assettocorsa.net/en/" target="_blank">Assetto Corsa</a></li>
            <li><a href="https://www.dirtgame.com/uk/home" target="_blank">Dirt Rally</a></li>
            <li><a href="/RaceRoom">RaceRoom</a></li>
            <li><a href="http://www.iracing.com/" target="_blank">iRacing</a></li>
            <li><a href="https://www.studio-397.com/" target="_blank">rFactor2</a></li>
        </ul>
    </div>
    <div id="right-menu" class="side-menu">

    </div>
    <div id="center-content" class="lapas-saturs">
    @yield('content')
    </div>
    </div>
    <div id="top-poga"> 
<a href="#Sākums">Uz augšu!</a>
</div>
    </body>
</html>
    