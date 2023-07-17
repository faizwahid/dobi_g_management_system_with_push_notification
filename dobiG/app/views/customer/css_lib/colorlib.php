<style>
@font-face {
    font-family: Material-Design-Iconic-Font;
    src: url(../fonts/Material-Design-Iconic-Font.woff2?v=2.2.0) format('woff2'), url(../fonts/Material-Design-Iconic-Font.woff?v=2.2.0) format('woff'), url(../fonts/Material-Design-Iconic-Font.ttf?v=2.2.0) format('truetype')
}

.zmdi {
    display: inline-block;
    font: normal normal normal 14px/1 'Material-Design-Iconic-Font';
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.zmdi-hc-lg {
    font-size: 1.33333333em;
    line-height: .75em;
    vertical-align: -15%
}

.zmdi-hc-2x {
    font-size: 2em
}

.zmdi-hc-3x {
    font-size: 3em
}

.zmdi-hc-4x {
    font-size: 4em
}

.zmdi-hc-5x {
    font-size: 5em
}

.zmdi-hc-fw {
    width: 1.28571429em;
    text-align: center
}

.zmdi-hc-ul {
    padding-left: 0;
    margin-left: 2.14285714em;
    list-style-type: none
}

.zmdi-hc-ul>li {
    position: relative
}

.zmdi-hc-li {
    position: absolute;
    left: -2.14285714em;
    width: 2.14285714em;
    top: .14285714em;
    text-align: center
}

.zmdi-hc-li.zmdi-hc-lg {
    left: -1.85714286em
}

.zmdi-hc-border {
    padding: .1em .25em;
    border: solid .1em #9e9e9e;
    border-radius: 2px
}

.zmdi-hc-border-circle {
    padding: .1em .25em;
    border: solid .1em #9e9e9e;
    border-radius: 50%
}

.zmdi.pull-left {
    float: left;
    margin-right: .15em
}

.zmdi.pull-right {
    float: right;
    margin-left: .15em
}

.zmdi-hc-spin {
    -webkit-animation: zmdi-spin 1.5s infinite linear;
    animation: zmdi-spin 1.5s infinite linear
}

.zmdi-hc-spin-reverse {
    -webkit-animation: zmdi-spin-reverse 1.5s infinite linear;
    animation: zmdi-spin-reverse 1.5s infinite linear
}

@-webkit-keyframes zmdi-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}

@keyframes zmdi-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}

@-webkit-keyframes zmdi-spin-reverse {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(-359deg);
        transform: rotate(-359deg)
    }
}

@keyframes zmdi-spin-reverse {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(-359deg);
        transform: rotate(-359deg)
    }
}

.zmdi-hc-rotate-90 {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}

.zmdi-hc-rotate-180 {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}

.zmdi-hc-rotate-270 {
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg)
}

.zmdi-hc-flip-horizontal {
    -webkit-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    transform: scale(-1, 1)
}

.zmdi-hc-flip-vertical {
    -webkit-transform: scale(1, -1);
    -ms-transform: scale(1, -1);
    transform: scale(1, -1)
}

.zmdi-hc-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle
}

.zmdi-hc-stack-1x,
.zmdi-hc-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center
}

.zmdi-hc-stack-1x {
    line-height: inherit
}

.zmdi-hc-stack-2x {
    font-size: 2em
}

.zmdi-hc-inverse {
    color: #fff
}

.zmdi-3d-rotation:before {
    content: '\f101'
}

.zmdi-airplane-off:before {
    content: '\f102'
}

.zmdi-airplane:before {
    content: '\f103'
}

.zmdi-album:before {
    content: '\f104'
}

.zmdi-archive:before {
    content: '\f105'
}

.zmdi-assignment-account:before {
    content: '\f106'
}

.zmdi-assignment-alert:before {
    content: '\f107'
}

.zmdi-assignment-check:before {
    content: '\f108'
}

.zmdi-assignment-o:before {
    content: '\f109'
}

.zmdi-assignment-return:before {
    content: '\f10a'
}

.zmdi-assignment-returned:before {
    content: '\f10b'
}

.zmdi-assignment:before {
    content: '\f10c'
}

.zmdi-attachment-alt:before {
    content: '\f10d'
}

.zmdi-attachment:before {
    content: '\f10e'
}

.zmdi-audio:before {
    content: '\f10f'
}

.zmdi-badge-check:before {
    content: '\f110'
}

.zmdi-balance-wallet:before {
    content: '\f111'
}

.zmdi-balance:before {
    content: '\f112'
}

.zmdi-battery-alert:before {
    content: '\f113'
}

.zmdi-battery-flash:before {
    content: '\f114'
}

.zmdi-battery-unknown:before {
    content: '\f115'
}

.zmdi-battery:before {
    content: '\f116'
}

.zmdi-bike:before {
    content: '\f117'
}

.zmdi-block-alt:before {
    content: '\f118'
}

.zmdi-block:before {
    content: '\f119'
}

.zmdi-boat:before {
    content: '\f11a'
}

.zmdi-book-image:before {
    content: '\f11b'
}

.zmdi-book:before {
    content: '\f11c'
}

.zmdi-bookmark-outline:before {
    content: '\f11d'
}

.zmdi-bookmark:before {
    content: '\f11e'
}

.zmdi-brush:before {
    content: '\f11f'
}

.zmdi-bug:before {
    content: '\f120'
}

.zmdi-bus:before {
    content: '\f121'
}

.zmdi-cake:before {
    content: '\f122'
}

.zmdi-car-taxi:before {
    content: '\f123'
}

.zmdi-car-wash:before {
    content: '\f124'
}

.zmdi-car:before {
    content: '\f125'
}

.zmdi-card-giftcard:before {
    content: '\f126'
}

.zmdi-card-membership:before {
    content: '\f127'
}

.zmdi-card-travel:before {
    content: '\f128'
}

.zmdi-card:before {
    content: '\f129'
}

.zmdi-case-check:before {
    content: '\f12a'
}

.zmdi-case-download:before {
    content: '\f12b'
}

.zmdi-case-play:before {
    content: '\f12c'
}

.zmdi-case:before {
    content: '\f12d'
}

.zmdi-cast-connected:before {
    content: '\f12e'
}

.zmdi-cast:before {
    content: '\f12f'
}

.zmdi-chart-donut:before {
    content: '\f130'
}

.zmdi-chart:before {
    content: '\f131'
}

.zmdi-city-alt:before {
    content: '\f132'
}

.zmdi-city:before {
    content: '\f133'
}

.zmdi-close-circle-o:before {
    content: '\f134'
}

.zmdi-close-circle:before {
    content: '\f135'
}

.zmdi-close:before {
    content: '\f136'
}

.zmdi-cocktail:before {
    content: '\f137'
}

.zmdi-code-setting:before {
    content: '\f138'
}

.zmdi-code-smartphone:before {
    content: '\f139'
}

.zmdi-code:before {
    content: '\f13a'
}

.zmdi-coffee:before {
    content: '\f13b'
}

.zmdi-collection-bookmark:before {
    content: '\f13c'
}

.zmdi-collection-case-play:before {
    content: '\f13d'
}

.zmdi-collection-folder-image:before {
    content: '\f13e'
}

.zmdi-collection-image-o:before {
    content: '\f13f'
}

.zmdi-collection-image:before {
    content: '\f140'
}

.zmdi-collection-item-1:before {
    content: '\f141'
}

.zmdi-collection-item-2:before {
    content: '\f142'
}

.zmdi-collection-item-3:before {
    content: '\f143'
}

.zmdi-collection-item-4:before {
    content: '\f144'
}

.zmdi-collection-item-5:before {
    content: '\f145'
}

.zmdi-collection-item-6:before {
    content: '\f146'
}

.zmdi-collection-item-7:before {
    content: '\f147'
}

.zmdi-collection-item-8:before {
    content: '\f148'
}

.zmdi-collection-item-9-plus:before {
    content: '\f149'
}

.zmdi-collection-item-9:before {
    content: '\f14a'
}

.zmdi-collection-item:before {
    content: '\f14b'
}

.zmdi-collection-music:before {
    content: '\f14c'
}

.zmdi-collection-pdf:before {
    content: '\f14d'
}

.zmdi-collection-plus:before {
    content: '\f14e'
}

.zmdi-collection-speaker:before {
    content: '\f14f'
}

.zmdi-collection-text:before {
    content: '\f150'
}

.zmdi-collection-video:before {
    content: '\f151'
}

.zmdi-compass:before {
    content: '\f152'
}

.zmdi-cutlery:before {
    content: '\f153'
}

.zmdi-delete:before {
    content: '\f154'
}

.zmdi-dialpad:before {
    content: '\f155'
}

.zmdi-dns:before {
    content: '\f156'
}

.zmdi-drink:before {
    content: '\f157'
}

.zmdi-edit:before {
    content: '\f158'
}

.zmdi-email-open:before {
    content: '\f159'
}

.zmdi-email:before {
    content: '\f15a'
}

.zmdi-eye-off:before {
    content: '\f15b'
}

.zmdi-eye:before {
    content: '\f15c'
}

.zmdi-eyedropper:before {
    content: '\f15d'
}

.zmdi-favorite-outline:before {
    content: '\f15e'
}

.zmdi-favorite:before {
    content: '\f15f'
}

.zmdi-filter-list:before {
    content: '\f160'
}

.zmdi-fire:before {
    content: '\f161'
}

.zmdi-flag:before {
    content: '\f162'
}

.zmdi-flare:before {
    content: '\f163'
}

.zmdi-flash-auto:before {
    content: '\f164'
}

.zmdi-flash-off:before {
    content: '\f165'
}

.zmdi-flash:before {
    content: '\f166'
}

.zmdi-flip:before {
    content: '\f167'
}

.zmdi-flower-alt:before {
    content: '\f168'
}

.zmdi-flower:before {
    content: '\f169'
}

.zmdi-font:before {
    content: '\f16a'
}

.zmdi-fullscreen-alt:before {
    content: '\f16b'
}

.zmdi-fullscreen-exit:before {
    content: '\f16c'
}

.zmdi-fullscreen:before {
    content: '\f16d'
}

.zmdi-functions:before {
    content: '\f16e'
}

.zmdi-gas-station:before {
    content: '\f16f'
}

.zmdi-gesture:before {
    content: '\f170'
}

.zmdi-globe-alt:before {
    content: '\f171'
}

.zmdi-globe-lock:before {
    content: '\f172'
}

.zmdi-globe:before {
    content: '\f173'
}

.zmdi-graduation-cap:before {
    content: '\f174'
}

.zmdi-home:before {
    content: '\f175'
}

.zmdi-hospital-alt:before {
    content: '\f176'
}

.zmdi-hospital:before {
    content: '\f177'
}

.zmdi-hotel:before {
    content: '\f178'
}

.zmdi-hourglass-alt:before {
    content: '\f179'
}

.zmdi-hourglass-outline:before {
    content: '\f17a'
}

.zmdi-hourglass:before {
    content: '\f17b'
}

.zmdi-http:before {
    content: '\f17c'
}

.zmdi-image-alt:before {
    content: '\f17d'
}

.zmdi-image-o:before {
    content: '\f17e'
}

.zmdi-image:before {
    content: '\f17f'
}

.zmdi-inbox:before {
    content: '\f180'
}

.zmdi-invert-colors-off:before {
    content: '\f181'
}

.zmdi-invert-colors:before {
    content: '\f182'
}

.zmdi-key:before {
    content: '\f183'
}

.zmdi-label-alt-outline:before {
    content: '\f184'
}

.zmdi-label-alt:before {
    content: '\f185'
}

.zmdi-label-heart:before {
    content: '\f186'
}

.zmdi-label:before {
    content: '\f187'
}

.zmdi-labels:before {
    content: '\f188'
}

.zmdi-lamp:before {
    content: '\f189'
}

.zmdi-landscape:before {
    content: '\f18a'
}

.zmdi-layers-off:before {
    content: '\f18b'
}

.zmdi-layers:before {
    content: '\f18c'
}

.zmdi-library:before {
    content: '\f18d'
}

.zmdi-link:before {
    content: '\f18e'
}

.zmdi-lock-open:before {
    content: '\f18f'
}

.zmdi-lock-outline:before {
    content: '\f190'
}

.zmdi-lock:before {
    content: '\f191'
}

.zmdi-mail-reply-all:before {
    content: '\f192'
}

.zmdi-mail-reply:before {
    content: '\f193'
}

.zmdi-mail-send:before {
    content: '\f194'
}

.zmdi-mall:before {
    content: '\f195'
}

.zmdi-map:before {
    content: '\f196'
}

.zmdi-menu:before {
    content: '\f197'
}

.zmdi-money-box:before {
    content: '\f198'
}

.zmdi-money-off:before {
    content: '\f199'
}

.zmdi-money:before {
    content: '\f19a'
}

.zmdi-more-vert:before {
    content: '\f19b'
}

.zmdi-more:before {
    content: '\f19c'
}

.zmdi-movie-alt:before {
    content: '\f19d'
}

.zmdi-movie:before {
    content: '\f19e'
}

.zmdi-nature-people:before {
    content: '\f19f'
}

.zmdi-nature:before {
    content: '\f1a0'
}

.zmdi-navigation:before {
    content: '\f1a1'
}

.zmdi-open-in-browser:before {
    content: '\f1a2'
}

.zmdi-open-in-new:before {
    content: '\f1a3'
}

.zmdi-palette:before {
    content: '\f1a4'
}

.zmdi-parking:before {
    content: '\f1a5'
}

.zmdi-pin-account:before {
    content: '\f1a6'
}

.zmdi-pin-assistant:before {
    content: '\f1a7'
}

.zmdi-pin-drop:before {
    content: '\f1a8'
}

.zmdi-pin-help:before {
    content: '\f1a9'
}

.zmdi-pin-off:before {
    content: '\f1aa'
}

.zmdi-pin:before {
    content: '\f1ab'
}

.zmdi-pizza:before {
    content: '\f1ac'
}

.zmdi-plaster:before {
    content: '\f1ad'
}

.zmdi-power-setting:before {
    content: '\f1ae'
}

.zmdi-power:before {
    content: '\f1af'
}

.zmdi-print:before {
    content: '\f1b0'
}

.zmdi-puzzle-piece:before {
    content: '\f1b1'
}

.zmdi-quote:before {
    content: '\f1b2'
}

.zmdi-railway:before {
    content: '\f1b3'
}

.zmdi-receipt:before {
    content: '\f1b4'
}

.zmdi-refresh-alt:before {
    content: '\f1b5'
}

.zmdi-refresh-sync-alert:before {
    content: '\f1b6'
}

.zmdi-refresh-sync-off:before {
    content: '\f1b7'
}

.zmdi-refresh-sync:before {
    content: '\f1b8'
}

.zmdi-refresh:before {
    content: '\f1b9'
}

.zmdi-roller:before {
    content: '\f1ba'
}

.zmdi-ruler:before {
    content: '\f1bb'
}

.zmdi-scissors:before {
    content: '\f1bc'
}

.zmdi-screen-rotation-lock:before {
    content: '\f1bd'
}

.zmdi-screen-rotation:before {
    content: '\f1be'
}

.zmdi-search-for:before {
    content: '\f1bf'
}

.zmdi-search-in-file:before {
    content: '\f1c0'
}

.zmdi-search-in-page:before {
    content: '\f1c1'
}

.zmdi-search-replace:before {
    content: '\f1c2'
}

.zmdi-search:before {
    content: '\f1c3'
}

.zmdi-seat:before {
    content: '\f1c4'
}

.zmdi-settings-square:before {
    content: '\f1c5'
}

.zmdi-settings:before {
    content: '\f1c6'
}

.zmdi-shield-check:before {
    content: '\f1c7'
}

.zmdi-shield-security:before {
    content: '\f1c8'
}

.zmdi-shopping-basket:before {
    content: '\f1c9'
}

.zmdi-shopping-cart-plus:before {
    content: '\f1ca'
}

.zmdi-shopping-cart:before {
    content: '\f1cb'
}

.zmdi-sign-in:before {
    content: '\f1cc'
}

.zmdi-sort-amount-asc:before {
    content: '\f1cd'
}

.zmdi-sort-amount-desc:before {
    content: '\f1ce'
}

.zmdi-sort-asc:before {
    content: '\f1cf'
}

.zmdi-sort-desc:before {
    content: '\f1d0'
}

.zmdi-spellcheck:before {
    content: '\f1d1'
}

.zmdi-storage:before {
    content: '\f1d2'
}

.zmdi-store-24:before {
    content: '\f1d3'
}

.zmdi-store:before {
    content: '\f1d4'
}

.zmdi-subway:before {
    content: '\f1d5'
}

.zmdi-sun:before {
    content: '\f1d6'
}

.zmdi-tab-unselected:before {
    content: '\f1d7'
}

.zmdi-tab:before {
    content: '\f1d8'
}

.zmdi-tag-close:before {
    content: '\f1d9'
}

.zmdi-tag-more:before {
    content: '\f1da'
}

.zmdi-tag:before {
    content: '\f1db'
}

.zmdi-thumb-down:before {
    content: '\f1dc'
}

.zmdi-thumb-up-down:before {
    content: '\f1dd'
}

.zmdi-thumb-up:before {
    content: '\f1de'
}

.zmdi-ticket-star:before {
    content: '\f1df'
}

.zmdi-toll:before {
    content: '\f1e0'
}

.zmdi-toys:before {
    content: '\f1e1'
}

.zmdi-traffic:before {
    content: '\f1e2'
}

.zmdi-translate:before {
    content: '\f1e3'
}

.zmdi-triangle-down:before {
    content: '\f1e4'
}

.zmdi-triangle-up:before {
    content: '\f1e5'
}

.zmdi-truck:before {
    content: '\f1e6'
}

.zmdi-turning-sign:before {
    content: '\f1e7'
}

.zmdi-wallpaper:before {
    content: '\f1e8'
}

.zmdi-washing-machine:before {
    content: '\f1e9'
}

.zmdi-window-maximize:before {
    content: '\f1ea'
}

.zmdi-window-minimize:before {
    content: '\f1eb'
}

.zmdi-window-restore:before {
    content: '\f1ec'
}

.zmdi-wrench:before {
    content: '\f1ed'
}

.zmdi-zoom-in:before {
    content: '\f1ee'
}

.zmdi-zoom-out:before {
    content: '\f1ef'
}

.zmdi-alert-circle-o:before {
    content: '\f1f0'
}

.zmdi-alert-circle:before {
    content: '\f1f1'
}

.zmdi-alert-octagon:before {
    content: '\f1f2'
}

.zmdi-alert-polygon:before {
    content: '\f1f3'
}

.zmdi-alert-triangle:before {
    content: '\f1f4'
}

.zmdi-help-outline:before {
    content: '\f1f5'
}

.zmdi-help:before {
    content: '\f1f6'
}

.zmdi-info-outline:before {
    content: '\f1f7'
}

.zmdi-info:before {
    content: '\f1f8'
}

.zmdi-notifications-active:before {
    content: '\f1f9'
}

.zmdi-notifications-add:before {
    content: '\f1fa'
}

.zmdi-notifications-none:before {
    content: '\f1fb'
}

.zmdi-notifications-off:before {
    content: '\f1fc'
}

.zmdi-notifications-paused:before {
    content: '\f1fd'
}

.zmdi-notifications:before {
    content: '\f1fe'
}

.zmdi-account-add:before {
    content: '\f1ff'
}

.zmdi-account-box-mail:before {
    content: '\f200'
}

.zmdi-account-box-o:before {
    content: '\f201'
}

.zmdi-account-box-phone:before {
    content: '\f202'
}

.zmdi-account-box:before {
    content: '\f203'
}

.zmdi-account-calendar:before {
    content: '\f204'
}

.zmdi-account-circle:before {
    content: '\f205'
}

.zmdi-account-o:before {
    content: '\f206'
}

.zmdi-account:before {
    content: '\f207'
}

.zmdi-accounts-add:before {
    content: '\f208'
}

.zmdi-accounts-alt:before {
    content: '\f209'
}

.zmdi-accounts-list-alt:before {
    content: '\f20a'
}

.zmdi-accounts-list:before {
    content: '\f20b'
}

.zmdi-accounts-outline:before {
    content: '\f20c'
}

.zmdi-accounts:before {
    content: '\f20d'
}

.zmdi-face:before {
    content: '\f20e'
}

.zmdi-female:before {
    content: '\f20f'
}

.zmdi-male-alt:before {
    content: '\f210'
}

.zmdi-male-female:before {
    content: '\f211'
}

.zmdi-male:before {
    content: '\f212'
}

.zmdi-mood-bad:before {
    content: '\f213'
}

.zmdi-mood:before {
    content: '\f214'
}

.zmdi-run:before {
    content: '\f215'
}

.zmdi-walk:before {
    content: '\f216'
}

.zmdi-cloud-box:before {
    content: '\f217'
}

.zmdi-cloud-circle:before {
    content: '\f218'
}

.zmdi-cloud-done:before {
    content: '\f219'
}

.zmdi-cloud-download:before {
    content: '\f21a'
}

.zmdi-cloud-off:before {
    content: '\f21b'
}

.zmdi-cloud-outline-alt:before {
    content: '\f21c'
}

.zmdi-cloud-outline:before {
    content: '\f21d'
}

.zmdi-cloud-upload:before {
    content: '\f21e'
}

.zmdi-cloud:before {
    content: '\f21f'
}

.zmdi-download:before {
    content: '\f220'
}

.zmdi-file-plus:before {
    content: '\f221'
}

.zmdi-file-text:before {
    content: '\f222'
}

.zmdi-file:before {
    content: '\f223'
}

.zmdi-folder-outline:before {
    content: '\f224'
}

.zmdi-folder-person:before {
    content: '\f225'
}

.zmdi-folder-star-alt:before {
    content: '\f226'
}

.zmdi-folder-star:before {
    content: '\f227'
}

.zmdi-folder:before {
    content: '\f228'
}

.zmdi-gif:before {
    content: '\f229'
}

.zmdi-upload:before {
    content: '\f22a'
}

.zmdi-border-all:before {
    content: '\f22b'
}

.zmdi-border-bottom:before {
    content: '\f22c'
}

.zmdi-border-clear:before {
    content: '\f22d'
}

.zmdi-border-color:before {
    content: '\f22e'
}

.zmdi-border-horizontal:before {
    content: '\f22f'
}

.zmdi-border-inner:before {
    content: '\f230'
}

.zmdi-border-left:before {
    content: '\f231'
}

.zmdi-border-outer:before {
    content: '\f232'
}

.zmdi-border-right:before {
    content: '\f233'
}

.zmdi-border-style:before {
    content: '\f234'
}

.zmdi-border-top:before {
    content: '\f235'
}

.zmdi-border-vertical:before {
    content: '\f236'
}

.zmdi-copy:before {
    content: '\f237'
}

.zmdi-crop:before {
    content: '\f238'
}

.zmdi-format-align-center:before {
    content: '\f239'
}

.zmdi-format-align-justify:before {
    content: '\f23a'
}

.zmdi-format-align-left:before {
    content: '\f23b'
}

.zmdi-format-align-right:before {
    content: '\f23c'
}

.zmdi-format-bold:before {
    content: '\f23d'
}

.zmdi-format-clear-all:before {
    content: '\f23e'
}

.zmdi-format-clear:before {
    content: '\f23f'
}

.zmdi-format-color-fill:before {
    content: '\f240'
}

.zmdi-format-color-reset:before {
    content: '\f241'
}

.zmdi-format-color-text:before {
    content: '\f242'
}

.zmdi-format-indent-decrease:before {
    content: '\f243'
}

.zmdi-format-indent-increase:before {
    content: '\f244'
}

.zmdi-format-italic:before {
    content: '\f245'
}

.zmdi-format-line-spacing:before {
    content: '\f246'
}

.zmdi-format-list-bulleted:before {
    content: '\f247'
}

.zmdi-format-list-numbered:before {
    content: '\f248'
}

.zmdi-format-ltr:before {
    content: '\f249'
}

.zmdi-format-rtl:before {
    content: '\f24a'
}

.zmdi-format-size:before {
    content: '\f24b'
}

.zmdi-format-strikethrough-s:before {
    content: '\f24c'
}

.zmdi-format-strikethrough:before {
    content: '\f24d'
}

.zmdi-format-subject:before {
    content: '\f24e'
}

.zmdi-format-underlined:before {
    content: '\f24f'
}

.zmdi-format-valign-bottom:before {
    content: '\f250'
}

.zmdi-format-valign-center:before {
    content: '\f251'
}

.zmdi-format-valign-top:before {
    content: '\f252'
}

.zmdi-redo:before {
    content: '\f253'
}

.zmdi-select-all:before {
    content: '\f254'
}

.zmdi-space-bar:before {
    content: '\f255'
}

.zmdi-text-format:before {
    content: '\f256'
}

.zmdi-transform:before {
    content: '\f257'
}

.zmdi-undo:before {
    content: '\f258'
}

.zmdi-wrap-text:before {
    content: '\f259'
}

.zmdi-comment-alert:before {
    content: '\f25a'
}

.zmdi-comment-alt-text:before {
    content: '\f25b'
}

.zmdi-comment-alt:before {
    content: '\f25c'
}

.zmdi-comment-edit:before {
    content: '\f25d'
}

.zmdi-comment-image:before {
    content: '\f25e'
}

.zmdi-comment-list:before {
    content: '\f25f'
}

.zmdi-comment-more:before {
    content: '\f260'
}

.zmdi-comment-outline:before {
    content: '\f261'
}

.zmdi-comment-text-alt:before {
    content: '\f262'
}

.zmdi-comment-text:before {
    content: '\f263'
}

.zmdi-comment-video:before {
    content: '\f264'
}

.zmdi-comment:before {
    content: '\f265'
}

.zmdi-comments:before {
    content: '\f266'
}

.zmdi-check-all:before {
    content: '\f267'
}

.zmdi-check-circle-u:before {
    content: '\f268'
}

.zmdi-check-circle:before {
    content: '\f269'
}

.zmdi-check-square:before {
    content: '\f26a'
}

.zmdi-check:before {
    content: '\f26b'
}

.zmdi-circle-o:before {
    content: '\f26c'
}

.zmdi-circle:before {
    content: '\f26d'
}

.zmdi-dot-circle-alt:before {
    content: '\f26e'
}

.zmdi-dot-circle:before {
    content: '\f26f'
}

.zmdi-minus-circle-outline:before {
    content: '\f270'
}

.zmdi-minus-circle:before {
    content: '\f271'
}

.zmdi-minus-square:before {
    content: '\f272'
}

.zmdi-minus:before {
    content: '\f273'
}

.zmdi-plus-circle-o-duplicate:before {
    content: '\f274'
}

.zmdi-plus-circle-o:before {
    content: '\f275'
}

.zmdi-plus-circle:before {
    content: '\f276'
}

.zmdi-plus-square:before {
    content: '\f277'
}

.zmdi-plus:before {
    content: '\f278'
}

.zmdi-square-o:before {
    content: '\f279'
}

.zmdi-star-circle:before {
    content: '\f27a'
}

.zmdi-star-half:before {
    content: '\f27b'
}

.zmdi-star-outline:before {
    content: '\f27c'
}

.zmdi-star:before {
    content: '\f27d'
}

.zmdi-bluetooth-connected:before {
    content: '\f27e'
}

.zmdi-bluetooth-off:before {
    content: '\f27f'
}

.zmdi-bluetooth-search:before {
    content: '\f280'
}

.zmdi-bluetooth-setting:before {
    content: '\f281'
}

.zmdi-bluetooth:before {
    content: '\f282'
}

.zmdi-camera-add:before {
    content: '\f283'
}

.zmdi-camera-alt:before {
    content: '\f284'
}

.zmdi-camera-bw:before {
    content: '\f285'
}

.zmdi-camera-front:before {
    content: '\f286'
}

.zmdi-camera-mic:before {
    content: '\f287'
}

.zmdi-camera-party-mode:before {
    content: '\f288'
}

.zmdi-camera-rear:before {
    content: '\f289'
}

.zmdi-camera-roll:before {
    content: '\f28a'
}

.zmdi-camera-switch:before {
    content: '\f28b'
}

.zmdi-camera:before {
    content: '\f28c'
}

.zmdi-card-alert:before {
    content: '\f28d'
}

.zmdi-card-off:before {
    content: '\f28e'
}

.zmdi-card-sd:before {
    content: '\f28f'
}

.zmdi-card-sim:before {
    content: '\f290'
}

.zmdi-desktop-mac:before {
    content: '\f291'
}

.zmdi-desktop-windows:before {
    content: '\f292'
}

.zmdi-device-hub:before {
    content: '\f293'
}

.zmdi-devices-off:before {
    content: '\f294'
}

.zmdi-devices:before {
    content: '\f295'
}

.zmdi-dock:before {
    content: '\f296'
}

.zmdi-floppy:before {
    content: '\f297'
}

.zmdi-gamepad:before {
    content: '\f298'
}

.zmdi-gps-dot:before {
    content: '\f299'
}

.zmdi-gps-off:before {
    content: '\f29a'
}

.zmdi-gps:before {
    content: '\f29b'
}

.zmdi-headset-mic:before {
    content: '\f29c'
}

.zmdi-headset:before {
    content: '\f29d'
}

.zmdi-input-antenna:before {
    content: '\f29e'
}

.zmdi-input-composite:before {
    content: '\f29f'
}

.zmdi-input-hdmi:before {
    content: '\f2a0'
}

.zmdi-input-power:before {
    content: '\f2a1'
}

.zmdi-input-svideo:before {
    content: '\f2a2'
}

.zmdi-keyboard-hide:before {
    content: '\f2a3'
}

.zmdi-keyboard:before {
    content: '\f2a4'
}

.zmdi-laptop-chromebook:before {
    content: '\f2a5'
}

.zmdi-laptop-mac:before {
    content: '\f2a6'
}

.zmdi-laptop:before {
    content: '\f2a7'
}

.zmdi-mic-off:before {
    content: '\f2a8'
}

.zmdi-mic-outline:before {
    content: '\f2a9'
}

.zmdi-mic-setting:before {
    content: '\f2aa'
}

.zmdi-mic:before {
    content: '\f2ab'
}

.zmdi-mouse:before {
    content: '\f2ac'
}

.zmdi-network-alert:before {
    content: '\f2ad'
}

.zmdi-network-locked:before {
    content: '\f2ae'
}

.zmdi-network-off:before {
    content: '\f2af'
}

.zmdi-network-outline:before {
    content: '\f2b0'
}

.zmdi-network-setting:before {
    content: '\f2b1'
}

.zmdi-network:before {
    content: '\f2b2'
}

.zmdi-phone-bluetooth:before {
    content: '\f2b3'
}

.zmdi-phone-end:before {
    content: '\f2b4'
}

.zmdi-phone-forwarded:before {
    content: '\f2b5'
}

.zmdi-phone-in-talk:before {
    content: '\f2b6'
}

.zmdi-phone-locked:before {
    content: '\f2b7'
}

.zmdi-phone-missed:before {
    content: '\f2b8'
}

.zmdi-phone-msg:before {
    content: '\f2b9'
}

.zmdi-phone-paused:before {
    content: '\f2ba'
}

.zmdi-phone-ring:before {
    content: '\f2bb'
}

.zmdi-phone-setting:before {
    content: '\f2bc'
}

.zmdi-phone-sip:before {
    content: '\f2bd'
}

.zmdi-phone:before {
    content: '\f2be'
}

.zmdi-portable-wifi-changes:before {
    content: '\f2bf'
}

.zmdi-portable-wifi-off:before {
    content: '\f2c0'
}

.zmdi-portable-wifi:before {
    content: '\f2c1'
}

.zmdi-radio:before {
    content: '\f2c2'
}

.zmdi-reader:before {
    content: '\f2c3'
}

.zmdi-remote-control-alt:before {
    content: '\f2c4'
}

.zmdi-remote-control:before {
    content: '\f2c5'
}

.zmdi-router:before {
    content: '\f2c6'
}

.zmdi-scanner:before {
    content: '\f2c7'
}

.zmdi-smartphone-android:before {
    content: '\f2c8'
}

.zmdi-smartphone-download:before {
    content: '\f2c9'
}

.zmdi-smartphone-erase:before {
    content: '\f2ca'
}

.zmdi-smartphone-info:before {
    content: '\f2cb'
}

.zmdi-smartphone-iphone:before {
    content: '\f2cc'
}

.zmdi-smartphone-landscape-lock:before {
    content: '\f2cd'
}

.zmdi-smartphone-landscape:before {
    content: '\f2ce'
}

.zmdi-smartphone-lock:before {
    content: '\f2cf'
}

.zmdi-smartphone-portrait-lock:before {
    content: '\f2d0'
}

.zmdi-smartphone-ring:before {
    content: '\f2d1'
}

.zmdi-smartphone-setting:before {
    content: '\f2d2'
}

.zmdi-smartphone-setup:before {
    content: '\f2d3'
}

.zmdi-smartphone:before {
    content: '\f2d4'
}

.zmdi-speaker:before {
    content: '\f2d5'
}

.zmdi-tablet-android:before {
    content: '\f2d6'
}

.zmdi-tablet-mac:before {
    content: '\f2d7'
}

.zmdi-tablet:before {
    content: '\f2d8'
}

.zmdi-tv-alt-play:before {
    content: '\f2d9'
}

.zmdi-tv-list:before {
    content: '\f2da'
}

.zmdi-tv-play:before {
    content: '\f2db'
}

.zmdi-tv:before {
    content: '\f2dc'
}

.zmdi-usb:before {
    content: '\f2dd'
}

.zmdi-videocam-off:before {
    content: '\f2de'
}

.zmdi-videocam-switch:before {
    content: '\f2df'
}

.zmdi-videocam:before {
    content: '\f2e0'
}

.zmdi-watch:before {
    content: '\f2e1'
}

.zmdi-wifi-alt-2:before {
    content: '\f2e2'
}

.zmdi-wifi-alt:before {
    content: '\f2e3'
}

.zmdi-wifi-info:before {
    content: '\f2e4'
}

.zmdi-wifi-lock:before {
    content: '\f2e5'
}

.zmdi-wifi-off:before {
    content: '\f2e6'
}

.zmdi-wifi-outline:before {
    content: '\f2e7'
}

.zmdi-wifi:before {
    content: '\f2e8'
}

.zmdi-arrow-left-bottom:before {
    content: '\f2e9'
}

.zmdi-arrow-left:before {
    content: '\f2ea'
}

.zmdi-arrow-merge:before {
    content: '\f2eb'
}

.zmdi-arrow-missed:before {
    content: '\f2ec'
}

.zmdi-arrow-right-top:before {
    content: '\f2ed'
}

.zmdi-arrow-right:before {
    content: '\f2ee'
}

.zmdi-arrow-split:before {
    content: '\f2ef'
}

.zmdi-arrows:before {
    content: '\f2f0'
}

.zmdi-caret-down-circle:before {
    content: '\f2f1'
}

.zmdi-caret-down:before {
    content: '\f2f2'
}

.zmdi-caret-left-circle:before {
    content: '\f2f3'
}

.zmdi-caret-left:before {
    content: '\f2f4'
}

.zmdi-caret-right-circle:before {
    content: '\f2f5'
}

.zmdi-caret-right:before {
    content: '\f2f6'
}

.zmdi-caret-up-circle:before {
    content: '\f2f7'
}

.zmdi-caret-up:before {
    content: '\f2f8'
}

.zmdi-chevron-down:before {
    content: '\f2f9'
}

.zmdi-chevron-left:before {
    content: '\f2fa'
}

.zmdi-chevron-right:before {
    content: '\f2fb'
}

.zmdi-chevron-up:before {
    content: '\f2fc'
}

.zmdi-forward:before {
    content: '\f2fd'
}

.zmdi-long-arrow-down:before {
    content: '\f2fe'
}

.zmdi-long-arrow-left:before {
    content: '\f2ff'
}

.zmdi-long-arrow-return:before {
    content: '\f300'
}

.zmdi-long-arrow-right:before {
    content: '\f301'
}

.zmdi-long-arrow-tab:before {
    content: '\f302'
}

.zmdi-long-arrow-up:before {
    content: '\f303'
}

.zmdi-rotate-ccw:before {
    content: '\f304'
}

.zmdi-rotate-cw:before {
    content: '\f305'
}

.zmdi-rotate-left:before {
    content: '\f306'
}

.zmdi-rotate-right:before {
    content: '\f307'
}

.zmdi-square-down:before {
    content: '\f308'
}

.zmdi-square-right:before {
    content: '\f309'
}

.zmdi-swap-alt:before {
    content: '\f30a'
}

.zmdi-swap-vertical-circle:before {
    content: '\f30b'
}

.zmdi-swap-vertical:before {
    content: '\f30c'
}

.zmdi-swap:before {
    content: '\f30d'
}

.zmdi-trending-down:before {
    content: '\f30e'
}

.zmdi-trending-flat:before {
    content: '\f30f'
}

.zmdi-trending-up:before {
    content: '\f310'
}

.zmdi-unfold-less:before {
    content: '\f311'
}

.zmdi-unfold-more:before {
    content: '\f312'
}

.zmdi-apps:before {
    content: '\f313'
}

.zmdi-grid-off:before {
    content: '\f314'
}

.zmdi-grid:before {
    content: '\f315'
}

.zmdi-view-agenda:before {
    content: '\f316'
}

.zmdi-view-array:before {
    content: '\f317'
}

.zmdi-view-carousel:before {
    content: '\f318'
}

.zmdi-view-column:before {
    content: '\f319'
}

.zmdi-view-comfy:before {
    content: '\f31a'
}

.zmdi-view-compact:before {
    content: '\f31b'
}

.zmdi-view-dashboard:before {
    content: '\f31c'
}

.zmdi-view-day:before {
    content: '\f31d'
}

.zmdi-view-headline:before {
    content: '\f31e'
}

.zmdi-view-list-alt:before {
    content: '\f31f'
}

.zmdi-view-list:before {
    content: '\f320'
}

.zmdi-view-module:before {
    content: '\f321'
}

.zmdi-view-quilt:before {
    content: '\f322'
}

.zmdi-view-stream:before {
    content: '\f323'
}

.zmdi-view-subtitles:before {
    content: '\f324'
}

.zmdi-view-toc:before {
    content: '\f325'
}

.zmdi-view-web:before {
    content: '\f326'
}

.zmdi-view-week:before {
    content: '\f327'
}

.zmdi-widgets:before {
    content: '\f328'
}

.zmdi-alarm-check:before {
    content: '\f329'
}

.zmdi-alarm-off:before {
    content: '\f32a'
}

.zmdi-alarm-plus:before {
    content: '\f32b'
}

.zmdi-alarm-snooze:before {
    content: '\f32c'
}

.zmdi-alarm:before {
    content: '\f32d'
}

.zmdi-calendar-alt:before {
    content: '\f32e'
}

.zmdi-calendar-check:before {
    content: '\f32f'
}

.zmdi-calendar-close:before {
    content: '\f330'
}

.zmdi-calendar-note:before {
    content: '\f331'
}

.zmdi-calendar:before {
    content: '\f332'
}

.zmdi-time-countdown:before {
    content: '\f333'
}

.zmdi-time-interval:before {
    content: '\f334'
}

.zmdi-time-restore-setting:before {
    content: '\f335'
}

.zmdi-time-restore:before {
    content: '\f336'
}

.zmdi-time:before {
    content: '\f337'
}

.zmdi-timer-off:before {
    content: '\f338'
}

.zmdi-timer:before {
    content: '\f339'
}

.zmdi-android-alt:before {
    content: '\f33a'
}

.zmdi-android:before {
    content: '\f33b'
}

.zmdi-apple:before {
    content: '\f33c'
}

.zmdi-behance:before {
    content: '\f33d'
}

.zmdi-codepen:before {
    content: '\f33e'
}

.zmdi-dribbble:before {
    content: '\f33f'
}

.zmdi-dropbox:before {
    content: '\f340'
}

.zmdi-evernote:before {
    content: '\f341'
}

.zmdi-facebook-box:before {
    content: '\f342'
}

.zmdi-facebook:before {
    content: '\f343'
}

.zmdi-github-box:before {
    content: '\f344'
}

.zmdi-github:before {
    content: '\f345'
}

.zmdi-google-drive:before {
    content: '\f346'
}

.zmdi-google-earth:before {
    content: '\f347'
}

.zmdi-google-glass:before {
    content: '\f348'
}

.zmdi-google-maps:before {
    content: '\f349'
}

.zmdi-google-pages:before {
    content: '\f34a'
}

.zmdi-google-play:before {
    content: '\f34b'
}

.zmdi-google-plus-box:before {
    content: '\f34c'
}

.zmdi-google-plus:before {
    content: '\f34d'
}

.zmdi-google:before {
    content: '\f34e'
}

.zmdi-instagram:before {
    content: '\f34f'
}

.zmdi-language-css3:before {
    content: '\f350'
}

.zmdi-language-html5:before {
    content: '\f351'
}

.zmdi-language-javascript:before {
    content: '\f352'
}

.zmdi-language-python-alt:before {
    content: '\f353'
}

.zmdi-language-python:before {
    content: '\f354'
}

.zmdi-lastfm:before {
    content: '\f355'
}

.zmdi-linkedin-box:before {
    content: '\f356'
}

.zmdi-paypal:before {
    content: '\f357'
}

.zmdi-pinterest-box:before {
    content: '\f358'
}

.zmdi-pocket:before {
    content: '\f359'
}

.zmdi-polymer:before {
    content: '\f35a'
}

.zmdi-share:before {
    content: '\f35b'
}

.zmdi-stackoverflow:before {
    content: '\f35c'
}

.zmdi-steam-square:before {
    content: '\f35d'
}

.zmdi-steam:before {
    content: '\f35e'
}

.zmdi-twitter-box:before {
    content: '\f35f'
}

.zmdi-twitter:before {
    content: '\f360'
}

.zmdi-vk:before {
    content: '\f361'
}

.zmdi-wikipedia:before {
    content: '\f362'
}

.zmdi-windows:before {
    content: '\f363'
}

.zmdi-aspect-ratio-alt:before {
    content: '\f364'
}

.zmdi-aspect-ratio:before {
    content: '\f365'
}

.zmdi-blur-circular:before {
    content: '\f366'
}

.zmdi-blur-linear:before {
    content: '\f367'
}

.zmdi-blur-off:before {
    content: '\f368'
}

.zmdi-blur:before {
    content: '\f369'
}

.zmdi-brightness-2:before {
    content: '\f36a'
}

.zmdi-brightness-3:before {
    content: '\f36b'
}

.zmdi-brightness-4:before {
    content: '\f36c'
}

.zmdi-brightness-5:before {
    content: '\f36d'
}

.zmdi-brightness-6:before {
    content: '\f36e'
}

.zmdi-brightness-7:before {
    content: '\f36f'
}

.zmdi-brightness-auto:before {
    content: '\f370'
}

.zmdi-brightness-setting:before {
    content: '\f371'
}

.zmdi-broken-image:before {
    content: '\f372'
}

.zmdi-center-focus-strong:before {
    content: '\f373'
}

.zmdi-center-focus-weak:before {
    content: '\f374'
}

.zmdi-compare:before {
    content: '\f375'
}

.zmdi-crop-16-9:before {
    content: '\f376'
}

.zmdi-crop-3-2:before {
    content: '\f377'
}

.zmdi-crop-5-4:before {
    content: '\f378'
}

.zmdi-crop-7-5:before {
    content: '\f379'
}

.zmdi-crop-din:before {
    content: '\f37a'
}

.zmdi-crop-free:before {
    content: '\f37b'
}

.zmdi-crop-landscape:before {
    content: '\f37c'
}

.zmdi-crop-portrait:before {
    content: '\f37d'
}

.zmdi-crop-square:before {
    content: '\f37e'
}

.zmdi-exposure-alt:before {
    content: '\f37f'
}

.zmdi-exposure:before {
    content: '\f380'
}

.zmdi-filter-b-and-w:before {
    content: '\f381'
}

.zmdi-filter-center-focus:before {
    content: '\f382'
}

.zmdi-filter-frames:before {
    content: '\f383'
}

.zmdi-filter-tilt-shift:before {
    content: '\f384'
}

.zmdi-gradient:before {
    content: '\f385'
}

.zmdi-grain:before {
    content: '\f386'
}

.zmdi-graphic-eq:before {
    content: '\f387'
}

.zmdi-hdr-off:before {
    content: '\f388'
}

.zmdi-hdr-strong:before {
    content: '\f389'
}

.zmdi-hdr-weak:before {
    content: '\f38a'
}

.zmdi-hdr:before {
    content: '\f38b'
}

.zmdi-iridescent:before {
    content: '\f38c'
}

.zmdi-leak-off:before {
    content: '\f38d'
}

.zmdi-leak:before {
    content: '\f38e'
}

.zmdi-looks:before {
    content: '\f38f'
}

.zmdi-loupe:before {
    content: '\f390'
}

.zmdi-panorama-horizontal:before {
    content: '\f391'
}

.zmdi-panorama-vertical:before {
    content: '\f392'
}

.zmdi-panorama-wide-angle:before {
    content: '\f393'
}

.zmdi-photo-size-select-large:before {
    content: '\f394'
}

.zmdi-photo-size-select-small:before {
    content: '\f395'
}

.zmdi-picture-in-picture:before {
    content: '\f396'
}

.zmdi-slideshow:before {
    content: '\f397'
}

.zmdi-texture:before {
    content: '\f398'
}

.zmdi-tonality:before {
    content: '\f399'
}

.zmdi-vignette:before {
    content: '\f39a'
}

.zmdi-wb-auto:before {
    content: '\f39b'
}

.zmdi-eject-alt:before {
    content: '\f39c'
}

.zmdi-eject:before {
    content: '\f39d'
}

.zmdi-equalizer:before {
    content: '\f39e'
}

.zmdi-fast-forward:before {
    content: '\f39f'
}

.zmdi-fast-rewind:before {
    content: '\f3a0'
}

.zmdi-forward-10:before {
    content: '\f3a1'
}

.zmdi-forward-30:before {
    content: '\f3a2'
}

.zmdi-forward-5:before {
    content: '\f3a3'
}

.zmdi-hearing:before {
    content: '\f3a4'
}

.zmdi-pause-circle-outline:before {
    content: '\f3a5'
}

.zmdi-pause-circle:before {
    content: '\f3a6'
}

.zmdi-pause:before {
    content: '\f3a7'
}

.zmdi-play-circle-outline:before {
    content: '\f3a8'
}

.zmdi-play-circle:before {
    content: '\f3a9'
}

.zmdi-play:before {
    content: '\f3aa'
}

.zmdi-playlist-audio:before {
    content: '\f3ab'
}

.zmdi-playlist-plus:before {
    content: '\f3ac'
}

.zmdi-repeat-one:before {
    content: '\f3ad'
}

.zmdi-repeat:before {
    content: '\f3ae'
}

.zmdi-replay-10:before {
    content: '\f3af'
}

.zmdi-replay-30:before {
    content: '\f3b0'
}

.zmdi-replay-5:before {
    content: '\f3b1'
}

.zmdi-replay:before {
    content: '\f3b2'
}

.zmdi-shuffle:before {
    content: '\f3b3'
}

.zmdi-skip-next:before {
    content: '\f3b4'
}

.zmdi-skip-previous:before {
    content: '\f3b5'
}

.zmdi-stop:before {
    content: '\f3b6'
}

.zmdi-surround-sound:before {
    content: '\f3b7'
}

.zmdi-tune:before {
    content: '\f3b8'
}

.zmdi-volume-down:before {
    content: '\f3b9'
}

.zmdi-volume-mute:before {
    content: '\f3ba'
}

.zmdi-volume-off:before {
    content: '\f3bb'
}

.zmdi-volume-up:before {
    content: '\f3bc'
}

.zmdi-n-1-square:before {
    content: '\f3bd'
}

.zmdi-n-2-square:before {
    content: '\f3be'
}

.zmdi-n-3-square:before {
    content: '\f3bf'
}

.zmdi-n-4-square:before {
    content: '\f3c0'
}

.zmdi-n-5-square:before {
    content: '\f3c1'
}

.zmdi-n-6-square:before {
    content: '\f3c2'
}

.zmdi-neg-1:before {
    content: '\f3c3'
}

.zmdi-neg-2:before {
    content: '\f3c4'
}

.zmdi-plus-1:before {
    content: '\f3c5'
}

.zmdi-plus-2:before {
    content: '\f3c6'
}

.zmdi-sec-10:before {
    content: '\f3c7'
}

.zmdi-sec-3:before {
    content: '\f3c8'
}

.zmdi-zero:before {
    content: '\f3c9'
}

.zmdi-airline-seat-flat-angled:before {
    content: '\f3ca'
}

.zmdi-airline-seat-flat:before {
    content: '\f3cb'
}

.zmdi-airline-seat-individual-suite:before {
    content: '\f3cc'
}

.zmdi-airline-seat-legroom-extra:before {
    content: '\f3cd'
}

.zmdi-airline-seat-legroom-normal:before {
    content: '\f3ce'
}

.zmdi-airline-seat-legroom-reduced:before {
    content: '\f3cf'
}

.zmdi-airline-seat-recline-extra:before {
    content: '\f3d0'
}

.zmdi-airline-seat-recline-normal:before {
    content: '\f3d1'
}

.zmdi-airplay:before {
    content: '\f3d2'
}

.zmdi-closed-caption:before {
    content: '\f3d3'
}

.zmdi-confirmation-number:before {
    content: '\f3d4'
}

.zmdi-developer-board:before {
    content: '\f3d5'
}

.zmdi-disc-full:before {
    content: '\f3d6'
}

.zmdi-explicit:before {
    content: '\f3d7'
}

.zmdi-flight-land:before {
    content: '\f3d8'
}

.zmdi-flight-takeoff:before {
    content: '\f3d9'
}

.zmdi-flip-to-back:before {
    content: '\f3da'
}

.zmdi-flip-to-front:before {
    content: '\f3db'
}

.zmdi-group-work:before {
    content: '\f3dc'
}

.zmdi-hd:before {
    content: '\f3dd'
}

.zmdi-hq:before {
    content: '\f3de'
}

.zmdi-markunread-mailbox:before {
    content: '\f3df'
}

.zmdi-memory:before {
    content: '\f3e0'
}

.zmdi-nfc:before {
    content: '\f3e1'
}

.zmdi-play-for-work:before {
    content: '\f3e2'
}

.zmdi-power-input:before {
    content: '\f3e3'
}

.zmdi-present-to-all:before {
    content: '\f3e4'
}

.zmdi-satellite:before {
    content: '\f3e5'
}

.zmdi-tap-and-play:before {
    content: '\f3e6'
}

.zmdi-vibration:before {
    content: '\f3e7'
}

.zmdi-voicemail:before {
    content: '\f3e8'
}

.zmdi-group:before {
    content: '\f3e9'
}

.zmdi-rss:before {
    content: '\f3ea'
}

.zmdi-shape:before {
    content: '\f3eb'
}

.zmdi-spinner:before {
    content: '\f3ec'
}

.zmdi-ungroup:before {
    content: '\f3ed'
}

.zmdi-500px:before {
    content: '\f3ee'
}

.zmdi-8tracks:before {
    content: '\f3ef'
}

.zmdi-amazon:before {
    content: '\f3f0'
}

.zmdi-blogger:before {
    content: '\f3f1'
}

.zmdi-delicious:before {
    content: '\f3f2'
}

.zmdi-disqus:before {
    content: '\f3f3'
}

.zmdi-flattr:before {
    content: '\f3f4'
}

.zmdi-flickr:before {
    content: '\f3f5'
}

.zmdi-github-alt:before {
    content: '\f3f6'
}

.zmdi-google-old:before {
    content: '\f3f7'
}

.zmdi-linkedin:before {
    content: '\f3f8'
}

.zmdi-odnoklassniki:before {
    content: '\f3f9'
}

.zmdi-outlook:before {
    content: '\f3fa'
}

.zmdi-paypal-alt:before {
    content: '\f3fb'
}

.zmdi-pinterest:before {
    content: '\f3fc'
}

.zmdi-playstation:before {
    content: '\f3fd'
}

.zmdi-reddit:before {
    content: '\f3fe'
}

.zmdi-skype:before {
    content: '\f3ff'
}

.zmdi-slideshare:before {
    content: '\f400'
}

.zmdi-soundcloud:before {
    content: '\f401'
}

.zmdi-tumblr:before {
    content: '\f402'
}

.zmdi-twitch:before {
    content: '\f403'
}

.zmdi-vimeo:before {
    content: '\f404'
}

.zmdi-whatsapp:before {
    content: '\f405'
}

.zmdi-xbox:before {
    content: '\f406'
}

.zmdi-yahoo:before {
    content: '\f407'
}

.zmdi-youtube-play:before {
    content: '\f408'
}

.zmdi-youtube:before {
    content: '\f409'
}

.zmdi-3d-rotation:before {
    content: '\f101'
}

.zmdi-airplane-off:before {
    content: '\f102'
}

.zmdi-airplane:before {
    content: '\f103'
}

.zmdi-album:before {
    content: '\f104'
}

.zmdi-archive:before {
    content: '\f105'
}

.zmdi-assignment-account:before {
    content: '\f106'
}

.zmdi-assignment-alert:before {
    content: '\f107'
}

.zmdi-assignment-check:before {
    content: '\f108'
}

.zmdi-assignment-o:before {
    content: '\f109'
}

.zmdi-assignment-return:before {
    content: '\f10a'
}

.zmdi-assignment-returned:before {
    content: '\f10b'
}

.zmdi-assignment:before {
    content: '\f10c'
}

.zmdi-attachment-alt:before {
    content: '\f10d'
}

.zmdi-attachment:before {
    content: '\f10e'
}

.zmdi-audio:before {
    content: '\f10f'
}

.zmdi-badge-check:before {
    content: '\f110'
}

.zmdi-balance-wallet:before {
    content: '\f111'
}

.zmdi-balance:before {
    content: '\f112'
}

.zmdi-battery-alert:before {
    content: '\f113'
}

.zmdi-battery-flash:before {
    content: '\f114'
}

.zmdi-battery-unknown:before {
    content: '\f115'
}

.zmdi-battery:before {
    content: '\f116'
}

.zmdi-bike:before {
    content: '\f117'
}

.zmdi-block-alt:before {
    content: '\f118'
}

.zmdi-block:before {
    content: '\f119'
}

.zmdi-boat:before {
    content: '\f11a'
}

.zmdi-book-image:before {
    content: '\f11b'
}

.zmdi-book:before {
    content: '\f11c'
}

.zmdi-bookmark-outline:before {
    content: '\f11d'
}

.zmdi-bookmark:before {
    content: '\f11e'
}

.zmdi-brush:before {
    content: '\f11f'
}

.zmdi-bug:before {
    content: '\f120'
}

.zmdi-bus:before {
    content: '\f121'
}

.zmdi-cake:before {
    content: '\f122'
}

.zmdi-car-taxi:before {
    content: '\f123'
}

.zmdi-car-wash:before {
    content: '\f124'
}

.zmdi-car:before {
    content: '\f125'
}

.zmdi-card-giftcard:before {
    content: '\f126'
}

.zmdi-card-membership:before {
    content: '\f127'
}

.zmdi-card-travel:before {
    content: '\f128'
}

.zmdi-card:before {
    content: '\f129'
}

.zmdi-case-check:before {
    content: '\f12a'
}

.zmdi-case-download:before {
    content: '\f12b'
}

.zmdi-case-play:before {
    content: '\f12c'
}

.zmdi-case:before {
    content: '\f12d'
}

.zmdi-cast-connected:before {
    content: '\f12e'
}

.zmdi-cast:before {
    content: '\f12f'
}

.zmdi-chart-donut:before {
    content: '\f130'
}

.zmdi-chart:before {
    content: '\f131'
}

.zmdi-city-alt:before {
    content: '\f132'
}

.zmdi-city:before {
    content: '\f133'
}

.zmdi-close-circle-o:before {
    content: '\f134'
}

.zmdi-close-circle:before {
    content: '\f135'
}

.zmdi-close:before {
    content: '\f136'
}

.zmdi-cocktail:before {
    content: '\f137'
}

.zmdi-code-setting:before {
    content: '\f138'
}

.zmdi-code-smartphone:before {
    content: '\f139'
}

.zmdi-code:before {
    content: '\f13a'
}

.zmdi-coffee:before {
    content: '\f13b'
}

.zmdi-collection-bookmark:before {
    content: '\f13c'
}

.zmdi-collection-case-play:before {
    content: '\f13d'
}

.zmdi-collection-folder-image:before {
    content: '\f13e'
}

.zmdi-collection-image-o:before {
    content: '\f13f'
}

.zmdi-collection-image:before {
    content: '\f140'
}

.zmdi-collection-item-1:before {
    content: '\f141'
}

.zmdi-collection-item-2:before {
    content: '\f142'
}

.zmdi-collection-item-3:before {
    content: '\f143'
}

.zmdi-collection-item-4:before {
    content: '\f144'
}

.zmdi-collection-item-5:before {
    content: '\f145'
}

.zmdi-collection-item-6:before {
    content: '\f146'
}

.zmdi-collection-item-7:before {
    content: '\f147'
}

.zmdi-collection-item-8:before {
    content: '\f148'
}

.zmdi-collection-item-9-plus:before {
    content: '\f149'
}

.zmdi-collection-item-9:before {
    content: '\f14a'
}

.zmdi-collection-item:before {
    content: '\f14b'
}

.zmdi-collection-music:before {
    content: '\f14c'
}

.zmdi-collection-pdf:before {
    content: '\f14d'
}

.zmdi-collection-plus:before {
    content: '\f14e'
}

.zmdi-collection-speaker:before {
    content: '\f14f'
}

.zmdi-collection-text:before {
    content: '\f150'
}

.zmdi-collection-video:before {
    content: '\f151'
}

.zmdi-compass:before {
    content: '\f152'
}

.zmdi-cutlery:before {
    content: '\f153'
}

.zmdi-delete:before {
    content: '\f154'
}

.zmdi-dialpad:before {
    content: '\f155'
}

.zmdi-dns:before {
    content: '\f156'
}

.zmdi-drink:before {
    content: '\f157'
}

.zmdi-edit:before {
    content: '\f158'
}

.zmdi-email-open:before {
    content: '\f159'
}

.zmdi-email:before {
    content: '\f15a'
}

.zmdi-eye-off:before {
    content: '\f15b'
}

.zmdi-eye:before {
    content: '\f15c'
}

.zmdi-eyedropper:before {
    content: '\f15d'
}

.zmdi-favorite-outline:before {
    content: '\f15e'
}

.zmdi-favorite:before {
    content: '\f15f'
}

.zmdi-filter-list:before {
    content: '\f160'
}

.zmdi-fire:before {
    content: '\f161'
}

.zmdi-flag:before {
    content: '\f162'
}

.zmdi-flare:before {
    content: '\f163'
}

.zmdi-flash-auto:before {
    content: '\f164'
}

.zmdi-flash-off:before {
    content: '\f165'
}

.zmdi-flash:before {
    content: '\f166'
}

.zmdi-flip:before {
    content: '\f167'
}

.zmdi-flower-alt:before {
    content: '\f168'
}

.zmdi-flower:before {
    content: '\f169'
}

.zmdi-font:before {
    content: '\f16a'
}

.zmdi-fullscreen-alt:before {
    content: '\f16b'
}

.zmdi-fullscreen-exit:before {
    content: '\f16c'
}

.zmdi-fullscreen:before {
    content: '\f16d'
}

.zmdi-functions:before {
    content: '\f16e'
}

.zmdi-gas-station:before {
    content: '\f16f'
}

.zmdi-gesture:before {
    content: '\f170'
}

.zmdi-globe-alt:before {
    content: '\f171'
}

.zmdi-globe-lock:before {
    content: '\f172'
}

.zmdi-globe:before {
    content: '\f173'
}

.zmdi-graduation-cap:before {
    content: '\f174'
}

.zmdi-home:before {
    content: '\f175'
}

.zmdi-hospital-alt:before {
    content: '\f176'
}

.zmdi-hospital:before {
    content: '\f177'
}

.zmdi-hotel:before {
    content: '\f178'
}

.zmdi-hourglass-alt:before {
    content: '\f179'
}

.zmdi-hourglass-outline:before {
    content: '\f17a'
}

.zmdi-hourglass:before {
    content: '\f17b'
}

.zmdi-http:before {
    content: '\f17c'
}

.zmdi-image-alt:before {
    content: '\f17d'
}

.zmdi-image-o:before {
    content: '\f17e'
}

.zmdi-image:before {
    content: '\f17f'
}

.zmdi-inbox:before {
    content: '\f180'
}

.zmdi-invert-colors-off:before {
    content: '\f181'
}

.zmdi-invert-colors:before {
    content: '\f182'
}

.zmdi-key:before {
    content: '\f183'
}

.zmdi-label-alt-outline:before {
    content: '\f184'
}

.zmdi-label-alt:before {
    content: '\f185'
}

.zmdi-label-heart:before {
    content: '\f186'
}

.zmdi-label:before {
    content: '\f187'
}

.zmdi-labels:before {
    content: '\f188'
}

.zmdi-lamp:before {
    content: '\f189'
}

.zmdi-landscape:before {
    content: '\f18a'
}

.zmdi-layers-off:before {
    content: '\f18b'
}

.zmdi-layers:before {
    content: '\f18c'
}

.zmdi-library:before {
    content: '\f18d'
}

.zmdi-link:before {
    content: '\f18e'
}

.zmdi-lock-open:before {
    content: '\f18f'
}

.zmdi-lock-outline:before {
    content: '\f190'
}

.zmdi-lock:before {
    content: '\f191'
}

.zmdi-mail-reply-all:before {
    content: '\f192'
}

.zmdi-mail-reply:before {
    content: '\f193'
}

.zmdi-mail-send:before {
    content: '\f194'
}

.zmdi-mall:before {
    content: '\f195'
}

.zmdi-map:before {
    content: '\f196'
}

.zmdi-menu:before {
    content: '\f197'
}

.zmdi-money-box:before {
    content: '\f198'
}

.zmdi-money-off:before {
    content: '\f199'
}

.zmdi-money:before {
    content: '\f19a'
}

.zmdi-more-vert:before {
    content: '\f19b'
}

.zmdi-more:before {
    content: '\f19c'
}

.zmdi-movie-alt:before {
    content: '\f19d'
}

.zmdi-movie:before {
    content: '\f19e'
}

.zmdi-nature-people:before {
    content: '\f19f'
}

.zmdi-nature:before {
    content: '\f1a0'
}

.zmdi-navigation:before {
    content: '\f1a1'
}

.zmdi-open-in-browser:before {
    content: '\f1a2'
}

.zmdi-open-in-new:before {
    content: '\f1a3'
}

.zmdi-palette:before {
    content: '\f1a4'
}

.zmdi-parking:before {
    content: '\f1a5'
}

.zmdi-pin-account:before {
    content: '\f1a6'
}

.zmdi-pin-assistant:before {
    content: '\f1a7'
}

.zmdi-pin-drop:before {
    content: '\f1a8'
}

.zmdi-pin-help:before {
    content: '\f1a9'
}

.zmdi-pin-off:before {
    content: '\f1aa'
}

.zmdi-pin:before {
    content: '\f1ab'
}

.zmdi-pizza:before {
    content: '\f1ac'
}

.zmdi-plaster:before {
    content: '\f1ad'
}

.zmdi-power-setting:before {
    content: '\f1ae'
}

.zmdi-power:before {
    content: '\f1af'
}

.zmdi-print:before {
    content: '\f1b0'
}

.zmdi-puzzle-piece:before {
    content: '\f1b1'
}

.zmdi-quote:before {
    content: '\f1b2'
}

.zmdi-railway:before {
    content: '\f1b3'
}

.zmdi-receipt:before {
    content: '\f1b4'
}

.zmdi-refresh-alt:before {
    content: '\f1b5'
}

.zmdi-refresh-sync-alert:before {
    content: '\f1b6'
}

.zmdi-refresh-sync-off:before {
    content: '\f1b7'
}

.zmdi-refresh-sync:before {
    content: '\f1b8'
}

.zmdi-refresh:before {
    content: '\f1b9'
}

.zmdi-roller:before {
    content: '\f1ba'
}

.zmdi-ruler:before {
    content: '\f1bb'
}

.zmdi-scissors:before {
    content: '\f1bc'
}

.zmdi-screen-rotation-lock:before {
    content: '\f1bd'
}

.zmdi-screen-rotation:before {
    content: '\f1be'
}

.zmdi-search-for:before {
    content: '\f1bf'
}

.zmdi-search-in-file:before {
    content: '\f1c0'
}

.zmdi-search-in-page:before {
    content: '\f1c1'
}

.zmdi-search-replace:before {
    content: '\f1c2'
}

.zmdi-search:before {
    content: '\f1c3'
}

.zmdi-seat:before {
    content: '\f1c4'
}

.zmdi-settings-square:before {
    content: '\f1c5'
}

.zmdi-settings:before {
    content: '\f1c6'
}

.zmdi-shield-check:before {
    content: '\f1c7'
}

.zmdi-shield-security:before {
    content: '\f1c8'
}

.zmdi-shopping-basket:before {
    content: '\f1c9'
}

.zmdi-shopping-cart-plus:before {
    content: '\f1ca'
}

.zmdi-shopping-cart:before {
    content: '\f1cb'
}

.zmdi-sign-in:before {
    content: '\f1cc'
}

.zmdi-sort-amount-asc:before {
    content: '\f1cd'
}

.zmdi-sort-amount-desc:before {
    content: '\f1ce'
}

.zmdi-sort-asc:before {
    content: '\f1cf'
}

.zmdi-sort-desc:before {
    content: '\f1d0'
}

.zmdi-spellcheck:before {
    content: '\f1d1'
}

.zmdi-storage:before {
    content: '\f1d2'
}

.zmdi-store-24:before {
    content: '\f1d3'
}

.zmdi-store:before {
    content: '\f1d4'
}

.zmdi-subway:before {
    content: '\f1d5'
}

.zmdi-sun:before {
    content: '\f1d6'
}

.zmdi-tab-unselected:before {
    content: '\f1d7'
}

.zmdi-tab:before {
    content: '\f1d8'
}

.zmdi-tag-close:before {
    content: '\f1d9'
}

.zmdi-tag-more:before {
    content: '\f1da'
}

.zmdi-tag:before {
    content: '\f1db'
}

.zmdi-thumb-down:before {
    content: '\f1dc'
}

.zmdi-thumb-up-down:before {
    content: '\f1dd'
}

.zmdi-thumb-up:before {
    content: '\f1de'
}

.zmdi-ticket-star:before {
    content: '\f1df'
}

.zmdi-toll:before {
    content: '\f1e0'
}

.zmdi-toys:before {
    content: '\f1e1'
}

.zmdi-traffic:before {
    content: '\f1e2'
}

.zmdi-translate:before {
    content: '\f1e3'
}

.zmdi-triangle-down:before {
    content: '\f1e4'
}

.zmdi-triangle-up:before {
    content: '\f1e5'
}

.zmdi-truck:before {
    content: '\f1e6'
}

.zmdi-turning-sign:before {
    content: '\f1e7'
}

.zmdi-wallpaper:before {
    content: '\f1e8'
}

.zmdi-washing-machine:before {
    content: '\f1e9'
}

.zmdi-window-maximize:before {
    content: '\f1ea'
}

.zmdi-window-minimize:before {
    content: '\f1eb'
}

.zmdi-window-restore:before {
    content: '\f1ec'
}

.zmdi-wrench:before {
    content: '\f1ed'
}

.zmdi-zoom-in:before {
    content: '\f1ee'
}

.zmdi-zoom-out:before {
    content: '\f1ef'
}

.zmdi-alert-circle-o:before {
    content: '\f1f0'
}

.zmdi-alert-circle:before {
    content: '\f1f1'
}

.zmdi-alert-octagon:before {
    content: '\f1f2'
}

.zmdi-alert-polygon:before {
    content: '\f1f3'
}

.zmdi-alert-triangle:before {
    content: '\f1f4'
}

.zmdi-help-outline:before {
    content: '\f1f5'
}

.zmdi-help:before {
    content: '\f1f6'
}

.zmdi-info-outline:before {
    content: '\f1f7'
}

.zmdi-info:before {
    content: '\f1f8'
}

.zmdi-notifications-active:before {
    content: '\f1f9'
}

.zmdi-notifications-add:before {
    content: '\f1fa'
}

.zmdi-notifications-none:before {
    content: '\f1fb'
}

.zmdi-notifications-off:before {
    content: '\f1fc'
}

.zmdi-notifications-paused:before {
    content: '\f1fd'
}

.zmdi-notifications:before {
    content: '\f1fe'
}

.zmdi-account-add:before {
    content: '\f1ff'
}

.zmdi-account-box-mail:before {
    content: '\f200'
}

.zmdi-account-box-o:before {
    content: '\f201'
}

.zmdi-account-box-phone:before {
    content: '\f202'
}

.zmdi-account-box:before {
    content: '\f203'
}

.zmdi-account-calendar:before {
    content: '\f204'
}

.zmdi-account-circle:before {
    content: '\f205'
}

.zmdi-account-o:before {
    content: '\f206'
}

.zmdi-account:before {
    content: '\f207'
}

.zmdi-accounts-add:before {
    content: '\f208'
}

.zmdi-accounts-alt:before {
    content: '\f209'
}

.zmdi-accounts-list-alt:before {
    content: '\f20a'
}

.zmdi-accounts-list:before {
    content: '\f20b'
}

.zmdi-accounts-outline:before {
    content: '\f20c'
}

.zmdi-accounts:before {
    content: '\f20d'
}

.zmdi-face:before {
    content: '\f20e'
}

.zmdi-female:before {
    content: '\f20f'
}

.zmdi-male-alt:before {
    content: '\f210'
}

.zmdi-male-female:before {
    content: '\f211'
}

.zmdi-male:before {
    content: '\f212'
}

.zmdi-mood-bad:before {
    content: '\f213'
}

.zmdi-mood:before {
    content: '\f214'
}

.zmdi-run:before {
    content: '\f215'
}

.zmdi-walk:before {
    content: '\f216'
}

.zmdi-cloud-box:before {
    content: '\f217'
}

.zmdi-cloud-circle:before {
    content: '\f218'
}

.zmdi-cloud-done:before {
    content: '\f219'
}

.zmdi-cloud-download:before {
    content: '\f21a'
}

.zmdi-cloud-off:before {
    content: '\f21b'
}

.zmdi-cloud-outline-alt:before {
    content: '\f21c'
}

.zmdi-cloud-outline:before {
    content: '\f21d'
}

.zmdi-cloud-upload:before {
    content: '\f21e'
}

.zmdi-cloud:before {
    content: '\f21f'
}

.zmdi-download:before {
    content: '\f220'
}

.zmdi-file-plus:before {
    content: '\f221'
}

.zmdi-file-text:before {
    content: '\f222'
}

.zmdi-file:before {
    content: '\f223'
}

.zmdi-folder-outline:before {
    content: '\f224'
}

.zmdi-folder-person:before {
    content: '\f225'
}

.zmdi-folder-star-alt:before {
    content: '\f226'
}

.zmdi-folder-star:before {
    content: '\f227'
}

.zmdi-folder:before {
    content: '\f228'
}

.zmdi-gif:before {
    content: '\f229'
}

.zmdi-upload:before {
    content: '\f22a'
}

.zmdi-border-all:before {
    content: '\f22b'
}

.zmdi-border-bottom:before {
    content: '\f22c'
}

.zmdi-border-clear:before {
    content: '\f22d'
}

.zmdi-border-color:before {
    content: '\f22e'
}

.zmdi-border-horizontal:before {
    content: '\f22f'
}

.zmdi-border-inner:before {
    content: '\f230'
}

.zmdi-border-left:before {
    content: '\f231'
}

.zmdi-border-outer:before {
    content: '\f232'
}

.zmdi-border-right:before {
    content: '\f233'
}

.zmdi-border-style:before {
    content: '\f234'
}

.zmdi-border-top:before {
    content: '\f235'
}

.zmdi-border-vertical:before {
    content: '\f236'
}

.zmdi-copy:before {
    content: '\f237'
}

.zmdi-crop:before {
    content: '\f238'
}

.zmdi-format-align-center:before {
    content: '\f239'
}

.zmdi-format-align-justify:before {
    content: '\f23a'
}

.zmdi-format-align-left:before {
    content: '\f23b'
}

.zmdi-format-align-right:before {
    content: '\f23c'
}

.zmdi-format-bold:before {
    content: '\f23d'
}

.zmdi-format-clear-all:before {
    content: '\f23e'
}

.zmdi-format-clear:before {
    content: '\f23f'
}

.zmdi-format-color-fill:before {
    content: '\f240'
}

.zmdi-format-color-reset:before {
    content: '\f241'
}

.zmdi-format-color-text:before {
    content: '\f242'
}

.zmdi-format-indent-decrease:before {
    content: '\f243'
}

.zmdi-format-indent-increase:before {
    content: '\f244'
}

.zmdi-format-italic:before {
    content: '\f245'
}

.zmdi-format-line-spacing:before {
    content: '\f246'
}

.zmdi-format-list-bulleted:before {
    content: '\f247'
}

.zmdi-format-list-numbered:before {
    content: '\f248'
}

.zmdi-format-ltr:before {
    content: '\f249'
}

.zmdi-format-rtl:before {
    content: '\f24a'
}

.zmdi-format-size:before {
    content: '\f24b'
}

.zmdi-format-strikethrough-s:before {
    content: '\f24c'
}

.zmdi-format-strikethrough:before {
    content: '\f24d'
}

.zmdi-format-subject:before {
    content: '\f24e'
}

.zmdi-format-underlined:before {
    content: '\f24f'
}

.zmdi-format-valign-bottom:before {
    content: '\f250'
}

.zmdi-format-valign-center:before {
    content: '\f251'
}

.zmdi-format-valign-top:before {
    content: '\f252'
}

.zmdi-redo:before {
    content: '\f253'
}

.zmdi-select-all:before {
    content: '\f254'
}

.zmdi-space-bar:before {
    content: '\f255'
}

.zmdi-text-format:before {
    content: '\f256'
}

.zmdi-transform:before {
    content: '\f257'
}

.zmdi-undo:before {
    content: '\f258'
}

.zmdi-wrap-text:before {
    content: '\f259'
}

.zmdi-comment-alert:before {
    content: '\f25a'
}

.zmdi-comment-alt-text:before {
    content: '\f25b'
}

.zmdi-comment-alt:before {
    content: '\f25c'
}

.zmdi-comment-edit:before {
    content: '\f25d'
}

.zmdi-comment-image:before {
    content: '\f25e'
}

.zmdi-comment-list:before {
    content: '\f25f'
}

.zmdi-comment-more:before {
    content: '\f260'
}

.zmdi-comment-outline:before {
    content: '\f261'
}

.zmdi-comment-text-alt:before {
    content: '\f262'
}

.zmdi-comment-text:before {
    content: '\f263'
}

.zmdi-comment-video:before {
    content: '\f264'
}

.zmdi-comment:before {
    content: '\f265'
}

.zmdi-comments:before {
    content: '\f266'
}

.zmdi-check-all:before {
    content: '\f267'
}

.zmdi-check-circle-u:before {
    content: '\f268'
}

.zmdi-check-circle:before {
    content: '\f269'
}

.zmdi-check-square:before {
    content: '\f26a'
}

.zmdi-check:before {
    content: '\f26b'
}

.zmdi-circle-o:before {
    content: '\f26c'
}

.zmdi-circle:before {
    content: '\f26d'
}

.zmdi-dot-circle-alt:before {
    content: '\f26e'
}

.zmdi-dot-circle:before {
    content: '\f26f'
}

.zmdi-minus-circle-outline:before {
    content: '\f270'
}

.zmdi-minus-circle:before {
    content: '\f271'
}

.zmdi-minus-square:before {
    content: '\f272'
}

.zmdi-minus:before {
    content: '\f273'
}

.zmdi-plus-circle-o-duplicate:before {
    content: '\f274'
}

.zmdi-plus-circle-o:before {
    content: '\f275'
}

.zmdi-plus-circle:before {
    content: '\f276'
}

.zmdi-plus-square:before {
    content: '\f277'
}

.zmdi-plus:before {
    content: '\f278'
}

.zmdi-square-o:before {
    content: '\f279'
}

.zmdi-star-circle:before {
    content: '\f27a'
}

.zmdi-star-half:before {
    content: '\f27b'
}

.zmdi-star-outline:before {
    content: '\f27c'
}

.zmdi-star:before {
    content: '\f27d'
}

.zmdi-bluetooth-connected:before {
    content: '\f27e'
}

.zmdi-bluetooth-off:before {
    content: '\f27f'
}

.zmdi-bluetooth-search:before {
    content: '\f280'
}

.zmdi-bluetooth-setting:before {
    content: '\f281'
}

.zmdi-bluetooth:before {
    content: '\f282'
}

.zmdi-camera-add:before {
    content: '\f283'
}

.zmdi-camera-alt:before {
    content: '\f284'
}

.zmdi-camera-bw:before {
    content: '\f285'
}

.zmdi-camera-front:before {
    content: '\f286'
}

.zmdi-camera-mic:before {
    content: '\f287'
}

.zmdi-camera-party-mode:before {
    content: '\f288'
}

.zmdi-camera-rear:before {
    content: '\f289'
}

.zmdi-camera-roll:before {
    content: '\f28a'
}

.zmdi-camera-switch:before {
    content: '\f28b'
}

.zmdi-camera:before {
    content: '\f28c'
}

.zmdi-card-alert:before {
    content: '\f28d'
}

.zmdi-card-off:before {
    content: '\f28e'
}

.zmdi-card-sd:before {
    content: '\f28f'
}

.zmdi-card-sim:before {
    content: '\f290'
}

.zmdi-desktop-mac:before {
    content: '\f291'
}

.zmdi-desktop-windows:before {
    content: '\f292'
}

.zmdi-device-hub:before {
    content: '\f293'
}

.zmdi-devices-off:before {
    content: '\f294'
}

.zmdi-devices:before {
    content: '\f295'
}

.zmdi-dock:before {
    content: '\f296'
}

.zmdi-floppy:before {
    content: '\f297'
}

.zmdi-gamepad:before {
    content: '\f298'
}

.zmdi-gps-dot:before {
    content: '\f299'
}

.zmdi-gps-off:before {
    content: '\f29a'
}

.zmdi-gps:before {
    content: '\f29b'
}

.zmdi-headset-mic:before {
    content: '\f29c'
}

.zmdi-headset:before {
    content: '\f29d'
}

.zmdi-input-antenna:before {
    content: '\f29e'
}

.zmdi-input-composite:before {
    content: '\f29f'
}

.zmdi-input-hdmi:before {
    content: '\f2a0'
}

.zmdi-input-power:before {
    content: '\f2a1'
}

.zmdi-input-svideo:before {
    content: '\f2a2'
}

.zmdi-keyboard-hide:before {
    content: '\f2a3'
}

.zmdi-keyboard:before {
    content: '\f2a4'
}

.zmdi-laptop-chromebook:before {
    content: '\f2a5'
}

.zmdi-laptop-mac:before {
    content: '\f2a6'
}

.zmdi-laptop:before {
    content: '\f2a7'
}

.zmdi-mic-off:before {
    content: '\f2a8'
}

.zmdi-mic-outline:before {
    content: '\f2a9'
}

.zmdi-mic-setting:before {
    content: '\f2aa'
}

.zmdi-mic:before {
    content: '\f2ab'
}

.zmdi-mouse:before {
    content: '\f2ac'
}

.zmdi-network-alert:before {
    content: '\f2ad'
}

.zmdi-network-locked:before {
    content: '\f2ae'
}

.zmdi-network-off:before {
    content: '\f2af'
}

.zmdi-network-outline:before {
    content: '\f2b0'
}

.zmdi-network-setting:before {
    content: '\f2b1'
}

.zmdi-network:before {
    content: '\f2b2'
}

.zmdi-phone-bluetooth:before {
    content: '\f2b3'
}

.zmdi-phone-end:before {
    content: '\f2b4'
}

.zmdi-phone-forwarded:before {
    content: '\f2b5'
}

.zmdi-phone-in-talk:before {
    content: '\f2b6'
}

.zmdi-phone-locked:before {
    content: '\f2b7'
}

.zmdi-phone-missed:before {
    content: '\f2b8'
}

.zmdi-phone-msg:before {
    content: '\f2b9'
}

.zmdi-phone-paused:before {
    content: '\f2ba'
}

.zmdi-phone-ring:before {
    content: '\f2bb'
}

.zmdi-phone-setting:before {
    content: '\f2bc'
}

.zmdi-phone-sip:before {
    content: '\f2bd'
}

.zmdi-phone:before {
    content: '\f2be'
}

.zmdi-portable-wifi-changes:before {
    content: '\f2bf'
}

.zmdi-portable-wifi-off:before {
    content: '\f2c0'
}

.zmdi-portable-wifi:before {
    content: '\f2c1'
}

.zmdi-radio:before {
    content: '\f2c2'
}

.zmdi-reader:before {
    content: '\f2c3'
}

.zmdi-remote-control-alt:before {
    content: '\f2c4'
}

.zmdi-remote-control:before {
    content: '\f2c5'
}

.zmdi-router:before {
    content: '\f2c6'
}

.zmdi-scanner:before {
    content: '\f2c7'
}

.zmdi-smartphone-android:before {
    content: '\f2c8'
}

.zmdi-smartphone-download:before {
    content: '\f2c9'
}

.zmdi-smartphone-erase:before {
    content: '\f2ca'
}

.zmdi-smartphone-info:before {
    content: '\f2cb'
}

.zmdi-smartphone-iphone:before {
    content: '\f2cc'
}

.zmdi-smartphone-landscape-lock:before {
    content: '\f2cd'
}

.zmdi-smartphone-landscape:before {
    content: '\f2ce'
}

.zmdi-smartphone-lock:before {
    content: '\f2cf'
}

.zmdi-smartphone-portrait-lock:before {
    content: '\f2d0'
}

.zmdi-smartphone-ring:before {
    content: '\f2d1'
}

.zmdi-smartphone-setting:before {
    content: '\f2d2'
}

.zmdi-smartphone-setup:before {
    content: '\f2d3'
}

.zmdi-smartphone:before {
    content: '\f2d4'
}

.zmdi-speaker:before {
    content: '\f2d5'
}

.zmdi-tablet-android:before {
    content: '\f2d6'
}

.zmdi-tablet-mac:before {
    content: '\f2d7'
}

.zmdi-tablet:before {
    content: '\f2d8'
}

.zmdi-tv-alt-play:before {
    content: '\f2d9'
}

.zmdi-tv-list:before {
    content: '\f2da'
}

.zmdi-tv-play:before {
    content: '\f2db'
}

.zmdi-tv:before {
    content: '\f2dc'
}

.zmdi-usb:before {
    content: '\f2dd'
}

.zmdi-videocam-off:before {
    content: '\f2de'
}

.zmdi-videocam-switch:before {
    content: '\f2df'
}

.zmdi-videocam:before {
    content: '\f2e0'
}

.zmdi-watch:before {
    content: '\f2e1'
}

.zmdi-wifi-alt-2:before {
    content: '\f2e2'
}

.zmdi-wifi-alt:before {
    content: '\f2e3'
}

.zmdi-wifi-info:before {
    content: '\f2e4'
}

.zmdi-wifi-lock:before {
    content: '\f2e5'
}

.zmdi-wifi-off:before {
    content: '\f2e6'
}

.zmdi-wifi-outline:before {
    content: '\f2e7'
}

.zmdi-wifi:before {
    content: '\f2e8'
}

.zmdi-arrow-left-bottom:before {
    content: '\f2e9'
}

.zmdi-arrow-left:before {
    content: '\f2ea'
}

.zmdi-arrow-merge:before {
    content: '\f2eb'
}

.zmdi-arrow-missed:before {
    content: '\f2ec'
}

.zmdi-arrow-right-top:before {
    content: '\f2ed'
}

.zmdi-arrow-right:before {
    content: '\f2ee'
}

.zmdi-arrow-split:before {
    content: '\f2ef'
}

.zmdi-arrows:before {
    content: '\f2f0'
}

.zmdi-caret-down-circle:before {
    content: '\f2f1'
}

.zmdi-caret-down:before {
    content: '\f2f2'
}

.zmdi-caret-left-circle:before {
    content: '\f2f3'
}

.zmdi-caret-left:before {
    content: '\f2f4'
}

.zmdi-caret-right-circle:before {
    content: '\f2f5'
}

.zmdi-caret-right:before {
    content: '\f2f6'
}

.zmdi-caret-up-circle:before {
    content: '\f2f7'
}

.zmdi-caret-up:before {
    content: '\f2f8'
}

.zmdi-chevron-down:before {
    content: '\f2f9'
}

.zmdi-chevron-left:before {
    content: '\f2fa'
}

.zmdi-chevron-right:before {
    content: '\f2fb'
}

.zmdi-chevron-up:before {
    content: '\f2fc'
}

.zmdi-forward:before {
    content: '\f2fd'
}

.zmdi-long-arrow-down:before {
    content: '\f2fe'
}

.zmdi-long-arrow-left:before {
    content: '\f2ff'
}

.zmdi-long-arrow-return:before {
    content: '\f300'
}

.zmdi-long-arrow-right:before {
    content: '\f301'
}

.zmdi-long-arrow-tab:before {
    content: '\f302'
}

.zmdi-long-arrow-up:before {
    content: '\f303'
}

.zmdi-rotate-ccw:before {
    content: '\f304'
}

.zmdi-rotate-cw:before {
    content: '\f305'
}

.zmdi-rotate-left:before {
    content: '\f306'
}

.zmdi-rotate-right:before {
    content: '\f307'
}

.zmdi-square-down:before {
    content: '\f308'
}

.zmdi-square-right:before {
    content: '\f309'
}

.zmdi-swap-alt:before {
    content: '\f30a'
}

.zmdi-swap-vertical-circle:before {
    content: '\f30b'
}

.zmdi-swap-vertical:before {
    content: '\f30c'
}

.zmdi-swap:before {
    content: '\f30d'
}

.zmdi-trending-down:before {
    content: '\f30e'
}

.zmdi-trending-flat:before {
    content: '\f30f'
}

.zmdi-trending-up:before {
    content: '\f310'
}

.zmdi-unfold-less:before {
    content: '\f311'
}

.zmdi-unfold-more:before {
    content: '\f312'
}

.zmdi-apps:before {
    content: '\f313'
}

.zmdi-grid-off:before {
    content: '\f314'
}

.zmdi-grid:before {
    content: '\f315'
}

.zmdi-view-agenda:before {
    content: '\f316'
}

.zmdi-view-array:before {
    content: '\f317'
}

.zmdi-view-carousel:before {
    content: '\f318'
}

.zmdi-view-column:before {
    content: '\f319'
}

.zmdi-view-comfy:before {
    content: '\f31a'
}

.zmdi-view-compact:before {
    content: '\f31b'
}

.zmdi-view-dashboard:before {
    content: '\f31c'
}

.zmdi-view-day:before {
    content: '\f31d'
}

.zmdi-view-headline:before {
    content: '\f31e'
}

.zmdi-view-list-alt:before {
    content: '\f31f'
}

.zmdi-view-list:before {
    content: '\f320'
}

.zmdi-view-module:before {
    content: '\f321'
}

.zmdi-view-quilt:before {
    content: '\f322'
}

.zmdi-view-stream:before {
    content: '\f323'
}

.zmdi-view-subtitles:before {
    content: '\f324'
}

.zmdi-view-toc:before {
    content: '\f325'
}

.zmdi-view-web:before {
    content: '\f326'
}

.zmdi-view-week:before {
    content: '\f327'
}

.zmdi-widgets:before {
    content: '\f328'
}

.zmdi-alarm-check:before {
    content: '\f329'
}

.zmdi-alarm-off:before {
    content: '\f32a'
}

.zmdi-alarm-plus:before {
    content: '\f32b'
}

.zmdi-alarm-snooze:before {
    content: '\f32c'
}

.zmdi-alarm:before {
    content: '\f32d'
}

.zmdi-calendar-alt:before {
    content: '\f32e'
}

.zmdi-calendar-check:before {
    content: '\f32f'
}

.zmdi-calendar-close:before {
    content: '\f330'
}

.zmdi-calendar-note:before {
    content: '\f331'
}

.zmdi-calendar:before {
    content: '\f332'
}

.zmdi-time-countdown:before {
    content: '\f333'
}

.zmdi-time-interval:before {
    content: '\f334'
}

.zmdi-time-restore-setting:before {
    content: '\f335'
}

.zmdi-time-restore:before {
    content: '\f336'
}

.zmdi-time:before {
    content: '\f337'
}

.zmdi-timer-off:before {
    content: '\f338'
}

.zmdi-timer:before {
    content: '\f339'
}

.zmdi-android-alt:before {
    content: '\f33a'
}

.zmdi-android:before {
    content: '\f33b'
}

.zmdi-apple:before {
    content: '\f33c'
}

.zmdi-behance:before {
    content: '\f33d'
}

.zmdi-codepen:before {
    content: '\f33e'
}

.zmdi-dribbble:before {
    content: '\f33f'
}

.zmdi-dropbox:before {
    content: '\f340'
}

.zmdi-evernote:before {
    content: '\f341'
}

.zmdi-facebook-box:before {
    content: '\f342'
}

.zmdi-facebook:before {
    content: '\f343'
}

.zmdi-github-box:before {
    content: '\f344'
}

.zmdi-github:before {
    content: '\f345'
}

.zmdi-google-drive:before {
    content: '\f346'
}

.zmdi-google-earth:before {
    content: '\f347'
}

.zmdi-google-glass:before {
    content: '\f348'
}

.zmdi-google-maps:before {
    content: '\f349'
}

.zmdi-google-pages:before {
    content: '\f34a'
}

.zmdi-google-play:before {
    content: '\f34b'
}

.zmdi-google-plus-box:before {
    content: '\f34c'
}

.zmdi-google-plus:before {
    content: '\f34d'
}

.zmdi-google:before {
    content: '\f34e'
}

.zmdi-instagram:before {
    content: '\f34f'
}

.zmdi-language-css3:before {
    content: '\f350'
}

.zmdi-language-html5:before {
    content: '\f351'
}

.zmdi-language-javascript:before {
    content: '\f352'
}

.zmdi-language-python-alt:before {
    content: '\f353'
}

.zmdi-language-python:before {
    content: '\f354'
}

.zmdi-lastfm:before {
    content: '\f355'
}

.zmdi-linkedin-box:before {
    content: '\f356'
}

.zmdi-paypal:before {
    content: '\f357'
}

.zmdi-pinterest-box:before {
    content: '\f358'
}

.zmdi-pocket:before {
    content: '\f359'
}

.zmdi-polymer:before {
    content: '\f35a'
}

.zmdi-share:before {
    content: '\f35b'
}

.zmdi-stackoverflow:before {
    content: '\f35c'
}

.zmdi-steam-square:before {
    content: '\f35d'
}

.zmdi-steam:before {
    content: '\f35e'
}

.zmdi-twitter-box:before {
    content: '\f35f'
}

.zmdi-twitter:before {
    content: '\f360'
}

.zmdi-vk:before {
    content: '\f361'
}

.zmdi-wikipedia:before {
    content: '\f362'
}

.zmdi-windows:before {
    content: '\f363'
}

.zmdi-aspect-ratio-alt:before {
    content: '\f364'
}

.zmdi-aspect-ratio:before {
    content: '\f365'
}

.zmdi-blur-circular:before {
    content: '\f366'
}

.zmdi-blur-linear:before {
    content: '\f367'
}

.zmdi-blur-off:before {
    content: '\f368'
}

.zmdi-blur:before {
    content: '\f369'
}

.zmdi-brightness-2:before {
    content: '\f36a'
}

.zmdi-brightness-3:before {
    content: '\f36b'
}

.zmdi-brightness-4:before {
    content: '\f36c'
}

.zmdi-brightness-5:before {
    content: '\f36d'
}

.zmdi-brightness-6:before {
    content: '\f36e'
}

.zmdi-brightness-7:before {
    content: '\f36f'
}

.zmdi-brightness-auto:before {
    content: '\f370'
}

.zmdi-brightness-setting:before {
    content: '\f371'
}

.zmdi-broken-image:before {
    content: '\f372'
}

.zmdi-center-focus-strong:before {
    content: '\f373'
}

.zmdi-center-focus-weak:before {
    content: '\f374'
}

.zmdi-compare:before {
    content: '\f375'
}

.zmdi-crop-16-9:before {
    content: '\f376'
}

.zmdi-crop-3-2:before {
    content: '\f377'
}

.zmdi-crop-5-4:before {
    content: '\f378'
}

.zmdi-crop-7-5:before {
    content: '\f379'
}

.zmdi-crop-din:before {
    content: '\f37a'
}

.zmdi-crop-free:before {
    content: '\f37b'
}

.zmdi-crop-landscape:before {
    content: '\f37c'
}

.zmdi-crop-portrait:before {
    content: '\f37d'
}

.zmdi-crop-square:before {
    content: '\f37e'
}

.zmdi-exposure-alt:before {
    content: '\f37f'
}

.zmdi-exposure:before {
    content: '\f380'
}

.zmdi-filter-b-and-w:before {
    content: '\f381'
}

.zmdi-filter-center-focus:before {
    content: '\f382'
}

.zmdi-filter-frames:before {
    content: '\f383'
}

.zmdi-filter-tilt-shift:before {
    content: '\f384'
}

.zmdi-gradient:before {
    content: '\f385'
}

.zmdi-grain:before {
    content: '\f386'
}

.zmdi-graphic-eq:before {
    content: '\f387'
}

.zmdi-hdr-off:before {
    content: '\f388'
}

.zmdi-hdr-strong:before {
    content: '\f389'
}

.zmdi-hdr-weak:before {
    content: '\f38a'
}

.zmdi-hdr:before {
    content: '\f38b'
}

.zmdi-iridescent:before {
    content: '\f38c'
}

.zmdi-leak-off:before {
    content: '\f38d'
}

.zmdi-leak:before {
    content: '\f38e'
}

.zmdi-looks:before {
    content: '\f38f'
}

.zmdi-loupe:before {
    content: '\f390'
}

.zmdi-panorama-horizontal:before {
    content: '\f391'
}

.zmdi-panorama-vertical:before {
    content: '\f392'
}

.zmdi-panorama-wide-angle:before {
    content: '\f393'
}

.zmdi-photo-size-select-large:before {
    content: '\f394'
}

.zmdi-photo-size-select-small:before {
    content: '\f395'
}

.zmdi-picture-in-picture:before {
    content: '\f396'
}

.zmdi-slideshow:before {
    content: '\f397'
}

.zmdi-texture:before {
    content: '\f398'
}

.zmdi-tonality:before {
    content: '\f399'
}

.zmdi-vignette:before {
    content: '\f39a'
}

.zmdi-wb-auto:before {
    content: '\f39b'
}

.zmdi-eject-alt:before {
    content: '\f39c'
}

.zmdi-eject:before {
    content: '\f39d'
}

.zmdi-equalizer:before {
    content: '\f39e'
}

.zmdi-fast-forward:before {
    content: '\f39f'
}

.zmdi-fast-rewind:before {
    content: '\f3a0'
}

.zmdi-forward-10:before {
    content: '\f3a1'
}

.zmdi-forward-30:before {
    content: '\f3a2'
}

.zmdi-forward-5:before {
    content: '\f3a3'
}

.zmdi-hearing:before {
    content: '\f3a4'
}

.zmdi-pause-circle-outline:before {
    content: '\f3a5'
}

.zmdi-pause-circle:before {
    content: '\f3a6'
}

.zmdi-pause:before {
    content: '\f3a7'
}

.zmdi-play-circle-outline:before {
    content: '\f3a8'
}

.zmdi-play-circle:before {
    content: '\f3a9'
}

.zmdi-play:before {
    content: '\f3aa'
}

.zmdi-playlist-audio:before {
    content: '\f3ab'
}

.zmdi-playlist-plus:before {
    content: '\f3ac'
}

.zmdi-repeat-one:before {
    content: '\f3ad'
}

.zmdi-repeat:before {
    content: '\f3ae'
}

.zmdi-replay-10:before {
    content: '\f3af'
}

.zmdi-replay-30:before {
    content: '\f3b0'
}

.zmdi-replay-5:before {
    content: '\f3b1'
}

.zmdi-replay:before {
    content: '\f3b2'
}

.zmdi-shuffle:before {
    content: '\f3b3'
}

.zmdi-skip-next:before {
    content: '\f3b4'
}

.zmdi-skip-previous:before {
    content: '\f3b5'
}

.zmdi-stop:before {
    content: '\f3b6'
}

.zmdi-surround-sound:before {
    content: '\f3b7'
}

.zmdi-tune:before {
    content: '\f3b8'
}

.zmdi-volume-down:before {
    content: '\f3b9'
}

.zmdi-volume-mute:before {
    content: '\f3ba'
}

.zmdi-volume-off:before {
    content: '\f3bb'
}

.zmdi-volume-up:before {
    content: '\f3bc'
}

.zmdi-n-1-square:before {
    content: '\f3bd'
}

.zmdi-n-2-square:before {
    content: '\f3be'
}

.zmdi-n-3-square:before {
    content: '\f3bf'
}

.zmdi-n-4-square:before {
    content: '\f3c0'
}

.zmdi-n-5-square:before {
    content: '\f3c1'
}

.zmdi-n-6-square:before {
    content: '\f3c2'
}

.zmdi-neg-1:before {
    content: '\f3c3'
}

.zmdi-neg-2:before {
    content: '\f3c4'
}

.zmdi-plus-1:before {
    content: '\f3c5'
}

.zmdi-plus-2:before {
    content: '\f3c6'
}

.zmdi-sec-10:before {
    content: '\f3c7'
}

.zmdi-sec-3:before {
    content: '\f3c8'
}

.zmdi-zero:before {
    content: '\f3c9'
}

.zmdi-airline-seat-flat-angled:before {
    content: '\f3ca'
}

.zmdi-airline-seat-flat:before {
    content: '\f3cb'
}

.zmdi-airline-seat-individual-suite:before {
    content: '\f3cc'
}

.zmdi-airline-seat-legroom-extra:before {
    content: '\f3cd'
}

.zmdi-airline-seat-legroom-normal:before {
    content: '\f3ce'
}

.zmdi-airline-seat-legroom-reduced:before {
    content: '\f3cf'
}

.zmdi-airline-seat-recline-extra:before {
    content: '\f3d0'
}

.zmdi-airline-seat-recline-normal:before {
    content: '\f3d1'
}

.zmdi-airplay:before {
    content: '\f3d2'
}

.zmdi-closed-caption:before {
    content: '\f3d3'
}

.zmdi-confirmation-number:before {
    content: '\f3d4'
}

.zmdi-developer-board:before {
    content: '\f3d5'
}

.zmdi-disc-full:before {
    content: '\f3d6'
}

.zmdi-explicit:before {
    content: '\f3d7'
}

.zmdi-flight-land:before {
    content: '\f3d8'
}

.zmdi-flight-takeoff:before {
    content: '\f3d9'
}

.zmdi-flip-to-back:before {
    content: '\f3da'
}

.zmdi-flip-to-front:before {
    content: '\f3db'
}

.zmdi-group-work:before {
    content: '\f3dc'
}

.zmdi-hd:before {
    content: '\f3dd'
}

.zmdi-hq:before {
    content: '\f3de'
}

.zmdi-markunread-mailbox:before {
    content: '\f3df'
}

.zmdi-memory:before {
    content: '\f3e0'
}

.zmdi-nfc:before {
    content: '\f3e1'
}

.zmdi-play-for-work:before {
    content: '\f3e2'
}

.zmdi-power-input:before {
    content: '\f3e3'
}

.zmdi-present-to-all:before {
    content: '\f3e4'
}

.zmdi-satellite:before {
    content: '\f3e5'
}

.zmdi-tap-and-play:before {
    content: '\f3e6'
}

.zmdi-vibration:before {
    content: '\f3e7'
}

.zmdi-voicemail:before {
    content: '\f3e8'
}

.zmdi-group:before {
    content: '\f3e9'
}

.zmdi-rss:before {
    content: '\f3ea'
}

.zmdi-shape:before {
    content: '\f3eb'
}

.zmdi-spinner:before {
    content: '\f3ec'
}

.zmdi-ungroup:before {
    content: '\f3ed'
}

.zmdi-500px:before {
    content: '\f3ee'
}

.zmdi-8tracks:before {
    content: '\f3ef'
}

.zmdi-amazon:before {
    content: '\f3f0'
}

.zmdi-blogger:before {
    content: '\f3f1'
}

.zmdi-delicious:before {
    content: '\f3f2'
}

.zmdi-disqus:before {
    content: '\f3f3'
}

.zmdi-flattr:before {
    content: '\f3f4'
}

.zmdi-flickr:before {
    content: '\f3f5'
}

.zmdi-github-alt:before {
    content: '\f3f6'
}

.zmdi-google-old:before {
    content: '\f3f7'
}

.zmdi-linkedin:before {
    content: '\f3f8'
}

.zmdi-odnoklassniki:before {
    content: '\f3f9'
}

.zmdi-outlook:before {
    content: '\f3fa'
}

.zmdi-paypal-alt:before {
    content: '\f3fb'
}

.zmdi-pinterest:before {
    content: '\f3fc'
}

.zmdi-playstation:before {
    content: '\f3fd'
}

.zmdi-reddit:before {
    content: '\f3fe'
}

.zmdi-skype:before {
    content: '\f3ff'
}

.zmdi-slideshare:before {
    content: '\f400'
}

.zmdi-soundcloud:before {
    content: '\f401'
}

.zmdi-tumblr:before {
    content: '\f402'
}

.zmdi-twitch:before {
    content: '\f403'
}

.zmdi-vimeo:before {
    content: '\f404'
}

.zmdi-whatsapp:before {
    content: '\f405'
}

.zmdi-xbox:before {
    content: '\f406'
}

.zmdi-yahoo:before {
    content: '\f407'
}

.zmdi-youtube-play:before {
    content: '\f408'
}

.zmdi-youtube:before {
    content: '\f409'
}

.zmdi-import-export:before {
    content: '\f30c'
}

.zmdi-swap-vertical-:before {
    content: '\f30c'
}

.zmdi-airplanemode-inactive:before {
    content: '\f102'
}

.zmdi-airplanemode-active:before {
    content: '\f103'
}

.zmdi-rate-review:before {
    content: '\f103'
}

.zmdi-comment-sign:before {
    content: '\f25a'
}

.zmdi-network-warning:before {
    content: '\f2ad'
}

.zmdi-shopping-cart-add:before {
    content: '\f1ca'
}

.zmdi-file-add:before {
    content: '\f221'
}

.zmdi-network-wifi-scan:before {
    content: '\f2e4'
}

.zmdi-collection-add:before {
    content: '\f14e'
}

.zmdi-format-playlist-add:before {
    content: '\f3ac'
}

.zmdi-format-queue-music:before {
    content: '\f3ab'
}

.zmdi-plus-box:before {
    content: '\f277'
}

.zmdi-tag-backspace:before {
    content: '\f1d9'
}

.zmdi-alarm-add:before {
    content: '\f32b'
}

.zmdi-battery-charging:before {
    content: '\f114'
}

.zmdi-daydream-setting:before {
    content: '\f217'
}

.zmdi-more-horiz:before {
    content: '\f19c'
}

.zmdi-book-photo:before {
    content: '\f11b'
}

.zmdi-incandescent:before {
    content: '\f189'
}

.zmdi-wb-iridescent:before {
    content: '\f38c'
}

.zmdi-calendar-remove:before {
    content: '\f330'
}

.zmdi-refresh-sync-disabled:before {
    content: '\f1b7'
}

.zmdi-refresh-sync-problem:before {
    content: '\f1b6'
}

.zmdi-crop-original:before {
    content: '\f17e'
}

.zmdi-power-off:before {
    content: '\f1af'
}

.zmdi-power-off-setting:before {
    content: '\f1ae'
}

.zmdi-leak-remove:before {
    content: '\f38d'
}

.zmdi-star-border:before {
    content: '\f27c'
}

.zmdi-brightness-low:before {
    content: '\f36d'
}

.zmdi-brightness-medium:before {
    content: '\f36e'
}

.zmdi-brightness-high:before {
    content: '\f36f'
}

.zmdi-smartphone-portrait:before {
    content: '\f2d4'
}

.zmdi-live-tv:before {
    content: '\f2d9'
}

.zmdi-format-textdirection-l-to-r:before {
    content: '\f249'
}

.zmdi-format-textdirection-r-to-l:before {
    content: '\f24a'
}

.zmdi-arrow-back:before {
    content: '\f2ea'
}

.zmdi-arrow-forward:before {
    content: '\f2ee'
}

.zmdi-arrow-in:before {
    content: '\f2e9'
}

.zmdi-arrow-out:before {
    content: '\f2ed'
}

.zmdi-rotate-90-degrees-ccw:before {
    content: '\f304'
}

.zmdi-adb:before {
    content: '\f33a'
}

.zmdi-network-wifi:before {
    content: '\f2e8'
}

.zmdi-network-wifi-alt:before {
    content: '\f2e3'
}

.zmdi-network-wifi-lock:before {
    content: '\f2e5'
}

.zmdi-network-wifi-off:before {
    content: '\f2e6'
}

.zmdi-network-wifi-outline:before {
    content: '\f2e7'
}

.zmdi-network-wifi-info:before {
    content: '\f2e4'
}

.zmdi-layers-clear:before {
    content: '\f18b'
}

.zmdi-colorize:before {
    content: '\f15d'
}

.zmdi-format-paint:before {
    content: '\f1ba'
}

.zmdi-format-quote:before {
    content: '\f1b2'
}

.zmdi-camera-monochrome-photos:before {
    content: '\f285'
}

.zmdi-sort-by-alpha:before {
    content: '\f1cf'
}

.zmdi-folder-shared:before {
    content: '\f225'
}

.zmdi-folder-special:before {
    content: '\f226'
}

.zmdi-comment-dots:before {
    content: '\f260'
}

.zmdi-reorder:before {
    content: '\f31e'
}

.zmdi-dehaze:before {
    content: '\f197'
}

.zmdi-sort:before {
    content: '\f1ce'
}

.zmdi-pages:before {
    content: '\f34a'
}

.zmdi-stack-overflow:before {
    content: '\f35c'
}

.zmdi-calendar-account:before {
    content: '\f204'
}

.zmdi-paste:before {
    content: '\f109'
}

.zmdi-cut:before {
    content: '\f1bc'
}

.zmdi-save:before {
    content: '\f297'
}

.zmdi-smartphone-code:before {
    content: '\f139'
}

.zmdi-directions-bike:before {
    content: '\f117'
}

.zmdi-directions-boat:before {
    content: '\f11a'
}

.zmdi-directions-bus:before {
    content: '\f121'
}

.zmdi-directions-car:before {
    content: '\f125'
}

.zmdi-directions-railway:before {
    content: '\f1b3'
}

.zmdi-directions-run:before {
    content: '\f215'
}

.zmdi-directions-subway:before {
    content: '\f1d5'
}

.zmdi-directions-walk:before {
    content: '\f216'
}

.zmdi-local-hotel:before {
    content: '\f178'
}

.zmdi-local-activity:before {
    content: '\f1df'
}

.zmdi-local-play:before {
    content: '\f1df'
}

.zmdi-local-airport:before {
    content: '\f103'
}

.zmdi-local-atm:before {
    content: '\f198'
}

.zmdi-local-bar:before {
    content: '\f137'
}

.zmdi-local-cafe:before {
    content: '\f13b'
}

.zmdi-local-car-wash:before {
    content: '\f124'
}

.zmdi-local-convenience-store:before {
    content: '\f1d3'
}

.zmdi-local-dining:before {
    content: '\f153'
}

.zmdi-local-drink:before {
    content: '\f157'
}

.zmdi-local-florist:before {
    content: '\f168'
}

.zmdi-local-gas-station:before {
    content: '\f16f'
}

.zmdi-local-grocery-store:before {
    content: '\f1cb'
}

.zmdi-local-hospital:before {
    content: '\f177'
}

.zmdi-local-laundry-service:before {
    content: '\f1e9'
}

.zmdi-local-library:before {
    content: '\f18d'
}

.zmdi-local-mall:before {
    content: '\f195'
}

.zmdi-local-movies:before {
    content: '\f19d'
}

.zmdi-local-offer:before {
    content: '\f187'
}

.zmdi-local-parking:before {
    content: '\f1a5'
}

.zmdi-local-parking:before {
    content: '\f1a5'
}

.zmdi-local-pharmacy:before {
    content: '\f176'
}

.zmdi-local-phone:before {
    content: '\f2be'
}

.zmdi-local-pizza:before {
    content: '\f1ac'
}

.zmdi-local-post-office:before {
    content: '\f15a'
}

.zmdi-local-printshop:before {
    content: '\f1b0'
}

.zmdi-local-see:before {
    content: '\f28c'
}

.zmdi-local-shipping:before {
    content: '\f1e6'
}

.zmdi-local-store:before {
    content: '\f1d4'
}

.zmdi-local-taxi:before {
    content: '\f123'
}

.zmdi-local-wc:before {
    content: '\f211'
}

.zmdi-my-location:before {
    content: '\f299'
}

.zmdi-directions:before {
    content: '\f1e7'
}
</style>