<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Langar&display=swap');
        body {
        margin: 0;
        padding: 0;
        background-image: url({{ asset('img/untitled.jpg') }}), linear-gradient(to bottom, #a3b9d0, #8644db);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        }
        img {
        display: none;
        }
        .center {
            position: absolute;
            left: 35%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            }
        .right {
            position: absolute;
            left: 70%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            }
            .right-top {
            position: absolute;
            left: 70%;
            top: 45%;
            transform: translate(-50%, -50%);
            padding: 10px;
            }
    </style>
</head>
<body>
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="demo-pli-unlock icon-lg icon-fw"></i> {{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

@if(Auth::user()->choosed == 1)
    <h1 id="ans" class="center" style="font-family: 'Langar', cursive;"> {{ Auth::user()->wheel }}</h1>
@else
    <canvas id="canvas" width="500" height="500" class="center"></canvas>
    <img src="https://massets1.9stacks.com/assets/pwa-icons/spin-the-wheel/spinthewheel_arrow.svg" width="50" height="50" id="arrow">

    <img src="{{ asset('img/santa-claus.svg') }}" width="30" height="30" id="center-logo">
    <h2 id="ans" class="right" style="font-family: 'Langar', cursive;"></h2>
    <input type="button" class="right-top" value="spin" style="float:left;" onclick="spin();" />
    <input type="hidden" id="person" value="">
@endif



    <script>
        var colors = [
            @foreach($users as $item)
                @if(!$item->choosed && $item->full_name != Auth::user()->full_name)
                        "#FE2354",
                @endif
            @endforeach ];
        var prizes = [
            @foreach($users as $item)
                @if(!$item->choosed && $item->full_name != Auth::user()->full_name)
                        "{{ $item->first_name }}",
                @endif
            @endforeach /*"Rs. 1000 in PB 1", "Multiplier Ticket 1", "Stackup Ticket 1",
    "Rs. 20 in PB 2", "Rs. 1000 in PB 2", "Multiplier Ticket 2", "Stackup Ticket 2","sameh"*/
        ];
        var startAngle = 0*Math.PI/180;
        var arc = (2 * Math.PI) / colors.length;
        var spinTimeout = null;
        var spinArcStart = 10;
        var spinTime = 0;
        var spinTimeTotal = 0;
        var textColor = '#fff';
        var ctx;
        var ans = document.getElementById('ans');
        var person = document.getElementById('person');
        // third outermost circle
        function drawRouletteWheel() {
        var canvas = document.getElementById("canvas");
        if (canvas.getContext) {
            var outsideRadius = 200;
            var textRadius = 120;
            var insideRadius = 40;
            ctx = canvas.getContext("2d");
            ctx.clearRect(0,0,500,500);
            ctx.font = 'bold 18px Helvetica, Arial';
            for(var i = 0; i < colors.length; i++) {
            var angle = startAngle + i * arc;
            ctx.beginPath();
            ctx.strokeStyle = "#544149";
            ctx.lineWidth = 16;
            ctx.arc(250, 250, 200, angle, angle + arc, false);
            ctx.stroke();
            ctx.fillStyle = colors[i];
            ctx.beginPath();
            ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
            ctx.strokeStyle = '#544149';
            ctx.lineWidth = 8;
            ctx.lineTo(250, 250);
            if ( i === colors.length - 1) {
                ctx.beginPath();
                ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
                ctx.strokeStyle = '#544149';
                ctx.lineWidth = 4;
                ctx.lineTo(250, 250);
                ctx.fill();
                ctx.stroke();
            } else {
                ctx.fill();
                ctx.stroke();
            }
            ctx.beginPath();
            ctx.strokeStyle = '#544149';
            ctx.arc(250, 250, insideRadius, angle, angle + arc, false);
            ctx.lineWidth = 5;
            ctx.stroke();
            ctx.save();
            ctx.fillStyle = textColor;
            ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius,
                            250 + Math.sin(angle + arc / 2) * textRadius);
            ctx.rotate(angle + arc / 2 + Math.PI / 2 + 80);
            var text = prizes[i];
            ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
            ctx.restore();
            }
            ctx.save();
            ctx.beginPath();
            ctx.fillStyle = '#fff';
            ctx.arc(250, 250, 38, 0, Math.PI*2, false);
            ctx.fill();
            ctx.restore();
            //Arrow
            ctx.save();
            const arrowImage = document.getElementById('arrow');
            ctx.beginPath();
            // ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
            ctx.drawImage(arrowImage, 250 - 4 - 25, 250 - (outsideRadius + 5) - 25, 50, 50);
            // ctx.drawImage(arrowImage, 250 - (outsideRadius + 5) - 25, 250 - 25, 50, 50);
            ctx.restore();
            // center logo
            const logoImage = document.getElementById('center-logo');
            ctx.beginPath();
            // ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
            ctx.drawImage(logoImage, 250 - 25, 250 - 25, 50, 50);
        }
        }
        function spin() {
        spinAngleStart = 50;
        spinTime = 0;
        spinTimeTotal = 4000;
        console.log('spinAngleStart =>', spinAngleStart, 'spinTime start =>', spinTime, 'spinTimeTotal =>', spinTimeTotal);
        rotateWheel();
        }
        function rotateWheel() {
        spinTime += 30;
        if(spinTime >= spinTimeTotal) {
            stopRotateWheel();
            return;
        }
        var spinAngle = spinAngleStart - easeOut(spinTime, 0.3, spinAngleStart, spinTimeTotal);
        startAngle += (spinAngle * Math.PI / 180);
        console.log('spinAngleStart =>', spinAngleStart, 'spinTime =>', spinTime, 'spinTimeTotal =>', spinTimeTotal, 'spinAngle =>', spinAngle, 'startAngle =>',  startAngle);
        drawRouletteWheel();
        // spinTimeout = setTimeout('rotateWheel()', 30);
        requestAnimationFrame(rotateWheel);
        }
        function stopRotateWheel() {
        ans.textContent = '';
        person.value = '';
        // clearTimeout(spinTimeout);
        var degrees = startAngle * 180 / Math.PI + 90;
        var arcd = arc * 180 / Math.PI;
        var index = Math.floor((360 - degrees % 360) / arcd);
        ans.textContent = prizes[index];
        person.value = prizes[index];
        //$('#person').attr("value",prizes[index]);
        ctx.save();
        ctx.font = 'bold 30px Helvetica, Arial';
        var text = prizes[index]
        //ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);
        ctx.restore();
        var value = prizes[index];
        $.ajax({
                url:'{{ url('wheel') }}',
                method:'GET',
                dataType: 'json',
                data: {
                    value:value,
                },
                success:function (data) {
                    location.reload(true);
                },
                error: function(data) {
                    alert('something went wrong')
                }
            })
        }
        function easeOut(t, b, c, d) {
        var ts = (t/=d)*t;
        var tc = ts*t;
        console.log('ts =>', ts, 'tc =>', tc, 'main =>', b+c*(tc + -3*ts + 3*t));
        return b+c*(tc + -3*ts + 3*t);
        b + c*((t/=d)*t*t + -3*(t/=d)*t + 3*t);
        }
        drawRouletteWheel();
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
</script>
</body>
</html>
