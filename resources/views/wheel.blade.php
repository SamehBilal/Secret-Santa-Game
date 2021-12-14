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
        background-color: #171717;
        background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%23b39ddb" fill-opacity="0.05"%3E%3Cpath d="M2 6h12L8 18 2 6zm18 36h12l-6 12-6-12z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');

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
    <style>
        .button {
            display: inline-block;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
                    box-sizing:border-box;
            min-width:100px;
            padding: 22px 33px;
            font-family: 'Lobster', cursive;
            font-size: 26px;
            line-height: 26px;
            text-decoration: none;
            color: #FFF;
            text-shadow: 0 1px 2px rgba(0,0,0,0.75);
            background: #F11420;
            outline: none;
            border-radius: 15px;
            border: 1px solid #4c0300;
            box-shadow:
                inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                inset 0 0 6px #a23227, /* inner glow */
                inset 0 80px 80px -40px #ac3223, /* gradient */
                1px 1px 3px rgba(0,0,0,0.75); /* shadow */

            position: relative;
            overflow: visible; /* IE9 & 10 */
            -webkit-transition: 500ms linear;
            -moz-transition: 500ms linear;
                -o-transition: 500ms linear;
                            transition: 500ms linear;
        }

        .button::before {
            content: '';
            display: block;
            position: absolute;
            top: -7px;
            left: -3px;
            right: 0;
            height: 23px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAXCAYAAACS5bYWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABFpJREFUeNrUV0tIo1cUvpkYjQ4xxSA6DxuNqG0dtaUKOgs3s6i0dFd3pSsXdjeIixakiGA34sZuXCkoONLFwJTK4GMYLYXg29gatTpiXurkbd7vv9/5ub+IxuhA7eiFQ5Kbc8/57ne/e87/ywRBYLdl3GG3aNwqsLJ0k0tLS+fmcnNzWUVFBVMoFGx2djarvLxcm5OTw+bm5iytra2xc4ExNjY27iqVyvvwK6CpeDzuCYVC1urq6qDA9UcfPp+PHR4esmAwKK6tr68/l5/8rgQ2Ozub1dbWyiYmJooaGxt/VqvV38jlchX9l0qlwoFA4DWS/RKLxRxFRUVf5+XlPcaaT2AP0sVPJBL2SCRiAPBpu93+vKamZo/Ae71eZjabWV1dXVqw7CKwp43ksrCw8Bhg7MJ/PLDZ5PHx8cz29vYT5JGD/bSYLgTrcDgYdk6siSc6NjZWDaAe4ZoHQL+cmZnRpZPnhWDpD8kw7uKo9ML/NMCsd2tr61vkzboMrEyv138M7TyLRqMWMBsX3sMgaZhMpp+AR5EJrCocDpuEGzKg4x8khs+CVWxubvZfR9JkMik4nU7BarUKLpeLmLsKuwIqTLynp4fqmIzASrqQT09Pf1VVVfX0KsWZ6uHBwQHTaDSsoKAgo6/H4xHLEcrVyRwuEisrKzs5XrrIVAVwiUVDKRRrL+YI32ewdVhMApuHWvcj6vids6J2u90MF4yBHUZNgKoEBaRBQalJqFSqtJfUYrGIlQX+ydXVVTN+u0tKSjQNDQ1axJVl2iTypebn55d7e3v/kqoDgZU1NTU9LCws/Py0M+2ekuGincxJ3yF+18jIyHJLS0slQJUWFxczrBeBE0vE5tHRkbixlZWVfSR8gTX/0P5gH7S1tX3Z3t7+BW8qAvwSfr8/jA0EIRM/qoFtampqbW9vTw+XA+ojUruVd3Z2tvb19T2TQFEim81GgVJoCvvj4+NLOJZgaWmpemdn5y3a6BbcnJDAw8HBwac6ne6eqCW5XDwB3qVSqM9/DAwMUNy/eVLabT7sI25qwgujThCBhWE+mAt2yNc4SQKSZrOQQE1HS22VJkmPAGTr7+//fX19fRk+Zgq0trbGeFAKEAQT98BSqKOj47vm5uaa/Px8JeIk4GcaHh6eWlxcfAU/A8xG67BxAX3fwdcbYUpSDJ06Z49Ak8ZC3OL8f3YiA4PBYKdLQ2AJ9OTk5GpXV9cQiCVh79M94QtlPLDUE/1gPNrd3f0W33W4cBoco48zQuy/IZYAMnGqlSc4c66L9JruQUaSARXeT8HGKzxAqFBekni6+h46+pMzGiJGMgTOJh1yU/KNEGDvZWvfBawkA9ppwGg0mrRa7SOI2g+gxOgbJIpdFpj72PnxSnPX8vqRxTURgBQWKisrH+GThOm+CtAzoK/9/Uiqq/6hoaHfdnd3jaOjo7/yY7yxbwqkWy3sQzpS2C6YirwvUJk0y7hurfyGRrnduPGvAAMASmo8wzeVwfsAAAAASUVORK5CYII=) no-repeat 0 0,
            url(data:image/png;base64,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) no-repeat 50% 0,
            url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAXCAYAAACFxybfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAodJREFUeNrsVb1rWlEUv2pN/GqspKRSKFYXWzEloIWif0Fn6dJChQ7OQil0qd3EzcEpg0OgdHDr4CQODk7VRlLMEIVqApX4We0zflR9/Z1Ui4T34ksaaAYP/Hzc673n/M6550PG8zz73yKjn0wm83fDYDAwo9HINBrNnwOQg4MDs0ql2lQqlfdAWont7ng8Pjw+Ps44nc4G1pI9EXWaSOzt7TGO42aH5Pv7+08ajUZ0MBiUeXEZd7vdL5VK5fX29rZ+5tQiEmdxKrlcjsEYczgcynK5/BKKv/IXFNz/XiqVXkHdjUuRIA9SqdRD8or/R8Ez9fr9fqHVakUR4c2z0REjIQuHw2ZcrPBXLCA0RHTezEdHjIQqkUhEr9I4HOILhQLf6/VoOUFEvDMiQiToDx1Cdz+bzZ6bUFarlel0OkkVUK/XWbvdPoVer5fh3ntsfwJ+CJ2XA4p0Op1bpBgJyxDehQQ6nQ5DZXHBYDBZq9V+EhFUndnr9drEqoc2bwJbwGPgtohuVSwWe2Gz2TZMJpNgRKi6qtUqg2EWj8dTgUDgo0KhWPN4PC70EvXOzs67fD6/S6kiRIKeZA1YJ2MiJNbdbvfTUCjkV6vVK2hcDF8GI2w0GrGTkxM2HA5PDxaLxSOfz/cWEfk81X0XIMMFgJJ/srBjCgk8IdcfuVyuZ36//7nFYtkQyAMumUzuRiKRD0jMFLa+AZOpYwqgB/ziBVqmVBKUO7eAB/R0WG/Z7XaTVqtdbTabHJL6EK2djBaBPHA0NSqpbUsiMUeEBgpF4Q5AbZrmSJ/yEWgBTaBNHl9kdkgmMUeG7qwAq9PqovceTA3zlxlgsuswyuXsGsiSxJLEkoSY/BZgAEjRodi+uBruAAAAAElFTkSuQmCC) no-repeat 100% 0;

        }
        .button:hover {
            background: #a61715;
            text-shadow: 0 1px 2px rgba(0,0,0,0.75), 0 0 40px #FFF;
            box-shadow:
                inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                inset 0 0 6px #da3b2c, /* inner glow */
                inset 0 80px 80px -40px #dd4330, /* gradient */
                1px 1px 3px rgba(0,0,0,0.75); /* shadow */

        }
        .button:focus {
            outline: none; /*FF*/
        }
        .button:active {
            box-shadow:
                inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                inset 0 0 6px #da3b2c, /* inner glow */
                inset 0 80px 80px -40px #dd4330, /* gradient */
                0px 1px 0px rgba(255,255,255,0.25); /* shadow */

            -webkit-transition: 50ms linear;
            -moz-transition: 50ms linear;
                -o-transition: 50ms linear;
                    transition: 50ms linear;
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
    <h1 id="ans" class="center" style="font-family: 'Langar', cursive;color: white;"> {{ Auth::user()->wheel }}</h1>
@else
    <canvas id="canvas" width="500" height="500" class="center"></canvas>
    <img src="https://massets1.9stacks.com/assets/pwa-icons/spin-the-wheel/spinthewheel_arrow.svg" width="50" height="50" id="arrow">

    <img src="{{ asset('img/santa-claus.svg') }}" width="30" height="30" id="center-logo">
    <h2 id="ans" class="right" style="font-family: 'Langar', cursive;color: white;"></h2>
    <button  style="float:left;" onclick="spin();" class="button">Spin</button>https://codepen.io/lichin-lin/pen/kXJWvE
    {{-- <input type="button" class="right-top" value="spin" style="float:left;" onclick="spin();" /> --}}
    <input type="hidden" id="person" value="">
@endif



    <script>
        var colors = [
            @foreach($users as $item)
                /* @if(!$item->choosed && $item->full_name != Auth::user()->full_name) */
                        "#FE2354",
                /* @endif */
            @endforeach ];
        var prizes = [
            @foreach($users as $item)
                /* @if(!$item->choosed && $item->full_name != Auth::user()->full_name) */
                        "{{ $item->last_name }}",
               /*  @endif */
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
