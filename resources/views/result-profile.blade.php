<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,100,300,700,100italic,300italic,400italic,700italic,900,900italic");
        @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");



        body .btn-bg.Pixar .btn-info {
            color: #FF8A65;
        }
        body .btn-bg.Pixar .btn-mention {
            color: #FF8A65;
        }
        body .btn-bg.Pixar .btn-mention span {
            color: #FF8A65;
        }
        body .btn-bg.Pixar .btn-group .Inside button {
            color: #FF8A65;
            border: none;
            overflow: visible;
            background: transparent;
        }
        body .btn-bg.Pixar .btn-group .Inside button .box1,
        body .btn-bg.Pixar .btn-group .Inside button .box2 {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            opacity: 0;
            transform-origin: 50% 50%;
            transition: all 0.25s ease;
        }
        body .btn-bg.Pixar .btn-group .Inside button .box1 {
            width: 100%;
            height: 50%;
            top: calc(50% - 25%);
            border-top: 4px solid #FF8A65;
            border-bottom: 4px solid #FF8A65;
        }
        body .btn-bg.Pixar .btn-group .Inside button .box2 {
            width: 50%;
            height: 100%;
            left: calc(50% - 25%);
            border-left: 4px solid #FF8A65;
            border-right: 4px solid #FF8A65;
        }
        body .btn-bg.Pixar .btn-group .Inside button:hover .box1 {
            top: 0;
            opacity: 1;
            height: calc(100% - 8px);
            transition: all 0.25s ease;
        }
        body .btn-bg.Pixar .btn-group .Inside button:hover .box2 {
            left: 0;
            opacity: 1;
            width: calc(100% - 8px);
            transition: all 0.25s ease;
        }
        body .btn-bg.Pixar .btn-group .Out button {
            color: #FF8A65;
            border: none;
            overflow: visible;
            background: transparent;
        }
        body .btn-bg.Pixar .btn-group .Out button .box1,
        body .btn-bg.Pixar .btn-group .Out button .box2 {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            opacity: 0;
            transform-origin: 50% 50%;
            transition: all 0.25s ease;
        }
        body .btn-bg.Pixar .btn-group .Out button .box1 {
            width: 200%;
            height: 150%;
            left: calc(-50%);
            top: calc(-50% + 25%);
            border-top: 4px solid #FF8A65;
            border-bottom: 4px solid #FF8A65;
        }
        body .btn-bg.Pixar .btn-group .Out button .box2 {
            width: 150%;
            height: 200%;
            top: calc(-50%);
            left: calc(-50% + 25%);
            border-left: 4px solid #FF8A65;
            border-right: 4px solid #FF8A65;
        }
        body .btn-bg.Pixar .btn-group .Out button:hover .box1 {
            top: 0;
            left: 0;
            opacity: 1;
            width: 100%;
            height: calc(100% - 8px);
            transition: all 0.25s ease;
        }
        body .btn-bg.Pixar .btn-group .Out button:hover .box2 {
            top: 0;
            left: 0;
            opacity: 1;
            height: 100%;
            width: calc(100% - 8px);
            transition: all 0.25s ease;
        }

        body .btn-bg.link .btn-group .blog button {
            color: #FF8A65;
            overflow: hidden;
            position: relative;
            border-radius: 5px;
            border: 5px solid #FF8A65;
            padding: calc(1rem + 10px) calc(3rem + 6.5px);
            background: linear-gradient(45deg, #fff 7.5px, transparent 5px) 0px 10px, linear-gradient(225deg, #fff 7.5px, transparent 5px) 10px 0px, linear-gradient(45deg, #eef 7.5px, transparent 5px) 0px 20px, linear-gradient(225deg, #eef 7.5px, transparent 5px) 10px 10px, linear-gradient(45deg, #dcdde5 7.5px, transparent 5px) 0px 30px, linear-gradient(225deg, #dcdde5 7.5px, transparent 5px) 10px 20px, linear-gradient(90deg, #c9cacc 10px, transparent 10px), linear-gradient(#dcdde5 25%, #c9cacc 25%, #c9cacc 50%, transparent 50%, transparent 75%, #eef 75%, #eef);
            background-color: transparent;
            background-size: 0px 0px;
            transition: all 0.35s ease;
        }
        body .btn-bg.link .btn-group .blog button .like {
            position: absolute;
            content: '';
            top: calc(50% - 35px);
            left: calc(50% - 29.5px);
            width: 60px;
            height: 80px;
            opacity: 0;
            display: flex;
            flex-direction: column;
            transform: scale(0.1);
            transition: all 0.25s ease;
        }
        body .btn-bg.link .btn-group .blog button .like .hand {
            height: 30px;
            position: relative;
        }
        body .btn-bg.link .btn-group .blog button .like .hand:before,
        body .btn-bg.link .btn-group .blog button .like .hand:after {
            width: 20px;
            height: 30px;
            background: #FF8A65;
            position: absolute;
            content: '';
            top: 0;
            left: 0;
        }
        body .btn-bg.link .btn-group .blog button .like .hand:after {
            left: inherit;
            right: 0;
        }
        body .btn-bg.link .btn-group .blog button .like .Finger {
            height: 40px;
            position: relative;
        }
        body .btn-bg.link .btn-group .blog button .like .Finger:before {
            width: 60px;
            height: 20px;
            background: #FF8A65;
            position: absolute;
            content: '';
            bottom: 0;
            right: 0;
        }
        body .btn-bg.link .btn-group .blog button:hover {
            color: transparent;
            border-color: transparent;
            background-color: #FF8A65;
            background-size: 20px 40px;
            transition: all 0.35s ease;
        }
        body .btn-bg.link .btn-group .blog button:hover .like {
            transform: scale(0.5);
            opacity: 1;
            transition: all 0.25s ease;
        }
        body .btn-bg.link .btn-group .codepen button {
            color: #FF8A65;
            border-radius: 5px;
            border: 5px solid #FF8A65;
            overflow: hidden;
            position: relative;
            padding: calc(1rem + 10px) calc(3rem + 6.5px);
            background: linear-gradient(45deg, #787878 7.5px, transparent 5px) 0px 10px, linear-gradient(225deg, #787878 7.5px, transparent 5px) 10px 0px, linear-gradient(45deg, #565656 7.5px, transparent 5px) 0px 20px, linear-gradient(225deg, #565656 7.5px, transparent 5px) 10px 10px, linear-gradient(45deg, #121212 7.5px, transparent 5px) 0px 30px, linear-gradient(225deg, #121212 7.5px, transparent 5px) 10px 20px, linear-gradient(90deg, #343434 10px, transparent 10px), linear-gradient(#121212 25%, #343434 25%, #343434 50%, transparent 50%, transparent 75%, #565656 75%, #565656);
            background-color: transparent;
            background-size: 0px 0px;
            transition: all 0.35s ease;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton {
            position: absolute;
            content: url({{ asset('img/logo1.png') }});
            top: calc(50% - 30px);
            left: calc(50% - 34px);
            width: 60px;
            height: 60px;
            display: flex;
            flex-direction: column;
            transform: scale(0.1);
            opacity: 0;
            transition: all 0.25s ease;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .face {
            height: 20px;
            width: 70px;
            position: relative;
            z-index: 1;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .face:before,
        body .btn-bg.link .btn-group .codepen button .skeleton .face:after {
            width: 50px;
            height: 60px;
            position: absolute;
            content: '';
            background: #FF8A65;
            top: 0px;
            left: 10px;
            z-index: 1;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .face:after {
            width: 70px;
            height: 30px;
            top: 10px;
            left: 0;
            right: 0;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .eye {
            height: 20px;
            width: 70px;
            position: relative;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .eye:before,
        body .btn-bg.link .btn-group .codepen button .skeleton .eye:after {
            width: 20px;
            height: 10px;
            position: absolute;
            content: '';
            background: #FF8A65;
            left: 10px;
            z-index: 999;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .eye:after {
            left: inherit;
            right: 10px;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .mouth {
            width: 70px;
            height: 20px;
            position: relative;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .mouth:before,
        body .btn-bg.link .btn-group .codepen button .skeleton .mouth:after {
            position: absolute;
            content: '';
            background: #FF8A65;
            width: 10px;
            height: 10px;
            bottom: 0;
            left: 20px;
            z-index: 999;
        }
        body .btn-bg.link .btn-group .codepen button .skeleton .mouth:after {
            left: inherit;
            right: 20px;
        }
        body .btn-bg.link .btn-group .codepen button:hover {
            color: transparent;
            border-color: transparent;
            background-color: #FF8A65;
            background-size: 20px 40px;
            transition: all 0.35s ease;
        }
        body .btn-bg.link .btn-group .codepen button:hover .skeleton {
            transform: scale(1);
            opacity: 1;
            transition: all 0.25s ease;
        }

        .btn-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
        }
        @media screen and (max-width: 480px) {
            .btn-group {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }
        }
        .btn {
            margin: 0 30px 30px 30px;
            display: block;
        }
        .btn-info {
            margin-bottom: 10px;
            text-align: center;
            font-family: "Lacquer", cursive;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 600;
            font-size: 3.5em;
            color: #fff;
        }
        .btn-mention {
            margin-bottom: 70px;
            text-align: center;
            font-family: "Lacquer", cursive;
            letter-spacing: 0.1em;
            font-size: 1.1em;
            color: #fff;
        }
        .btn-mention span {
            font-size: 1.2em;
            font-weight: 600;
        }
        button {
            cursor: pointer;
            overflow: visible;
            outline: none;
            color: #fff;
            position: absolute;
            right: 1em;
            top: 1em;
            letter-spacing: 0.1em;
            font-weight: 400;
            padding: 1rem 3rem 1rem 3rem;
            text-transform: uppercase;
            font-family: "Lacquer", cursive;
            font-size: 1.2em;
        }
        button a {
            text-decoration: none;
        }

        #play{
            cursor: pointer;
            overflow: visible;
            outline: none;
            color: #FF8A65;
            position: absolute;
            left: 1em;
            top: 1em;
            letter-spacing: 0.1em;
            font-weight: 400;
            padding: 1rem 3rem 1rem 3rem;
            text-transform: uppercase;
            font-size: 1.2em;
        }

    </style>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lacquer&display=swap");
        *,
        *::after,
        *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        :root {
        --avatar-width: 10em;
        --avatar-height: 10em;
        }

        body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-size: 1.5rem;
        font-family: "Jolly Lodger", cursive;
        font-family: "Lacquer", cursive;
        background-color: #171717;
        background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="36" height="72" viewBox="0 0 36 72"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%23b39ddb" fill-opacity="0.05"%3E%3Cpath d="M2 6h12L8 18 2 6zm18 36h12l-6 12-6-12z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
        color: #ff8a65;
        }

        .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5em;
        padding: 1em 1.5em;
        }

        .dropdown {
        display: grid;
        gap: 1em;
        /* text-align: center; */
        }

        label {
        color: #ff8a65;
        }

        .avatar-container {
        --Y: 0;
        width: var(--avatar-width);
        height: var(--avatar-height);
        border-radius: 50%;
        overflow: hidden;
        background-color: currentcolor;
        border: 4px solid #b39ddb;
        }
        .avatar-container__inner {
        display: grid;
        justify-items: center;
        align-items: end;
        grid-auto-rows: var(--avatar-height);
        width: var(--avatar-width);
        transform: translateY(calc(var(--Y) * var(--avatar-height) * -1));
        }
        @media (prefers-reduced-motion: no-preference) {
            .avatar-container__inner {
                transition: calc(0.3s * var(--index-diff)) transform;
            }
        }

        .avatar {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        width: calc(var(--avatar-width) * 0.5);
        height: calc(var(--avatar-height) * 0.8);
        margin-bottom: 4px;
        border-radius: 50% 50% 0 0/40%;
        }
        .avatar, .avatar::before, .avatar::after {
        background-repeat: no-repeat !important;
        }

        .ghost {
        background: radial-gradient(ellipse at 50% -50%, #222 40%, #22222200 42%) 50% 50%/2em 2em, radial-gradient(ellipse, #ef535099 50%, #ef535000 55%) 0.1em 2.9em/1.75em 0.75em, radial-gradient(ellipse, #ef535099 50%, #ef535000 55%) calc(100% - 0.1em) 2.9em/1.75em 0.75em, radial-gradient(#222 40%, #22222200 44%) 0.5em 1.75em/1.5em 1.5em, radial-gradient(#222 40%, #22222200 44%) calc(100% - 0.5em) 1.75em/1.5em 1.5em, #eceff1;
        box-shadow: 0 0 0 4px #111, -0.3em 0 rgba(0, 0, 0, 0.25) inset;
        }
        .ghost::before, .ghost::after {
        content: "";
        position: absolute;
        width: 0.75em;
        height: 0.5em;
        border-radius: 0 0 50% 50%;
        top: 61%;
        background-color: inherit;
        box-shadow: 0 -5px #eceff1, 0 0 0 4px #111;
        }
        .ghost::before {
        left: 14%;
        transform: rotate(-17deg);
        }
        .ghost::after {
        right: 14%;
        transform: rotate(17deg);
        }

        .ghoul {
        background: radial-gradient(circle at 50% -50%, #11111100 39%, #111 41% 44%, #11111100 45%) 50% 4em/1.5em 2em, radial-gradient(ellipse, #e57373bb 50%, #e5737300 55%) 0.1em 2.9em/1.75em 0.75em, radial-gradient(ellipse, #e57373bb 50%, #e5737300 55%) calc(100% - 0.1em) 2.9em/1.75em 0.75em, radial-gradient(#ffffff99 40%, #ffffff00 50%) 58% 2em/0.5em 0.5em, radial-gradient(#b71c1c 40%, #b71c1c00 44%) 58% 1.6em/1.5em 1.5em, radial-gradient(#ffe 42%, #111 44% 50%, #11111100 52%) 50% 1em/3em 3em, #174f1b;
        box-shadow: 0 0 0 4px #111, -0.3em 0 rgba(255, 255, 255, 0.25) inset;
        }
        .ghoul::before, .ghoul::after {
        content: "";
        position: absolute;
        width: 2em;
        height: 2em;
        border-radius: 47%;
        top: 3%;
        z-index: -1;
        }
        .ghoul::before {
        left: -17%;
        box-shadow: 0.5em -0.75em #111 inset;
        }
        .ghoul::after {
        right: -17%;
        box-shadow: -0.5em -0.75em #111 inset;
        }

        .marshmallow-monster {
        width: calc(var(--avatar-width) * 0.7);
        height: calc(var(--avatar-width) * 0.5);
        margin-bottom: calc(var(--avatar-height) * 0.3);
        border-radius: 50%/30%;
        border: 4px solid #111;
        background: linear-gradient(to right, #11111100 25%, #111 25% 33%, #11111100 34% 50%, #111 51% 59%, #11111100 60% 75%, #111 76% 84%, #11111100 84%) 50% 91%/2em 0.5em, linear-gradient(#11111100 85%, #111 85%) 50% 85%/2em 1em, radial-gradient(#111 40%, #11111100 45%) 23% 1.75em/1em 1em, radial-gradient(#111 40%, #11111100 45%) 50% 2.5em/1em 1em, radial-gradient(#111 40%, #11111100 45%) 78% 1.75em/1em 1em, radial-gradient(#ffe 42%, #111 44% 50%, #11111100 53%) 20% 1.25em/2em 2em, radial-gradient(#ffe 42%, #111 44% 50%, #11111100 53%) 80% 1.25em/2em 2em, radial-gradient(#ffe 42%, #111 44% 50%, #11111100 53%) 50% 1.75em/2em 2em, radial-gradient(ellipse, rgba(0, 0, 0, 0.25) 85%, rgba(0, 0, 0, 0) 87%) 50% 0/100% 1.25em, #81d4fa;
        }
        .marshmallow-monster::before {
        content: "";
        position: absolute;
        width: 0.5em;
        height: calc(var(--avatar-height) * 0.3);
        top: 100%;
        background-color: #ffe;
        z-index: -1;
        border: 4px solid #111;
        }

        .vampire {
        width: calc(var(--avatar-width) * 0.55);
        border-radius: 50% 50% 0 0/35%;
        box-shadow: 0 -0.5em 0 0.25em #111;
        background: radial-gradient(ellipse, #ef535099 50%, #ef535000 55%) 0.1em 2.9em/1.75em 0.75em, radial-gradient(ellipse, #ef535099 50%, #ef535000 55%) calc(100% - 0.1em) 2.9em/1.75em 0.75em, linear-gradient(75deg, #111 50%, #11111100 51%) 50% 100%/100% 2.5em, linear-gradient(-75deg, #111 50%, #11111100 51%) 50% 100%/100% 2.5em, linear-gradient(#11111100 93%, #111 94%) 50% 2.75em/1.5em 1em, linear-gradient(90deg, #111 2%, #11111100 3% 97%, #111 98%) 50% 3.75em/1.5em 0.35em, linear-gradient(-45deg, #11111100 84%, #111 85%, #ffe 88%) 50% 3.75em/1.5em 1em, linear-gradient(45deg, #11111100 84%, #111 85%, #ffe 88%) 50% 3.75em/1.5em 1em, radial-gradient(#ffe 42%, #ffffee00 55%) 33% 1.75em/0.75em 0.3em, radial-gradient(#ffe 42%, #ffffee00 55%) 73% 1.75em/0.75em 0.3em, radial-gradient(#111 35%, #ffe 37% 42%, #111 44% 50%, #11111100 52%) 80% 1em/2.4em 2.4em, radial-gradient(#111 35%, #ffe 37% 42%, #111 44% 50%, #ffffee00 52%) 20% 1em/2.4em 2.4em, radial-gradient(rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 52%) 20% 1.2em/2.4em 2.4em, radial-gradient(rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 52%) 80% 1.2em/2.4em 2.4em, radial-gradient(ellipse, #f5f5f5 65%, #f5f5f500 66%) 0% 0/70% 5em, radial-gradient(ellipse, #f5f5f5 65%, #f5f5f500 66%) 100% 0/70% 5em, radial-gradient(ellipse, #f5f5f5 70%, #f5f5f500 72%) 50% 1.9em/85% 3em, linear-gradient(#111 99%, #11111100 100%) 50% 0%/100% 5em, #ffe;
        }
        .vampire::before, .vampire::after {
        content: "";
        position: absolute;
        width: 4em;
        height: 2em;
        top: 56%;
        }
        .vampire::before {
        left: 0;
        transform: translatex(-25%) skew(21deg, 14deg);
        background-image: linear-gradient(36deg, #111 87%, #11111100 88%);
        }
        .vampire::after {
        right: 0;
        transform: translatex(25%) skew(-21deg, -14deg);
        background-image: linear-gradient(-36deg, #111 87%, #11111100 88%);
        }

        .skeleton {
        height: calc(var(--avatar-width) * 0.4);
        margin-bottom: calc(var(--avatar-width) * 0.4);
        border-radius: 50%/50% 50% 25% 25%;
        box-shadow: -4px 0 rgba(0, 0, 0, 0.25) inset, 0 0 0 0.5em #111, 0 1.5em 0 0.5em #111, 0 1.75em 0 0.5em #111;
        border: 4px solid #111;
        background: radial-gradient(ellipse, #e57373bb 50%, #e5737300 55%) 5% 2.9em/1.5em 0.5em, radial-gradient(ellipse, #e57373bb 50%, #e5737300 55%) 95% 2.9em/1.5em 0.5em, radial-gradient(ellipse at 50% 100%, #11111100 20%, #111 22% 70%, #11111100 75%) 50% 2.75em/1em 0.5em, radial-gradient(#ffe 70%, #ffffee00 75%) 80% 1.75em/0.4em 0.4em, radial-gradient(#ffe 70%, #ffffee00 75%) 30% 1.75em/0.4em 0.4em, radial-gradient(#111 70%, #11111100 75%) 80% 1.5em/1.25em 1.25em, radial-gradient(#111 70%, #11111100 75%) 20% 1.5em/1.25em 1.25em, radial-gradient(rgba(0, 0, 0, 0.4) 65%, rgba(0, 0, 0, 0) 75%) 80% 1.65em/1.25em 1.3em, radial-gradient(rgba(0, 0, 0, 0.4) 65%, rgba(0, 0, 0, 0) 75%) 20% 1.65em/1.25em 1.3em, #cfd8dc;
        }
        .skeleton::after {
        content: "";
        position: absolute;
        bottom: -21%;
        width: 75%;
        height: 1em;
        border: 4px solid #111;
        border-top: 0;
        border-radius: 0 0 50% 50%;
        background: repeating-linear-gradient(to right, #11111100 0 0.5em, #111 0.5em 0.7em) 0 100%/100% 0.5em, #cfd8dc;
        }
        .skeleton::before {
        content: "";
        position: absolute;
        bottom: -4em;
        height: 4em;
        width: 9.5em;
        background: radial-gradient(ellipse at 50% 0%, #cfd8dc 50%, #111 52% 65%, #11111100 70%) 50% 0%/1em 8em, linear-gradient(#111 10%, #11111100 11%) 50% 1em/4.5em 1em, radial-gradient(ellipse at 50% 0%, #cfd8dc 62%, #111 64% 65%, #11111100 67%) 50% 1em/5em 1em, linear-gradient(#111 10%, #11111100 11%) 50% 2.5em/4.5em 1em, radial-gradient(ellipse at 50% 0%, #cfd8dc 62%, #111 64% 65%, #11111100 67%) 50% 2.5em/5em 1em, radial-gradient(ellipse at 50% 100%, #cfd8dc 49%, #cfd8dc00 51%) 1.4em 0/1.25em 4em, radial-gradient(ellipse at 50% 100%, #cfd8dc 49%, #cfd8dc00 51%) calc(100% - 1.4em) 0/1.25em 4em, radial-gradient(ellipse at 50% 100%, #111 75%, #11111100 76%) 50% 0.25em/100% 4.5em;
        }

        select,input,textarea {
        background-color: #fff;
        border: none;
        width: 100%;
        font: inherit;
        padding: 0em 0.5em;
        }
        select:focus,input:focus,textarea:focus {
        outline: 2px solid transparent;
        }
        select:focus-visible,input:focus-visible,textarea:focus-visible {
        outline: 2px dashed #fff;
        outline-offset: 3px;
        }
    </style>
</head>
<body>

    <div class="btn-bg Pixar">
        <div class="btn-group">
            <div class="btn Inside">
                <button href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    <div class="box1"></div>
                    <div class="box2"></div>
                    {{ __('Logout') }}
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('wheel') }}" title="Soon" id="play">{{ auth()->user()->user_id != Null ? 'Result':'Play' }}</a>
    <main class="wrapper">
        {{--<div class="avatar-container">
            <div class="avatar-container__inner">
                @foreach($avatars as $avatar)
                    <div class="{{ $avatar }} avatar"></div>
                @endforeach
            </div>
        </div>--}}
        <form method="POST" action="{{ route('dashboard.profile',$user->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="dropdown">
                <div class="avatar-container">
                    <div class="avatar-container__inner">
                        @foreach($avatars as $avatar)
                            <div class="{{ $avatar }} avatar"></div>
                        @endforeach
                    </div>
                </div>
                <label for="monster-select">Name:</label>
                <input type="text" name="nickname" id="monster-select" value="{{ $user->full_name }}" autocomplete="off">
                <label for="nickname">Nickname:</label>
                <input type="text" name="nickname" id="nickname" value="{{ $user->nickname }}" autocomplete="off">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="Male" {{ $user->gender == 'Male' ? 'selected':'' }}>Male</option>
                    <option value="Female" {{ $user->gender == 'Female' ? 'selected':'' }}>Female</option>
                </select>
                <label for="birth_of_date">Date of Birth:</label>
                <input id="birth_of_date" type="date" name="date_of_birth" value="{{ $user->date_of_birth }}">
                <label for="color">Favourite color:</label>
                <input id="color" type="color" name="color" value="{{ $user->color }}">
                <label for="category">Present category:</label>
                <select name="category" id="category">
                    <option value="Food and Drinks" {{ $user->category == 'Food and Drinks' ? 'selected':'' }}>Food and Drinks</option>
                    <option value="Electronics" {{ $user->category == 'Electronics' ? 'selected':'' }}>Electronics</option>
                    <option value="Books" {{ $user->category == 'Books' ? 'selected':'' }}>Books</option>
                    <option value="Home and Kitchen" {{ $user->category == 'Home and Kitchen' ? 'selected':'' }}>Home and Kitchen</option>
                    <option value="Toys and Games" {{ $user->category == 'Toys and Games' ? 'selected':'' }}>Toys and Games</option>
                    <option value="Beauty and Personal Care" {{ $user->category == 'Beauty and Personal Care' ? 'selected':'' }}>Beauty and Personal Care</option>
                    <option value="Clothing and Accessories" {{ $user->category == 'Clothing and Accessories' ? 'selected':'' }}>Clothing and Accessories</option>
                    <option value="Sports and Outdoors" {{ $user->category == 'Sports and Outdoors' ? 'selected':'' }}>Sports and Outdoors</option>
                    <option value="Gift Cards" {{ $user->category == 'Gift Cards' ? 'selected':'' }}>Gift Cards</option>
                    <option value="Subscription Services" {{ $user->category == 'Subscription Services' ? 'selected':'' }}>Subscription Services</option>
                </select>
                <label for="notes">Present Notes:</label>
                <textarea name="note" id="notes" cols="30" rows="10">{{ $user->note }}</textarea>
                {{-- <input type="submit" value="Submit" style="background: #ff8a65;cursor: pointer;"> --}}
            </div>
        </form>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $("#birth_of_date").flatpickr(
            {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                maxDate: "today"
            }
        );
    </script>

    <script>
        const dropdown      = document.querySelector("select");
        const avatar        = document.querySelector(".avatar-container");

        dropdown.addEventListener("change", () => {
            let currentIndex    = getComputedStyle(avatar).getPropertyValue("--Y").trim();
            let selectedIndex   = dropdown.selectedIndex;
            let indexDiff       = Math.abs(selectedIndex - currentIndex);
            avatar.style.setProperty("--Y", selectedIndex);
            avatar.style.setProperty("--index-diff", indexDiff);
        });
    </script>
</body>
</html>
