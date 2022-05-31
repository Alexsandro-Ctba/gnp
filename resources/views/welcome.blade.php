<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GNP</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registre-se</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="46.000000pt" height="50.000000pt"
                    viewBox="0 0 675.000000 722.000000" preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,722.000000) scale(0.100000,-0.100000)" fill="#000000"
                        stroke="none">
                        <path d="M3280 6889 c-27 -17 -2892 -669 -2939 -669 l-31 0 0 -2945 0 -2945
1388 3 1387 2 1629 338 c896 185 1644 337 1663 337 l33 0 0 2945 0 2945 -1557
-1 c-961 0 -1564 -4 -1573 -10z m8 -356 l-3 -278 -110 -22 c-109 -21 -122 -21
-1262 -22 -989 -1 -1153 1 -1153 13 0 9 18 18 49 25 105 22 1949 443 2191 500
140 33 263 60 273 60 16 1 17 -17 15 -276z m2137 -187 c241 -72 416 -242 497
-482 l23 -69 0 -815 0 -815 -31 -86 c-90 -251 -309 -431 -571 -469 -37 -5
-267 -10 -510 -10 l-443 0 0 -1037 0 -1037 -47 -48 -47 -48 -135 0 -135 0 -53
52 -53 52 0 2365 0 2365 53 54 52 53 670 -4 c608 -3 676 -5 730 -21z m-2145
-2711 l0 -2544 -37 -10 c-66 -18 -127 -31 -146 -31 -16 0 -17 126 -15 2547 l3
2547 80 17 c44 9 88 17 98 18 16 1 17 -126 17 -2544z m-1521 79 c216 -856 405
-1604 421 -1663 l28 -106 1 1625 1 1624 37 38 37 38 120 0 120 0 38 -37 38
-37 0 -2040 0 -2040 -37 -38 -37 -38 -271 0 -270 0 -390 1613 -390 1612 -3
-1575 -2 -1574 -37 -38 -37 -38 -125 0 -125 0 -38 37 -38 37 0 2040 0 2040 37
38 37 38 246 0 247 0 392 -1556z m4161 -2709 c0 -8 -4 -15 -9 -15 -5 0 -633
-128 -1396 -285 -763 -157 -1398 -285 -1411 -285 l-24 0 0 275 0 275 28 7
c174 43 96 41 1495 42 1164 1 1317 -1 1317 -14z" />
                        <path d="M4390 4985 l0 -986 459 3 459 3 43 30 c52 37 92 92 113 159 23 70 24
1495 1 1572 -21 70 -67 139 -116 171 l-43 28 -458 3 -458 3 0 -986z" />
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.86px" height="30px"
                                viewBox="0 0 50 58" enable-background="new 0 0 50 58" xml:space="preserve">
                                <image id="image0" width="50" height="58" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAA6CAYAAADybArcAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAL
                                IUlEQVRo3s2a2XMc13WHv3u7e6Z7Vsxg30iAJAjLJE2KFOWKZCWSzbLiisvlSh4SL1WqlJ3/KRW9
                                peIHPySucqUcpVSOFVnR5qJIiqsIkSAJYLAMMEvPPt19bx56iIUUiRkQoHxeBpia0/d+fZfzO+de
                                obVeAsaACvtsSmk8P0AIgWVKhBD73QRAEsiZnT/Y9rlnC5TiwWqRuytF1spV6s027UAhAcs0iNtR
                                RrMJjo0NMNaf2lcYobV29wPi8p0lPrm1wFIhHFjbMhBCEAiNRCA0BFrTavtYpmRqMMMrJ6c4Ntq/
                                HyCVZwYpVRv85sPrfLGUJ5NwcCImbqMNQF/MxpQCX2k8pajWW1imxLEjlOtNWk2P88cn+ZuXv4Fl
                                Gl8fyOJGmX/9/UVa7YChvgS+HxCPRpge6WNssI/BZIx4NEqgFPV2m9VSlYXVMg/yJVoqQALLhQqH
                                BtL8/MJZEnb0+YPkS1XefufT8M0nHPxAYRiC8UyabMqh7Ssq9SaWGU4xpTWJqAUCVotV1so1hBAY
                                UrBcqDCeTfLLH7yMaexpZPYGorXmX373CcvlKkOpOEppAEwpafk+lWYLIQSmlPgqXOxChH8LASkn
                                iiHlpp+UgsV1l5eOjfG33zm1JxBzL17vX53nfr7E+EB6szMAvlIYUtIXc3Z9xnY/pTSj2QSX7i5z
                                YmqY2Ymhnvske3Voez5X762QStjobZ15VpNSYpiSi3O5vfn36nA7t85auUYiEtk3CACtNJmYzeJG
                                iXypevAgq4XeG+nWDCmpNjyWNtyDB3HrTSyjZ7eerNJoHTyIUhpxgBzSELS94OBBTNMgUAcHAoDo
                                fRPZ07t9kpOnFL5Wzzxigt5Vcs9NVutNLHPLzZBh1N5wawRBQKvtk3frBGiE7L1DBoJqR6v1Yj0F
                                xGKlzlqlhm2FbkIKGp5PvdXmtZNTfHv2EPWWzwfX57k8v4xEkE05SCm7jjl2xGS1WMHzg56EZE8S
                                5d2Lt/nsbg4nGtkcyrxb44cvz3L++KEdv10quHxwdZ4bC2sIKehPxJBS7Aqk0dRbHq+8cJjXTk53
                                y9G91vr1/17hszs5JgfS4QyWsOE2mJ0Y5O//8ltP9FtaL/P+1XluLq5hGQaZhIN4CpCQgiBQLKyX
                                uXD6KG++NNsVSFdr5OaDVS7dXWZiIN15a51tGHjxyOhTfccH0vzkjTP84s3zTA9nWClVKbn1Tqe/
                                YkSUxjAEo9kkH91eYLnQXXDsao3kyzUsQyI7EAAtL2AgFWNyqK+rhg4PZTj8vQzzKwX+eHWe27l1
                                7KhFJuaA1OhtW7pWEDEMVKBZLVYZze6eFncFIoQI5/e275qez9RgH07E6grkoU2PZJkeyXJ7Mc8H
                                1+9xd6VA1DJJx20sQxJsm3LSEF0XLLoCMR55mCacAjMTAz1BbLfjE4Mcnxjkxv0V/jS3hFtvhvlK
                                J4Yo6OQx3T2vqzXiK4XesTbDfyLmntKZHfbNwyO8deEcJw4NsVFt7OhYoPSOvOWZQeyIhR8Eewpw
                                3ZoQAvGI9FFK40S7e1ldgZw8PEwm4bBarGBIgUCggEDvv+gSEgSwsFFmciDddbbYdRxZKbj89uMb
                                VJptoqZJoBS+Uvzg3CzfPDz8TJ2/fDfHu5fmsEwDU0gabY+hVJwfv3qCdHz3tJlu4wjASDbFT18/
                                Q9Q0aXXkQ7Ha5MOb958JIrfh8vsrX9LyAiKGgdtsMd6f4q3vv9QtBNCj1opGLKKWScPzUEoz1Jcg
                                V3D5YjHP7MTgjt+69SafzS2itEYKgecrTh0ZZSSTJF+uspAvM7e0zhdL69gRk4FEDF8pAl/1vKX3
                                DBLWby3ylRqOxeZ6+fjWg8dA3r04x3vX7pFN2gD4geLawhp9sSgrxSoblTqJWJSBRAwhBb4K15tG
                                b4rSXqxnGR81zc0tUStNNhVjLrfBR7d2TrGVcpX+tEM25ZBJOoxmklTqLW4u5BECzs9MMJlN42u1
                                Q3cpwuTtQEcEoO0HjwRITSZh896VO0wM9DHZ0WOnp0f474tzNJo+QgjKrSazkwO8emKayYE091YL
                                /Pv/XUdKwfY8SgLeHlLQnkC01jQ9P2z84XcKnIhF0wv49ftX+McL5+hPxfnOiWmOjw/i+WF1UQjB
                                YCqGaRq49Sb/+ckt/CAgEYnuGBGBoNX2Dhak2fZptD2MR6ooSmkycZtircHb73zK3716ipnxAYb6
                                Eo894+aDVf7jo+tIBOm4/VjktkxJrXnAGWKp1qDabBF5ZDFKKag0WmgN0pD82x8ucerQMC8eHWO4
                                P4nQYaJ16cscNxbWiNsR2r5PrdUmGY1uLnQAyzIp1BpU600SMftgQHIbLo2mR2xblVFIwdKGy7mj
                                Y/Sn47x7aQ4nGuHmYp4bi2ukEw5aa0q1JgYCyzSoNFq8eXaGxbzL9QerjGWTm6o3YkjK9SbLpSoz
                                BwVy7f4qVmTLRRPWgo+OZLlwdoZUzGawL84fP59nqVBBa02+GFYmhRBoKZjoS/H6mSPMjA2yXq5S
                                aTSptjxMKRGEayRQcG1+hZmx7tX1rhLFrTdZd+tcuZPjxuIafXFnc3E2PI++mM3Pv3sWJ7oVxJRW
                                fJnbYGGtTNsLUJ3YMDWS4chIdkeOseHW+NUfLuErTaRzNqKAerPFmekxZg8NMpxOELOfWmt+cs7e
                                aLZ57/O7XFtYxa21iJgG2VQM2MrmNJpG2+f8zDhvnD7Wy+CG/lrz249ucGspTzy6c7oGSlOo1lGB
                                IptwOH1klNdOTD8pxnw1yHLB5VfvXabg1hlIxzff1GPDKUEpWCtVmRnt50d/8QJ9iVhXEMsFl998
                                eJ2VUpXhvsRTqytN32etWOXYaJafvfEiceexI7rHQVaKFd7+r08RUpBNOLsmNmFFRbDh1jGl4MUj
                                Y3zryChj/anH0tQgUDzIl7h8J8fn88tYpkFfF21AKIeWi1WyCZt/+uuXH4XZCeL5Af/8u48pVJsM
                                pmJdZ2cPp0PbDyhVG5hSMpZNMpxJErcttIZKvcVKscJKsYqW0J/orXAH4TafK1SYGcny1vdfejLI
                                O3/6gvevzzM5kN5RBOjFwummO8HT7zxHY0qJY1vYpokA9nrWJaRgab3MD7/9DV55YWoTZHMvXStV
                                uTyfYyAd3zMEhJJFIHAi1hPl+DMd2ClNKuHw6e1Fzh4Zx+7slpta4/KdHNVGm+geJPTzNA0k7Qjr
                                pRqX726dN0qARtvj9tI66X0+4DwwGKVxbIvbi+s7Qe6tFMi7NRyr98zs67KEE2Wx6LK0Xt4CWVx3
                                H6lb/fmbiaDR8lja2AZSqNSJWM90qeW5mwZMISm4jS0QIXY/t/hzNIXeTPIkQH8yFiZMB1hJ3G8T
                                UuD5AdmUswVy5ugoTsSiWG/uSGOfbl/fCEopyLs1+lMxTk6NboH0p+L8w1+dxvcDlguVzkHmru/k
                                uQOEqlixuO4Si5j89PUzW+eZ2yXKhlvjfy7d4dbSGi0vIBmLYkctjK+h01udBy/QNJptqs02Mdvi
                                1OERvnf66Hbh+NUyfrVU5dr8CvfXOpcsWx4giFgGdsTEkBLZKc7t1yUIhd480vP8oFMS0njtAMe2
                                GMskOTyc4eTUMNlk/FH33Q9DV4sVFtfLuPUmBbfBarlKo+3heWFjDwsHEtGppHd2ESP8fJjC+jo8
                                69BKd7oc6jLF1qU1yzSIWAZpxyZuR/CD8IrhuZlx+lNxnmK936Dz/AC31qLWDoe61WyHStcL1a4O
                                FJ5SeIHafLtKKSzTwLIMLMNACoFpGjgRA9uycCImTtQibkeI2RHSMfuxktMuVhEHeYH5OVkSyP0/
                                OXxJSnMjUwEAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMDUtMzFUMTQ6NTY6NDgrMDM6MDBlW1BL
                                AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIyLTA1LTMxVDE0OjU2OjQ4KzAzOjAwFAbo9wAAABl0RVh0
                                U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAAASUVORK5CYII=" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/"
                                    class="underline text-gray-900 dark:text-white">SAC</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                DEPARTAMENTO PÓS VENDAS
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.86px" height="30px"
                                viewBox="0 0 50 58" enable-background="new 0 0 50 58" xml:space="preserve">
                                <image id="image0" width="50" height="58" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAA6BAMAAAAAQhfvAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAD1BMVEX///+TscUAAACTscX/
                                //+9kSPVAAAAA3RSTlMAAAD6dsTeAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+YFHxITNeStaCkAAACi
                                SURBVDjLvdPRFYMgDAVQRhCzgK0LmL79dzMqkhRBTxGbw0fgGqMozjUNbwPAnnZfQiKcFUCLOqdX
                                rSVxukgkwBRZoSCsgl9lWeBdCGzEq/A2DrKh3YMzQUGoTjIxOd2v9SXpQaGm4tsKPSPQluG/znyF
                                CuEg1FSOjfy1pLdjPcFpiQolJSLvQgx35CXHoLeZivTtbRZllPnHZn+X8rNlpCJmg/S9H5Ac3OYA
                                AAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMDUtMzFUMTU6MTk6NTMrMDM6MDA3svWlAAAAJXRFWHRk
                                YXRlOm1vZGlmeQAyMDIyLTA1LTMxVDE1OjE5OjUzKzAzOjAwRu9NGQAAABl0RVh0U29mdHdhcmUA
                                QWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAAASUVORK5CYII=" />
                            </svg>


                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/"
                                    class="underline text-gray-900 dark:text-white">COMPRAS</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                DEPARTAMENTO DE COMPRAS
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.86px" height="30px"
                                viewBox="0 0 50 58" enable-background="new 0 0 50 58" xml:space="preserve">
                                <image id="image0" width="50" height="58" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAA6BAMAAAAAQhfvAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAD1BMVEX///+TscUAAACTscX/
                                //+9kSPVAAAAA3RSTlMAAAD6dsTeAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+YFHxIkEUipLMwAAADN
                                SURBVDjLvZQNDoMgDIV1O0HtDbxBx/3vNmgR6I9bMnRNjMYvPF5flWX5U63J17bn+kCeAXl9JWCr
                                ETQraJLQsAl6Ul4RpttJ6ODKTs8TvZgYB7OToywI/TZNsBL6Les8rC0kOQKZZOBAuCPYJA2Bvptx
                                jengoB0Q67ALT8RbFtBEhAVrB/LIezkCcKx0nZbrhCAnUImyJg4iApi6mm6HmgP18xTSHAwRmH5S
                                kEFJR51iKrcVrRxPJGf92IcSx8TLDGkzBUegfweWYAXwBiLWxvFIdBGtAAAAJXRFWHRkYXRlOmNy
                                ZWF0ZQAyMDIyLTA1LTMxVDE1OjM2OjE3KzAzOjAw7tA9AAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAy
                                Mi0wNS0zMVQxNTozNjoxNyswMzowMJ+NhbwAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVh
                                ZHlxyWU8AAAAAElFTkSuQmCC" />
                            </svg>

                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="/" class="underline text-gray-900 dark:text-white">FISCAL</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                DEPARTAMENTO FISCAL
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                                <a href="/" class="underline text-gray-900 dark:text-white">OUTROS</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                OUTROS
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="/" class="ml-1 underline">
                            ADM
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    GNP v.2.0 (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
