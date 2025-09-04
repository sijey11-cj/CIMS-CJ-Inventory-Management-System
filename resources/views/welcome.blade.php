<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }} - Next-Gen Inventory Management</title>
        <meta name="description" content="Transform your inventory operations with our intelligent, real-time management platform designed for modern businesses.">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/favicon_ims.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon_ims.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Inter',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.mb-8{margin-bottom:calc(var(--spacing)*8)}.mb-10{margin-bottom:calc(var(--spacing)*10)}.mb-12{margin-bottom:calc(var(--spacing)*12)}.mb-14{margin-bottom:calc(var(--spacing)*14)}.mb-16{margin-bottom:calc(var(--spacing)*16)}.mb-20{margin-bottom:calc(var(--spacing)*20)}.mt-1{margin-top:calc(var(--spacing)*1)}.mt-2{margin-top:calc(var(--spacing)*2)}.mt-4{margin-top:calc(var(--spacing)*4)}.mt-6{margin-top:calc(var(--spacing)*6)}.mt-8{margin-top:calc(var(--spacing)*8)}.mt-10{margin-top:calc(var(--spacing)*10)}.mt-12{margin-top:calc(var(--spacing)*12)}.mt-14{margin-top:calc(var(--spacing)*14)}.mt-16{margin-top:calc(var(--spacing)*16)}.mt-20{margin-top:calc(var(--spacing)*20)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
                
                /* Custom animations and enhanced styling */
                /* Enhanced animations and styling */
                @keyframes float {
                    0%, 100% { transform: translateY(0px) rotate(0deg); }
                    33% { transform: translateY(-20px) rotate(1deg); }
                    66% { transform: translateY(-10px) rotate(-1deg); }
                }
                
                @keyframes floatHorizontal {
                    0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); }
                    25% { transform: translateX(15px) translateY(-10px) rotate(2deg); }
                    50% { transform: translateX(-10px) translateY(-20px) rotate(-1deg); }
                    75% { transform: translateX(20px) translateY(-5px) rotate(1deg); }
                }
                
                @keyframes floatDiagonal {
                    0%, 100% { transform: translate(0px, 0px) rotate(0deg) scale(1); }
                    25% { transform: translate(30px, -15px) rotate(3deg) scale(1.05); }
                    50% { transform: translate(-20px, -30px) rotate(-2deg) scale(0.95); }
                    75% { transform: translate(25px, -10px) rotate(2deg) scale(1.02); }
                }
                
                @keyframes orbitalMove {
                    0% { transform: rotate(0deg) translateX(50px) rotate(0deg); }
                    100% { transform: rotate(360deg) translateX(50px) rotate(-360deg); }
                }
                
                @keyframes parallaxSlow {
                    0%, 100% { transform: translateY(0px) translateX(0px); }
                    50% { transform: translateY(-30px) translateX(15px); }
                }
                
                @keyframes parallaxFast {
                    0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
                    33% { transform: translateY(-40px) translateX(-20px) rotate(2deg); }
                    66% { transform: translateY(-60px) translateX(25px) rotate(-1deg); }
                }
                
                @keyframes morphShape {
                    0%, 100% { border-radius: 50% 40% 60% 30%; transform: scale(1); }
                    25% { border-radius: 40% 60% 30% 50%; transform: scale(1.1); }
                    50% { border-radius: 60% 30% 50% 40%; transform: scale(0.9); }
                    75% { border-radius: 30% 50% 40% 60%; transform: scale(1.05); }
                }
                
                @keyframes pulse-glow {
                    0%, 100% { box-shadow: 0 0 20px rgba(139, 189, 242, 0.3); }
                    50% { box-shadow: 0 0 40px rgba(139, 189, 242, 0.6), 0 0 60px rgba(106, 169, 167, 0.4); }
                }
                
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translate3d(0, 60px, 0);
                    }
                    to {
                        opacity: 1;
                        transform: translate3d(0, 0, 0);
                    }
                }
                
                @keyframes slideInLeft {
                    from {
                        opacity: 0;
                        transform: translate3d(-80px, 0, 0);
                    }
                    to {
                        opacity: 1;
                        transform: translate3d(0, 0, 0);
                    }
                }
                
                @keyframes slideInRight {
                    from {
                        opacity: 0;
                        transform: translate3d(80px, 0, 0);
                    }
                    to {
                        opacity: 1;
                        transform: translate3d(0, 0, 0);
                    }
                }
                
                @keyframes scaleIn {
                    from {
                        opacity: 0;
                        transform: scale(0.8);
                    }
                    to {
                        opacity: 1;
                        transform: scale(1);
                    }
                }
                
                @keyframes shimmer {
                    0% { background-position: -200% 0; }
                    100% { background-position: 200% 0; }
                }
                
                .animate-float {
                    animation: float 8s ease-in-out infinite;
                }
                
                .animate-float-horizontal {
                    animation: floatHorizontal 12s ease-in-out infinite;
                }
                
                .animate-float-diagonal {
                    animation: floatDiagonal 15s ease-in-out infinite;
                }
                
                .animate-orbital {
                    animation: orbitalMove 20s linear infinite;
                }
                
                .animate-parallax-slow {
                    animation: parallaxSlow 25s ease-in-out infinite;
                }
                
                .animate-parallax-fast {
                    animation: parallaxFast 18s ease-in-out infinite;
                }
                
                .animate-morph {
                    animation: morphShape 20s ease-in-out infinite;
                }
                
                .animate-pulse-glow {
                    animation: pulse-glow 3s ease-in-out infinite;
                }
                
                .animate-fade-in-up {
                    animation: fadeInUp 1s ease-out forwards;
                }
                
                .animate-slide-in-left {
                    animation: slideInLeft 1s ease-out forwards;
                }
                
                .animate-slide-in-right {
                    animation: slideInRight 1s ease-out forwards;
                }
                
                .animate-scale-in {
                    animation: scaleIn 0.8s ease-out forwards;
                }
                
                .shimmer {
                    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
                    background-size: 200% 100%;
                    animation: shimmer 2s infinite;
                }
                
                .gradient-mesh {
                    background: 
                        radial-gradient(circle at 20% 30%, rgba(106, 169, 167, 0.12) 0%, transparent 40%),
                        radial-gradient(circle at 80% 70%, rgba(189, 221, 252, 0.15) 0%, transparent 45%),
                        radial-gradient(circle at 60% 20%, rgba(136, 189, 242, 0.1) 0%, transparent 35%),
                        radial-gradient(circle at 30% 80%, rgba(56, 73, 89, 0.08) 0%, transparent 30%),
                        linear-gradient(135deg, rgba(106, 169, 167, 0.05) 0%, rgba(189, 221, 252, 0.08) 50%, rgba(56, 73, 89, 0.06) 100%);
                }
                
                .inventory-pattern {
                    background-image: 
                        repeating-linear-gradient(
                            45deg,
                            transparent,
                            transparent 20px,
                            rgba(106, 169, 167, 0.03) 20px,
                            rgba(106, 169, 167, 0.03) 40px
                        ),
                        repeating-linear-gradient(
                            -45deg,
                            transparent,
                            transparent 30px,
                            rgba(189, 221, 252, 0.04) 30px,
                            rgba(189, 221, 252, 0.04) 60px
                        );
                }
                
                .glass-effect {
                    background: rgba(255, 255, 255, 0.15);
                    backdrop-filter: blur(20px);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                }
                
                .dark .glass-effect {
                    background: rgba(0, 0, 0, 0.15);
                    border: 1px solid rgba(255, 255, 255, 0.15);
                }
                
                .text-gradient {
                    background: linear-gradient(135deg, #384959 0%, #6AA9A7 40%, #BDDCFC  70%, #88BDF2 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    background-size: 200% 200%;
                    animation: shimmer 3s ease-in-out infinite;
                }
                
                .dark .text-gradient {
                    background: linear-gradient(135deg, #6AA9A7 0%, #BDDCFC 40%, #88BDF2 70%, #384959 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    background-size: 200% 200%;
                    animation: shimmer 3s ease-in-out infinite;
                }
                
                .feature-card {
                    transform: translateY(0) scale(1);
                    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                }
                
                .feature-card:hover {
                    transform: translateY(-8px) scale(1.02);
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                }
                
                .dark .feature-card:hover {
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
                }
                
                .stat-card {
                    transform: scale(1);
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }
                
                .stat-card:hover {
                    transform: scale(1.08);
                }
                
                .feature-icon {
                    transition: all 0.3s ease;
                }
                
                .feature-icon:hover {
                    transform: scale(1.1) rotate(5deg);
                }
                
                /* Responsive utilities */
                @media (max-width: 640px) {
                    .text-responsive {
                        font-size: clamp(1.875rem, 8vw, 3rem);
                    }
                }
                
                @media (min-width: 641px) {
                    .text-responsive {
                        font-size: clamp(3rem, 6vw, 4rem);
                    }
                }
                
                /* Loading animation */
                .loading-dots {
                    display: inline-block;
                }
                
                .loading-dots::after {
                    content: '';
                    animation: dots 2s infinite;
                }
                
                @keyframes dots {
                    0%, 20% { content: ''; }
                    40% { content: '.'; }
                    60% { content: '..'; }
                    80%, 100% { content: '...'; }
                }
            </style>
        @endif
    </head>
    <body class="bg-gradient-to-br from-slate-100 via-blue-100/50 to-slate-200 dark:from-slate-900 dark:via-slate-800 dark:to-slate-700 gradient-mesh inventory-pattern text-slate-800 dark:text-slate-200 overflow-x-hidden min-h-screen">
        <!-- Abstract Inventory Background Elements -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0" id="backgroundContainer">
            <!-- Floating warehouse/storage elements -->
            <div class="absolute -top-32 -left-32 w-96 h-96 opacity-[0.15] animate-float-diagonal">
                <svg viewBox="0 0 400 400" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#6AA9A7;stop-opacity:0.3" />
                            <stop offset="50%" style="stop-color:#BDDCFC;stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:#384959;stop-opacity:0.1" />
                        </linearGradient>
                    </defs>
                    <!-- Abstract warehouse/box shapes -->
                    <rect x="50" y="150" width="80" height="60" fill="url(#stormy1)" rx="4"/>
                    <rect x="140" y="120" width="70" height="90" fill="url(#stormy1)" rx="4"/>
                    <rect x="220" y="140" width="90" height="70" fill="url(#stormy1)" rx="4"/>
                    <rect x="80" y="220" width="60" height="80" fill="url(#stormy1)" rx="4"/>
                    <rect x="160" y="240" width="85" height="65" fill="url(#stormy1)" rx="4"/>
                    <!-- Connecting lines representing logistics -->
                    <path d="M90 180 Q180 100 250 175" stroke="#6AA9A7" stroke-width="2" fill="none" opacity="0.3"/>
                    <path d="M185 165 Q220 120 285 180" stroke="#88BDF2" stroke-width="2" fill="none" opacity="0.2"/>
                </svg>
            </div>
            
            <!-- Supply chain network on the right -->
            <div class="absolute top-1/4 -right-20 w-80 h-80 opacity-[0.12] animate-parallax-slow">
                <svg viewBox="0 0 320 320" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy2" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#88BDF2;stop-opacity:0.4" />
                            <stop offset="50%" style="stop-color:#6AA9A7;stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:#BDDCFC;stop-opacity:0.3" />
                        </linearGradient>
                    </defs>
                    <!-- Network nodes -->
                    <circle cx="80" cy="80" r="25" fill="url(#stormy2)"/>
                    <circle cx="240" cy="100" r="30" fill="url(#stormy2)"/>
                    <circle cx="160" cy="180" r="35" fill="url(#stormy2)"/>
                    <circle cx="60" cy="220" r="20" fill="url(#stormy2)"/>
                    <circle cx="260" cy="240" r="28" fill="url(#stormy2)"/>
                    <!-- Connection lines -->
                    <path d="M80 80 L240 100 L160 180 L60 220 M160 180 L260 240" stroke="#384959" stroke-width="3" fill="none" opacity="0.2"/>
                    <path d="M80 80 L160 180 M240 100 L260 240" stroke="#6AA9A7" stroke-width="2" fill="none" opacity="0.3"/>
                </svg>
            </div>
            
            <!-- Inventory grid pattern bottom left -->
            <div class="absolute -bottom-24 -left-24 w-72 h-72 opacity-[0.08] animate-float-horizontal">
                <svg viewBox="0 0 288 288" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy3" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#BDDCFC;stop-opacity:0.4" />
                            <stop offset="100%" style="stop-color:#384959;stop-opacity:0.2" />
                        </linearGradient>
                    </defs>
                    <!-- Grid of inventory items -->
                    <g fill="url(#stormy3)">
                        <rect x="20" y="20" width="40" height="40" rx="3"/>
                        <rect x="80" y="20" width="40" height="40" rx="3"/>
                        <rect x="140" y="20" width="40" height="40" rx="3"/>
                        <rect x="200" y="20" width="40" height="40" rx="3"/>
                        <rect x="20" y="80" width="40" height="40" rx="3"/>
                        <rect x="80" y="80" width="40" height="40" rx="3"/>
                        <rect x="140" y="80" width="40" height="40" rx="3"/>
                        <rect x="200" y="80" width="40" height="40" rx="3"/>
                        <rect x="20" y="140" width="40" height="40" rx="3"/>
                        <rect x="80" y="140" width="40" height="40" rx="3"/>
                        <rect x="140" y="140" width="40" height="40" rx="3"/>
                        <rect x="200" y="140" width="40" height="40" rx="3"/>
                        <rect x="20" y="200" width="40" height="40" rx="3"/>
                        <rect x="80" y="200" width="40" height="40" rx="3"/>
                        <rect x="140" y="200" width="40" height="40" rx="3"/>
                        <rect x="200" y="200" width="40" height="40" rx="3"/>
                    </g>
                </svg>
            </div>
            
            <!-- Large decorative shapes with stormy morning colors -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[60rem] h-[60rem] bg-gradient-to-r from-slate-400/5 via-blue-300/8 to-slate-500/6 rounded-full blur-3xl animate-morph"></div>
            
            <!-- Additional abstract elements -->
            <div class="absolute top-20 right-1/4 w-48 h-48 opacity-[0.1] animate-parallax-fast">
                <svg viewBox="0 0 192 192" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy4" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#6AA9A7;stop-opacity:0.5" />
                            <stop offset="50%" style="stop-color:#88BDF2;stop-opacity:0.3" />
                            <stop offset="100%" style="stop-color:#384959;stop-opacity:0.2" />
                        </linearGradient>
                    </defs>
                    <!-- Abstract barcode/tracking elements -->
                    <rect x="20" y="40" width="4" height="80" fill="url(#stormy4)"/>
                    <rect x="30" y="30" width="6" height="100" fill="url(#stormy4)"/>
                    <rect x="42" y="45" width="3" height="70" fill="url(#stormy4)"/>
                    <rect x="50" y="35" width="5" height="90" fill="url(#stormy4)"/>
                    <rect x="60" y="50" width="4" height="60" fill="url(#stormy4)"/>
                    <rect x="70" y="25" width="7" height="110" fill="url(#stormy4)"/>
                    <rect x="82" y="40" width="3" height="80" fill="url(#stormy4)"/>
                    <rect x="90" y="30" width="6" height="100" fill="url(#stormy4)"/>
                    <rect x="102" y="45" width="4" height="70" fill="url(#stormy4)"/>
                    <rect x="112" y="35" width="5" height="90" fill="url(#stormy4)"/>
                </svg>
            </div>
            
            <!-- Dashboard/analytics pattern -->
            <div class="absolute bottom-1/3 right-20 w-56 h-56 opacity-[0.06] animate-orbital">
                <svg viewBox="0 0 224 224" class="w-full h-full">
                    <defs>
                        <linearGradient id="stormy5" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#BDDCFC;stop-opacity:0.6" />
                            <stop offset="100%" style="stop-color:#6AA9A7;stop-opacity:0.3" />
                        </linearGradient>
                    </defs>
                    <!-- Chart/graph elements -->
                    <path d="M20 180 L60 140 L100 120 L140 100 L180 80 L220 60" stroke="url(#stormy5)" stroke-width="4" fill="none"/>
                    <circle cx="60" cy="140" r="6" fill="#6AA9A7" opacity="0.4"/>
                    <circle cx="100" cy="120" r="6" fill="#88BDF2" opacity="0.4"/>
                    <circle cx="140" cy="100" r="6" fill="#BDDCFC" opacity="0.4"/>
                    <circle cx="180" cy="80" r="6" fill="#384959" opacity="0.4"/>
                </svg>
            </div>
            
            <!-- Moving particles -->
            <div class="absolute top-10 left-10 w-2 h-2 bg-blue-400/30 rounded-full animate-orbital" style="animation-duration: 30s; animation-delay: -5s;"></div>
            <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-slate-500/20 rounded-full animate-float-diagonal" style="animation-duration: 22s; animation-delay: -8s;"></div>
            <div class="absolute bottom-20 left-1/4 w-1.5 h-1.5 bg-slate-400/25 rounded-full animate-parallax-fast" style="animation-duration: 28s; animation-delay: -12s;"></div>
            <div class="absolute top-2/3 right-10 w-2.5 h-2.5 bg-blue-300/20 rounded-full animate-float-horizontal" style="animation-duration: 35s; animation-delay: -15s;"></div>
            <div class="absolute top-1/2 left-20 w-2 h-2 bg-slate-600/15 rounded-full animate-parallax-slow" style="animation-duration: 40s; animation-delay: -20s;"></div>
            <div class="absolute bottom-1/4 right-1/2 w-1 h-1 bg-blue-200/30 rounded-full animate-float" style="animation-duration: 18s; animation-delay: -3s;"></div>
        </div>

        <!-- Main Container -->
        <div class="relative z-10 min-h-screen flex flex-col">
            <!-- Header -->
            <header class="w-full px-4 sm:px-6 lg:px-8 py-6">
                <div class="max-w-7xl mx-auto">
                    @if (Route::has('login'))
                        <nav class="flex items-center justify-between animate-fade-in-up">
                            <!-- Logo/Brand -->
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-slate-600 via-slate-500 to-blue-400 rounded-xl flex items-center justify-center shadow-lg animate-pulse-glow p-1">
                                    <x-application-logo class="w-14 h-14" />
                                </div>
                                <span class="text-xl font-bold text-slate-700 dark:text-slate-200">{{ config('app.name', 'InvenTech') }}</span>
                            </div>
                            
                            <!-- Auth Links -->
                            <div class="flex items-center space-x-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-6 py-2.5 text-slate-700 dark:text-slate-300 bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm border border-slate-200 dark:border-slate-700 hover:border-blue-400 dark:hover:border-blue-500 rounded-xl text-sm font-medium transition-all duration-300 hover:shadow-lg hover:scale-105">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                        </svg>
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="inline-block px-4 py-2 text-slate-700 dark:text-slate-300 hover:bg-white/30 dark:hover:bg-slate-800/30 rounded-lg text-sm font-medium transition-all duration-300">
                                        Log in
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-2.5 text-slate-700 dark:text-slate-300 bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm border border-slate-200 dark:border-slate-700 hover:border-blue-400 dark:hover:border-blue-500 rounded-xl text-sm font-medium transition-all duration-300 hover:shadow-lg hover:scale-105">
                                            Get Started
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        </nav>
                    @endif
                </div>
            </header>
            
            <!-- Main Content -->
            <main class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
                <div class="max-w-7xl mx-auto w-full">
                    <div class="grid lg:grid-cols-2 gap-12 xl:gap-20 items-center">
                        <!-- Content Section -->
                        <div class="text-center lg:text-left space-y-8 animate-slide-in-left">
                            <!-- Badge -->
                            <div class="inline-flex">
                                <span class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-slate-500/10 to-blue-400/10 text-slate-600 dark:text-slate-300 text-sm font-semibold rounded-full border border-slate-400/30 dark:border-slate-500/30 backdrop-blur-sm">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Next-Gen Inventory Solution
                                </span>
                            </div>
                            
                            <!-- Main Heading -->
                            <div class="space-y-4">
                                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-gradient leading-tight">
                                    Inventory Management
                                    <span class="block">System</span>
                                </h1>
                                <p class="text-lg sm:text-xl lg:text-2xl text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                                    Transform your inventory operations with our intelligent, real-time management platform designed for modern businesses.
                                </p>
                            </div>
                            
                            <!-- Feature List -->
                            <div class="space-y-6">
                                <div class="flex flex-col sm:flex-row gap-6">
                                    <div class="flex items-start gap-4 group">
                                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-slate-600 to-slate-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-slate-500/25 transition-all duration-300 feature-icon">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-1">Smart Product Management</h3>
                                            <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Intelligent categorization and automated tracking</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start gap-4 group">
                                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-blue-400/25 transition-all duration-300 feature-icon">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-1">Advanced Analytics</h3>
                                            <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Real-time insights and predictive analytics</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex items-start gap-4 group">
                                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-slate-500 to-slate-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-slate-500/25 transition-all duration-300 feature-icon">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-1">Supplier Network Management</h3>
                                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Streamlined supplier relationships and automated procurement</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-slate-600 to-slate-700 hover:from-slate-700 hover:to-slate-800 text-white rounded-2xl font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                        </svg>
                                        Go to Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-slate-600 to-slate-700 hover:from-slate-700 hover:to-slate-800 text-white rounded-2xl font-semibold text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                        </svg>
                                        Get Started Now
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white/90 dark:bg-slate-700/90 backdrop-blur-sm border-2 border-slate-300 dark:border-slate-600 hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 dark:text-slate-200 rounded-2xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                            </svg>
                                            Sign Up Free
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                
                <!-- Visual Section -->
                <div class="hidden lg:block relative animate-slide-in-right">
                    <div class="relative bg-gradient-to-br from-white/90 to-slate-50/90 dark:from-slate-800/90 dark:to-slate-700/90 backdrop-blur-xl rounded-3xl p-8 lg:p-12 shadow-2xl border border-slate-200/30 dark:border-slate-600/30 overflow-hidden">
                        <!-- Decorative elements with stormy colors -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-slate-400/20 to-blue-400/20 rounded-full blur-2xl"></div>
                        <div class="absolute bottom-0 left-0 w-40 h-40 bg-gradient-to-br from-blue-300/20 to-slate-500/20 rounded-full blur-2xl"></div>
                        
                        <div class="relative z-10 text-center space-y-8">
                            <!-- Main Icon with stormy theme -->
                            <div class="mx-auto w-32 h-32 bg-gradient-to-br from-slate-600 via-slate-500 to-blue-400 rounded-3xl flex items-center justify-center shadow-2xl animate-float relative p-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-slate-400/50 to-blue-400/50 rounded-3xl blur-xl animate-pulse-glow"></div>
                                <x-application-logo class="w-32 h-32 relative z-10" />
                            </div>
                            
                            <!-- Stats Grid -->
                            <div class="grid grid-cols-2 gap-6">
                                <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-slate-200/30 dark:border-slate-600/30 animate-scale-in" style="animation-delay: 0.1s;">
                                    <div class="text-4xl font-bold bg-gradient-to-r from-slate-600 to-blue-400 bg-clip-text text-transparent mb-2">1000+</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400 font-medium">Products Tracked</div>
                                </div>
                                <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-slate-200/30 dark:border-slate-600/30 animate-scale-in" style="animation-delay: 0.2s;">
                                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-400 to-slate-500 bg-clip-text text-transparent mb-2">24/7</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400 font-medium">Live Monitoring</div>
                                </div>
                                <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-slate-200/30 dark:border-slate-600/30 animate-scale-in" style="animation-delay: 0.3s;">
                                    <div class="text-4xl font-bold bg-gradient-to-r from-slate-500 to-slate-600 bg-clip-text text-transparent mb-2">50+</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400 font-medium">Active Suppliers</div>
                                </div>
                                <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-slate-200/30 dark:border-slate-600/30 animate-scale-in" style="animation-delay: 0.4s;">
                                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-300 to-slate-400 bg-clip-text text-transparent mb-2">15</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400 font-medium">Categories</div>
                                </div>
                            </div>
                            
                            <!-- Feature Tags -->
                            <div class="flex flex-wrap justify-center gap-3">
                                <span class="px-4 py-2 bg-gradient-to-r from-slate-500/10 to-slate-600/10 text-slate-700 dark:text-slate-300 text-sm font-semibold rounded-full border border-slate-400/30 dark:border-slate-500/30 backdrop-blur-sm">
                                    Multi-Currency
                                </span>
                                <span class="px-4 py-2 bg-gradient-to-r from-blue-400/10 to-blue-500/10 text-blue-700 dark:text-blue-300 text-sm font-semibold rounded-full border border-blue-300/30 dark:border-blue-400/30 backdrop-blur-sm">
                                    Real-time Sync
                                </span>
                                <span class="px-4 py-2 bg-gradient-to-r from-slate-400/10 to-blue-300/10 text-slate-700 dark:text-slate-300 text-sm font-semibold rounded-full border border-slate-300/30 dark:border-slate-400/30 backdrop-blur-sm">
                                    Enterprise Secure
                                </span>
                            </div>
                            
                            <!-- Trust Indicators -->
                            <div class="pt-6 border-t border-slate-200/50 dark:border-slate-700/50">
                                <div class="flex items-center justify-center space-x-8 text-slate-500 dark:text-slate-400">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-slate-600 dark:text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-sm font-medium">SSL Secured</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="text-sm font-medium">99.9% Uptime</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            <!-- Mobile Visual Section -->
            <div class="lg:hidden px-4 pb-8">
                <div class="relative bg-gradient-to-br from-white/90 to-slate-50/90 dark:from-slate-800/90 dark:to-slate-700/90 backdrop-blur-xl rounded-3xl p-6 shadow-2xl border border-slate-200/30 dark:border-slate-600/30 overflow-hidden animate-fade-in-up">
                    <!-- Decorative elements with stormy colors -->
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-slate-400/20 to-blue-400/20 rounded-full blur-xl"></div>
                    <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-br from-blue-300/20 to-slate-500/20 rounded-full blur-xl"></div>
                    
                    <div class="relative z-10 text-center space-y-6">
                        <!-- Main Icon with stormy theme -->
                        <div class="mx-auto w-24 h-24 bg-gradient-to-br from-slate-600 via-slate-500 to-blue-400 rounded-2xl flex items-center justify-center shadow-xl animate-float p-2">
                            <x-application-logo class="w-28 h-28" />
                        </div>
                        
                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-slate-200/30 dark:border-slate-600/30">
                                <div class="text-2xl font-bold bg-gradient-to-r from-slate-600 to-blue-400 bg-clip-text text-transparent mb-1">1000+</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 font-medium">Products</div>
                            </div>
                            <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-slate-200/30 dark:border-slate-600/30">
                                <div class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-slate-500 bg-clip-text text-transparent mb-1">24/7</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 font-medium">Monitoring</div>
                            </div>
                            <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-slate-200/30 dark:border-slate-600/30">
                                <div class="text-2xl font-bold bg-gradient-to-r from-slate-500 to-slate-600 bg-clip-text text-transparent mb-1">50+</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 font-medium">Suppliers</div>
                            </div>
                            <div class="stat-card bg-white/95 dark:bg-slate-800/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-slate-200/30 dark:border-slate-600/30">
                                <div class="text-2xl font-bold bg-gradient-to-r from-blue-300 to-slate-400 bg-clip-text text-transparent mb-1">15</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400 font-medium">Categories</div>
                            </div>
                        </div>
                        
                        <!-- Feature Tags -->
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="px-3 py-1 bg-gradient-to-r from-slate-500/10 to-slate-600/10 text-slate-700 dark:text-slate-300 text-xs font-semibold rounded-full border border-slate-400/30 dark:border-slate-500/30">
                                Multi-Currency
                            </span>
                            <span class="px-3 py-1 bg-gradient-to-r from-blue-400/10 to-blue-500/10 text-blue-700 dark:text-blue-300 text-xs font-semibold rounded-full border border-blue-300/30 dark:border-blue-400/30">
                                Real-time
                            </span>
                            <span class="px-3 py-1 bg-gradient-to-r from-slate-400/10 to-blue-300/10 text-slate-700 dark:text-slate-300 text-xs font-semibold rounded-full border border-slate-300/30 dark:border-slate-400/30">
                                Secure
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="mt-auto px-4 py-6">
                <div class="max-w-7xl mx-auto text-center">
                    <p class="text-sm text-slate-500 dark:text-slate-400">
                        © {{ date('Y') }} {{ config('app.name', 'InvenTech') }}. Built with ❤️ for modern businesses.
                    </p>
                </div>
            </footer>
        </div>

        <!-- Loading Script -->
        <script>
            // Add loading class removal after page load
            window.addEventListener('load', function() {
                setTimeout(function() {
                    document.body.classList.add('loaded');
                }, 100);
            });
            
            // Mouse parallax effect for background elements
            document.addEventListener('DOMContentLoaded', function() {
                const backgroundContainer = document.getElementById('backgroundContainer');
                let mouseX = 0, mouseY = 0;
                let targetX = 0, targetY = 0;
                
                // Track mouse movement
                document.addEventListener('mousemove', function(e) {
                    mouseX = (e.clientX / window.innerWidth) * 2 - 1;
                    mouseY = (e.clientY / window.innerHeight) * 2 - 1;
                });
                
                // Smooth parallax animation
                function updateParallax() {
                    targetX += (mouseX - targetX) * 0.05;
                    targetY += (mouseY - targetY) * 0.05;
                    
                    if (backgroundContainer) {
                        const elements = backgroundContainer.children;
                        for (let i = 0; i < elements.length; i++) {
                            const element = elements[i];
                            const speed = (i + 1) * 0.5; // Different speeds for each element
                            const xOffset = targetX * speed * 10;
                            const yOffset = targetY * speed * 10;
                            
                            element.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
                        }
                    }
                    
                    requestAnimationFrame(updateParallax);
                }
                
                updateParallax();
                
                // Enhanced floating particles
                function createFloatingParticle() {
                    const particle = document.createElement('div');
                    const size = Math.random() * 4 + 1;
                    const startX = Math.random() * window.innerWidth;
                    const colors = ['#6AA9A7', '#BDDCFC', '#88BDF2', '#384959'];
                    const color = colors[Math.floor(Math.random() * colors.length)];
                    
                    particle.style.cssText = `
                        position: fixed;
                        width: ${size}px;
                        height: ${size}px;
                        background: ${color}30;
                        border-radius: 50%;
                        pointer-events: none;
                        z-index: 1;
                        left: ${startX}px;
                        top: 100vh;
                        animation: floatUp ${8 + Math.random() * 12}s linear infinite;
                    `;
                    
                    document.body.appendChild(particle);
                    
                    setTimeout(() => {
                        if (particle.parentNode) {
                            particle.parentNode.removeChild(particle);
                        }
                    }, 20000);
                }
                
                // Add CSS for floating particles
                const style = document.createElement('style');
                style.textContent = `
                    @keyframes floatUp {
                        0% {
                            transform: translateY(0) rotate(0deg);
                            opacity: 0;
                        }
                        10% {
                            opacity: 1;
                        }
                        90% {
                            opacity: 1;
                        }
                        100% {
                            transform: translateY(-100vh) rotate(360deg);
                            opacity: 0;
                        }
                    }
                `;
                document.head.appendChild(style);
                
                // Create particles periodically
                setInterval(createFloatingParticle, 3000);
                
                // Smooth reveal animations on scroll (mobile)
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, observerOptions);
                
                // Observe elements that should animate in
                document.querySelectorAll('.stat-card, .feature-card').forEach((el) => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(20px)';
                    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    observer.observe(el);
                });
            });
        </script>
    </body>
</html>
