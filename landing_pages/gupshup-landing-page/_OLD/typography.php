<!doctype html>
<html lang="de">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="initial-scale=1, minimum-scale=1, user-scalable=yes, width=1200, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#242424">

    <link rel="shortcut icon" type="image/x-icon" href="gfx/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="gfx/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="gfx/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="gfx/favicon-16x16.png">
    <link rel="manifest" href="gfx/site.webmanifest">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Gupshup</title>

    <script>
        var SITE_URL = '';
        var THEME_URL = '';
    </script>
    
</head>

<body>


    <div class="container" style="padding-top: 68px;">
        <div class="row">
            <div class="col-12">

                <!-- DEV NOTE :: DON'T COPY BELOW CSS. IT'S JUST FOR DEMO PURPOSE -->
                <style>
                    html, body { background: #ffffff; }
                    .sample-img {display: block;max-width: 192px;position: relative;}
                    .sample-img::before {width: 100%;content: '';display: block;padding-top: 100%;}

                    .typography-row { padding: 20px 0; position: relative;}
                    .typography-colors { display: flex; flex-wrap: wrap; margin: 0 -10px; }
                    .typography-color-block { flex: 0 0 83px; max-width: 83px; width: 83px; margin: 10px; }
                    .typography-color-block p { margin: 10px 0 0 0; color: #000000; }
                    .typography-color { width: 83px; height: 83px; border-radius: 3px; }
                    .typography-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-col > * { margin-top: 20px; margin-bottom: 20px; }
                    .typography-key { display: block; color: #e5b707; }
                    .typography-value { display: block; }
                    .typography-row h2.h1 { margin-top: 15px; }
                    .typography-icon-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-icon-key { margin: 0 0 10px 0; font-size: 2.4rem; }
                    .typography-button-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-button-key { margin: 0 0 10px 0; }
                    .typography-input-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-input-key { color: #000000; margin: 0 0 10px 0; }
                    .typography-input-value { width: 100%; max-width: 51.6rem; }

                    @media (min-width: 768px) {
                        .typography-col > * { display: flex; margin-top: 42px; margin-bottom: 42px; }
                        .typography-key { flex: 0 0 200px; max-width: 200px; width: 200px; }
                        .typography-row h2.h1 { margin-top: 30px; }
                        .typography-icon-block { display: flex; align-items: center; }
                        .typography-icon-key { margin: 0 20px 0 0; }
                        .typography-button-block { display: flex; align-items: center; margin-top: 42px; margin-bottom: 42px; }
                        .typography-button-key { margin: 0 20px 0 0; }
                        .typography-input-block { display: flex; align-items: center; margin-top: 42px; margin-bottom: 42px; }
                        .typography-input-key { margin: 0 20px 0 0; flex: 0 0 200px; max-width: 200px; width: 200px; align-self: flex-start; }
                        .ui-heart { font-size: 2.8rem; }
                    }
                </style>
                
                <!-- Start [ text ] -->
                <div class="typography-row">

                    <div class="row typography-block">
                        <div class="col-12">
                            <h1 class="text-primary">Lazyload img:</h1>

                            <span class="sample-img">
                                <span class="lazyload-image-loader black">
                                    <img class="lazyload" src="gfx/blank.gif" data-original="gfx/sample-img-192x192.png" alt="">
                                </span>
                            </span>

                        </div>
                    </div>

                    <div class="row typography-block">
                        <div class="col-12">
                            <h1 class="text-primary">Lazyload background:</h1>

                            <span class="sample-img">
                                <span class="lazyload-image-loader black">
                                    <span class="lazyload" data-original="gfx/sample-img-192x192.png"></span>
                                    <img class="lazyload" src="gfx/blank.gif" data-original="gfx/sample-img-192x192.png" alt="">
                                </span>
                            </span>
                            
                        </div>
                    </div>
                    <br><br>

                    <div class="row typography-block">
                        <div class="col-12">
                            <h1 class="text-primary">Typography:</h1>
                        </div>
                    </div>

                    <div class="row typography-block">
                        <div class="col-12">
                            <div class="typography-col">
                                <h1><span class="typography-key">h1</span><span class="typography-value">Open Sans 56px</span></h1>

                                <h2><span class="typography-key">h2</span><span class="typography-value">Open Sans 45px</span></h2>

                                <h3><span class="typography-key">h3</span><span class="typography-value">Open Sans 36px</span></h3>

                                <h4><span class="typography-key">h4</span><span class="typography-value">Open Sans 32px</span></h4>

                                <h5><span class="typography-key">h5</span><span class="typography-value">Open Sans 24px</span></h5>

                                <h6><span class="typography-key">h6</span><span class="typography-value">Open Sans 20px</span></h6>

                                <div><span class="typography-key">blockquote</span><span class="typography-value">
                                <blockquote class="blockquote">
                                    <p>“Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.”</p>
                                </blockquote>
                                </span></div>

                                <div><span class="typography-key">p1</span><span class="typography-value">
                                <div class="p1">
                                    <p>“Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.”</p>
                                </div>
                                </span></div>

                                <div><span class="typography-key">p2</span><span class="typography-value">
                                <div class="p2">
                                    <p>“Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.”</p>
                                </div>
                                </span></div>

                                <div><span class="typography-key">p3</span><span class="typography-value">
                                <div class="p3">
                                    <p>“Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.”</p>
                                </div>
                                </span></div>

                                <div><span class="typography-key">p</span><span class="typography-value cc-typo">
                                    <p>Lorem Ipsum is simply dummy <a href="https://www.google.com">Google</a> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                    <p><u>This line of text will render as underlined</u></p>
                                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p><em>This line rendered as italicized text.</em></p>
                                    <p><abbr title="attribute">attr</abbr></p>
                                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                                </span></div>
                                <div><span class="typography-key">ol/ul/dl</span><span class="typography-value cc-typo">
                                    <ol>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                            </ul>
                                        </li>
                                        <li>Lorem ipsum dolor sit amet
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                            </ol> 
                                        </li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ol>

                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                            </ul>
                                        </li>
                                        <li>Lorem ipsum dolor sit amet
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                            </ol> 
                                        </li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>

                                    <dl>
                                        <dt>Lorem</dt>
                                        <dd>Lorem ipsum dolor sit amet</dd>
                                        <dd>Lorem ipsum dolor sit amet</dd>
                                    </dl>

                                </span></div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- End  [ text ] -->


                <!-- Start [ button ] -->
                <div class="typography-row">

                    <div class="row">
                        <div class="col-12">
                            <h2 class="h2 text-primary">Button:</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="typography-button-block">
                                <div class="typography-button-key"><a href="#" class="btn btn-primary"><span class="btn-text">Button</span></a></div>
                                <div class="typography-button-value">.btn.btn-primary</div>
                            </div>
                            

                        </div>
                    </div>

                </div>
                <!-- End  [ button ] -->

                <!-- Start [ icon ] -->
                <div class="typography-row">

                    <div class="row">
                        <div class="col-12">
                            <h2 class="h2 text-primary">Icon:</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="jt_icon-arrow-bottom" aria-hidden="true"><svg focusable="false" tabindex="-1"><use xlink:href="#jt_icon-arrow-bottom"></use></svg></i></div>
                                <div class="typography-icon-value">jt_icon-arrow-bottom</div>
                            </div>

                            

                            

                        </div>
                    </div>
                </div>
                <!-- End  [ icon ] -->


            </div>
        </div>
    </div>


<div id="icon_vgfx"></div> 
 
 <script src="js/jquery-3.6.0.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/jquery.lazyload.min.js"></script>
 <script src="js/script.js"></script>
 
 </body>
 </html>
    

