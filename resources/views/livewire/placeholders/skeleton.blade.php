<!-- From Uiverse.io by milley69 -->
<div class="w-full h-48 flex justify-center items-center">


<div class="loading ">
    <svg width="64px" height="48px">
        <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="back"></polyline>
        <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="front"></polyline>
    </svg>
</div>
<div class="loading ">
    <svg width="64px" height="48px">
        <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="front"></polyline>
        <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="back"></polyline>
    </svg>
</div>

<style>
    /* From Uiverse.io by milley69 */
    .loading svg polyline {
        fill: none;
        stroke-width: 5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .loading svg polyline#back {
        fill: none;
        stroke: #ff4d5033;
    }

    .loading svg polyline#front {
        fill: none;
        stroke: #ff4d4f;
        stroke-dasharray: 48, 144;
        stroke-dashoffset: 192;
        animation: dash_682 1.4s linear infinite;
    }

    @keyframes dash_682 {
        72.5% {
            opacity: 0;
        }

        to {
            stroke-dashoffset: 0;
        }
    }
</style>
</div>
