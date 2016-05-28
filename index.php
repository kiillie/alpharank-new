<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Alpharank</title>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
  </head>
  <body>
    <header class="header clearfix">
      <canvas class="dots-canvas"></canvas>
      <video autoplay  poster="images/brian_ley.png" id="bgvid" loop>
      <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
      <source src="videos/biran_ley_edited.webm" type="video/webm">
      <source src="videos/biran_ley_edited.mp4" type="video/mp4">
      </video>
      <div class="vids-overlay"></div>
      <nav>
        <div class="main-nav fixed-top">
          <ul>
            <li>
              <a href="/">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="238px" height="36px" viewBox="0 0 238 36" enable-background="new 0 0 238 36" xml:space="preserve">
                  <g id="Layer_1" display="none">
                  </g>
                  <g id="Layer_2" display="none">
                    
                      <rect id="background" x="-78.3" y="-120.6" display="inline" fill="#FFFFFF" stroke="#000000" stroke-miterlimit="10" width="400" height="300"/>
                    
                      <image display="inline" overflow="visible" width="228" height="29" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOQAAAAdCAYAAAC6ysBcAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
                  bWFnZVJlYWR5ccllPAAAA2ppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
                  bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
                  eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1
                  Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
                  dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
                  dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
                  MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
                  b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
                  Ok9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMjgwMTE3NDA3MjA2ODExOEE2RENFODIzMERD
                  MDc4QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3MUUzRTExNzVFQUExMUU1OEU1NUJFMEZB
                  MDdDODNBOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3MUUzRTExNjVFQUExMUU1OEU1NUJF
                  MEZBMDdDODNBOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoV2lu
                  ZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCMTZE
                  MDkyMjVEODkxMUU1QTY0QkUwOUEzOTcyNDI0QyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpC
                  MTZEMDkyMzVEODkxMUU1QTY0QkUwOUEzOTcyNDI0QyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9y
                  ZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlrsYMEAAA0jSURBVHja7F0J
                  kFTVFb2/u6d7NpgBZ9gXIRIWEwRFSUCigYSQRBCHpTTGaGIwJEHLUkQlUCoSNZGEMsGUGo0pFUmI
                  RYhCBMSIMUEMYRFBEDQgYQnLMMzWPTM93Z13u+/XP6/v+//93z0LVX2qbtHz/tLvv3eXc+97/TES
                  iQTkkEMOHQO+3BDkkEPHQcD8UPbyEi/X3yrkNiGdhWyizyd0LowHA9B/zXYo23kIYsFAbiY6kpdu
                  jkO4e2c4cP04SPiFz86xqFbB6Slz1QbpAVOF/Mry90wh+UKuQXvTuYERj7v5vlIhjwoJSe2VQuYJ
                  iTpcP0HIjVJbk5B7hZzS7MNnhSzQOA/7ckTIP4W8YdO364VMEmLV+CP0HarBKRHycyEF1qEUskLI
                  XzX69qCQ/kx/70YdMe/mi8bE/CQgEWjRu4FC7ne4f0xIHT3HO0LeojY3mC1krDQuiGVC/uVwbSfS
                  k0JpfHZRuwo3C7lS+s7/MM87jXTfel41jV+Yue9lQuZIbX6aq+XZNMgZTNtEIT2EHHO8WnhdQ3hi
                  F74X7/19xbGVQt52uP5zQm5g2h92YZA9FfewwzYh9wjZyBy7XMi3pTZUgoU29yukcZDTjb0aBmnn
                  UN4U8lySvfgMyKtvFNIAkVCx+KJPZqm7h+d/h5T1Tc3z8fnuIz2S0axhkAU0Pn7m2GZykhyuZOZi
                  D2OQo5nz6mnOZINER/ALmmcZj2Y7h6xm2hpJHEKjAX7hgfMrhSP1a3dhus2xaRrXNzFtYd1obvH+
                  bnEJGcpM5lgD01bv5MqE1Go+n4zJWuOL89MYheBZ0RWfL9PnRwVeL2SK5vmXK4wR8TWKgF7GB8g4
                  /IpjunPB6XctE81NFskZ4yNCdmbbIJ8SUmNNC4lSVDrmjwEfdDp4CvJP10BczyDLiXKqMIWhsh0J
                  eUKeETK4HftgODgujBC9Pk0nEhA6Uw+J7JT9QvT8vTN0vL2on14xmqhpWyCooPdH7ahzJsONFj5e
                  yO+EHBDyD638KpmfxKHblv3JSdfEV4V0tTk+iLh6e6GBvGm9TaQqFvKTduzjUCGjHHKvSdY4k2Qw
                  CVfPH7Y5p0zILQ73wTH6RgYGq4MHyMG3NpDWDmfaFwk50xoGaeZH6HFmUcJf5Jw7QjIqxgqCYOhX
                  72YwFCGS5YnKBPj8w0guopyJM8yrSDHbA1dTpLYaUY1qnBMijwxV1YEvpsXof0zPjnn6F4Q8oThv
                  koPOXSFF0TijvEhbSzMYhx4ahalMUawITjuEPGt3YbbWIbfQv+N1Tk4EDDg7uJebAfyy1Pa6kK2M
                  she0k7IjDTlMsg9SVdDHmfO6CLmwHfqH81zBKMd6qW2ckL4pg/RBsDoM/oZo0jgdcIye/SAVcX4I
                  qeqqjP6krLrRD9Of56W27ow+eHGgo1pxvLFKPIBpnw8OqwHZMkhMdDcIuVZLO6IxqB3QDRpLC3WW
                  PtAjlkht+F2bpbaBFJ3aK0eUsUZxbk8dn5Xl/qETGCm1YbVyndRWZFJGzB0D4UYI1olA6myQ3PNv
                  V+RVeYp7lLSgzCmgkf+BGY/pWZivJZRXZwMJi6EhA7pLoQ/rdDxntrCD8rjbyUOOUKaRIndsLCmE
                  moHdk/mkh5zhbUtUtmJyByrkxGyKK3aIg33lN+LBYLHa52dYzWbleCcrrc0QrKqHhOFJTboxbVyq
                  YS0qydXVd4kJHWXOLXbRlzhDz6+A9OULr/BT3zE3vZd59kaKjo7I1haZG8jz/5YKLKfpYYeQh0vX
                  SpE/1lzQI7lTxwa9aeBkerSXviMi0dSplB9E29j4OANS0aqTDvdCqvOKwuiwLV8rV2+pLDJdbaII
                  +TGJdaMALsifL+QQshfMIzUoq7w8gEs9X2fO22NT+OHWtd8gx7ZFcsy9qJ/rXYzDKtJJq87/lCJX
                  VYbzX071lASlJTKeFvJeWxkkDv7nySvMtyjO08TT34fULomWBtkcg/peXaBJRMq8mkhqi1Y6cFLl
                  dae3yOMcoag8xnJsKPVnSxsbZJAEESLqdTtzXh2Nhx06Uz6cLQyH9GrfLsr3cJ5wwf47lmMF9P3L
                  MEpipVWj+PYDckAGRYoKReFlheJ6VOKJjJGbmwnWMUxpuguDROXCDQF9hHzF0t6XdPauDMfYsCk0
                  oZ4+4CbZtwKVaR5Rwt1CVmsk0KPI494odXAWDeoYFW2NFudDbb8yu0oeR1etu1E2MgMzDdoeT5KS
                  76IosJLJe83+Hm/jvl3DzPMGSwRerxr3VKW1Puk8HYg2bnrAqiIu69ysiBJbaVw4TID0pQiMOP+l
                  z5sgfUGec9ZOTGEx0z6HDLO6lca/nqHLWgZZRArzPaKZi4i7I336EXNtEeWJw2y8Q1eiWEpUD+op
                  chR2tvtB+i4HHLSXLX+/xORqUyzRqq2AnncwSV+bnPLhNu5XgGi83A+rYawVclY6B5cuLsDcMVgT
                  hgBWWo2M6h/7IbVvt9EFXX3J8vkjSN8yx6UzdiiliPua1I76eSfYrA1mCNSJ29xMmAk0wPOI8pk5
                  AU7cq0L+CKk9ll1oskaSweD1WJp+QXH/0zY5Q4q29ukKTaUsbf0mkyudkQo3BdTXzpY23K85Gviy
                  e3tiHjjvw0Q0g7nJW+1EyzUrhBdDam3QijDN4XBLelElOVVkSpMTPliKlda82ghEC0OC1XjZOQcf
                  kmNV7Rcuk2ikCeu+2YSiGDQd1NVsVTFtLs2DdWfXt4T8JYO5baB+RKngJFfSkRLjPuETbgxyJuUC
                  coK+hmjNavJ0+yhq/ptobX+6Fnfs3EQKgzP3FEXIFcoRstDWsnc/hlhLg5ymKHg8pzFA0zqQQeIk
                  LKSCl240GQfqKm03GvvOGveqYAwXad4TWmNoGEt9TTEInQ1DuGeXTNjDRcBvrkeodmHp7GqaRKmB
                  G7qJacWvyTCtRZmryfC9UAF0aNeRM0XjXs4UfXCzyB1uDBLXZg4ozjtMRshRi1MUlkdS1aqUIpmf
                  DDTm1BGkreftOiwb3tgMjACj6D3AbxhuDXwgKUWMcsW/C/kT6Pz6pWWEtKNPeaC37JEH+hu6OeAS
                  1hDhNPeFKusEZbU9dy45wGJKd8olSriE7tekWSfQhblJYLXL6x6iINJPMppMijpFpAMraTzkdd/Z
                  VGv4QDeHRH5/oQ312W1zn+Ukx4jvozK+SJWzaymqdaECwyPk/UZ8Qlt7d4VoSYF1k8Bkp9zTAbhJ
                  4IsuDCBTzCGabMoYitKPuTRGc3L9mk7UDpdCqursFSmDFr3JP4OVVttz3yMa+DchS5njGCG/qzCo
                  8RmO/QyPEW0+tA5Qnx5k2jG9ut9NUQe3KP2S8kiQ+PUoSN/CJGMHUaHHyBPsJRlD+QpuRl9FoRur
                  Xbg0MSdJWzsJ2tq3LPlLdRu62kQeiJOYR89rEF0qdZCAxn06GiqYtrjNGHLRqyLhM4wg7mmN2lZa
                  rfnYb+DT6qgVCyC9+jpRURBU9ZGrR0wEvqrrhBfJgbQGMB/lNl3MBMWqA2eQiyk/3E6WPJuiHhrX
                  LVTU8YJDkKqM9mMmEd84MAoreJHuJSYRG0RRBpiQP0QhDzHnY1Go0KFv+TQp+x1kxDlmkCEFXV1m
                  M4bcLzEuSfh8w4I1EfBHmnQrrdVklFwueYdGdNto00fMres0i0JOQG27E/R+R+oWcSqScva2WNcg
                  Md+6ipR7LFEMs2r0QgadC9pEKyM1KfgTkISp1pMh/beN1ZTD/k8hqyB9t0x/jTzUjJDlDhKEcwuj
                  ybHJ+LPNGOL4yssfAZE7Tg0IYwzWRXR27JhApnSUacfy//n0WfXbRrt5xmCxLUu0FYi1Pd5Kc4CF
                  0NeZdsx5p+oYpGnZT1LlazQVZbZl2LE84BfJTSQrbKGz9XZ0FfMTu6WAPRTJsjVRnDc9l8CN4XGH
                  ucRCUvprUAyjQtBVX7AqLL89wA5o2D9j2rEyfB99xgqpvLAf06CR3EaGCeD9Z20YsY600jwsUujO
                  IlD8oL4tXgOJvP99mxi1NdDQDEXHq3AdcqSCY7/m8B0YyTcpOHtXi2PwCr/0r+q4F2opw4lmY5gq
                  VjARU+mvY46jsdV6UPaLjXj8svzKWqSsfheFpmcUac5NxFy4V5p8RGmTHTYonPpUzfHhHJFqiaVQ
                  8z5FirQFq+zce45wq+mtmVTsMo0uWHX6EvMw2+IB/4qSD09A/snk6zwwz1hnoZ8GXf+KxvcsJ5qa
                  kBxOHxp0nOxXXUY7c5DN15KcpntYoyaec8Lj2OyU+oT3OujQxwainkXSdWY5vTdFwrj0HM9q9Gct
                  sSOf5d4+ESV7J7fQxROViuc/pnDEWP6fxcwJpkYnJWU1aO6dqt5Y0f09pCq01j6YhZ1GGp9i6fhe
                  m3s+T4xwgGJMrdjNzNkZUP+gYQGdY0jXfIZVOPPN5R7fy+oGuPdwIeU2EYpod8eCgePl2w9Cv7U7
                  IB7KvZ+1I8LX1AxVQ/vAwYpLU9XWHLIC7r2sRu6/Esghhw7k/HJDkEMOHQf/F2AAm4uHrVLFwwgA
                  AAAASUVORK5CYII=" transform="matrix(1 0 0 1 7.6665 2.668)">
                    </image>
                  </g>
                  <g id="Layer_3">
                    <g>
                      <path fill="#fff" d="M42.4,27.6l8-21.3h4.7L63,27.6h-6.2l-1.3-4.2h-5.7l-1.3,4.2H42.4z M52.7,12.4l-2,7.1h3.9L52.7,12.4z"/>
                      <path fill="#fff" d="M64.6,27.6V6.3h5.9v16.2h9.7v5.1H64.6z"/>
                      <path fill="#fff" d="M82.3,27.6V6.3h9.2c1,0,2,0.2,2.9,0.6c0.9,0.4,1.6,1,2.3,1.7c0.6,0.7,1.1,1.5,1.5,2.4
                        c0.4,0.9,0.5,1.8,0.5,2.7c0,0.9-0.2,1.9-0.5,2.7c-0.3,0.9-0.8,1.7-1.4,2.4c-0.6,0.7-1.4,1.2-2.2,1.7c-0.9,0.4-1.8,0.6-2.9,0.6
                        h-3.5v6.5H82.3z M88.1,15.9h3.1c0.4,0,0.7-0.2,1-0.5c0.3-0.3,0.5-0.9,0.5-1.8c0-0.9-0.2-1.5-0.5-1.8c-0.4-0.3-0.7-0.5-1.1-0.5
                        h-2.9V15.9z"/>
                      <path fill="#fff" d="M119.7,6.3v21.3h-5.9v-8.3h-7.1v8.3h-5.9V6.3h5.9v7.9h7.1V6.3H119.7z"/>
                      <path fill="#fff" d="M121.3,27.6l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2H121.3z M131.6,12.4l-2,7.1h3.9L131.6,12.4z"
                        />
                      <path fill="#13B28B" d="M143.5,27.6V6.3h9.8c1,0,2,0.2,2.9,0.6c0.9,0.4,1.6,1,2.3,1.7s1.1,1.5,1.5,2.4c0.4,0.9,0.5,1.8,0.5,2.7
                        c0,1.2-0.3,2.4-0.8,3.5c-0.5,1.1-1.3,1.9-2.3,2.6l4.8,7.8h-6.6l-4-6.5h-2.2v6.5H143.5z M149.3,15.9h3.7c0.4,0,0.7-0.2,1-0.6
                        c0.3-0.4,0.5-1,0.5-1.7c0-0.7-0.2-1.3-0.5-1.7c-0.4-0.4-0.7-0.6-1.1-0.6h-3.5V15.9z"/>
                      <path fill="#13B28B" d="M162,27.6l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2H162z M172.3,12.4l-2,7.1h3.9L172.3,12.4z"/>
                      <path fill="#13B28B" d="M190.1,17.1v10.5h-5.8V6.3h4.6l8.6,10.8V6.3h5.8v21.3h-4.7L190.1,17.1z"/>
                      <path fill="#13B28B" d="M206.8,27.6V6.3h5.8V15l7.1-8.7h6l-7.7,9.5l8.3,11.8h-6.1l-5.6-8.5l-1.9,2.2v6.3H206.8z"/>
                    </g>
                  </g>
                  <g id="Layer_4">
                    <circle fill="none" stroke="#13B28B" stroke-miterlimit="10" cx="14.1" cy="21.3" r="3.8"/>
                    <line fill="#5FC2A4" stroke="#13B28B" stroke-miterlimit="10" x1="17.9" y1="20.3" x2="23.6" y2="18.8"/>
                    <circle opacity="0.4" fill="#13B38B" cx="28.1" cy="18.2" r="4.6"/>
                    <circle fill="#13B38B" cx="28.1" cy="18.2" r="2.3"/>
                    <line fill="none" stroke="#13B28B" stroke-miterlimit="10" x1="27" y1="13.8" x2="25.4" y2="9.5"/>
                    <circle fill="#13B38B" cx="24.5" cy="7.3" r="2.6"/>
                    <line fill="none" stroke="#13B28B" stroke-miterlimit="10" x1="31.5" y1="21.3" x2="33.7" y2="23.5"/>
                    <circle fill="#13B38B" cx="36.1" cy="25.8" r="3.6"/>
                  </g>
                  </svg>
                </a>
              </li>
              <li><a class="nav-links" href="api.html"><i class="fa fa-cogs"></i><span>View API</span></a></li>
              <li><a class="nav-links" href="#"><i class="fa fa-group"></i><span>About</span></a></li>
              <li><a class="nav-links" href="#"><i class="fa fa-paper-plane"></i><span>Contact</span></a></li>
          </ul>
        </div>
      </nav>
      <div class="hero-container">
        <h2 data-sr="enter bottom, ease-in-out 100px">We map <i class="it">human</i> networks</h2>
        <p data-sr="enter bottom, ease-in-out 100px wait 0.3s">Companies still build recommendation engines and analyze their customers by behaviors recorded in-store or online. Humans are active organisms that grow in networks. Alpharank allows you to predict which customers will matter over time without hours of data science and many complicated models.</p>
        <div  data-sr="enter bottom, ease-in-out 100px, wait 0.6s"><a class="btn btn-primary" href="api.html"><i class="fa fa-code"></i> View API</a><a class="btn btn-primary" href="#"><i class="fa fa-phone"></i>Contact Us</a></div>
      </div>
    </header>

    <section class="sect-hiw">
      <div class="container">
        <h2 class="h-title">How Alpharank Works?</h2>
        <svg class="svg-hiw" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1154 273.7" style="enable-background:new 0 0 1154 273.7;" xml:space="preserve">
          <g id="background" class="st0">
            <rect x="-7" y="-108" class="st1" width="1170" height="480"/>
            <rect x="-7" y="450" class="st2" width="171" height="126"/>
            <rect x="182" y="450" class="st3" width="171" height="126"/>
            <rect x="380" y="450" class="st4" width="171" height="126"/>
          </g>
          <g id="Layer_7">
            <g class="st0">
              <line class="st5" x1="578" y1="72" x2="659" y2="153"/>
              <g class="st5">
                <line class="st6" x1="578" y1="72" x2="578.4" y2="72.4"/>
                <line class="st7" x1="579.1" y1="73.1" x2="658.3" y2="152.3"/>
                <line class="st6" x1="658.6" y1="152.6" x2="659" y2="153"/>
              </g>
            </g>
            <g class="st0">
              <line class="st5" x1="578" y1="236" x2="659" y2="155"/>
              <g class="st5">
                <line class="st6" x1="578" y1="236" x2="578.4" y2="235.6"/>
                <line class="st7" x1="579.1" y1="234.9" x2="658.3" y2="155.7"/>
                <line class="st6" x1="658.6" y1="155.4" x2="659" y2="155"/>
              </g>
            </g>
            <line class="st8" x1="659" y1="153.5" x2="578" y2="153.5"/>
          </g>
          <g id="Layer_6" class="st0">
          </g>
          <g id="Layer_2" class="st0">
          </g>
          <g id="Layer_3" class="st0">
          </g>
          <g id="Layer_4_1_" class="st0">
          </g>
          <g id="Layer_5">
            <g>
              <g>
                <g class="st0">
                  <path class="st9" d="M436.5,143.1l-6.4-2.2l-0.5,1.5l-1.5-0.5l1.1-3.3l8,2.7L436.5,143.1z"/>
                  <path class="st9" d="M436.4,131.8c2.5,1.1,3.4,2.9,2.5,5.1c-0.9,2.2-2.9,2.8-5.4,1.7c-2.5-1.1-3.4-2.9-2.4-5.1
                    C432,131.4,433.9,130.8,436.4,131.8z M434.3,136.8c1.8,0.8,2.8,0.6,3.3-0.5c0.5-1.1-0.1-1.9-1.9-2.7c-1.8-0.8-2.8-0.6-3.2,0.5
                    C431.9,135.2,432.4,136,434.3,136.8z"/>
                  <path class="st9" d="M441,132.3l-6-3.2l-0.8,1.4l-1.4-0.8l1.7-3.1l7.4,4L441,132.3z"/>
                  <path class="st9" d="M442.9,121.3c2.3,1.5,2.8,3.5,1.5,5.4c-1.3,2-3.3,2.2-5.6,0.6c-2.3-1.5-2.8-3.5-1.5-5.4
                    C438.7,120,440.7,119.7,442.9,121.3z M439.9,125.7c1.6,1.1,2.6,1.1,3.3,0.2c0.7-1,0.3-1.9-1.4-3c-1.6-1.1-2.6-1.1-3.3-0.1
                    C437.9,123.7,438.3,124.6,439.9,125.7z"/>
                  <path class="st9" d="M447.4,122.6l-5.2-4.4l-1,1.2l-1.2-1l2.3-2.7l6.4,5.4L447.4,122.6z"/>
                  <path class="st9" d="M451.7,112.3c1.9,2,1.9,4,0.2,5.6c-1.7,1.6-3.7,1.4-5.6-0.7c-1.9-2-1.9-4-0.2-5.6
                    C447.9,110,449.9,110.3,451.7,112.3z M447.8,115.9c1.3,1.5,2.3,1.7,3.2,0.9c0.9-0.8,0.7-1.8-0.6-3.2c-1.3-1.4-2.3-1.7-3.2-0.9
                    C446.3,113.5,446.4,114.5,447.8,115.9z"/>
                  <path class="st9" d="M455.7,114.7l-3.9-5.6l-1.3,0.9l-0.9-1.3l2.9-2l4.8,6.9L455.7,114.7z"/>
                  <path class="st9" d="M462.6,105.9c1.3,2.4,0.8,4.4-1.3,5.5c-2.1,1.1-4,0.3-5.2-2.1c-1.2-2.4-0.8-4.4,1.3-5.5
                    C459.5,102.7,461.4,103.5,462.6,105.9z M457.8,108.3c0.9,1.8,1.8,2.3,2.8,1.7c1-0.5,1.1-1.5,0.2-3.3c-0.9-1.8-1.8-2.2-2.8-1.7
                    C457,105.6,456.9,106.6,457.8,108.3z"/>
                  <path class="st9" d="M465.8,109.3l-2.2-6.4l-1.5,0.5l-0.5-1.5l3.3-1.1l2.8,7.9L465.8,109.3z"/>
                  <path class="st9" d="M474.6,102.4c0.7,2.6-0.1,4.5-2.4,5.1c-2.3,0.6-3.9-0.5-4.7-3.1c-0.7-2.6,0.1-4.4,2.4-5.1
                    C472.2,98.6,473.8,99.7,474.6,102.4z M469.4,103.8c0.5,1.9,1.3,2.6,2.4,2.2c1.1-0.3,1.4-1.3,0.9-3.2c-0.5-1.9-1.3-2.5-2.4-2.2
                    C469.2,101,468.9,101.9,469.4,103.8z"/>
                  <path class="st9" d="M477.6,105.7l-2.3-6.4l-1.5,0.5l-0.5-1.5l3.3-1.2l2.8,7.9L477.6,105.7z"/>
                  <path class="st9" d="M485.9,97.9c1.1,2.5,0.5,4.4-1.7,5.4c-2.2,0.9-4,0-5.1-2.5c-1.1-2.5-0.5-4.4,1.7-5.3
                    C483,94.5,484.8,95.4,485.9,97.9z M480.9,100c0.8,1.8,1.6,2.4,2.7,1.9c1.1-0.5,1.2-1.4,0.5-3.3c-0.8-1.8-1.6-2.4-2.7-1.9
                    C480.3,97.2,480.1,98.2,480.9,100z"/>
                  <path class="st9" d="M492.8,94.2c1.3,2.4,0.9,4.4-1.2,5.5c-2.1,1.1-4,0.4-5.3-2c-1.3-2.4-0.9-4.4,1.2-5.5
                    C489.7,91.1,491.5,91.8,492.8,94.2z M488.1,96.7c0.9,1.7,1.8,2.2,2.9,1.7c1-0.6,1.1-1.5,0.2-3.3c-0.9-1.7-1.8-2.2-2.8-1.7
                    C487.2,94,487.1,95,488.1,96.7z"/>
                  <path class="st9" d="M496.5,96.8l-3.6-5.8l-1.3,0.8l-0.9-1.3l2.9-1.9l4.5,7.1L496.5,96.8z"/>
                  <path class="st9" d="M502.8,87.3c1.6,2.2,1.5,4.2-0.4,5.6c-1.9,1.4-3.9,1-5.5-1.3c-1.6-2.2-1.5-4.2,0.4-5.6
                    C499.2,84.6,501.2,85.1,502.8,87.3z M498.5,90.5c1.2,1.6,2.1,1.9,3.1,1.2c0.9-0.7,0.9-1.7-0.3-3.3c-1.2-1.6-2.1-1.9-3-1.2
                    C497.3,87.9,497.3,88.9,498.5,90.5z"/>
                  <path class="st9" d="M506.8,89.3l-4.5-5.1l-1.2,1l-1-1.2l2.6-2.3l5.5,6.3L506.8,89.3z"/>
                </g>
                <g class="st0">
                  <path class="st9" d="M437.1,173.7l-8,2.7l-1.1-3.3l1.5-0.5l0.5,1.5l6.4-2.2L437.1,173.7z"/>
                  <path class="st9" d="M431,181.5c-0.9-2.2-0.1-4,2.4-5.1c2.5-1.1,4.4-0.5,5.4,1.7c0.9,2.2,0.1,4-2.5,5.1
                    C433.9,184.2,432,183.6,431,181.5z M432.4,180.9c0.5,1.1,1.4,1.2,3.2,0.5c1.8-0.8,2.4-1.6,1.9-2.7c-0.5-1.1-1.5-1.3-3.3-0.5
                    C432.4,179,431.9,179.8,432.4,180.9z"/>
                  <path class="st9" d="M441.9,184.4l-7.4,4l-1.7-3.1l1.4-0.8l0.8,1.4l6-3.2L441.9,184.4z"/>
                  <path class="st9" d="M437.4,193.1c-1.3-2-0.8-3.9,1.5-5.4c2.3-1.5,4.3-1.3,5.6,0.6c1.3,1.9,0.8,3.9-1.5,5.4
                    C440.7,195.3,438.7,195,437.4,193.1z M438.6,192.3c0.7,1,1.6,1,3.3-0.1c1.6-1.1,2-2,1.4-3c-0.7-1-1.7-1-3.3,0.2
                    C438.3,190.4,437.9,191.3,438.6,192.3z"/>
                  <path class="st9" d="M448.6,193.8l-6.4,5.4l-2.3-2.7l1.2-1l1,1.2l5.2-4.4L448.6,193.8z"/>
                  <path class="st9" d="M446.1,203.4c-1.7-1.6-1.7-3.6,0.2-5.6c1.9-2,3.8-2.3,5.6-0.7c1.7,1.6,1.7,3.6-0.2,5.6
                    C449.9,204.7,447.9,205,446.1,203.4z M447.1,202.3c0.9,0.8,1.8,0.6,3.2-0.9c1.3-1.5,1.5-2.4,0.6-3.2c-0.9-0.8-1.8-0.6-3.2,0.9
                    C446.4,200.5,446.3,201.5,447.1,202.3z"/>
                  <path class="st9" d="M457.3,201.4l-4.8,6.9l-2.9-2l0.9-1.3l1.3,0.9l3.9-5.6L457.3,201.4z"/>
                  <path class="st9" d="M457.4,211.2c-2.1-1.1-2.6-3-1.3-5.5c1.3-2.4,3.1-3.2,5.2-2.1c2.1,1.1,2.6,3,1.3,5.5
                    C461.4,211.5,459.5,212.3,457.4,211.2z M458.1,209.9c1,0.5,1.9,0,2.8-1.7c0.9-1.8,0.8-2.8-0.2-3.3c-1.1-0.5-1.9,0-2.8,1.7
                    C456.9,208.4,457,209.4,458.1,209.9z"/>
                  <path class="st9" d="M467.6,206.3l-2.8,7.9l-3.3-1.1l0.5-1.5l1.5,0.5l2.2-6.4L467.6,206.3z"/>
                  <path class="st9" d="M469.9,215.7c-2.3-0.6-3.1-2.5-2.4-5.1c0.7-2.6,2.4-3.8,4.7-3.1c2.3,0.6,3.1,2.5,2.4,5.1
                    C473.8,215.3,472.2,216.4,469.9,215.7z M470.3,214.3c1.1,0.3,1.9-0.3,2.4-2.2c0.5-1.9,0.2-2.9-0.9-3.2c-1.1-0.3-1.9,0.3-2.4,2.2
                    C468.9,213.1,469.2,214,470.3,214.3z"/>
                  <path class="st9" d="M479.4,209.9l-2.8,7.9l-3.3-1.2l0.5-1.5l1.5,0.5l2.3-6.4L479.4,209.9z"/>
                  <path class="st9" d="M480.8,219.6c-2.2-0.9-2.8-2.8-1.7-5.3c1.1-2.5,2.9-3.4,5.1-2.5c2.2,0.9,2.8,2.8,1.7,5.4
                    C484.8,219.6,483,220.5,480.8,219.6z M481.4,218.3c1.1,0.5,1.9-0.1,2.7-1.9c0.8-1.8,0.6-2.8-0.5-3.3c-1.1-0.5-1.9,0.1-2.7,1.9
                    C480.1,216.8,480.3,217.8,481.4,218.3z"/>
                  <path class="st9" d="M487.6,222.8c-2.1-1.1-2.5-3.1-1.2-5.5c1.3-2.4,3.2-3.2,5.3-2c2.1,1.1,2.5,3.1,1.2,5.5
                    C491.5,223.2,489.7,223.9,487.6,222.8z M488.3,221.5c1,0.6,1.9,0.1,2.8-1.7c0.9-1.7,0.9-2.7-0.2-3.3c-1-0.6-1.9-0.1-2.9,1.7
                    C487.1,220,487.2,221,488.3,221.5z"/>
                  <path class="st9" d="M498.1,219.2l-4.5,7.1l-2.9-1.9l0.9-1.3l1.3,0.8l3.6-5.8L498.1,219.2z"/>
                  <path class="st9" d="M497.4,229c-1.9-1.4-2.1-3.4-0.4-5.6c1.6-2.2,3.6-2.7,5.5-1.3c1.9,1.4,2,3.4,0.4,5.6
                    C501.2,229.9,499.2,230.4,497.4,229z M498.2,227.8c0.9,0.7,1.9,0.4,3-1.2c1.2-1.6,1.2-2.6,0.3-3.3c-1-0.7-1.9-0.3-3.1,1.2
                    C497.3,226.1,497.3,227.1,498.2,227.8z"/>
                  <path class="st9" d="M508.3,226.9l-5.5,6.3l-2.6-2.3l1-1.2l1.2,1l4.5-5.1L508.3,226.9z"/>
                </g>
                <g>
                  <path class="st10" d="M444.7,162v-6.8h-1.6v-1.6h3.5v8.4H444.7z"/>
                  <path class="st10" d="M448.9,162v-6.8h-1.6v-1.6h3.5v8.4H448.9z"/>
                  <path class="st10" d="M459.4,157.8c0,2.7-1.3,4.3-3.7,4.3c-2.4,0-3.7-1.5-3.7-4.3c0-2.7,1.3-4.2,3.7-4.2
                    C458.1,153.5,459.4,155.1,459.4,157.8z M454,157.8c0,2,0.5,2.8,1.7,2.8c1.2,0,1.7-0.8,1.7-2.8c0-2-0.5-2.8-1.7-2.8
                    C454.5,155,454,155.8,454,157.8z"/>
                  <path class="st10" d="M461,162v-6.8h-1.6v-1.6h3.5v8.4H461z"/>
                  <path class="st10" d="M465.2,162v-6.8h-1.6v-1.6h3.5v8.4H465.2z"/>
                  <path class="st10" d="M475.7,157.8c0,2.7-1.3,4.3-3.7,4.3c-2.4,0-3.7-1.5-3.7-4.3c0-2.7,1.3-4.2,3.7-4.2
                    C474.4,153.5,475.7,155.1,475.7,157.8z M470.3,157.8c0,2,0.5,2.8,1.7,2.8c1.2,0,1.7-0.8,1.7-2.8c0-2-0.5-2.8-1.7-2.8
                    C470.8,155,470.3,155.8,470.3,157.8z"/>
                  <path class="st10" d="M477.3,162v-6.8h-1.6v-1.6h3.5v8.4H477.3z"/>
                  <path class="st10" d="M487.7,157.8c0,2.7-1.3,4.3-3.7,4.3c-2.4,0-3.7-1.5-3.7-4.3c0-2.7,1.3-4.2,3.7-4.2
                    C486.4,153.5,487.7,155.1,487.7,157.8z M482.3,157.8c0,2,0.5,2.8,1.7,2.8c1.2,0,1.7-0.8,1.7-2.8c0-2-0.5-2.8-1.7-2.8
                    C482.9,155,482.3,155.8,482.3,157.8z"/>
                  <path class="st10" d="M489.3,162v-6.8h-1.6v-1.6h3.5v8.4H489.3z"/>
                  <path class="st10" d="M499.7,157.8c0,2.7-1.3,4.3-3.7,4.3c-2.4,0-3.7-1.5-3.7-4.3c0-2.7,1.3-4.2,3.7-4.2
                    C498.4,153.5,499.7,155.1,499.7,157.8z M494.4,157.8c0,2,0.5,2.8,1.7,2.8c1.2,0,1.7-0.8,1.7-2.8c0-2-0.5-2.8-1.7-2.8
                    C494.9,155,494.4,155.8,494.4,157.8z"/>
                  <path class="st10" d="M501.4,162v-6.8h-1.6v-1.6h3.5v8.4H501.4z"/>
                  <path class="st10" d="M505.6,162v-6.8H504v-1.6h3.5v8.4H505.6z"/>
                  <path class="st10" d="M509.9,162v-6.8h-1.6v-1.6h3.5v8.4H509.9z"/>
                </g>
              </g>
              <g>
                <g class="st0">
                  <g class="st5">
                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="581.5397" y1="70.768" x2="581.5397" y2="76.6418">
                      <stop  offset="1.005030e-002" style="stop-color:#423A40"/>
                      <stop  offset="1" style="stop-color:#665F72"/>
                    </linearGradient>
                    <path class="st11" d="M590.7,65.1c-0.1-2-0.6-4-1.7-5.6c-1.6-2.4-4.6-3.6-7.5-3.6c-2.9,0-5.8,1.2-7.5,3.6
                      c-1.1,1.6-1.6,3.6-1.7,5.6c-0.1,2,0.4,8.4-0.1,9.5c0,0,6.9,2.5,9.3,2.5s9.3-2.5,9.3-2.5C590.4,73.5,590.9,67,590.7,65.1z"/>
                  </g>
                  <g class="st5">
                    <path class="st12" d="M592.2,81.7c-0.5-0.4-1-0.7-1.6-0.9l-5.5-1.7l0,0c-0.4-0.1-0.6-0.5-0.7-0.9c-0.2-1.1-0.2-4.2-0.2-4.7
                      c0,0,0-0.1-0.1-0.1h-4.9c0,0-0.1,0-0.1,0.1c0,0.5,0,3.5-0.2,4.7c-0.1,0.4-0.3,0.8-0.7,0.9l0,0l-5.5,1.7c-0.5,0.2-1,0.4-1.4,0.7
                      c-2.2,1.6-2.3,4.3-2.4,4.8c0,0,0,0.1,0.1,0.1h12.6h12.6c0,0,0.1,0,0.1-0.1C594.3,85.9,594.2,83.4,592.2,81.7z"/>
                    <path class="st12" d="M592.2,81.7c-0.5-0.4-1-0.7-1.6-0.9l-5.5-1.7l0,0c-0.4-0.1-0.6-0.5-0.7-0.9c-0.2-1.1-0.2-4.2-0.2-4.7
                      c0,0,0-0.1-0.1-0.1h-4.9c0,0-0.1,0-0.1,0.1c0,0.5,0,3.5-0.2,4.7c-0.1,0.4-0.3,0.8-0.7,0.9l0,0l-5.5,1.7c-0.5,0.2-1,0.4-1.4,0.7
                      c-2.2,1.6-2.3,4.3-2.4,4.8c0,0,0,0.1,0.1,0.1h12.6h12.6c0,0,0.1,0,0.1-0.1C594.3,85.9,594.2,83.4,592.2,81.7z"/>
                    <g>
                      <path class="st13" d="M584.2,76.1c0-1,0-2,0-2.3c0,0,0-0.1-0.1-0.1h-4.9c0,0-0.1,0-0.1,0.1c0,0.3,0,1.2,0,2.3
                        C580.8,76.7,582.6,76.7,584.2,76.1z"/>
                    </g>
                    <g>
                      <path class="st12" d="M575.8,67.3c0.4,1,0.2,2.7-0.6,3c-0.7,0.3-1.7-0.8-2.1-1.8c-0.4-1-0.2-2.1,0.6-2.4
                        C574.4,65.7,575.4,66.3,575.8,67.3z"/>
                      <path class="st12" d="M587.5,67.3c-0.4,1-0.2,2.7,0.6,3c0.7,0.3,1.7-0.8,2.1-1.8c0.4-1,0.2-2.1-0.6-2.4
                        C588.9,65.7,588,66.3,587.5,67.3z"/>
                    </g>
                    <path class="st12" d="M581.7,57.1c-7.4-0.3-7.5,6.8-7.4,9.1c0.1,1.7,0.7,4.2,1.1,5.4c0.2,0.7,0.6,1.4,1.1,1.9
                      c1.9,1.9,5.2,2.5,5.2,2.5s3.3-0.6,5.2-2.5c0.5-0.5,0.9-1.2,1.1-1.9c0.4-1.2,1-3.7,1.1-5.4C589.2,63.9,589.1,56.8,581.7,57.1z"
                      />
                    <circle class="st14" cx="576.7" cy="69.6" r="1.1"/>
                    <circle class="st14" cx="586.2" cy="69.6" r="1.1"/>
                    <path class="st15" d="M580.2,72c0.3,0.4,0.8,0.6,1.5,0.6c0.7,0,1.2-0.3,1.5-0.6"/>
                    <g>
                      <path class="st16" d="M577.7,65.8c0.6,0,1.1,0.5,1.1,1c0,0.6-0.5,1-1.1,1s-1.1-0.7-1.1-1.3C576.6,66,577.1,65.8,577.7,65.8z"
                        />
                      <path class="st16" d="M585.7,65.8c0.6,0,1.1,0.2,1.1,0.8c0,0.6-0.5,1.3-1.1,1.3s-1.1-0.5-1.1-1
                        C584.6,66.3,585,65.8,585.7,65.8z"/>
                    </g>
                  </g>
                  <g class="st5">
                    <g>
                      <g>
                        <path class="st17" d="M575.8,58.1c-0.8,0.2-1.5,1.7-1.8,3.4c-0.3,1.8-0.2,3.8,0,5.8c0.3,2.4,0.8,4.7,1.4,6.7
                          c-1-4.7-0.4-9.7,1.1-12.9c0.2-0.6,0.2-1.8-0.1-2.5C576.2,58,576.1,58,575.8,58.1z"/>
                        <path class="st17" d="M587.4,58.1c0.8,0.2,1.5,1.7,1.8,3.4c0.3,1.8,0.2,3.8,0,5.8c-0.3,2.4-0.8,4.7-1.4,6.7
                          c1-4.7,0.4-9.7-1.1-12.9c-0.2-0.6-0.2-1.8,0.1-2.5C587.1,58,587.1,58,587.4,58.1z"/>
                      </g>
                      <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="581.6094" y1="58.8297" x2="581.6094" y2="63.3361">
                        <stop  offset="0.1457" style="stop-color:#423A40"/>
                        <stop  offset="1" style="stop-color:#665F72"/>
                      </linearGradient>
                      <path class="st18" d="M589.8,62.5c0-3.1-3.7-5.7-8.2-5.7c-4.5,0-8.2,2.5-8.2,5.7c0,0.8,0.2,1.6,0.7,2.3h15
                        C589.5,64.1,589.8,63.3,589.8,62.5z"/>
                    </g>
                  </g>
                  <g class="st5">
                    <g>
                      <path class="st19" d="M579.1,77.7c0,0.2,0,0.4-0.1,0.6c-0.1,0.4-0.3,0.8-0.7,0.9l-5.5,1.7c-0.5,0.2-1,0.4-1.4,0.7
                        c-2.2,1.6-2.3,4.3-2.4,4.8c0,0,0,0.1,0.1,0.1h12.6h12.6c0,0,0.1,0,0.1-0.1c-0.1-0.5-0.1-3-2.2-4.7c-0.5-0.4-1-0.7-1.6-0.9
                        l-5.5-1.7c-0.4-0.1-0.6-0.5-0.7-0.9c0-0.2-0.1-0.4-0.1-0.6c-0.9,0.1-1.7,0.1-2.6,0.1C580.8,77.8,579.9,77.7,579.1,77.7z"/>
                    </g>
                  </g>
                  <path class="st20" d="M584.3,77.4h-5.2l-1.8,1.9C578,80.4,581,80,581,80l0.6-2l0.1-0.2l0.1,0.2l0.6,2c0,0,3,0.4,3.7-0.7
                    L584.3,77.4z"/>
                  <g class="st5">
                    <g>
                      <path class="st19" d="M580.8,65.5c-1.4-1.7-6.8-0.5-6.8-0.5c0.1,0.4,0.2,0.8,0.3,1.2c0.4,0,0.4,0.9,0.5,1.3
                        c0.2,1.6,1.2,2.7,3.5,2.7c2.2-0.1,2.7-1.7,2.8-2.7C581.1,66.3,580.8,65.5,580.8,65.5z M580.5,67.4c-0.1,1.4-1,2.2-2.4,2.3
                        c-0.1,0-0.3,0-0.4,0c-2.2,0-2.6-1.9-2.6-3.2c0-0.7,0.5-1.3,1.2-1.4c0.4,0,0.9,0,1.4,0c1.6,0,2.4,0.4,2.6,0.7
                        C580.3,66.1,580.6,66.7,580.5,67.4z"/>
                      <path class="st19" d="M582.3,67.4c0.1,1,0.6,2.6,2.8,2.7c2.2,0.1,3.3-1.1,3.5-2.7c0-0.3,0.1-1.2,0.5-1.3
                        c0.1-0.4,0.2-0.8,0.3-1.2c0,0-5.3-1.2-6.8,0.5C582.6,65.5,582.2,66.3,582.3,67.4z M583.1,65.9c0.2-0.3,0.9-0.7,2.6-0.7
                        c0.5,0,1,0,1.4,0c0.7,0.1,1.2,0.7,1.2,1.4c0,1.2-0.4,3.2-2.6,3.2c-0.1,0-0.3,0-0.4,0c-1.4-0.1-2.3-0.9-2.4-2.3
                        C582.8,66.7,583,66.1,583.1,65.9z"/>
                    </g>
                    <path class="st19" d="M582.6,66.9c0,0-0.4-0.3-1-0.3c-0.6,0-0.9,0.3-0.9,0.3c-0.1-0.3-0.2-0.5-0.3-0.8c0.8,0,1.7,0,2.5,0
                      C582.8,66.3,582.7,66.6,582.6,66.9z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path class="st21" d="M534.8,91.9c-0.1-2-0.6-4-1.7-5.6c-1.6-2.4-4.6-3.6-7.5-3.6s-5.8,1.2-7.5,3.6c-1.1,1.6-1.6,3.6-1.7,5.6
                      c-0.1,2,0.4,8.4-0.1,9.5c0,0,6.9,2.5,9.3,2.5s9.3-2.5,9.3-2.5C534.5,100.3,534.9,93.9,534.8,91.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M536.2,108.5c-0.5-0.4-1-0.7-1.6-0.9l-5.5-1.7l0,0c-0.4-0.1-0.6-0.5-0.7-0.9c-0.2-1.1-0.2-4.2-0.2-4.7
                      c0,0,0-0.1-0.1-0.1h-4.9c0,0-0.1,0-0.1,0.1c0,0.5,0,3.5-0.2,4.7c-0.1,0.4-0.3,0.8-0.7,0.9l0,0l-5.5,1.7c-0.5,0.2-1,0.4-1.4,0.7
                      c-2.2,1.6-2.3,4.3-2.4,4.8c0,0,0,0.1,0.1,0.1h12.6h12.6c0,0,0.1,0,0.1-0.1C538.3,112.7,538.3,110.2,536.2,108.5z"/>
                    <path class="st21" d="M536.2,108.5c-0.5-0.4-1-0.7-1.6-0.9l-5.5-1.7l0,0c-0.4-0.1-0.6-0.5-0.7-0.9c-0.2-1.1-0.2-4.2-0.2-4.7
                      c0,0,0-0.1-0.1-0.1h-4.9c0,0-0.1,0-0.1,0.1c0,0.5,0,3.5-0.2,4.7c-0.1,0.4-0.3,0.8-0.7,0.9l0,0l-5.5,1.7c-0.5,0.2-1,0.4-1.4,0.7
                      c-2.2,1.6-2.3,4.3-2.4,4.8c0,0,0,0.1,0.1,0.1h12.6h12.6c0,0,0.1,0,0.1-0.1C538.3,112.7,538.3,110.2,536.2,108.5z"/>
                    <g>
                      <path class="st21" d="M528.3,103c0-1,0-2,0-2.3c0,0,0-0.1-0.1-0.1h-4.9c0,0-0.1,0-0.1,0.1c0,0.3,0,1.2,0,2.3
                        C524.9,103.5,526.6,103.5,528.3,103z"/>
                    </g>
                    <g>
                      <path class="st21" d="M519.9,94.1c0.4,1,0.2,2.7-0.6,3c-0.7,0.3-1.7-0.8-2.1-1.8c-0.4-1-0.2-2.1,0.6-2.4
                        C518.5,92.5,519.5,93.1,519.9,94.1z"/>
                      <path class="st21" d="M531.6,94.1c-0.4,1-0.2,2.7,0.6,3c0.7,0.3,1.7-0.8,2.1-1.8c0.4-1,0.2-2.1-0.6-2.4
                        C533,92.5,532,93.1,531.6,94.1z"/>
                    </g>
                    <path class="st21" d="M525.8,83.9c-7.4-0.3-7.5,6.8-7.4,9.1c0.1,1.7,0.7,4.2,1.1,5.4c0.2,0.7,0.6,1.4,1.1,1.9
                      c1.9,1.9,5.2,2.5,5.2,2.5s3.3-0.6,5.2-2.5c0.5-0.5,0.9-1.2,1.1-1.9c0.4-1.2,1-3.7,1.1-5.4C533.3,90.7,533.2,83.6,525.8,83.9z"
                      />
                    <circle class="st21" cx="520.8" cy="96.4" r="1.1"/>
                    <circle class="st21" cx="530.3" cy="96.4" r="1.1"/>
                    <path class="st21" d="M524.3,98.8c0.3,0.4,0.8,0.6,1.5,0.6s1.2-0.3,1.5-0.6"/>
                    <g>
                      <path class="st21" d="M521.8,92.7c0.6,0,1.1,0.5,1.1,1c0,0.6-0.5,1-1.1,1c-0.6,0-1.1-0.7-1.1-1.3
                        C520.7,92.9,521.2,92.7,521.8,92.7z"/>
                      <path class="st21" d="M529.7,92.7c0.6,0,1.1,0.2,1.1,0.8c0,0.6-0.5,1.3-1.1,1.3s-1.1-0.5-1.1-1
                        C528.6,93.1,529.1,92.7,529.7,92.7z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <g>
                        <path class="st21" d="M519.9,85c-0.8,0.2-1.5,1.7-1.8,3.4c-0.3,1.8-0.2,3.8,0,5.8c0.3,2.4,0.8,4.7,1.4,6.7
                          c-1-4.7-0.4-9.7,1.1-12.9c0.2-0.6,0.2-1.8-0.1-2.5C520.2,84.9,520.2,84.9,519.9,85z"/>
                        <path class="st21" d="M531.5,85c0.8,0.2,1.5,1.7,1.8,3.4c0.3,1.8,0.2,3.8,0,5.8c-0.3,2.4-0.8,4.7-1.4,6.7
                          c1-4.7,0.4-9.7-1.1-12.9c-0.2-0.6-0.2-1.8,0.1-2.5C531.1,84.9,531.2,84.9,531.5,85z"/>
                      </g>
                      <path class="st21" d="M533.9,89.3c0-3.1-3.7-5.7-8.2-5.7c-4.5,0-8.2,2.5-8.2,5.7c0,0.8,0.2,1.6,0.7,2.3h15
                        C533.6,90.9,533.9,90.2,533.9,89.3z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st21" d="M523.2,104.5c0,0.2,0,0.4-0.1,0.6c-0.1,0.4-0.3,0.8-0.7,0.9l-5.5,1.7c-0.5,0.2-1,0.4-1.4,0.7
                        c-2.2,1.6-2.3,4.3-2.4,4.8c0,0,0,0.1,0.1,0.1h12.6h12.6c0,0,0.1,0,0.1-0.1c-0.1-0.5-0.1-3-2.2-4.7c-0.5-0.4-1-0.7-1.6-0.9
                        l-5.5-1.7c-0.4-0.1-0.6-0.5-0.7-0.9c0-0.2-0.1-0.4-0.1-0.6c-0.9,0.1-1.7,0.1-2.6,0.1C524.9,104.6,524,104.6,523.2,104.5z"/>
                    </g>
                  </g>
                  <path class="st21" d="M528.3,104.2h-5.2l-1.8,1.9c0.7,1.1,3.7,0.7,3.7,0.7l0.6-2l0.1-0.2l0.1,0.2l0.6,2c0,0,3,0.4,3.7-0.7
                    L528.3,104.2z"/>
                  <g>
                    <g>
                      <path class="st21" d="M524.9,92.3c-1.4-1.7-6.8-0.5-6.8-0.5c0.1,0.4,0.2,0.8,0.3,1.2c0.4,0,0.4,0.9,0.5,1.3
                        c0.2,1.6,1.2,2.7,3.5,2.7c2.2-0.1,2.7-1.7,2.8-2.7C525.2,93.1,524.9,92.4,524.9,92.3z M524.6,94.3c-0.1,1.4-1,2.2-2.4,2.3
                        c-0.1,0-0.3,0-0.4,0c-2.2,0-2.6-1.9-2.6-3.2c0-0.7,0.5-1.3,1.2-1.4c0.4,0,0.9,0,1.4,0c1.6,0,2.4,0.4,2.6,0.7
                        C524.4,92.9,524.7,93.5,524.6,94.3z"/>
                      <path class="st21" d="M526.4,94.2c0.1,1,0.6,2.6,2.8,2.7c2.2,0.1,3.3-1.1,3.5-2.7c0-0.3,0.1-1.2,0.5-1.3
                        c0.1-0.4,0.2-0.8,0.3-1.2c0,0-5.3-1.2-6.8,0.5C526.7,92.4,526.3,93.1,526.4,94.2z M527.2,92.7c0.2-0.3,0.9-0.7,2.6-0.7
                        c0.5,0,1,0,1.4,0c0.7,0.1,1.2,0.7,1.2,1.4c0,1.2-0.4,3.2-2.6,3.2c-0.1,0-0.3,0-0.4,0c-1.4-0.1-2.3-0.9-2.4-2.3
                        C526.9,93.5,527.1,92.9,527.2,92.7z"/>
                    </g>
                    <path class="st21" d="M526.7,93.7c0,0-0.4-0.3-1-0.3c-0.6,0-0.9,0.3-0.9,0.3c-0.1-0.3-0.2-0.5-0.3-0.8c0.8,0,1.7,0,2.5,0
                      C526.9,93.2,526.8,93.4,526.7,93.7z"/>
                  </g>
                </g>
                <g id="woman">
                  <g>
                    <path class="st21" d="M572.9,108.4c-0.5-0.4-1.1-0.7-1.7-0.9l-5.7-1.8l0,0c-0.4-0.1-0.6-0.5-0.7-0.9c-0.2-1.2-0.2-4.3-0.2-4.8
                      c0,0,0-0.1-0.1-0.1h-5c0,0-0.1,0-0.1,0.1c0,0.5,0,3.6-0.2,4.8c-0.1,0.4-0.3,0.8-0.7,0.9l0,0l-5.7,1.8c-0.5,0.2-1,0.4-1.5,0.7
                      c-2.3,1.7-2.4,4.5-2.5,5c0,0,0,0.1,0.1,0.1h13h13c0,0,0.1,0,0.1-0.1C575.1,112.7,575.1,110.1,572.9,108.4z"/>
                    <path class="st21" d="M569.1,108.7c1.7,0.3,3.6-0.2,5-1.3c1.4-1.1,1.5-3,1.6-4.8c-1.2,0.9-3,0.3-3.8-1
                      c-0.8-1.3-0.9-2.9-0.8-4.4c0.2-2.1,0.4-4.2,0.3-6.4c-0.1-2.1-0.6-4.3-1.8-6c-1.7-2.6-4.7-3.9-7.7-3.9c-3,0-6,1.3-7.7,3.9
                      c-1.1,1.8-1.7,3.9-1.8,6c-0.1,2.1,0.1,4.3,0.3,6.4c0.2,1.5,0,3.1-0.8,4.4c-0.8,1.3-1.8,2-3,1c0.1,1.8,0.2,3.7,1.6,4.8
                      c1.4,1.1,2.4,1.6,4.2,1.3H569.1z"/>
                    <path class="st21" d="M572.9,108.4c-0.5-0.4-1.1-0.7-1.7-0.9l-5.7-1.8l0,0c-0.4-0.1-0.6-0.5-0.7-0.9c-0.2-1.2-0.2-4.3-0.2-4.8
                      c0,0,0-0.1-0.1-0.1h-5c0,0-0.1,0-0.1,0.1c0,0.5,0,3.6-0.2,4.8c-0.1,0.4-0.3,0.8-0.7,0.9l0,0l-5.7,1.8c-0.5,0.2-1,0.4-1.5,0.7
                      c-2.3,1.7-2.4,4.5-2.5,5c0,0,0,0.1,0.1,0.1h13h13c0,0,0.1,0,0.1-0.1C575.1,112.7,575.1,110.1,572.9,108.4z"/>
                    <g>
                      <path class="st21" d="M553.7,107.3l-0.6,0.2c-0.5,0.2-1,0.4-1.5,0.7c-2.3,1.7-2.4,4.5-2.5,5c0,0,0,0.1,0.1,0.1h13h13
                        c0,0,0.1,0,0.1-0.1c-0.1-0.5-0.1-3.1-2.3-4.8c-0.5-0.4-1.1-0.7-1.7-0.9l-0.6-0.2c-2.6,0.9-5.5,1.4-8.5,1.4
                        C559.1,108.7,556.2,108.2,553.7,107.3z"/>
                      <path class="st21" d="M564.9,104.8c-0.2-1.2-0.2-4.3-0.2-4.8c0,0,0-0.1-0.1-0.1h-5c0,0-0.1,0-0.1,0.1c0,0.5,0,3.6-0.2,4.8
                        c-0.1,0.4-0.3,0.8-0.7,0.9l-5,1.6c2.6,0.9,5.5,1.4,8.5,1.4c3,0,5.9-0.5,8.5-1.4l-5-1.6C565.2,105.6,565,105.3,564.9,104.8z"/>
                    </g>
                    <g>
                      <path class="st21" d="M564.7,102.7c0-1.1,0-2.1,0-2.3c0,0,0-0.1-0.1-0.1h-5c0,0-0.1,0-0.1,0.1c0,0.3,0,1.3,0,2.3
                        C561.2,103.2,563,103.2,564.7,102.7z"/>
                    </g>
                    <g>
                      <path class="st21" d="M556.1,93.6c0.4,1.1,0.2,2.7-0.6,3.1c-0.8,0.3-1.7-0.8-2.2-1.9c-0.4-1.1-0.2-2.2,0.6-2.5
                        C554.7,91.9,555.7,92.5,556.1,93.6z"/>
                      <path class="st21" d="M568.2,93.6c-0.4,1.1-0.2,2.7,0.6,3.1c0.8,0.3,1.7-0.8,2.2-1.9s0.2-2.2-0.6-2.5
                        C569.6,91.9,568.6,92.5,568.2,93.6z"/>
                    </g>
                    <path class="st21" d="M562.1,83c-7.7-0.3-7.8,7-7.7,9.4c0.1,1.7,0.8,4.3,1.1,5.5c0.2,0.7,0.6,1.4,1.1,1.9
                      c2,1.9,5.4,2.6,5.4,2.6s3.4-0.6,5.4-2.6c0.6-0.5,0.9-1.2,1.1-1.9c0.4-1.3,1.1-3.8,1.1-5.5C569.9,90,569.8,82.7,562.1,83z"/>
                    <g>
                      <ellipse class="st21" cx="558.1" cy="93.1" rx="1" ry="1.2"/>
                      <ellipse class="st21" cx="565.8" cy="93.1" rx="1" ry="1.2"/>
                    </g>
                    <path class="st21" d="M566.3,83.6c1.6,0.1,3,1.3,3.8,2.7c0.8,1.4,0.9,3.1,0.8,4.7c-0.1,1.9-0.7,3.8-1.6,5.5
                      c1.1-3.8-0.8-7.9-3.9-10.4c-0.5-0.4-0.6-1.5-0.2-2C565.5,83.6,565.6,83.6,566.3,83.6z"/>
                    <g>
                      <g>
                        <path class="st21" d="M559.4,97.9c0.5,1,1.5,1.8,2.7,1.8c1.2,0,2.3-0.7,2.7-1.8H559.4z"/>
                      </g>
                    </g>
                    <circle class="st21" cx="557" cy="95.9" r="1.1"/>
                    <circle class="st21" cx="566.8" cy="95.9" r="1.1"/>
                  </g>
                  <path class="st21" d="M568,85c-0.1,1.5-1.4,2.5-2.7,3s-2.8,0.5-4.1,0.9c-2.2,0.6-4.1,2.3-5.1,4.4c-1,2.1-1.1,4.7-0.2,6.9
                    c-0.9-2.7-2.2-6.1-2-8.9c0.2-2.8,1.5-5.7,3.6-7.6c2-1.9,5.3-2.2,7.8-1.2C566.5,83,568.1,83.5,568,85z"/>
                </g>
                <g>
                  <g>
                    <path class="st22" d="M561.5,115.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                      c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                      c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                      h21.5h21.5c0.1,0,0.1-0.1,0.1-0.1C565.1,121.5,565,117.7,561.5,115.2z"/>
                    <g>
                      <path class="st22" d="M561.5,115.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                        s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5h21.5
                        c0.1,0,0.1-0.1,0.1-0.1C565.1,121.5,565,117.7,561.5,115.2z"/>
                    </g>
                    <g>
                      <path class="st22" d="M548.3,108.2c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                        c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C545.2,109.8,547.6,108.7,548.3,108.2z"/>
                    </g>
                    <g>
                      <path class="st22" d="M535.3,94.4c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3s-0.3-3.5,0.8-4
                        C533.3,91.7,534.6,92.7,535.3,94.4z"/>
                      <path class="st22" d="M552,94.4c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3c0.6-1.7,0.3-3.5-0.8-4
                        C554,91.7,552.7,92.7,552,94.4z"/>
                    </g>
                    <path class="st22" d="M543.6,79.4c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                      c0.5-1.8,1.1-5.3,1.2-7.7C554.3,89.2,554.1,79.1,543.6,79.4z"/>
                    <g>
                      <ellipse class="st22" cx="538.1" cy="93.4" rx="1.3" ry="1.6"/>
                      <ellipse class="st22" cx="548.8" cy="93.4" rx="1.3" ry="1.6"/>
                    </g>
                    <g>
                      <path class="st22" d="M545.6,105.6c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4
                        c0.3,0.8,0.7,1.6,1.2,2.1c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3
                        c0.5-0.5,0.9-1.3,1.2-2.1C550.6,103.9,548.1,106,545.6,105.6z"/>
                    </g>
                    <path class="st22" d="M540.8,100.3c0.5,0.7,1.5,1.1,2.7,1.1s2.3-0.5,2.7-1.1"/>
                  </g>
                  <g>
                    <g>
                      <g>
                        <path class="st22" d="M534.2,89.4c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                          c0.1,1.3,0.3,2.5,0.7,3.6C534,92.9,533.8,91.1,534.2,89.4z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path class="st22" d="M553.1,89.4c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                          c-0.1,1.3-0.3,2.5-0.7,3.6C553.4,92.9,553.5,91.1,553.1,89.4z"/>
                      </g>
                    </g>
                  </g>
                  <path class="st22" d="M544.7,85.2c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                    c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C539.5,84.4,541.6,84.4,544.7,85.2z"/>
                </g>
                <g>
                  <g>
                    <path class="st21" d="M561.5,115.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                      c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                      c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                      h21.5h21.5c0.1,0,0.1-0.1,0.1-0.1C565.1,121.5,565,117.7,561.5,115.2z"/>
                    <g>
                      <path class="st21" d="M561.5,115.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                        s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5h21.5
                        c0.1,0,0.1-0.1,0.1-0.1C565.1,121.5,565,117.7,561.5,115.2z"/>
                    </g>
                    <g>
                      <path class="st21" d="M548.3,108.2c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                        c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C545.2,109.8,547.6,108.7,548.3,108.2z"/>
                    </g>
                    <g>
                      <path class="st21" d="M535.3,94.4c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3s-0.3-3.5,0.8-4
                        C533.3,91.7,534.6,92.7,535.3,94.4z"/>
                      <path class="st21" d="M552,94.4c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3c0.6-1.7,0.3-3.5-0.8-4
                        C554,91.7,552.7,92.7,552,94.4z"/>
                    </g>
                    <path class="st21" d="M543.6,79.4c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                      c0.5-1.8,1.1-5.3,1.2-7.7C554.3,89.2,554.1,79.1,543.6,79.4z"/>
                    <g>
                      <ellipse class="st21" cx="538.1" cy="93.4" rx="1.3" ry="1.6"/>
                      <ellipse class="st21" cx="548.8" cy="93.4" rx="1.3" ry="1.6"/>
                    </g>
                    <g>
                      <path class="st21" d="M545.6,105.6c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4
                        c0.3,0.8,0.7,1.6,1.2,2.1c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3
                        c0.5-0.5,0.9-1.3,1.2-2.1C550.6,103.9,548.1,106,545.6,105.6z"/>
                    </g>
                    <path class="st21" d="M540.8,100.3c0.5,0.7,1.5,1.1,2.7,1.1s2.3-0.5,2.7-1.1"/>
                  </g>
                  <g>
                    <g>
                      <g>
                        <path class="st21" d="M534.2,89.4c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                          c0.1,1.3,0.3,2.5,0.7,3.6C534,92.9,533.8,91.1,534.2,89.4z"/>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path class="st21" d="M553.1,89.4c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                          c-0.1,1.3-0.3,2.5-0.7,3.6C553.4,92.9,553.5,91.1,553.1,89.4z"/>
                      </g>
                    </g>
                  </g>
                  <path class="st21" d="M544.7,85.2c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                    c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C539.5,84.4,541.6,84.4,544.7,85.2z"/>
                </g>
              </g>
              <g id="big_db">
                <path id="stripe_1_" class="st23" d="M89.2,186H0v41.9c0,0,4.1,33.7,89,33.7s89-33.7,89-33.7V186H89.2z"/>
                <path class="st24" d="M89.2,149H0v41.7c0,0,4.1,33.7,89,33.7s89-33.7,89-33.7V149H89.2z"/>
                <path id="stripe_2_" class="st23" d="M89.2,137H0v41.2c0,0,4.1,33.7,89,33.7s89-33.7,89-33.7V137H89.2z"/>
                <path class="st24" d="M89.2,100H0v41c0,0,4.1,33.7,89,33.7s89-33.7,89-33.7v-41H89.2z"/>
                <path id="stripe" class="st23" d="M89.2,87H0v41.5c0,0,4.1,33.7,89,33.7s89-33.7,89-33.7V87H89.2z"/>
                <ellipse class="st24" cx="89" cy="87.7" rx="89" ry="36.3"/>
                <g>
                  <circle class="st24" cx="12.6" cy="123.8" r="4.2"/>
                  <circle class="st24" cx="25.7" cy="130.7" r="4.2"/>
                  <circle class="st24" cx="39.4" cy="135.9" r="4.2"/>
                </g>
                <g>
                  <circle class="st24" cx="12.6" cy="173.5" r="4.2"/>
                  <circle class="st24" cx="25.7" cy="180.4" r="4.2"/>
                  <circle class="st24" cx="39.4" cy="185.5" r="4.2"/>
                </g>
                <g>
                  <circle class="st24" cx="16.8" cy="227.3" r="4.2"/>
                  <circle class="st24" cx="29.8" cy="234.3" r="4.2"/>
                  <circle class="st24" cx="43.6" cy="239.4" r="4.2"/>
                </g>
              </g>
              <g class="st0">
                <path id="stripe_5_" class="st25" d="M545.3,73H521v11.5c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V73H545.3z"/>
                <path class="st26" d="M545.3,63H521v11.3c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V63H545.3z"/>
                <path id="stripe_4_" class="st25" d="M545.3,60H521v10.9c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V60H545.3z"/>
                <path class="st26" d="M545.3,50H521v10.8c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V50H545.3z"/>
                <path id="stripe_3_" class="st25" d="M545.3,46H521v11.4c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V46H545.3z"/>
                <ellipse class="st26" cx="545.3" cy="46.3" rx="24.3" ry="9.9"/>
                <g class="st5">
                  <circle class="st24" cx="524.4" cy="56.1" r="1.2"/>
                  <circle class="st24" cx="528" cy="58" r="1.2"/>
                  <circle class="st24" cx="531.7" cy="59.4" r="1.2"/>
                </g>
                <g class="st5">
                  <circle class="st24" cx="524.4" cy="69.6" r="1.2"/>
                  <circle class="st24" cx="528" cy="71.5" r="1.2"/>
                  <circle class="st24" cx="531.7" cy="72.9" r="1.2"/>
                </g>
                <g class="st5">
                  <circle class="st24" cx="525.6" cy="84.3" r="1.2"/>
                  <circle class="st24" cx="529.1" cy="86.2" r="1.2"/>
                  <circle class="st24" cx="532.9" cy="87.6" r="1.2"/>
                </g>
              </g>
              <g>
                <path id="stripe_8_" class="st23" d="M545.3,161H521v11.5c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V161H545.3z"/>
                <path class="st24" d="M545.3,151H521v11.3c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V151H545.3z"/>
                <path id="stripe_7_" class="st23" d="M545.3,148H521v10.9c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V148H545.3z"/>
                <path class="st24" d="M545.3,138H521v10.8c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V138H545.3z"/>
                <path id="stripe_6_" class="st23" d="M545.3,134H521v11.4c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V134H545.3z"/>
                <ellipse class="st24" cx="545.3" cy="134.3" rx="24.3" ry="9.9"/>
                <g>
                  <circle class="st24" cx="524.4" cy="144.1" r="1.2"/>
                  <circle class="st24" cx="528" cy="146" r="1.2"/>
                  <circle class="st24" cx="531.7" cy="147.4" r="1.2"/>
                </g>
                <g>
                  <circle class="st24" cx="524.4" cy="157.6" r="1.2"/>
                  <circle class="st24" cx="528" cy="159.5" r="1.2"/>
                  <circle class="st24" cx="531.7" cy="160.9" r="1.2"/>
                </g>
                <g>
                  <circle class="st24" cx="525.6" cy="172.3" r="1.2"/>
                  <circle class="st24" cx="529.1" cy="174.2" r="1.2"/>
                  <circle class="st24" cx="532.9" cy="175.6" r="1.2"/>
                </g>
              </g>
              <g class="st0">
                <path id="stripe_11_" class="st25" d="M545.3,253H521v11.5c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V253H545.3z"/>
                <path class="st26" d="M545.3,243H521v11.3c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V243H545.3z"/>
                <path id="stripe_10_" class="st25" d="M545.3,240H521v10.9c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V240H545.3z"/>
                <path class="st26" d="M545.3,230H521v10.8c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V230H545.3z"/>
                <path id="stripe_9_" class="st25" d="M545.3,226H521v11.4c0,0,0.9,9.2,24,9.2s24-9.2,24-9.2V226H545.3z"/>
                <ellipse class="st26" cx="545.3" cy="226.3" rx="24.3" ry="9.9"/>
                <g class="st5">
                  <circle class="st24" cx="524.4" cy="236.1" r="1.2"/>
                  <circle class="st24" cx="528" cy="238" r="1.2"/>
                  <circle class="st24" cx="531.7" cy="239.4" r="1.2"/>
                </g>
                <g class="st5">
                  <circle class="st24" cx="524.4" cy="249.6" r="1.2"/>
                  <circle class="st24" cx="528" cy="251.5" r="1.2"/>
                  <circle class="st24" cx="531.7" cy="252.9" r="1.2"/>
                </g>
                <g class="st5">
                  <circle class="st24" cx="525.6" cy="264.3" r="1.2"/>
                  <circle class="st24" cx="529.1" cy="266.2" r="1.2"/>
                  <circle class="st24" cx="532.9" cy="267.6" r="1.2"/>
                </g>
              </g>
              <g>
                <path class="st24" d="M21.4,29.8h-6.5v-6L7.7,10.1h6.5l3.9,7.6l3.8-7.6h6.5l-7,13.5V29.8z"/>
                <path class="st24" d="M43.9,22.1c0,4.8-3.4,7.9-8.7,7.9c-5.3,0-8.7-3.1-8.7-7.9s3.4-7.9,8.7-7.9C40.5,14.2,43.9,17.3,43.9,22.1z
                   M32.9,22.2c0,1.8,0.9,3,2.3,3c1.4,0,2.3-1.2,2.3-3s-0.9-3-2.3-3C33.8,19.2,32.9,20.4,32.9,22.2z"/>
                <path class="st24" d="M61.6,29.8h-6.3v-2.1c-1,1.5-2.5,2.4-4.5,2.4c-3.1,0-5.3-2.3-5.3-5.8v-9.8h6.3v8c0,1.3,0.7,2.1,1.7,2.1
                  c1.1,0,1.9-1,1.9-2.5v-7.6h6.3V29.8z"/>
                <path class="st24" d="M71,16.7c1.1-1.6,2.7-2.5,4.7-2.5v5.7c-2.8-0.4-4.7,0.6-4.7,2.6v7.3h-6.3V14.5H71V16.7z"/>
                <path class="st24" d="M91.9,10.1c6.5,0,10.7,3.8,10.7,9.8c0,6-4.3,9.8-10.9,9.8h-8.5V10.1H91.9z M89.7,24.7h2.4
                  c2.4,0,3.9-1.8,3.9-4.7c0-2.9-1.7-4.8-4.2-4.8h-2.1V24.7z"/>
                <path class="st24" d="M119.1,19.9v9.9h-6.2v-1.7c-0.9,1.2-2.4,1.9-4.3,1.9c-3.2,0-5.1-1.9-5.1-4.8c0-3,2-4.6,5.9-4.7h3.5
                  c0-1.1-0.8-1.7-2.4-1.7c-1.1,0-2.9,0.3-4.6,1l-1.4-4.2c2.6-1,5.3-1.5,7.6-1.5C116.4,14.2,119.1,16.3,119.1,19.9z M112.9,24.9
                  v-1.4h-2.2c-0.9,0-1.3,0.4-1.3,1.2c0,0.8,0.5,1.3,1.4,1.3C111.6,26.1,112.4,25.6,112.9,24.9z"/>
                <path class="st24" d="M132.7,29.1c-1,0.6-2.7,1-4.4,1c-3.5,0-5.8-2-5.8-5.2v-5.6h-2.1v-4h2.1V11h6.3v4.3h3.6v4h-3.6v4.6
                  c0,0.8,0.5,1.3,1.2,1.3c0.4,0,1-0.2,1.6-0.4L132.7,29.1z"/>
                <path class="st24" d="M149.1,19.9v9.9h-6.2v-1.7c-0.9,1.2-2.4,1.9-4.3,1.9c-3.2,0-5.1-1.9-5.1-4.8c0-3,2-4.6,5.9-4.7h3.5
                  c0-1.1-0.8-1.7-2.4-1.7c-1.1,0-2.9,0.3-4.6,1l-1.4-4.2c2.6-1,5.3-1.5,7.6-1.5C146.5,14.2,149.1,16.3,149.1,19.9z M142.9,24.9
                  v-1.4h-2.2c-0.9,0-1.3,0.4-1.3,1.2c0,0.8,0.5,1.3,1.4,1.3C141.6,26.1,142.4,25.6,142.9,24.9z"/>
                <path class="st24" d="M169.1,22.2c0,4.7-2.7,7.8-6.9,7.8c-1.7,0-3.1-0.6-4.1-1.8v1.6h-6.3V9h6.3v7c1-1.1,2.3-1.8,3.9-1.8
                  C166.4,14.2,169.1,17.4,169.1,22.2z M162.8,22c0-1.8-0.9-3-2.3-3c-1.4,0-2.3,1.2-2.3,3s0.9,3,2.3,3C161.9,25,162.8,23.8,162.8,22
                  z"/>
                <path class="st24" d="M185.6,19.9v9.9h-6.2v-1.7c-0.9,1.2-2.4,1.9-4.3,1.9c-3.2,0-5.1-1.9-5.1-4.8c0-3,2-4.6,5.9-4.7h3.5
                  c0-1.1-0.8-1.7-2.4-1.7c-1.1,0-2.9,0.3-4.6,1l-1.4-4.2c2.6-1,5.3-1.5,7.6-1.5C183,14.2,185.6,16.3,185.6,19.9z M179.4,24.9v-1.4
                  h-2.2c-0.9,0-1.3,0.4-1.3,1.2c0,0.8,0.5,1.3,1.4,1.3C178.1,26.1,178.9,25.6,179.4,24.9z"/>
                <path class="st24" d="M201.6,16.1l-2.1,3.9c-2.3-1.1-4-1.7-5.2-1.7c-0.5,0-0.9,0.2-0.9,0.5c0,1.4,8,0.9,8,6
                  c0,3.2-2.7,5.2-6.9,5.2c-2.8,0-5.3-0.7-7.5-2.2L189,24c2,1.3,3.9,1.9,5.7,1.9c0.6,0,1-0.2,1-0.4c0-1.3-7.8-0.8-7.8-5.9
                  c0-3.2,2.7-5.3,6.7-5.3C197,14.2,199.3,14.8,201.6,16.1z"/>
                <path class="st24" d="M218.9,23.5h-10c0.4,1.2,1.3,1.8,2.5,1.8c1.1,0,2.2-0.5,3.1-1.4l3.3,3.2c-1.6,1.8-4,2.8-6.9,2.8
                  c-5.2,0-8.3-3.1-8.3-7.8c0-4.8,3.2-8,8.2-8C216.1,14.2,219.3,17.9,218.9,23.5z M212.6,20.6c0.1-1.3-0.7-2.2-1.8-2.2
                  c-1.1,0-1.8,0.9-2,2.2H212.6z"/>
              </g>
              <g>
                <path class="cogs st27" d="M426.3,146.1h-9.7c-1-4.2-2.7-8.1-4.8-11.7l6.9-6.9c1.3-1.3,1.3-3.4,0-4.8l-10.5-10.5
                  c-1.3-1.3-3.4-1.3-4.8,0l-6.8,6.8c-3.7-2.3-7.8-4-12.2-5.1v-9.9c0-1.8-1.5-3.4-3.4-3.4h-14.8c-1.8,0-3.4,1.5-3.4,3.4v9.9
                  c-4.3,1.1-8.3,2.8-11.9,5l-6.7-6.7l0,0l-0.2-0.2c-1.3-1.3-3.4-1.3-4.8,0l-10.5,10.5c-1.3,1.3-1.3,3.4,0,4.8l0.2,0.2l0,0l6.7,6.7
                  c-2.2,3.7-3.9,7.7-5,11.9h-9.7c-1.8,0-3.4,1.5-3.4,3.4v14.8c0,1.8,1.5,3.4,3.4,3.4h9.7c1.1,4.3,2.8,8.4,5.1,12.2l-6.8,6.8
                  c-1.3,1.3-1.3,3.4,0,4.8l10.5,10.5c1.3,1.3,3.4,1.3,4.8,0l6.9-6.9c3.6,2.1,7.6,3.8,11.7,4.8v9.5c0,1.8,1.5,3.4,3.4,3.4h14.8
                  c1.8,0,3.4-1.5,3.4-3.4v-9.5c4.3-1.1,8.3-2.7,11.9-5l7,7c1.3,1.3,3.4,1.3,4.8,0l10.5-10.5c1.3-1.3,1.3-3.4,0-4.8l-0.2-0.2
                  l-6.9-6.9c2.2-3.7,3.9-7.7,5-11.9h9.7c1.8,0,3.4-1.5,3.4-3.4v-14.8C429.7,147.6,428.2,146.1,426.3,146.1z"/>
                <circle class="st28" cx="373.9" cy="156.8" r="22.7"/>
              </g>
              <g>
                <g id="Layer_3_2_">
                  <g>
                    <path class="st24" d="M301.1,31.9l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2L301.1,31.9z M311.4,16.7l-2,7.1h3.9
                      L311.4,16.7z"/>
                    <path class="st24" d="M323.3,31.9V10.6h5.9v16.2h9.7v5.1H323.3z"/>
                    <path class="st24" d="M341,31.9V10.6h9.2c1,0,2,0.2,2.9,0.6c0.9,0.4,1.6,1,2.3,1.7c0.6,0.7,1.1,1.5,1.5,2.4s0.5,1.8,0.5,2.7
                      s-0.2,1.9-0.5,2.7c-0.3,0.9-0.8,1.7-1.4,2.4c-0.6,0.7-1.4,1.2-2.2,1.7c-0.9,0.4-1.8,0.6-2.9,0.6h-3.5v6.5H341z M346.8,20.2h3.1
                      c0.4,0,0.7-0.2,1-0.5c0.3-0.3,0.5-0.9,0.5-1.8s-0.2-1.5-0.5-1.8c-0.4-0.3-0.7-0.5-1.1-0.5h-2.9L346.8,20.2L346.8,20.2z"/>
                    <path class="st24" d="M378.4,10.6v21.3h-5.9v-8.3h-7.1v8.3h-5.9V10.6h5.9v7.9h7.1v-7.9H378.4z"/>
                    <path class="st24" d="M380,31.9l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2L380,31.9z M390.3,16.7l-2,7.1h3.9L390.3,16.7
                      z"/>
                    <path class="st10" d="M402.2,31.9V10.6h9.8c1,0,2,0.2,2.9,0.6c0.9,0.4,1.6,1,2.3,1.7c0.7,0.7,1.1,1.5,1.5,2.4s0.5,1.8,0.5,2.7
                      c0,1.2-0.3,2.4-0.8,3.5s-1.3,1.9-2.3,2.6l4.8,7.8h-6.6l-4-6.5h-2.2v6.5L402.2,31.9z M408,20.2h3.7c0.4,0,0.7-0.2,1-0.6
                      c0.3-0.4,0.5-1,0.5-1.7c0-0.7-0.2-1.3-0.5-1.7c-0.4-0.4-0.7-0.6-1.1-0.6h-3.5L408,20.2L408,20.2z"/>
                    <path class="st10" d="M420.7,31.9l8-21.3h4.7l7.9,21.3h-6.2l-1.3-4.2h-5.7l-1.3,4.2L420.7,31.9z M431,16.7l-2,7.1h3.9L431,16.7
                      z"/>
                    <path class="st10" d="M448.8,21.4v10.5H443V10.6h4.6l8.6,10.8V10.6h5.8v21.3h-4.7L448.8,21.4z"/>
                    <path class="st10" d="M465.5,31.9V10.6h5.8v8.7l7.1-8.7h6l-7.7,9.5l8.3,11.8h-6.1l-5.6-8.5l-1.9,2.2v6.3L465.5,31.9z"/>
                  </g>
                </g>
                <g id="Layer_4_2_">
                  <circle class="st6" cx="272.8" cy="25.6" r="3.8"/>
                  <line class="st6" x1="276.6" y1="24.6" x2="282.3" y2="23.1"/>
                  <circle class="st29" cx="286.8" cy="22.5" r="4.6"/>
                  <circle class="st30" cx="286.8" cy="22.5" r="2.3"/>
                  <line class="st6" x1="285.7" y1="18.1" x2="284.1" y2="13.8"/>
                  <circle class="st30" cx="283.2" cy="11.6" r="2.6"/>
                  <line class="st6" x1="290.2" y1="25.6" x2="292.4" y2="27.8"/>
                  <circle class="st30" cx="294.8" cy="30.1" r="3.6"/>
                </g>
              </g>
              <g>
                <path class="st30" d="M189.4,100.5l1.2-6.7l-1.6-0.3l0.3-1.6l3.4,0.6l-1.5,8.3L189.4,100.5z"/>
                <path class="st30" d="M201,98.5c-0.6,2.7-2.1,3.9-4.4,3.4c-2.3-0.5-3.3-2.2-2.7-4.9c0.6-2.7,2.1-3.9,4.5-3.4
                  C200.6,94.1,201.6,95.8,201,98.5z M195.8,97.4c-0.4,1.9,0,2.9,1.1,3.1c1.2,0.2,1.9-0.5,2.3-2.4c0.4-1.9,0-2.8-1.1-3.1
                  C196.8,94.8,196.1,95.5,195.8,97.4z"/>
                <path class="st30" d="M202.3,103.1l1.6-6.6l-1.5-0.4l0.4-1.6l3.4,0.8l-1.9,8.2L202.3,103.1z"/>
                <path class="st30" d="M206.9,104.3l1.7-6.6l-1.5-0.4l0.4-1.5l3.4,0.9l-2.1,8.1L206.9,104.3z"/>
                <path class="st30" d="M218.7,103.3c-0.8,2.6-2.5,3.7-4.7,3c-2.3-0.7-3.1-2.5-2.3-5.2c0.8-2.6,2.5-3.7,4.7-3
                  C218.6,98.8,219.5,100.7,218.7,103.3z M213.5,101.7c-0.6,1.9-0.3,2.9,0.8,3.2c1.1,0.3,1.9-0.3,2.5-2.2c0.6-1.9,0.3-2.8-0.8-3.2
                  C214.8,99.2,214.1,99.8,213.5,101.7z"/>
                <path class="st30" d="M219.5,108l2.2-6.4l-1.5-0.5l0.5-1.5l3.3,1.1l-2.8,7.9L219.5,108z"/>
                <path class="st30" d="M231.3,108c-1,2.6-2.8,3.5-5,2.6c-2.2-0.9-2.8-2.8-1.8-5.3c1-2.5,2.8-3.5,5-2.6
                  C231.6,103.6,232.3,105.5,231.3,108z M226.3,106c-0.7,1.8-0.6,2.8,0.5,3.3c1.1,0.4,1.9-0.1,2.6-2c0.7-1.8,0.5-2.8-0.5-3.2
                  C227.8,103.6,227,104.2,226.3,106z"/>
                <path class="st30" d="M239,111.8c-1.2,2.5-3.1,3.2-5.2,2.2c-2.1-1.1-2.6-3-1.4-5.5c1.2-2.5,3-3.2,5.2-2.2
                  C239.7,107.4,240.2,109.3,239,111.8z M234.1,109.4c-0.9,1.8-0.8,2.8,0.3,3.3c1.1,0.5,1.9,0,2.8-1.8c0.9-1.8,0.8-2.7-0.3-3.3
                  C235.9,107.1,235,107.6,234.1,109.4z"/>
                <path class="st30" d="M238.8,116.6l3.5-5.8L241,110l0.8-1.4l3,1.8l-4.3,7.2L238.8,116.6z"/>
                <path class="st30" d="M242.8,119.1l3.9-5.6l-1.3-0.9l0.9-1.3l2.9,2l-4.8,6.9L242.8,119.1z"/>
                <path class="st30" d="M246.6,121.9l4.4-5.2l-1.2-1l1-1.2l2.7,2.2l-5.4,6.4L246.6,121.9z"/>
                <path class="st30" d="M257.3,126.5c-2,1.9-4,2-5.6,0.3c-1.7-1.7-1.5-3.7,0.5-5.6c2-1.9,4-2,5.6-0.3
                  C259.5,122.6,259.3,124.6,257.3,126.5z M253.6,122.6c-1.4,1.4-1.7,2.3-0.8,3.2c0.8,0.8,1.8,0.6,3.2-0.7c1.4-1.4,1.6-2.3,0.8-3.2
                  C256,121.1,255,121.3,253.6,122.6z"/>
                <path class="st30" d="M256.6,131.3l4.2-5.4l-1.3-1l1-1.3l2.8,2.1l-5.1,6.7L256.6,131.3z"/>
                <path class="st30" d="M268.7,133.8c-1.3,2.4-3.2,3.1-5.3,2c-2.1-1.1-2.5-3.1-1.2-5.5c1.3-2.4,3.2-3.1,5.3-2
                  C269.6,129.4,270,131.4,268.7,133.8z M264,131.2c-0.9,1.7-0.9,2.7,0.2,3.3c1,0.6,1.9,0.1,2.9-1.7c0.9-1.7,0.9-2.7-0.2-3.3
                  C265.8,129,264.9,129.5,264,131.2z"/>
                <path class="st30" d="M269.6,138.5l2.2-6.4l-1.5-0.5l0.5-1.5l3.3,1.1l-2.8,7.9L269.6,138.5z"/>
                <path class="st30" d="M281.7,137.2c-0.5,2.7-2.1,3.9-4.4,3.5c-2.3-0.5-3.3-2.2-2.8-4.9c0.5-2.7,2.1-3.9,4.4-3.5
                  C281.3,132.8,282.3,134.6,281.7,137.2z M276.5,136.2c-0.4,1.9,0,2.9,1.1,3.1c1.2,0.2,1.8-0.5,2.2-2.4c0.4-1.9,0-2.8-1.1-3.1
                  C277.5,133.6,276.8,134.3,276.5,136.2z"/>
                <path class="st30" d="M283.6,141.6l0.6-6.8l-1.6-0.2l0.2-1.6l3.5,0.3l-0.8,8.4L283.6,141.6z"/>
                <path class="st30" d="M288.7,142l0.4-6.8l-1.6-0.1l0.1-1.6l3.5,0.2l-0.4,8.4L288.7,142z"/>
                <path class="st30" d="M299.9,138.4c-0.2,2.7-1.6,4.2-3.9,4c-2.4-0.1-3.6-1.7-3.4-4.5c0.2-2.7,1.6-4.2,3.9-4
                  C298.9,134.1,300.1,135.6,299.9,138.4z M294.5,138c-0.1,2,0.4,2.8,1.6,2.9c1.2,0.1,1.8-0.7,1.9-2.7c0.1-2-0.4-2.8-1.5-2.9
                  C295.2,135.3,294.6,136.1,294.5,138z"/>
                <path class="st30" d="M301.5,143l1.5-6.6l-1.5-0.3l0.3-1.6l3.4,0.8l-1.8,8.2L301.5,143z"/>
              </g>
              <g>
                <path class="st30" d="M186.6,205.9l-1.1-6.7l-1.6,0.3l-0.3-1.6l3.4-0.6l1.4,8.3L186.6,205.9z"/>
                <path class="st30" d="M196.6,199.8c0.5,2.7-0.5,4.4-2.8,4.9c-2.3,0.5-3.9-0.8-4.4-3.5c-0.5-2.7,0.5-4.4,2.8-4.9
                  C194.5,195.9,196.1,197.2,196.6,199.8z M191.3,200.9c0.4,1.9,1.1,2.7,2.2,2.4c1.2-0.2,1.5-1.1,1.1-3.1c-0.4-1.9-1.1-2.6-2.2-2.4
                  C191.3,198,190.9,198.9,191.3,200.9z"/>
                <path class="st30" d="M199.5,203.5l-1.5-6.6l-1.5,0.3l-0.3-1.6l3.4-0.8l1.8,8.2L199.5,203.5z"/>
                <path class="st30" d="M209.1,196.8c0.7,2.7-0.2,4.5-2.5,5.1c-2.3,0.6-3.9-0.6-4.6-3.2c-0.7-2.7,0.2-4.4,2.5-5
                  C206.8,193,208.4,194.1,209.1,196.8z M203.9,198.1c0.5,1.9,1.2,2.6,2.4,2.3c1.1-0.3,1.5-1.2,1-3.2c-0.5-1.9-1.2-2.6-2.4-2.3
                  C203.7,195.3,203.4,196.2,203.9,198.1z"/>
                <path class="st30" d="M217.2,194.4c0.8,2.6,0,4.5-2.2,5.2c-2.3,0.7-4-0.4-4.8-3c-0.8-2.6,0-4.4,2.3-5.1
                  C214.7,190.7,216.4,191.7,217.2,194.4z M212,195.9c0.6,1.9,1.3,2.5,2.5,2.2c1.1-0.3,1.4-1.3,0.8-3.2c-0.6-1.9-1.3-2.5-2.5-2.2
                  C211.7,193.1,211.4,194.1,212,195.9z"/>
                <path class="st30" d="M220.7,197.6l-2.3-6.4l-1.5,0.5l-0.5-1.5l3.3-1.2l2.8,7.9L220.7,197.6z"/>
                <path class="st30" d="M229.6,189.5c1.1,2.5,0.4,4.4-1.7,5.4c-2.2,0.9-4,0-5-2.5c-1.1-2.5-0.4-4.4,1.7-5.3
                  C226.7,186.1,228.5,187,229.6,189.5z M224.6,191.6c0.8,1.8,1.6,2.4,2.7,1.9c1.1-0.5,1.3-1.4,0.5-3.3c-0.8-1.8-1.6-2.4-2.7-1.9
                  C224,188.8,223.8,189.8,224.6,191.6z"/>
                <path class="st30" d="M237.1,185.6c1.3,2.4,0.8,4.4-1.2,5.5c-2.1,1.1-4,0.4-5.2-2.1c-1.3-2.4-0.8-4.4,1.3-5.5
                  C234,182.5,235.8,183.2,237.1,185.6z M232.3,188.1c0.9,1.8,1.8,2.2,2.8,1.7c1-0.5,1.1-1.5,0.2-3.3c-0.9-1.7-1.8-2.2-2.8-1.7
                  C231.5,185.4,231.4,186.4,232.3,188.1z"/>
                <path class="st30" d="M241.3,187.9l-3.7-5.7l-1.3,0.9l-0.9-1.3l2.9-1.9l4.6,7L241.3,187.9z"/>
                <path class="st30" d="M247.8,177.5c1.8,2.1,1.8,4.1,0,5.6c-1.8,1.6-3.8,1.3-5.6-0.8c-1.8-2.1-1.8-4.1,0-5.6
                  C244,175.2,246,175.5,247.8,177.5z M243.7,181.1c1.3,1.5,2.3,1.8,3.2,1c0.9-0.8,0.7-1.8-0.6-3.3c-1.3-1.5-2.2-1.8-3.1-1
                  C242.3,178.6,242.4,179.6,243.7,181.1z"/>
                <path class="st30" d="M252.2,178.7l-4.8-4.9l-1.1,1.1l-1.1-1.1l2.5-2.4l5.9,6L252.2,178.7z"/>
                <path class="st30" d="M255.7,175.5l-4.3-5.3l-1.2,1l-1-1.2l2.7-2.2l5.3,6.5L255.7,175.5z"/>
                <path class="st30" d="M262.4,165.9c1.4,2.3,1.1,4.3-0.9,5.6c-2,1.2-3.9,0.6-5.4-1.7c-1.4-2.3-1.1-4.3,0.9-5.5
                  C259,163,260.9,163.6,262.4,165.9z M257.8,168.7c1,1.7,1.9,2.1,2.9,1.5c1-0.6,1-1.6,0-3.3c-1-1.7-1.9-2.1-2.9-1.5
                  C256.8,166,256.7,167,257.8,168.7z"/>
                <path class="st30" d="M270.5,162.6c1,2.6,0.3,4.5-1.9,5.3c-2.2,0.9-4-0.1-5-2.6c-1-2.5-0.3-4.4,1.9-5.3
                  C267.7,159.1,269.5,160,270.5,162.6z M265.5,164.6c0.7,1.8,1.5,2.4,2.6,2c1.1-0.4,1.3-1.4,0.6-3.3c-0.7-1.8-1.5-2.4-2.6-2
                  C265,161.8,264.8,162.7,265.5,164.6z"/>
                <path class="st30" d="M274,166.1l-1.6-6.6l-1.5,0.4l-0.4-1.5l3.4-0.8l2,8.1L274,166.1z"/>
                <path class="st30" d="M278.5,165.1l-1.1-6.7l-1.6,0.3l-0.3-1.6l3.4-0.6l1.4,8.3L278.5,165.1z"/>
                <path class="st30" d="M289,159.7c0.2,2.7-1,4.4-3.3,4.6c-2.4,0.2-3.8-1.2-4-4c-0.2-2.7,0.9-4.3,3.3-4.5
                  C287.3,155.6,288.8,157,289,159.7z M283.6,160.2c0.2,2,0.8,2.8,2,2.7c1.2-0.1,1.6-1,1.5-3c-0.2-2-0.8-2.7-1.9-2.6
                  C283.9,157.3,283.5,158.2,283.6,160.2z"/>
                <path class="st30" d="M291.5,163.9l-0.3-6.8l-1.6,0.1l-0.1-1.6l3.5-0.2l0.4,8.4L291.5,163.9z"/>
              </g>
              <g>
                <line class="st10" x1="578" y1="153" x2="1055" y2="153"/>
                <g>
                  <line class="st6" x1="578" y1="153" x2="579" y2="153"/>
                  <line class="st31" x1="581" y1="153" x2="1053" y2="153"/>
                  <line class="st6" x1="1054" y1="153" x2="1055" y2="153"/>
                </g>
              </g>
              <g>
                <circle class="st32" cx="632.3" cy="152.8" r="17.8"/>
                <circle class="st10" cx="632.3" cy="152.8" r="8.8"/>
              </g>
              <polygon class="st33" points="875.8,252 731.8,252 821,54 965,54     "/>
              <polygon class="st34" points="899.1,168 779.2,168 795.5,132 915.4,132     "/>
              <g>
                <path class="st35" d="M902.7,119.4c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C905.8,125.5,905.7,121.8,902.7,119.4z"/>
                <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="888.0695" y1="114.8797" x2="888.0695" y2="101.2628">
                  <stop  offset="0.1608" style="stop-color:#D86D25"/>
                  <stop  offset="0.6432" style="stop-color:#E57F39"/>
                </linearGradient>
                <path class="st36" d="M897.5,119.8c2.4,0.4,5-0.2,6.9-1.8c1.9-1.6,2.1-4.2,2.2-6.7c-1.6,1.3-4.2,0.4-5.3-1.5
                  c-1.1-1.8-1.3-4.1-1-6.2c0.3-2.9,0.6-5.9,0.4-8.9c-0.2-3-0.9-5.9-2.5-8.4c-2.3-3.6-6.6-5.4-10.7-5.4s-8.4,1.8-10.7,5.4
                  c-1.6,2.4-2.3,5.4-2.5,8.4c-0.2,3,0.1,5.9,0.4,8.9c0.2,2.1,0,4.3-1,6.2c-1.1,1.8-2.5,2.8-4.2,1.5c0.1,2.5,0.3,5.1,2.2,6.7
                  c1.9,1.6,3.4,2.3,5.8,1.8H897.5z"/>
                <path class="st35" d="M902.7,119.4c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C905.8,125.5,905.7,121.8,902.7,119.4z"/>
                <g>
                  <path class="st37" d="M875.9,117.9l-0.9,0.3c-0.7,0.2-1.4,0.6-2,1c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1
                    c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.7-0.2-4.4-3.2-6.7c-0.7-0.6-1.5-1-2.3-1.2l-0.9-0.3c-3.6,1.3-7.6,2-11.8,2
                    S879.5,119.2,875.9,117.9z"/>
                  <path class="st35" d="M891.5,114.5c-0.3-1.6-0.3-6-0.2-6.7c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7
                    c-0.1,0.6-0.4,1.1-1,1.3l-7,2.2c3.6,1.3,7.6,2,11.8,2s8.2-0.7,11.8-2l-7-2.2C891.9,115.6,891.6,115.1,891.5,114.5z"/>
                </g>
                <g>
                  <path class="st38" d="M891.3,111.4c0-1.5,0-2.9,0-3.3c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.4,0,1.8,0,3.3
                    C886.4,112.2,889,112.2,891.3,111.4z"/>
                </g>
                <g>
                  <path class="st35" d="M879.3,98.8c0.6,1.5,0.3,3.8-0.8,4.3c-1.1,0.4-2.4-1.1-3.1-2.6s-0.3-3.1,0.8-3.5
                    C877.3,96.5,878.7,97.3,879.3,98.8z"/>
                  <path class="st35" d="M896.1,98.8c-0.6,1.5-0.3,3.8,0.8,4.3c1.1,0.4,2.4-1.1,3.1-2.6s0.3-3.1-0.8-3.5
                    C898.1,96.5,896.7,97.3,896.1,98.8z"/>
                </g>
                <path class="st35" d="M887.7,84.1c-10.7-0.4-10.8,9.8-10.7,13.1c0.1,2.4,1.1,6,1.6,7.7c0.3,1,0.8,1.9,1.6,2.7
                  c2.8,2.7,7.5,3.6,7.5,3.6s4.7-0.9,7.5-3.6c0.8-0.7,1.3-1.7,1.6-2.7c0.5-1.8,1.5-5.3,1.6-7.7C898.5,93.9,898.4,83.7,887.7,84.1z"
                  />
                <g>
                  <ellipse class="st16" cx="882.1" cy="98.1" rx="1.4" ry="1.6"/>
                  <ellipse class="st16" cx="892.9" cy="98.1" rx="1.4" ry="1.6"/>
                </g>
                <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="892.0536" y1="86.1804" x2="899.2097" y2="97.4916">
                  <stop  offset="0.3719" style="stop-color:#E57F39"/>
                  <stop  offset="1" style="stop-color:#FFBA83"/>
                </linearGradient>
                <path class="st39" d="M893.5,85c2.2,0.2,4.2,1.8,5.2,3.7c1,2,1.3,4.3,1.1,6.5c-0.2,2.7-1,5.3-2.2,7.7c1.5-5.3-1.1-11-5.4-14.5
                  c-0.8-0.6-0.9-2-0.3-2.8S892.5,84.9,893.5,85z"/>
                <g>
                  <g>
                    <path class="st40" d="M883.9,104.8c0.7,1.4,2.1,2.5,3.8,2.5s3.1-1,3.8-2.5H883.9z"/>
                  </g>
                </g>
                <circle class="st14" cx="880.6" cy="102" r="1.5"/>
                <circle class="st14" cx="894.2" cy="102" r="1.5"/>
              </g>
              <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="887.7826" y1="86.8296" x2="877.7667" y2="104.7612">
                <stop  offset="0.5025" style="stop-color:#E57F39"/>
                <stop  offset="1" style="stop-color:#FFBA83"/>
              </linearGradient>
              <path class="st41" d="M895.9,86.8c-0.1,2-1.9,3.5-3.8,4.2c-1.8,0.6-3.8,0.7-5.7,1.2c-3,0.9-5.7,3.2-7.1,6.1s-1.5,6.5-0.3,9.6
                c-1.2-3.8-3.1-8.5-2.8-12.4c0.3-4,2.2-7.9,5-10.6c2.8-2.7,7.4-3,10.9-1.6C893.8,84.1,896,84.8,895.9,86.8z"/>
              <g>
                <g>
                  <path class="st42" d="M860.5,119.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    h21.5H864c0.1,0,0.1-0.1,0.1-0.1C864,125.4,863.9,121.7,860.5,119.2z"/>
                  <g>
                    <path class="st43" d="M860.5,119.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5H864
                      c0.1,0,0.1-0.1,0.1-0.1C864,125.4,863.9,121.7,860.5,119.2z"/>
                  </g>
                  <g>
                    <path class="st44" d="M847.2,112.1c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C844.1,113.8,846.6,112.7,847.2,112.1z"/>
                  </g>
                  <g>
                    <path class="st42" d="M834.2,98.4c0.6,1.7,0.3,4.3-0.8,4.8s-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C832.2,95.7,833.6,96.7,834.2,98.4z"/>
                    <path class="st42" d="M851,98.4c-0.6,1.7-0.3,4.3,0.8,4.8s2.4-1.3,3.1-3c0.6-1.7,0.3-3.5-0.8-4C853,95.7,851.6,96.7,851,98.4z"
                      />
                  </g>
                  <path class="st42" d="M842.5,83.4c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C853.2,93.2,853,83.1,842.5,83.4z"/>
                  <g>
                    <ellipse class="st16" cx="837" cy="97.4" rx="1.3" ry="1.6"/>
                    <ellipse class="st16" cx="847.7" cy="97.4" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st45" d="M844.5,109.6c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4c0.3,0.8,0.7,1.6,1.2,2.1
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.5-0.5,0.9-1.3,1.2-2.1
                      C849.6,107.8,847,110,844.5,109.6z"/>
                  </g>
                  <path class="st46" d="M839.8,104.2c0.5,0.7,1.5,1.1,2.7,1.1c1.2,0,2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st45" d="M833.2,93.4c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C832.9,96.9,832.8,95.1,833.2,93.4z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st45" d="M852,93.4c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C852.3,96.9,852.4,95.1,852,93.4z"/>
                    </g>
                  </g>
                </g>
                <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="833.3975" y1="85.8717" x2="853.7106" y2="85.8717">
                  <stop  offset="0" style="stop-color:#B17338"/>
                  <stop  offset="0.8643" style="stop-color:#E8AE5C"/>
                </linearGradient>
                <path class="st47" d="M843.6,89.2c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                  c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C838.4,88.4,840.5,88.4,843.6,89.2z"/>
              </g>
              <g>
                <path class="st35" d="M827.2,218.2c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C830.2,224.2,830.2,220.5,827.2,218.2z"/>
                <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="812.5528" y1="213.5901" x2="812.5528" y2="199.9732">
                  <stop  offset="0.1608" style="stop-color:#D86D25"/>
                  <stop  offset="0.6432" style="stop-color:#E57F39"/>
                </linearGradient>
                <path class="st48" d="M822,218.5c2.4,0.4,5-0.2,6.9-1.8c1.9-1.6,2.1-4.2,2.2-6.7c-1.6,1.3-4.2,0.4-5.3-1.5
                  c-1.1-1.8-1.3-4.1-1-6.2c0.3-2.9,0.6-5.9,0.4-8.9c-0.2-3-0.9-5.9-2.5-8.4c-2.3-3.6-6.6-5.4-10.7-5.4c-4.1,0-8.4,1.8-10.7,5.4
                  c-1.6,2.4-2.3,5.4-2.5,8.4c-0.2,3,0.1,5.9,0.4,8.9c0.2,2.1,0,4.3-1,6.2s-2.5,2.8-4.2,1.5c0.1,2.5,0.3,5.1,2.2,6.7
                  c1.9,1.6,3.4,2.3,5.8,1.8H822z"/>
                <path class="st35" d="M827.2,218.2c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C830.2,224.2,830.2,220.5,827.2,218.2z"/>
                <g>
                  <path class="st37" d="M800.4,216.7l-0.9,0.3c-0.7,0.2-1.4,0.6-2,1c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1
                    c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.7-0.2-4.4-3.2-6.7c-0.7-0.6-1.5-1-2.3-1.2l-0.9-0.3c-3.6,1.3-7.6,2-11.8,2
                    C808,218.6,804,217.9,800.4,216.7z"/>
                  <path class="st35" d="M816,213.2c-0.3-1.6-0.3-6-0.2-6.7c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7
                    c-0.1,0.6-0.4,1.1-1,1.3l-7,2.2c3.6,1.3,7.6,2,11.8,2c4.2,0,8.2-0.7,11.8-2l-7-2.2C816.4,214.3,816.1,213.8,816,213.2z"/>
                </g>
                <g>
                  <path class="st38" d="M815.8,210.2c0-1.5,0-2.9,0-3.3c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.4,0,1.8,0,3.3
                    C810.9,211,813.5,211,815.8,210.2z"/>
                </g>
                <g>
                  <path class="st35" d="M803.8,197.5c0.6,1.5,0.3,3.8-0.8,4.3c-1.1,0.4-2.4-1.1-3.1-2.6c-0.6-1.5-0.3-3.1,0.8-3.5
                    C801.8,195.2,803.2,196,803.8,197.5z"/>
                  <path class="st35" d="M820.6,197.5c-0.6,1.5-0.3,3.8,0.8,4.3c1.1,0.4,2.4-1.1,3.1-2.6s0.3-3.1-0.8-3.5
                    C822.6,195.2,821.2,196,820.6,197.5z"/>
                </g>
                <path class="st35" d="M812.2,182.8c-10.7-0.4-10.8,9.8-10.7,13.1c0.1,2.4,1.1,6,1.6,7.7c0.3,1,0.8,1.9,1.6,2.7
                  c2.8,2.7,7.5,3.6,7.5,3.6s4.7-0.9,7.5-3.6c0.8-0.7,1.3-1.7,1.6-2.7c0.5-1.8,1.5-5.3,1.6-7.7C823,192.6,822.9,182.4,812.2,182.8z"
                  />
                <g>
                  <ellipse class="st16" cx="806.6" cy="196.8" rx="1.4" ry="1.6"/>
                  <ellipse class="st16" cx="817.3" cy="196.8" rx="1.4" ry="1.6"/>
                </g>
                <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="816.537" y1="184.8907" x2="823.6931" y2="196.2019">
                  <stop  offset="0.3719" style="stop-color:#E57F39"/>
                  <stop  offset="1" style="stop-color:#FFBA83"/>
                </linearGradient>
                <path class="st49" d="M817.9,183.7c2.2,0.2,4.2,1.8,5.2,3.7c1,2,1.3,4.3,1.1,6.5c-0.2,2.7-1,5.3-2.2,7.7c1.5-5.3-1.1-11-5.4-14.5
                  c-0.8-0.6-0.9-2-0.3-2.8S817,183.6,817.9,183.7z"/>
                <g>
                  <g>
                    <path class="st40" d="M808.4,203.5c0.7,1.4,2.1,2.5,3.8,2.5c1.7,0,3.1-1,3.8-2.5H808.4z"/>
                  </g>
                </g>
                <circle class="st14" cx="805.1" cy="200.7" r="1.5"/>
                <circle class="st14" cx="818.7" cy="200.7" r="1.5"/>
              </g>
              <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="812.2659" y1="185.54" x2="802.25" y2="203.4716">
                <stop  offset="0.5025" style="stop-color:#E57F39"/>
                <stop  offset="1" style="stop-color:#FFBA83"/>
              </linearGradient>
              <path class="st50" d="M820.3,185.5c-0.1,2-1.9,3.5-3.8,4.2c-1.8,0.6-3.8,0.7-5.7,1.2c-3,0.9-5.7,3.2-7.1,6.1
                c-1.4,3-1.5,6.5-0.3,9.6c-1.2-3.8-3.1-8.5-2.8-12.4s2.2-7.9,5-10.6c2.8-2.7,7.4-3,10.9-1.6C818.3,182.8,820.5,183.5,820.3,185.5z"
                />
              <g>
                <g>
                  <path class="st42" d="M871.3,217.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1H849c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    h21.5h21.5c0.1,0,0.1-0.1,0.1-0.1C874.8,224.2,874.8,220.4,871.3,217.9z"/>
                  <g>
                    <path class="st43" d="M871.3,217.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5h21.5
                      c0.1,0,0.1-0.1,0.1-0.1C874.8,224.2,874.8,220.4,871.3,217.9z"/>
                  </g>
                  <g>
                    <path class="st44" d="M858.1,210.9c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1H849c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C855,212.5,857.4,211.4,858.1,210.9z"/>
                  </g>
                  <g>
                    <path class="st42" d="M845,197.1c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C843,194.4,844.4,195.4,845,197.1z"/>
                    <path class="st42" d="M861.8,197.1c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3s0.3-3.5-0.8-4
                      C863.8,194.4,862.4,195.4,861.8,197.1z"/>
                  </g>
                  <path class="st42" d="M853.3,182.1c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C864.1,191.9,863.9,181.8,853.3,182.1z"/>
                  <g>
                    <ellipse class="st16" cx="847.9" cy="196.1" rx="1.3" ry="1.6"/>
                    <ellipse class="st16" cx="858.6" cy="196.1" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st45" d="M855.3,208.3c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4c0.3,0.8,0.7,1.6,1.2,2.1
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.5-0.5,0.9-1.3,1.2-2.1
                      C860.4,206.5,857.9,208.7,855.3,208.3z"/>
                  </g>
                  <path class="st46" d="M850.6,203c0.5,0.7,1.5,1.1,2.7,1.1s2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st45" d="M844,192.1c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C843.7,195.6,843.6,193.8,844,192.1z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st45" d="M862.8,192.1c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C863.1,195.6,863.2,193.8,862.8,192.1z"/>
                    </g>
                  </g>
                </g>
                <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="844.2521" y1="184.5821" x2="864.5653" y2="184.5821">
                  <stop  offset="0" style="stop-color:#B17338"/>
                  <stop  offset="0.8643" style="stop-color:#E8AE5C"/>
                </linearGradient>
                <path class="st51" d="M854.5,187.9c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                  c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C849.3,187.1,851.4,187.1,854.5,187.9z"/>
              </g>
              <g>
                <path class="st21" d="M754.1,128.4c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C757.2,134.5,757.1,130.8,754.1,128.4z"/>
                <path class="st21" d="M748.9,128.8c2.4,0.4,5-0.2,6.9-1.8c1.9-1.6,2.1-4.2,2.2-6.7c-1.6,1.3-4.2,0.4-5.3-1.5
                  c-1.1-1.8-1.3-4.1-1-6.2c0.3-2.9,0.6-5.9,0.4-8.9c-0.2-3-0.9-5.9-2.5-8.4c-2.3-3.6-6.6-5.4-10.7-5.4s-8.4,1.8-10.7,5.4
                  c-1.6,2.4-2.3,5.4-2.5,8.4c-0.2,3,0.1,5.9,0.4,8.9c0.2,2.1,0,4.3-1,6.2c-1.1,1.8-2.5,2.8-4.2,1.5c0.1,2.5,0.3,5.1,2.2,6.7
                  s3.4,2.3,5.8,1.8H748.9z"/>
                <path class="st21" d="M754.1,128.4c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C757.2,134.5,757.1,130.8,754.1,128.4z"/>
                <g>
                  <path class="st21" d="M727.3,126.9l-0.9,0.3c-0.7,0.2-1.4,0.6-2,1c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1
                    c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.7-0.2-4.4-3.2-6.7c-0.7-0.6-1.5-1-2.3-1.2l-0.9-0.3c-3.6,1.3-7.6,2-11.8,2
                    C734.9,128.9,730.9,128.2,727.3,126.9z"/>
                  <path class="st21" d="M742.9,123.5c-0.3-1.6-0.3-6-0.2-6.7c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7
                    c-0.1,0.6-0.4,1.1-1,1.3l-7,2.2c3.6,1.3,7.6,2,11.8,2c4.2,0,8.2-0.7,11.8-2l-7-2.2C743.3,124.6,743,124.1,742.9,123.5z"/>
                </g>
                <g>
                  <path class="st21" d="M742.7,120.4c0-1.5,0-2.9,0-3.3c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.4,0,1.8,0,3.3
                    C737.8,121.2,740.4,121.2,742.7,120.4z"/>
                </g>
                <g>
                  <path class="st21" d="M730.7,107.8c0.6,1.5,0.3,3.8-0.8,4.3c-1.1,0.4-2.4-1.1-3.1-2.6c-0.6-1.5-0.3-3.1,0.8-3.5
                    C728.7,105.5,730.1,106.3,730.7,107.8z"/>
                  <path class="st21" d="M747.5,107.8c-0.6,1.5-0.3,3.8,0.8,4.3c1.1,0.4,2.4-1.1,3.1-2.6s0.3-3.1-0.8-3.5
                    C749.5,105.5,748.1,106.3,747.5,107.8z"/>
                </g>
                <path class="st21" d="M739.1,93.1c-10.7-0.4-10.8,9.8-10.7,13.1c0.1,2.4,1.1,6,1.6,7.7c0.3,1,0.8,1.9,1.6,2.7
                  c2.8,2.7,7.5,3.6,7.5,3.6s4.7-0.9,7.5-3.6c0.8-0.7,1.3-1.7,1.6-2.7c0.5-1.8,1.5-5.3,1.6-7.7C749.9,102.9,749.8,92.7,739.1,93.1z"
                  />
                <g>
                  <ellipse class="st21" cx="733.5" cy="107.1" rx="1.4" ry="1.6"/>
                  <ellipse class="st21" cx="744.3" cy="107.1" rx="1.4" ry="1.6"/>
                </g>
                <path class="st21" d="M744.9,94c2.2,0.2,4.2,1.8,5.2,3.7c1,2,1.3,4.3,1.1,6.5c-0.2,2.7-1,5.3-2.2,7.7c1.5-5.3-1.1-11-5.4-14.5
                  c-0.8-0.6-0.9-2-0.3-2.8S743.9,93.9,744.9,94z"/>
                <g>
                  <g>
                    <path class="st21" d="M735.3,113.8c0.7,1.4,2.1,2.5,3.8,2.5s3.1-1,3.8-2.5H735.3z"/>
                  </g>
                </g>
                <circle class="st21" cx="732" cy="111" r="1.5"/>
                <circle class="st21" cx="745.6" cy="111" r="1.5"/>
              </g>
              <path class="st21" d="M747.3,95.8c-0.1,2-1.9,3.5-3.8,4.2c-1.8,0.6-3.8,0.7-5.7,1.2c-3,0.9-5.7,3.2-7.1,6.1
                c-1.4,3-1.5,6.5-0.3,9.6c-1.2-3.8-3.1-8.5-2.8-12.4c0.3-4,2.2-7.9,5-10.6c2.8-2.7,7.4-3,10.9-1.6
                C745.2,93.1,747.4,93.8,747.3,95.8z"/>
              <g>
                <g>
                  <path class="st21" d="M711.9,128.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0L700,124c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1H698h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    H694h21.5c0.1,0,0.1-0.1,0.1-0.1C715.4,134.4,715.3,130.7,711.9,128.2z"/>
                  <g>
                    <path class="st21" d="M711.9,128.2c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1H694h21.5
                      c0.1,0,0.1-0.1,0.1-0.1C715.4,134.4,715.3,130.7,711.9,128.2z"/>
                  </g>
                  <g>
                    <path class="st21" d="M698.6,121.1c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C695.5,122.8,698,121.7,698.6,121.1z"/>
                  </g>
                  <g>
                    <path class="st21" d="M685.6,107.4c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C683.6,104.7,685,105.7,685.6,107.4z"/>
                    <path class="st21" d="M702.4,107.4c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3s0.3-3.5-0.8-4
                      C704.4,104.7,703,105.7,702.4,107.4z"/>
                  </g>
                  <path class="st21" d="M693.9,92.4c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C704.6,102.2,704.5,92.1,693.9,92.4z"/>
                  <g>
                    <ellipse class="st21" cx="688.4" cy="106.4" rx="1.3" ry="1.6"/>
                    <ellipse class="st21" cx="699.1" cy="106.4" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st21" d="M695.9,118.6c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4c0.3,0.8,0.7,1.6,1.2,2.1
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.5-0.5,0.9-1.3,1.2-2.1
                      C701,116.8,698.4,119,695.9,118.6z"/>
                  </g>
                  <path class="st21" d="M691.2,113.2c0.5,0.7,1.5,1.1,2.7,1.1s2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st21" d="M684.6,102.4c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C684.3,105.9,684.2,104.1,684.6,102.4z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st21" d="M703.4,102.4c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C703.7,105.9,703.8,104.1,703.4,102.4z"/>
                    </g>
                  </g>
                </g>
                <path class="st21" d="M695,98.2c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4c-4.3-2.2-9.8-1.1-13.2,2.6
                  c-1.8,1.9-2.6,3.7,0.3,3.2C689.8,97.4,691.9,97.4,695,98.2z"/>
              </g>
              <g>
                <path class="st21" d="M1006.1,209.2c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C1009.2,215.2,1009.1,211.5,1006.1,209.2z"/>
                <path class="st21" d="M1000.9,209.5c2.4,0.4,5-0.2,6.9-1.8c1.9-1.6,2.1-4.2,2.2-6.7c-1.6,1.3-4.2,0.4-5.3-1.5
                  c-1.1-1.8-1.3-4.1-1-6.2c0.3-2.9,0.6-5.9,0.4-8.9c-0.2-3-0.9-5.9-2.5-8.4c-2.3-3.6-6.6-5.4-10.7-5.4s-8.4,1.8-10.7,5.4
                  c-1.6,2.4-2.3,5.4-2.5,8.4c-0.2,3,0.1,5.9,0.4,8.9c0.2,2.1,0,4.3-1,6.2c-1.1,1.8-2.5,2.8-4.2,1.5c0.1,2.5,0.3,5.1,2.2,6.7
                  c1.9,1.6,3.4,2.3,5.8,1.8H1000.9z"/>
                <path class="st21" d="M1006.1,209.2c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C1009.2,215.2,1009.1,211.5,1006.1,209.2z"/>
                <g>
                  <path class="st21" d="M979.3,207.7l-0.9,0.3c-0.7,0.2-1.4,0.6-2,1c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1
                    c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.7-0.2-4.4-3.2-6.7c-0.7-0.6-1.5-1-2.3-1.2l-0.9-0.3c-3.6,1.3-7.6,2-11.8,2
                    C986.9,209.6,982.9,208.9,979.3,207.7z"/>
                  <path class="st21" d="M994.9,204.2c-0.3-1.6-0.3-6-0.2-6.7c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7
                    c-0.1,0.6-0.4,1.1-1,1.3l-7,2.2c3.6,1.3,7.6,2,11.8,2c4.2,0,8.2-0.7,11.8-2l-7-2.2C995.3,205.3,995,204.8,994.9,204.2z"/>
                </g>
                <g>
                  <path class="st21" d="M994.7,201.2c0-1.5,0-2.9,0-3.3c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.4,0,1.8,0,3.3
                    C989.8,202,992.4,202,994.7,201.2z"/>
                </g>
                <g>
                  <path class="st21" d="M982.7,188.5c0.6,1.5,0.3,3.8-0.8,4.3c-1.1,0.4-2.4-1.1-3.1-2.6c-0.6-1.5-0.3-3.1,0.8-3.5
                    C980.7,186.2,982.1,187,982.7,188.5z"/>
                  <path class="st21" d="M999.5,188.5c-0.6,1.5-0.3,3.8,0.8,4.3c1.1,0.4,2.4-1.1,3.1-2.6s0.3-3.1-0.8-3.5
                    C1001.5,186.2,1000.1,187,999.5,188.5z"/>
                </g>
                <path class="st21" d="M991.1,173.8c-10.7-0.4-10.8,9.8-10.7,13.1c0.1,2.4,1.1,6,1.6,7.7c0.3,1,0.8,1.9,1.6,2.7
                  c2.8,2.7,7.5,3.6,7.5,3.6s4.7-0.9,7.5-3.6c0.8-0.7,1.3-1.7,1.6-2.7c0.5-1.8,1.5-5.3,1.6-7.7
                  C1001.9,183.6,1001.8,173.4,991.1,173.8z"/>
                <g>
                  <ellipse class="st21" cx="985.5" cy="187.8" rx="1.4" ry="1.6"/>
                  <ellipse class="st21" cx="996.3" cy="187.8" rx="1.4" ry="1.6"/>
                </g>
                <path class="st21" d="M996.9,174.7c2.2,0.2,4.2,1.8,5.2,3.7c1,2,1.3,4.3,1.1,6.5c-0.2,2.7-1,5.3-2.2,7.7c1.5-5.3-1.1-11-5.4-14.5
                  c-0.8-0.6-0.9-2-0.3-2.8S995.9,174.6,996.9,174.7z"/>
                <g>
                  <g>
                    <path class="st21" d="M987.3,194.5c0.7,1.4,2.1,2.5,3.8,2.5s3.1-1,3.8-2.5H987.3z"/>
                  </g>
                </g>
                <circle class="st21" cx="984" cy="191.7" r="1.5"/>
                <circle class="st21" cx="997.6" cy="191.7" r="1.5"/>
              </g>
              <path class="st21" d="M999.3,176.5c-0.1,2-1.9,3.5-3.8,4.2c-1.8,0.6-3.8,0.7-5.7,1.2c-3,0.9-5.7,3.2-7.1,6.1
                c-1.4,3-1.5,6.5-0.3,9.6c-1.2-3.8-3.1-8.5-2.8-12.4c0.3-4,2.2-7.9,5-10.6c2.8-2.7,7.4-3,10.9-1.6
                C997.2,173.8,999.4,174.5,999.3,176.5z"/>
              <g>
                <g>
                  <path class="st21" d="M963.9,208.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1H950h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    H946h21.5c0.1,0,0.1-0.1,0.1-0.1C967.4,215.2,967.3,211.4,963.9,208.9z"/>
                  <g>
                    <path class="st21" d="M963.9,208.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1H946h21.5
                      c0.1,0,0.1-0.1,0.1-0.1C967.4,215.2,967.3,211.4,963.9,208.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M950.6,201.9c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C947.5,203.5,950,202.4,950.6,201.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M937.6,188.1c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C935.6,185.4,937,186.4,937.6,188.1z"/>
                    <path class="st21" d="M954.4,188.1c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3s0.3-3.5-0.8-4
                      C956.4,185.4,955,186.4,954.4,188.1z"/>
                  </g>
                  <path class="st21" d="M945.9,173.1c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C956.6,182.9,956.5,172.8,945.9,173.1z"/>
                  <g>
                    <ellipse class="st21" cx="940.4" cy="187.1" rx="1.3" ry="1.6"/>
                    <ellipse class="st21" cx="951.1" cy="187.1" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st21" d="M947.9,199.3c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4c0.3,0.8,0.7,1.6,1.2,2.1
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.5-0.5,0.9-1.3,1.2-2.1
                      C953,197.5,950.4,199.7,947.9,199.3z"/>
                  </g>
                  <path class="st21" d="M943.2,194c0.5,0.7,1.5,1.1,2.7,1.1s2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st21" d="M936.6,183.1c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C936.3,186.6,936.2,184.8,936.6,183.1z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st21" d="M955.4,183.1c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C955.7,186.6,955.8,184.8,955.4,183.1z"/>
                    </g>
                  </g>
                </g>
                <path class="st21" d="M947,178.9c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4c-4.3-2.2-9.8-1.1-13.2,2.6
                  c-1.8,1.9-2.6,3.7,0.3,3.2C941.8,178.1,943.9,178.1,947,178.9z"/>
              </g>
              <g>
                <g>
                  <path class="st21" d="M727.3,208.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1H705c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    h21.5h21.5c0.1,0,0.1-0.1,0.1-0.1C730.8,215.2,730.8,211.4,727.3,208.9z"/>
                  <g>
                    <path class="st21" d="M727.3,208.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5h21.5
                      c0.1,0,0.1-0.1,0.1-0.1C730.8,215.2,730.8,211.4,727.3,208.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M714.1,201.9c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1H705c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C711,203.5,713.4,202.4,714.1,201.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M701,188.1c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C699,185.4,700.4,186.4,701,188.1z"/>
                    <path class="st21" d="M717.8,188.1c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3s0.3-3.5-0.8-4
                      C719.8,185.4,718.4,186.4,717.8,188.1z"/>
                  </g>
                  <path class="st21" d="M709.3,173.1c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C720.1,182.9,719.9,172.8,709.3,173.1z"/>
                  <g>
                    <ellipse class="st21" cx="703.9" cy="187.1" rx="1.3" ry="1.6"/>
                    <ellipse class="st21" cx="714.6" cy="187.1" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st21" d="M711.3,199.3c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4c0.3,0.8,0.7,1.6,1.2,2.1
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.5-0.5,0.9-1.3,1.2-2.1
                      C716.4,197.5,713.9,199.7,711.3,199.3z"/>
                  </g>
                  <path class="st21" d="M706.6,194c0.5,0.7,1.5,1.1,2.7,1.1s2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st21" d="M700,183.1c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C699.7,186.6,699.6,184.8,700,183.1z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st21" d="M718.8,183.1c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C719.1,186.6,719.2,184.8,718.8,183.1z"/>
                    </g>
                  </g>
                </g>
                <path class="st21" d="M710.5,178.9c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                  c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C705.3,178.1,707.4,178.1,710.5,178.9z"/>
              </g>
              <g>
                <g>
                  <path class="st21" d="M995.5,127.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    h21.5H999c0.1,0,0.1-0.1,0.1-0.1C999,134.2,998.9,130.4,995.5,127.9z"/>
                  <g>
                    <path class="st21" d="M995.5,127.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      s-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5H999
                      c0.1,0,0.1-0.1,0.1-0.1C999,134.2,998.9,130.4,995.5,127.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M982.2,120.9c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C979.1,122.5,981.6,121.4,982.2,120.9z"/>
                  </g>
                  <g>
                    <path class="st21" d="M969.2,107.1c0.6,1.7,0.3,4.3-0.8,4.8s-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C967.2,104.4,968.6,105.4,969.2,107.1z"/>
                    <path class="st21" d="M986,107.1c-0.6,1.7-0.3,4.3,0.8,4.8s2.4-1.3,3.1-3c0.6-1.7,0.3-3.5-0.8-4
                      C988,104.4,986.6,105.4,986,107.1z"/>
                  </g>
                  <path class="st21" d="M977.5,92.1c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C988.2,101.9,988,91.8,977.5,92.1z"/>
                  <g>
                    <ellipse class="st21" cx="972" cy="106.1" rx="1.3" ry="1.6"/>
                    <ellipse class="st21" cx="982.7" cy="106.1" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st21" d="M979.5,118.3c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4c0.3,0.8,0.7,1.6,1.2,2.1
                      c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.5-0.5,0.9-1.3,1.2-2.1
                      C984.6,116.5,982,118.7,979.5,118.3z"/>
                  </g>
                  <path class="st21" d="M974.8,113c0.5,0.7,1.5,1.1,2.7,1.1c1.2,0,2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st21" d="M968.2,102.1c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C967.9,105.6,967.8,103.8,968.2,102.1z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st21" d="M987,102.1c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C987.3,105.6,987.4,103.8,987,102.1z"/>
                    </g>
                  </g>
                </g>
                <path class="st21" d="M978.6,97.9c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                  c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C973.4,97.1,975.5,97.1,978.6,97.9z"/>
              </g>
              <text transform="matrix(1 0 0 1 728.1123 154.698)" class="st52 st53 st54">MATCH</text>
              <rect x="816.5" class="st55" width="153" height="36"/>
              <g>
                <path class="st24" d="M859.4,13.6h-0.2c-0.1,0-0.3-0.1-0.5-0.1s-0.5-0.1-0.7-0.1c-0.6,0-1,0.1-1.3,0.3c-0.2,0.2-0.3,0.7-0.3,1.3
                  v0.1h2.4v2.1h-2.3v7.7h-3.1v-7.7H852v-2.1h1.2v-0.3c0-1.2,0.3-2.1,0.9-2.7s1.6-0.9,2.9-0.9c0.4,0,0.9,0,1.2,0s0.7,0.1,1,0.1V13.6
                  z"/>
                <path class="st24" d="M865.4,23.9c-0.2,0.2-0.4,0.3-0.6,0.5c-0.2,0.1-0.4,0.3-0.7,0.4c-0.3,0.1-0.5,0.2-0.8,0.3s-0.6,0.1-1.1,0.1
                  c-0.9,0-1.6-0.3-2.2-0.9s-0.9-1.3-0.9-2.2c0-0.7,0.1-1.3,0.4-1.8s0.7-0.8,1.3-1.1c0.6-0.3,1.2-0.5,2-0.6s1.6-0.2,2.5-0.2v-0.1
                  c0-0.5-0.2-0.9-0.6-1.1s-1-0.3-1.8-0.3c-0.4,0-0.8,0.1-1.3,0.2s-1,0.3-1.4,0.5H860v-2.4c0.3-0.1,0.8-0.2,1.5-0.3s1.4-0.2,2.1-0.2
                  c1.7,0,2.9,0.3,3.7,0.8s1.2,1.4,1.2,2.6v6.7h-3.1V23.9z M865.4,22.4v-2.1c-0.5,0.1-0.9,0.1-1.3,0.1s-0.6,0.1-0.9,0.2
                  c-0.3,0.1-0.5,0.2-0.6,0.4c-0.2,0.2-0.2,0.4-0.2,0.8c0,0.5,0.1,0.8,0.4,1s0.6,0.3,1.1,0.3c0.3,0,0.5-0.1,0.8-0.2
                  S865.1,22.6,865.4,22.4z"/>
                <path class="st24" d="M875.5,25.2c-0.8,0-1.6-0.1-2.2-0.3c-0.7-0.2-1.3-0.5-1.8-0.9c-0.5-0.4-0.9-1-1.2-1.6S870,20.9,870,20
                  c0-0.9,0.1-1.7,0.4-2.4s0.7-1.2,1.2-1.6c0.5-0.4,1.1-0.7,1.7-0.9s1.4-0.3,2.1-0.3c0.5,0,1.1,0.1,1.6,0.2s1.1,0.3,1.6,0.6v2.6
                  h-0.4c-0.1-0.1-0.3-0.2-0.5-0.4c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.1-0.5-0.2-0.8-0.3s-0.6-0.1-0.9-0.1c-0.8,0-1.4,0.3-1.8,0.8
                  c-0.4,0.5-0.6,1.3-0.6,2.2c0,1,0.2,1.7,0.7,2.2c0.5,0.5,1.1,0.7,1.8,0.7c0.4,0,0.7,0,1-0.1s0.5-0.2,0.8-0.3
                  c0.2-0.1,0.4-0.3,0.5-0.4s0.3-0.3,0.4-0.4h0.4v2.6c-0.2,0.1-0.4,0.2-0.6,0.3s-0.5,0.2-0.7,0.2c-0.3,0.1-0.6,0.1-0.8,0.2
                  S876,25.2,875.5,25.2z"/>
                <path class="st24" d="M885.2,25.2c-1.9,0-3.3-0.4-4.3-1.3c-1-0.9-1.5-2.2-1.5-3.8c0-1.6,0.5-2.9,1.4-3.9s2.2-1.4,3.9-1.4
                  c1.5,0,2.6,0.4,3.4,1.2s1.1,2,1.1,3.5v1.1h-6.7c0,0.5,0.1,0.8,0.3,1.1s0.4,0.6,0.7,0.7c0.3,0.2,0.6,0.3,0.9,0.4s0.7,0.1,1.2,0.1
                  c0.4,0,0.7,0,1.1-0.1s0.7-0.2,0.9-0.3c0.3-0.1,0.5-0.2,0.7-0.4c0.2-0.1,0.4-0.2,0.5-0.3h0.3v2.5c-0.3,0.1-0.5,0.2-0.7,0.3
                  c-0.2,0.1-0.5,0.2-0.9,0.3c-0.3,0.1-0.7,0.2-1,0.2S885.8,25.2,885.2,25.2z M886.3,18.7c0-0.7-0.2-1.1-0.5-1.5
                  c-0.3-0.3-0.7-0.5-1.3-0.5c-0.6,0-1.1,0.2-1.4,0.5c-0.3,0.4-0.5,0.8-0.6,1.5H886.3z"/>
                <path class="st24" d="M900.6,19.9c0,1.6-0.4,2.8-1.2,3.8s-1.8,1.5-3,1.5c-0.5,0-0.9-0.1-1.3-0.2s-0.8-0.3-1.2-0.5l-0.1,0.5h-2.9
                  V11.3h3.1v4.8c0.5-0.4,0.9-0.7,1.4-0.9s1-0.4,1.6-0.4c1.1,0,2,0.4,2.7,1.3C900.2,17,900.6,18.3,900.6,19.9z M897.4,19.9
                  c0-1-0.1-1.7-0.4-2.1s-0.8-0.6-1.4-0.6c-0.3,0-0.5,0-0.8,0.1c-0.3,0.1-0.5,0.2-0.8,0.4v5c0.2,0.1,0.4,0.1,0.6,0.2s0.4,0,0.6,0
                  c0.7,0,1.3-0.2,1.7-0.7S897.4,20.9,897.4,19.9z"/>
                <path class="st24" d="M911.7,20c0,1.6-0.4,2.9-1.3,3.8c-0.9,0.9-2.1,1.4-3.8,1.4c-1.6,0-2.9-0.5-3.8-1.4s-1.3-2.2-1.3-3.8
                  c0-1.6,0.4-2.9,1.3-3.9s2.1-1.4,3.8-1.4c1.6,0,2.9,0.5,3.8,1.4S911.7,18.4,911.7,20z M908.6,20c0-0.6,0-1.1-0.1-1.5
                  c-0.1-0.4-0.2-0.7-0.4-0.9c-0.2-0.2-0.4-0.4-0.6-0.5s-0.5-0.1-0.8-0.1c-0.3,0-0.5,0-0.7,0.1s-0.4,0.2-0.6,0.5
                  c-0.2,0.2-0.3,0.5-0.4,0.9s-0.2,0.9-0.2,1.5s0,1.1,0.1,1.5s0.2,0.7,0.4,0.9c0.2,0.2,0.4,0.4,0.6,0.5s0.5,0.2,0.8,0.2
                  c0.2,0,0.5-0.1,0.8-0.2c0.3-0.1,0.5-0.3,0.6-0.5c0.2-0.3,0.3-0.6,0.4-0.9S908.6,20.6,908.6,20z"/>
                <path class="st24" d="M922.8,20c0,1.6-0.4,2.9-1.3,3.8c-0.9,0.9-2.1,1.4-3.8,1.4c-1.6,0-2.9-0.5-3.8-1.4s-1.3-2.2-1.3-3.8
                  c0-1.6,0.4-2.9,1.3-3.9s2.1-1.4,3.8-1.4c1.6,0,2.9,0.5,3.8,1.4S922.8,18.4,922.8,20z M919.7,20c0-0.6,0-1.1-0.1-1.5
                  c-0.1-0.4-0.2-0.7-0.4-0.9c-0.2-0.2-0.4-0.4-0.6-0.5S918,17,917.7,17c-0.3,0-0.5,0-0.7,0.1s-0.4,0.2-0.6,0.5
                  c-0.2,0.2-0.3,0.5-0.4,0.9s-0.2,0.9-0.2,1.5s0,1.1,0.1,1.5s0.2,0.7,0.4,0.9c0.2,0.2,0.4,0.4,0.6,0.5s0.5,0.2,0.8,0.2
                  c0.2,0,0.5-0.1,0.8-0.2c0.3-0.1,0.5-0.3,0.6-0.5c0.2-0.3,0.3-0.6,0.4-0.9S919.7,20.6,919.7,20z"/>
                <path class="st24" d="M934.3,24.9h-3.7l-2.7-4.3l-0.5,0.6v3.7h-3.1V11.3h3.1v7.7l2.9-3.9h3.6l-3.5,4.3L934.3,24.9z"/>
              </g>
              <circle class="st24" cx="1082" cy="153" r="72"/>
              <circle class="st34" cx="1082" cy="153" r="63"/>
              <g>
                <path class="st35" d="M1118.7,146.2c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C1121.8,152.2,1121.7,148.5,1118.7,146.2z"/>
                <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="1104.0695" y1="141.5901" x2="1104.0695" y2="127.9732">
                  <stop  offset="0.1608" style="stop-color:#D86D25"/>
                  <stop  offset="0.6432" style="stop-color:#E57F39"/>
                </linearGradient>
                <path class="st56" d="M1113.5,146.5c2.4,0.4,5-0.2,6.9-1.8c1.9-1.6,2.1-4.2,2.2-6.7c-1.6,1.3-4.2,0.4-5.3-1.5s-1.3-4.1-1-6.2
                  c0.3-2.9,0.6-5.9,0.4-8.9c-0.2-3-0.9-5.9-2.5-8.4c-2.3-3.6-6.6-5.4-10.7-5.4s-8.4,1.8-10.7,5.4c-1.6,2.4-2.3,5.4-2.5,8.4
                  c-0.2,3,0.1,5.9,0.4,8.9c0.2,2.1,0,4.3-1,6.2s-2.5,2.8-4.2,1.5c0.1,2.5,0.3,5.1,2.2,6.7c1.9,1.6,3.4,2.3,5.8,1.8H1113.5z"/>
                <path class="st35" d="M1118.7,146.2c-0.7-0.6-1.5-1-2.3-1.2l-7.9-2.5l0,0c-0.6-0.2-0.9-0.7-1-1.3c-0.3-1.6-0.3-6-0.2-6.7
                  c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7c-0.1,0.6-0.4,1.1-1,1.3l0,0l-7.9,2.5c-0.7,0.2-1.4,0.6-2,1
                  c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1c0.1,0,0.1-0.1,0.1-0.1C1121.8,152.2,1121.7,148.5,1118.7,146.2z"/>
                <g>
                  <path class="st37" d="M1091.9,144.7l-0.9,0.3c-0.7,0.2-1.4,0.6-2,1c-3.2,2.4-3.3,6.2-3.4,6.9c0,0.1,0,0.1,0.1,0.1h18.1h18.1
                    c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.7-0.2-4.4-3.2-6.7c-0.7-0.6-1.5-1-2.3-1.2l-0.9-0.3c-3.6,1.3-7.6,2-11.8,2
                    S1095.5,145.9,1091.9,144.7z"/>
                  <path class="st35" d="M1107.5,141.2c-0.3-1.6-0.3-6-0.2-6.7c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,5-0.2,6.7
                    c-0.1,0.6-0.4,1.1-1,1.3l-7,2.2c3.6,1.3,7.6,2,11.8,2s8.2-0.7,11.8-2l-7-2.2C1107.9,142.3,1107.6,141.8,1107.5,141.2z"/>
                </g>
                <g>
                  <path class="st38" d="M1107.3,138.2c0-1.5,0-2.9,0-3.3c0-0.1,0-0.1-0.1-0.1h-7c-0.1,0-0.1,0-0.1,0.1c0,0.4,0,1.8,0,3.3
                    C1102.4,139,1105,139,1107.3,138.2z"/>
                </g>
                <g>
                  <path class="st35" d="M1095.3,125.5c0.6,1.5,0.3,3.8-0.8,4.3c-1.1,0.4-2.4-1.1-3.1-2.6c-0.6-1.5-0.3-3.1,0.8-3.5
                    C1093.3,123.2,1094.7,124,1095.3,125.5z"/>
                  <path class="st35" d="M1112.1,125.5c-0.6,1.5-0.3,3.8,0.8,4.3c1.1,0.4,2.4-1.1,3.1-2.6c0.6-1.5,0.3-3.1-0.8-3.5
                    C1114.1,123.2,1112.7,124,1112.1,125.5z"/>
                </g>
                <path class="st35" d="M1103.7,110.8c-10.7-0.4-10.8,9.8-10.7,13.1c0.1,2.4,1.1,6,1.6,7.7c0.3,1,0.8,1.9,1.6,2.7
                  c2.8,2.7,7.5,3.6,7.5,3.6s4.7-0.9,7.5-3.6c0.8-0.7,1.3-1.7,1.6-2.7c0.5-1.8,1.5-5.3,1.6-7.7
                  C1114.5,120.6,1114.4,110.4,1103.7,110.8z"/>
                <g>
                  <ellipse class="st16" cx="1098.1" cy="124.8" rx="1.4" ry="1.6"/>
                  <ellipse class="st16" cx="1108.9" cy="124.8" rx="1.4" ry="1.6"/>
                </g>
                <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="1108.0537" y1="112.8907" x2="1115.2097" y2="124.2019">
                  <stop  offset="0.3719" style="stop-color:#E57F39"/>
                  <stop  offset="1" style="stop-color:#FFBA83"/>
                </linearGradient>
                <path class="st57" d="M1109.5,111.7c2.2,0.2,4.2,1.8,5.2,3.7c1,2,1.3,4.3,1.1,6.5c-0.2,2.7-1,5.3-2.2,7.7
                  c1.5-5.3-1.1-11-5.4-14.5c-0.8-0.6-0.9-2-0.3-2.8S1108.5,111.6,1109.5,111.7z"/>
                <g>
                  <g>
                    <path class="st40" d="M1099.9,131.5c0.7,1.4,2.1,2.5,3.8,2.5s3.1-1,3.8-2.5H1099.9z"/>
                  </g>
                </g>
                <circle class="st14" cx="1096.6" cy="128.7" r="1.5"/>
                <circle class="st14" cx="1110.2" cy="128.7" r="1.5"/>
              </g>
              <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="1103.7826" y1="113.54" x2="1093.7667" y2="131.4716">
                <stop  offset="0.5025" style="stop-color:#E57F39"/>
                <stop  offset="1" style="stop-color:#FFBA83"/>
              </linearGradient>
              <path class="st58" d="M1111.9,113.5c-0.1,2-1.9,3.5-3.8,4.2c-1.8,0.6-3.8,0.7-5.7,1.2c-3,0.9-5.7,3.2-7.1,6.1s-1.5,6.5-0.3,9.6
                c-1.2-3.8-3.1-8.5-2.8-12.4c0.3-4,2.2-7.9,5-10.6c2.8-2.7,7.4-3,10.9-1.6C1109.8,110.8,1112,111.5,1111.9,113.5z"/>
              <g>
                <g>
                  <path class="st42" d="M1076.5,145.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-8.2-2.7c-0.7-0.2-1-0.7-1.1-1.3
                    c-0.3-1.7-0.3-5.8-0.3-6.5c0-0.1-0.1-0.1-0.1-0.1h-0.4h-8.1h-0.4c-0.1,0-0.1,0-0.1,0.1c0,0.7,0,4.7-0.3,6.5
                    c-0.1,0.6-0.5,1.1-1.1,1.3l-8.2,2.7c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1
                    h21.5h21.5c0.1,0,0.1-0.1,0.1-0.1C1080,152.2,1079.9,148.4,1076.5,145.9z"/>
                  <g>
                    <path class="st43" d="M1076.5,145.9c-0.8-0.6-1.7-1-2.7-1.3l-1-0.3c0,0,0,0,0,0l-7-2.3c-2.2,0.8-4.6,1.3-7.1,1.3
                      c-2.5,0-4.9-0.5-7.1-1.3l-7,2.3c0,0,0,0,0,0l-1.1,0.3c-0.8,0.2-1.7,0.6-2.4,1c-3.7,2.4-3.8,6.4-4,7.2c0,0.1,0,0.1,0.1,0.1h21.5
                      h21.5c0.1,0,0.1-0.1,0.1-0.1C1080,152.2,1079.9,148.4,1076.5,145.9z"/>
                  </g>
                  <g>
                    <path class="st44" d="M1063.2,138.9c0-1.9-0.1-3.7-0.1-4.2c0-0.1-0.1-0.1-0.1-0.1h-8.9c-0.1,0-0.1,0.1-0.1,0.1
                      c0,0.5-0.1,2.3-0.1,4.2c0.6,0.7,3,1.6,4.6,1.6C1060.1,140.5,1062.6,139.4,1063.2,138.9z"/>
                  </g>
                  <g>
                    <path class="st42" d="M1050.2,125.1c0.6,1.7,0.3,4.3-0.8,4.8c-1.1,0.5-2.4-1.3-3.1-3c-0.6-1.7-0.3-3.5,0.8-4
                      C1048.2,122.4,1049.6,123.4,1050.2,125.1z"/>
                    <path class="st42" d="M1067,125.1c-0.6,1.7-0.3,4.3,0.8,4.8c1.1,0.5,2.4-1.3,3.1-3c0.6-1.7,0.3-3.5-0.8-4
                      C1069,122.4,1067.6,123.4,1067,125.1z"/>
                  </g>
                  <path class="st42" d="M1058.5,110.1c-10.6-0.4-10.7,9.8-10.6,13.1c0.1,2.4,0.7,6,1.2,7.7c0.3,1,0.8,2.7,1.6,3.4
                    c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3c0.8-0.7,1.3-2.4,1.6-3.4
                    c0.5-1.8,1.1-5.3,1.2-7.7C1069.2,119.9,1069,109.8,1058.5,110.1z"/>
                  <g>
                    <ellipse class="st16" cx="1053" cy="124.1" rx="1.3" ry="1.6"/>
                    <ellipse class="st16" cx="1063.7" cy="124.1" rx="1.3" ry="1.6"/>
                  </g>
                  <g>
                    <path class="st45" d="M1060.5,136.3c-1-0.2-1.9-1.3-2-1.9c-0.1,0.6-1,1.7-2,1.9c-2.5,0.5-5.1-1.7-6.9-4
                      c0.3,0.8,0.7,1.6,1.2,2.1c2.1,2,4.6,3.7,6.2,4.3c0.3,0.1,0.9,0.2,1.6,0.2c0.6,0,1.3,0,1.6-0.2c1.6-0.6,4.1-2.3,6.2-4.3
                      c0.5-0.5,0.9-1.3,1.2-2.1C1065.6,134.5,1063,136.7,1060.5,136.3z"/>
                  </g>
                  <path class="st46" d="M1055.8,131c0.5,0.7,1.5,1.1,2.7,1.1c1.2,0,2.3-0.5,2.7-1.1"/>
                </g>
                <g>
                  <g>
                    <g>
                      <path class="st45" d="M1049.2,120.1c0.4-2,1.2-3.9,2.2-5.6c-0.3-0.5-0.9-0.6-1.4-0.4c-1.6,2.4-2,5.5-2,7.7
                        c0.1,1.3,0.3,2.5,0.7,3.6C1048.9,123.6,1048.8,121.8,1049.2,120.1z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path class="st45" d="M1068,120.1c-0.4-2-1.2-3.9-2.2-5.6c0.3-0.5,0.9-0.6,1.4-0.4c1.6,2.4,2,5.5,2,7.7
                        c-0.1,1.3-0.3,2.5-0.7,3.6C1068.3,123.6,1068.4,121.8,1068,120.1z"/>
                    </g>
                  </g>
                </g>
                <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="1049.3975" y1="112.5821" x2="1069.7107" y2="112.5821">
                  <stop  offset="0" style="stop-color:#B17338"/>
                  <stop  offset="0.8643" style="stop-color:#E8AE5C"/>
                </linearGradient>
                <path class="st59" d="M1059.6,115.9c2,0.5,4.1,0.9,6,0.1c1.9-0.7,3.5-2.6,4-4.7c-1.8,0.9-3.7-0.5-5.5-1.4
                  c-4.3-2.2-9.8-1.1-13.2,2.6c-1.8,1.9-2.6,3.7,0.3,3.2C1054.4,115.1,1056.5,115.1,1059.6,115.9z"/>
              </g>
              <g>
                <path class="st24" d="M1052.9,169.2v1.7h-5.5v-8.4h1.9v6.7H1052.9z"/>
                <path class="st24" d="M1062.5,166.7c0,2.4-1.9,4.3-4.5,4.3c-2.6,0-4.5-1.8-4.5-4.3c0-2.4,1.9-4.3,4.5-4.3
                  C1060.6,162.4,1062.5,164.3,1062.5,166.7z M1055.4,166.7c0,1.5,1.2,2.6,2.6,2.6s2.5-1.2,2.5-2.6c0-1.5-1.1-2.6-2.5-2.6
                  C1056.6,164.1,1055.4,165.2,1055.4,166.7z"/>
                <path class="st24" d="M1072,166.7c0,2.4-1.9,4.3-4.5,4.3c-2.6,0-4.5-1.8-4.5-4.3c0-2.4,1.9-4.3,4.5-4.3
                  C1070,162.4,1072,164.3,1072,166.7z M1064.9,166.7c0,1.5,1.2,2.6,2.6,2.6s2.5-1.2,2.5-2.6c0-1.5-1.1-2.6-2.5-2.6
                  C1066.1,164.1,1064.9,165.2,1064.9,166.7z"/>
                <path class="st24" d="M1076.3,167.5l-1.2,1.3v2.1h-1.9v-8.4h1.9v3.8l3.5-3.8h2.2l-3.2,3.5l3.4,4.9h-2.3L1076.3,167.5z"/>
                <path class="st24" d="M1083.7,169.3l-0.7,1.6h-2l3.6-8.4h2l3.6,8.4h-2l-0.7-1.6H1083.7z M1085.7,164.5l-1.3,3.3h2.7L1085.7,164.5
                  z"/>
                <path class="st24" d="M1096.6,169.2v1.7h-5.5v-8.4h1.9v6.7H1096.6z"/>
                <path class="st24" d="M1097.8,170.9v-8.4h1.9v8.4H1097.8z"/>
                <path class="st24" d="M1104.6,167.5l-1.2,1.3v2.1h-1.9v-8.4h1.9v3.8l3.5-3.8h2.2l-3.2,3.5l3.4,4.9h-2.3L1104.6,167.5z"/>
                <path class="st24" d="M1112.3,164.1v1.8h4.1v1.6h-4.1v1.9h4.6v1.6h-6.5v-8.4h6.4v1.6H1112.3z"/>
                <path class="st24" d="M1052.2,183.7l-0.7,1.6h-2l3.6-8.4h2l3.6,8.4h-2l-0.7-1.6H1052.2z M1054.1,178.9l-1.3,3.3h2.7L1054.1,178.9
                  z"/>
                <path class="st24" d="M1066.8,181.8c0,2.2-1.5,3.6-3.8,3.6c-2.3,0-3.8-1.4-3.8-3.6v-4.9h1.9v4.9c0,1.2,0.8,1.9,1.9,1.9
                  c1.1,0,1.9-0.7,1.9-1.9v-4.9h1.9V181.8z"/>
                <path class="st24" d="M1072.1,176.9c2.6,0,4.4,1.7,4.4,4.2c0,2.5-1.8,4.2-4.5,4.2h-3.5v-8.4H1072.1z M1070.4,183.7h1.7
                  c1.4,0,2.4-1.1,2.4-2.6c0-1.5-1.1-2.6-2.5-2.6h-1.6V183.7z"/>
                <path class="st24" d="M1077.7,185.3v-8.4h1.9v8.4H1077.7z"/>
                <path class="st24" d="M1083.4,178.5v1.8h4.1v1.6h-4.1v1.9h4.6v1.6h-6.5v-8.4h6.4v1.6H1083.4z"/>
                <path class="st24" d="M1095.4,185.3l-4.1-5.4v5.4h-1.8v-8.4h1.7l4.1,5.4v-5.4h1.8v8.4H1095.4z"/>
                <path class="st24" d="M1106.2,178.2l-1.1,1.3c-0.6-0.7-1.4-1.1-2.2-1.1c-1.4,0-2.6,1.1-2.6,2.6c0,1.5,1.1,2.6,2.6,2.6
                  c0.8,0,1.6-0.4,2.2-1l1.1,1.2c-0.9,0.9-2.2,1.5-3.4,1.5c-2.5,0-4.4-1.9-4.4-4.3c0-2.4,1.9-4.2,4.5-4.2
                  C1104.1,176.8,1105.3,177.4,1106.2,178.2z"/>
                <path class="st24" d="M1109.2,178.5v1.8h4.1v1.6h-4.1v1.9h4.6v1.6h-6.5v-8.4h6.4v1.6H1109.2z"/>
              </g>
            </g>
            <g id="match">
              <path class="st24" d="M833.8,154.2v-5.7l-2.2,4.8h-1.2l-2.2-4.8v5.7h-1.7v-8.4h2.1l2.4,5.1l2.4-5.1h2.1v8.4H833.8z"/>
              <path class="st24" d="M839,152.6l-0.7,1.6h-2l3.6-8.4h2l3.6,8.4h-2l-0.7-1.6H839z M841,147.8l-1.3,3.3h2.7L841,147.8z"/>
              <path class="st24" d="M849.2,147.4v6.8h-1.9v-6.8h-2.6v-1.6h7v1.6H849.2z"/>
              <path class="st24" d="M859.5,147.1l-1.1,1.3c-0.6-0.7-1.4-1.1-2.2-1.1c-1.4,0-2.6,1.1-2.6,2.6c0,1.5,1.1,2.6,2.6,2.6
                c0.8,0,1.6-0.4,2.2-1l1.1,1.2c-0.9,0.9-2.2,1.5-3.4,1.5c-2.5,0-4.4-1.9-4.4-4.3c0-2.4,1.9-4.2,4.5-4.2
                C857.4,145.7,858.7,146.3,859.5,147.1z"/>
              <path class="st24" d="M866.4,154.2v-3.3h-3.8v3.3h-1.9v-8.4h1.9v3.5h3.8v-3.5h1.9v8.4H866.4z"/>
            </g>
            <g>
              <path class="st24" d="M561.7,26.9v-8.4h2.8v8.4H561.7z"/>
              <path class="st24" d="M571.5,26.9l-3.3-4.3v4.3h-2.5v-8.4h2.3l3.3,4.3v-4.3h2.5v8.4H571.5z"/>
              <path class="st24" d="M577.8,20.6v1.5h3.7v2.1h-3.7v2.7H575v-8.4h6.8v2.1H577.8z"/>
              <path class="st24" d="M588.9,24.6v2.3h-6.3v-8.4h2.8v6.1H588.9z"/>
              <path class="st24" d="M597.6,23.3c0,2.2-1.6,3.7-4,3.7c-2.4,0-4.1-1.5-4.1-3.7v-4.8h2.8v4.8c0,0.8,0.6,1.4,1.3,1.4
                c0.7,0,1.2-0.5,1.2-1.4v-4.8h2.8V23.3z"/>
              <path class="st24" d="M601.4,20.6v1h3.9v2.1h-3.9v1h4.4v2.1h-7.2v-8.4h7.1v2.1H601.4z"/>
              <path class="st24" d="M612.8,26.9l-3.3-4.3v4.3h-2.5v-8.4h2.3l3.3,4.3v-4.3h2.5v8.4H612.8z"/>
              <path class="st24" d="M624,19.9l-1.6,1.9c-0.5-0.7-1.3-1.1-1.9-1.1c-1,0-1.7,0.8-1.7,1.9c0,1.1,0.7,1.9,1.7,1.9
                c0.6,0,1.4-0.4,1.9-1l1.6,1.7c-0.9,1-2.4,1.7-3.7,1.7c-2.6,0-4.5-1.8-4.5-4.3c0-2.5,1.9-4.3,4.6-4.3C621.7,18.4,623.1,19,624,19.9
                z"/>
              <path class="st24" d="M627.3,20.6v1h3.9v2.1h-3.9v1h4.4v2.1h-7.2v-8.4h7.1v2.1H627.3z"/>
              <path class="st24" d="M636.7,24.7h-1v2.2h-2.8v-8.4h4.1c2.3,0,3.6,1.1,3.6,3c0,1.2-0.5,2.1-1.3,2.7l1.7,2.7h-3.1L636.7,24.7z
                 M636.9,22.6c0.6,0,0.9-0.4,0.9-1c0-0.6-0.3-1-0.9-1h-1.3v2H636.9z"/>
              <path class="st24" d="M648.8,19.4l-1,2.1c-0.9-0.5-2.2-1-2.9-1c-0.3,0-0.5,0.1-0.5,0.3c0,1.1,4.4,0.4,4.4,3.4
                c0,1.9-1.6,2.7-3.5,2.7c-1.5,0-3.1-0.5-4.2-1.3l1-2.1c0.9,0.7,2.4,1.3,3.2,1.3c0.4,0,0.7-0.1,0.7-0.4c0-1.1-4.4-0.4-4.4-3.3
                c0-1.7,1.4-2.7,3.6-2.7C646.5,18.4,647.9,18.8,648.8,19.4z"/>
            </g>
            <rect x="542" y="9" class="st60" width="126" height="27"/>
          </g>
          <g id="Layer_8">
            <circle class="st10" cx="562" cy="88" r="2"/>
            <circle class="st61" cx="598" cy="52" r="2"/>
            <circle class="st62" cx="600" cy="50" r="3"/>
            <circle class="st10" cx="600" cy="50" r="2"/>
            <g>
              <g>
                <line class="st62" x1="562" y1="88" x2="562.7" y2="87.3"/>
                <line class="st63" x1="564.1" y1="85.9" x2="596.6" y2="53.4"/>
                <line class="st62" x1="597.3" y1="52.7" x2="598" y2="52"/>
              </g>
            </g>
          </g>
          </svg>
      </div>
    </section>
    <section class="sect-timeline clearfix">
      <div class="container">
        <h2 class="h-title">From Computational Epidemiology to Finance</h2>
        <ul class="timeline-cont">
          <li>
            <div class="year-title y2013">
              <div class="icon-cont">
                <img src="images/global.svg" alt="">
              </div>
              <span class="year">2013</span>
              <h4>Team Alpharank is mapping viruses in Asia</h4>
            </div>
          </li>
          <li>
            <div class="year-title y2014">
              <div class="icon-cont">
                <img src="images/ticket.svg" alt="">
              </div>
              <span class="year">2014</span>
              <h4>Nightclubs begin asking for help selling tickets by marketing to their influencers</h4>
            </div>
          </li>
          <li>
            <div class="year-title y2015">
              <div class="icon-cont">
                <img src="images/store.svg" alt="">
              </div>
              <span class="year">2015</span>
              <h4>Retailers Retailers show interest in finding their most influential brand ambassadors</h4>
            </div>
          </li>
          <li>
            <div class="year-title y2016">
              <div class="icon-cont">
                <img src="images/presentation.svg" alt="">
              </div>
              <span class="year">2016</span>
              <h4>Financial instuitions can now target their most important customers</h4>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="sect-clients">
      <div class="container">
        <h2 class="h-title">Fortune 500 Companies Trust Us</h2>
        <div class="row">
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/capital_one.png" alt="Capital One">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/td_bank.png" alt="Capital One">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/first_bank.png" alt="Capital One">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/jpmorgan_chase.png" alt="JPMORGAN CHASE">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/master_card.png" alt="Master Card">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/visa.png" alt="VISA">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/privat_bank.png" alt="PrivatBank">
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
            <div class="clients">
              <img class="img-responsive" src="images/citibank.png" alt="Citibank">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sect-contacts">
      <div class="container">
        <div class="map-cont">
          <div id="map"></div>
          <div class="list-group offices">
            <h3 class="list-group-item">Our Office</h3>
            <div id="office_sv" class="list-group-item lists-off">
               <span class="photo"><img src="images/silicon-valley.png" alt=""></span>
               <h4>Silicon Valley</h4>
               <p>25 Taylor St <br>San Francisco, CA 94102</p>
            </div>
          </div>
        </div>
        <h2 class="h-title">Contact Us</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h3>Ready to analyze your customer network?</h3>

            <form role="form" id="contact_form" name="contact_form">
              <div class="row">
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" />
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                     <textarea rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>
                </div>
              </div>
               <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </section>
    <footer class="footer">
    
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(function() {
        window.sr = new scrollReveal();
      });

    </script>
  </body>
</html>