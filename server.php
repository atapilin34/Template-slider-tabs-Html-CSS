<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server</title>
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.gif">
<style>
.backwrap {
    background: #113243; /* Old browsers */
    background-image: url('data:image/png;base64,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');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1;
}

/* Shapes & Animation
*/

.back-shapes {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.back-shapes img {
    opacity: 0.2;
    position: absolute;
    width: 1.5%;
}

.floating {
    position: absolute;
    animation-name: floating;
    -webkit-animation-name: floating;
    animation-duration: 5s;
    -webkit-animation-duration: 5s;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;

    &.circle {
      display: inline-block;
      width: 39px;
      height: 39px;
      background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAABHNCSVQICAgIfAhkiAAAA0pJREFUWIXdmL1O40AQx8fZ5BxQCqRrLqKxqKjAOl0JvMHxBIjHyCu4dGkJ+khpQNa9QeTyZIkihbtYCKWwbC1KFXbtvYJxbrIYMOBD1o20UhDe//x2dnb2w1BKQVut25SQYRhG+Vs1NGLjvToI0yHNwKawFWV7L+yb4AhQFwC6QRB8tyzrxDTN3V6vN2SMfc3zPBVCLFar1d18Pp8eHR2FACCxvQ1UKfVqg8eIMADo+75/kKbphRDiVtUwIcRtmqYXvu8fAEAfdYxafmuC9TzPs5IkuSyK4qEOlG5FUTwkSXLpeZ4FAL06gHXA+mEYnkops1f851LKe6VU/tJHUsosDMNTjOKLgK+CxXE8KopCVDjhWZZNZrPZ2Xg83rdtewcABrZt74zH4/3ZbHaWZdlESskroijiOB69BvgSmBnH8ahq9JzzK8dxLBTvweZqLRdNDwD6juNYnPOrKh0ENJ8DfDbHwjA81SMmpUyiKDoHgO06iU0W0nYURedSykSPIE5xZQ5WCTLP8yw9x5bL5dR13b26yVw1YNd195bL5VQbcIaLhL0IV+ZZkiSXesQQrPtWME2767runh7BJEkuq/LvSdR83z/QywVO5Zf3gmmAX6IoOtem9wHr4Eb09M5mmqYXtCPn/AoAtgCg8xEw4qMDAFv6IknT9AIAzEo4HNWAVn4pJcdV+SQfPgjIHMexaJkRQtwCwIDOzkaHIAiO6WiyLJvUKZbvnN5+lmUT6i8IgmMaiA7ZZpllWSd0310sFr8AIFeo2JShXo76a0P/rPybwhmmae7Sj29ubn4DQN4kGLEc9deG/tfnwo0wc86vSZRz3JIanVI6tbZt7yiyF3POr4Gk0QYcLZBSynvQEvQf5N0ADwtKqcdCT+HotEKe52n5mzE2sG27sWN8ldm23WWMDar8A2DOYYIqIcSC/m80Gn0DmgPNmoH66wChf1UuQBo5tVqt7mjvw8PDH0BWT8PGUH9t6H9dGShcPp/Pp/Tj4XD4EwAYvVk1YajHUH9t6P9vddATtJU7BHZq595ajqjNp5L2nufK6LXyJEyFWnmHIKLtu31pgO27t+qArbvxa4DteyvRAD/9lanV73P/z8tmDVgAaMGb8GfYHwpq7kYvpXclAAAAAElFTkSuQmCC');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      opacity: .5;
    }

      &.square {
        display: inline-block;
        width: 35px;
        height: 35px;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAABHNCSVQICAgIfAhkiAAAAUNJREFUWIXt2DFugzAUBuD/EVMGJMyQsZ3aA+QQ3ZjrIzKQgYWD5ACVOjRjBkBiSHF4XRJEIzmBCgiD/83Ysj9ZxrJNzIylRHQLREQAaMbxmTuz0WKUUk9Zlj0XRbHSWk8OEkKwlPKklNonSfLTYojISdP0JYqiz6kR16nr+o2Ivpi5cS4fy7JczQ25Hte51XDuCFOF1vpQVdWOiEb73ZiZfN/fCCHWgzBVVe3CMPwAcAQwBogAeHmeb6WU74Mw5xk5jozBrZk2Yjr5sxf8W0L3d4tFLWCLMcViTLEYUyzGFIsxxWJMsRhTFoXpc7iiPgejPv3ca2DEMDMB8C7FkTDeud9hGN/3N3meb6e4HQzGCCHWplP8VFnUAm4xQRCcHgHojisAgJkbpdS367qvc79CxHG8Z+YGAKh7JXr0+wwt6eXqFzNGfAM6wJFPAAAAAElFTkSuQmCC');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        opacity: .5;
    }

     &.triangle {
        display: inline-block;
        width: 35px;
        height: 35px;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAjCAYAAAAJ+yOQAAAABHNCSVQICAgIfAhkiAAABARJREFUWIXNVj2IGlsU/sa/3XWDRWCICyFNTF4Rq7AQSJUmiKRN2rAuBlKlM03gRV4lj9hYmSLwigQMCA9iZcAmNrIpDLurNiNKoiiODE+HmXXezNz7ird3ubvPdf17cQ9MMXfunPud75zvniNQSnHZzbFqANPYUkEKguDY3t52C4Kw3OAppUt5ADjC4bBP1/U/w+GwD4Bjab6XBFAAsNZqtV5RSmmr1XoFYA2AcJlAOlOp1E3btgeUUmrb9iCVSt0E4LwUII9Z3FAU5T3lTFGU9wA2lsHmMkC6isXiA0qpTU+bXSwWHwBwrRQk/r0dNnVd/0rHmK7rXwFsLiqiRUF66vX6cx7Y0dGRxL/X6/XnADwrAQnAEYvF/KZpdhkgwzB+7O7u/mIYxg+2ZppmNxaL+Rdhc16AAoD1Xq+X4lmr1Wo7ADZrtdoOv97r9VIA1ucV0bwgnblc7i4hxGBANE0rHtefE8CmpmlF9o0QYuRyubvzXklzpRmAV1XVzxwIq1Ao3GdKBuAqFAr3CSEW26Oq6mcA3nnSPg9Id6VSecKns9/vv+PTycqh3++/4/dVKpUnANz/K0gAjlAodNUwjBMFW5alJBKJG2cZAuBIJBI3LMtS2F7DMKRQKHR1VjZnFctau91+zbPTbDZj510xADzNZjPG72+3269n7esziSWdTt+ybVtlB45Go0ogEDh34gHgCAQCvtFoVGH/2LatptPpW7OIaBYWNxRF+cizUi6XH13U9gC4yuXyI/4/RVE+ztLXpwXpKpVKDymlhB00GAw+TXMQC3AwGHzicJJSqfRw2r4+lVhEUbyi6/q3kxMIOcpkMsFpUwbAmclkgoSQI+ZD1/VvoihemUZE0xzgaTQaL/h0dTqdN7MUPxNdp9N5w/tpNBovpunrF7IYj8evW5YlM8emabaj0ei1ma8RwBGNRq+ZptlmvizLkuPx+PWLfF0U/bosy2/56CVJejbvVAPAI0nSM96fLMtvL+rrE8WSz+fvEUJM5lDTtL1F5kM2f2qatsd8EkLMfD5/b5KIJjpTVfULF/RSJu1xk7yqql8mBX+eI3e1Wn3Kp0VRlA+z3G0TQLI79wPvv1qtPj2vr49lMRKJiIZhfD+h0LaHyWTyNgDP8Si26ONJJpO3bdsesjMMw/geiUTEcWyyqQUAIAiCAMDT6XR+8/v9L9m6LMvZw8PDP3w+n4kl2XA4dAeDwR1RFB+ztW63+/vW1tavAP6mPLAzLDqz2ewdQohOV2CEED2bzd7BmSbxn1o5075+uo1rt6dYlCQpvEqAzCRJCvNsurgyIfv7+3sHBwcBXdcdlmUJy6q/ac3lclGv10sopX8BIGx9nHB+OrgxRikH7BTIy2r/AAlu0j5Iy8AaAAAAAElFTkSuQmCC');
       background-size: cover;
       background-repeat: no-repeat;
       background-position: center center;
       opacity: .5;
    }

     &.cross {
        display: inline-block;
        width: 35px;
        height: 35px;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAlCAYAAADFniADAAAABHNCSVQICAgIfAhkiAAAAgJJREFUWIXN2MFO4zAQBuDfbSpaiUOvvTRS3w6EoEChwAvsZS9IvAnwOK5rV5V7Se8cNrOHNVXWpMk4caEj5dDInvkySeMkgohwbNH5aUBZJP4OIYQA0HU//9ABWllXo+MN7gDobzab+/V6fQbgxCWIDTqx1k6ttdPSGkQEBxUABsaYJ/oXuZTyGkAfgPgc12ZzNfpa6zkR5USUa63nfo3ihMRae0f/Ry6lvIkBKwHtalhrZwCSz7H+hU5u23V7Mpn8llKel7Y58JRpra/G4/EvB9wfjCMhIsoXi8Vtk47V5a08fZwEy+UyCNYE9AUVE9YUVIpiwmZVsDagvag2sLagShQTdlcsEANUiwqEJTFALBSzA/cAhjFAbBQHlmXZWwxQEIoB86MRKBhVgA2UUg8VsFwp9QBgEApqhHKwLoBhlmXvZaLtdvsKYAig2yj/ATs1/5ZOhV5T/n0sOorx73sv298EFgXk/mV771N1a2UwKmDpqLyjh8BigVhrH/uxJxaIO48Diwrizq97tI4O4uapeks6CKgt7GAgbl6l1NTPW5ycWGtnMUFc2Gq1ukTFy6gfZIx5TNP0GcAHuQqh4eZ9pGn6bIx5hPfC2+v1Tv0J+46mdYc4HTPGPMFbuEXx4AtfRC4AYDQavbTpUFl4NUShRr4b49c7hu9TX1DHEEf5efEvSKr5qd+QqggAAAAASUVORK5CYII=');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        opacity: .5;
    }
}

@keyframes floating {
    0% {
        transform: translateY(0%) rotate(-55deg);
    }
    50% {
        transform: translateY(300%) rotate(55deg);
    }
    100% {
        transform: translateY(0%) rotate(-55deg);
    }
}

@-webkit-keyframes floating {
    0% {
        -webkit-transform: translateY(0%);
    }
    50% {
        -webkit-transform: translateY(300%);
    }
    100% {
        -webkit-transform: translateY(0%);
    }
}

.formData {
    background: #113243;
    border: dotted 2px gray;
    color: white;
    font-size: 30px;
    margin: 60px auto;
    width: 25%;
    text-align: center;
    padding-bottom: 300px;
    position: fixed;
    left: 40%;
}
    /*loader*/
* {
    border: 0;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
:root {
    --hue: 223;
    --bg: hsl(var(--hue),10%,90%);
    --fg: hsl(var(--hue),10%,10%);
    font-size: calc(16px + (24 - 16) * (100vw - 320px) / (1280 - 320));
}
body {
    background-color: var(--bg);
    color: var(--fg);
    font: 1em/1.5 sans-serif;
    height: 100vh;
    display: grid;
    place-items: center;
    transition: background-color 0.3s;
}
main {
    padding: 1.5em 0;
}

.pl,
.pl__worm {
    animation-duration: 3s;
    animation-iteration-count: infinite;
}
.pl {
    animation-name: bump;
    animation-timing-function: linear;
    width: 8em;
    height: 8em;
}
.pl__ring {
    stroke: hsla(var(--hue),10%,10%,0.1);
    transition: stroke 0.3s;
}
.pl__worm {
    animation-name: worm;
    animation-timing-function: cubic-bezier(0.42,0.17,0.75,0.83);
}

/* Dark theme */
@media (prefers-color-scheme: dark) {
    :root {
        --bg: hsl(var(--hue),10%,10%);
        --fg: hsl(var(--hue),10%,90%);
    }
    .pl__ring {
        stroke: hsla(var(--hue),10%,90%,0.1);
    }
}

/* Animations */
@keyframes bump {
    from,
    42%,
    46%,
    51%,
    55%,
    59%,
    63%,
    67%,
    71%,
    74%,
    78%,
    81%,
    85%,
    88%,
    92%,
    to { transform: translate(0,0); }
    44% { transform: translate(1.33%,6.75%); }
    53% { transform: translate(-16.67%,-0.54%); }
    61% { transform: translate(3.66%,-2.46%); }
    69% { transform: translate(-0.59%,15.27%); }
    76% { transform: translate(-1.92%,-4.68%); }
    83% { transform: translate(9.38%,0.96%); }
    90% { transform: translate(-4.55%,1.98%); }
}
@keyframes worm {
    from { stroke-dashoffset: 10; }
    25% { stroke-dashoffset: 295; }
    to { stroke-dashoffset: 1165; }
}

    /*loader*/
</style>
</head>
<body>
<div class="backwrap gradient">
<div class="formData">
<h1>Ваши данные...</h1>
<p>
<?="Логин".$_POST["name"]
 ?>
</p>
<p>
<?="Пароль".$_POST["pass"]
 ?>
</p>
</div>
    <div class="loader">
        <svg class="pl" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="pl-grad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="hsl(193,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
            </defs>
            <circle class="pl__ring" r="56" cx="64" cy="64" fill="none" stroke="hsla(0,10%,10%,0.1)" stroke-width="16" stroke-linecap="round" />
            <path class="pl__worm" d="M92,15.492S78.194,4.967,66.743,16.887c-17.231,17.938-28.26,96.974-28.26,96.974L119.85,59.892l-99-31.588,57.528,89.832L97.8,19.349,13.636,88.51l89.012,16.015S81.908,38.332,66.1,22.337C50.114,6.156,36,15.492,36,15.492a56,56,0,1,0,56,0Z" fill="none" stroke="url(#pl-grad)" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="44 1111" stroke-dashoffset="10" />
        </svg>
    </div>
  <div class="back-shapes">
      <!-- All this img tags was autogenerated by custom written js tool -->
      <span class="floating circle" style="top:66.59856996935649%;left:13.020833333333334%;animation-delay:-0.9s;"></span>
      <span class="floating triangle" style="top:31.46067415730337%;left:33.59375%;animation-delay:-4.8s;"></span>
      <span class="floating cross" style="top:76.50663942798774%;left:38.020833333333336%;animation-delay:-4s;"></span>
      <span class="floating square" style="top:21.450459652706844%;left:14.0625%;animation-delay:-2.8s;"></span>
      <span class="floating square" style="top:58.12053115423902%;left:56.770833333333336%;animation-delay:-2.15s;"></span>
      <span class="floating square" style="top:8.682328907048008%;left:72.70833333333333%;animation-delay:-1.9s;"></span>
      <span class="floating cross" style="top:31.3585291113381%;left:58.541666666666664%;animation-delay:-0.65s;"></span>
      <span class="floating cross" style="top:69.96935648621042%;left:81.45833333333333%;animation-delay:-0.4s;"></span>
      <span class="floating circle" style="top:15.117466802860061%;left:32.34375%;animation-delay:-4.1s;"></span>
      <span class="floating circle" style="top:13.074565883554648%;left:45.989583333333336%;animation-delay:-3.65s;"></span>
      <span class="floating cross" style="top:55.87334014300306%;left:27.135416666666668%;animation-delay:-2.25s;"></span>
      <span class="floating cross" style="top:49.54034729315628%;left:53.75%;animation-delay:-2s;"></span>
      <span class="floating cross" style="top:34.62717058222676%;left:49.635416666666664%;animation-delay:-1.55s;"></span>
      <span class="floating cross" style="top:33.19713993871297%;left:86.14583333333333%;animation-delay:-0.95s;"></span>
      <span class="floating square" style="top:28.19203268641471%;left:25.208333333333332%;animation-delay:-4.45s;"></span>
      <span class="floating circle" style="top:39.7344228804903%;left:10.833333333333334%;animation-delay:-3.35s;"></span>
      <span class="floating triangle" style="top:77.83452502553627%;left:24.427083333333332%;animation-delay:-2.3s;"></span>
      <span class="floating triangle" style="top:2.860061287027579%;left:47.864583333333336%;animation-delay:-1.75s;"></span>
      <span class="floating triangle" style="top:71.3993871297242%;left:66.45833333333333%;animation-delay:-1.25s;"></span>
      <span class="floating triangle" style="top:31.256384065372828%;left:76.92708333333333%;animation-delay:-0.65s;"></span>
      <span class="floating triangle" style="top:46.47599591419816%;left:38.90625%;animation-delay:-0.35s;"></span>
      <span class="floating cross" style="top:3.4729315628192032%;left:19.635416666666668%;animation-delay:-4.3s;"></span>
      <span class="floating cross" style="top:3.575076608784474%;left:6.25%;animation-delay:-4.05s;"></span>
      <span class="floating cross" style="top:77.3237997957099%;left:4.583333333333333%;animation-delay:-3.75s;"></span>
      <span class="floating cross" style="top:0.9193054136874361%;left:71.14583333333333%;animation-delay:-3.3s;"></span>
      <span class="floating square" style="top:23.6976506639428%;left:63.28125%;animation-delay:-2.1s;"></span>
      <span class="floating square" style="top:81.30745658835546%;left:45.15625%;animation-delay:-1.75s;"></span>
      <span class="floating square" style="top:60.9805924412666%;left:42.239583333333336%;animation-delay:-1.45s;"></span>
      <span class="floating square" style="top:29.009193054136876%;left:93.90625%;animation-delay:-1.05s;"></span>
      <span class="floating square" style="top:52.093973442288046%;left:68.90625%;animation-delay:-0.7s;"></span>
      <span class="floating square" style="top:81.51174668028601%;left:83.59375%;animation-delay:-0.35s;"></span>
      <span class="floating square" style="top:11.542390194075587%;left:91.51041666666667%;animation-delay:-0.1s;"></span>
  </div>
</div>
</body>
</html>