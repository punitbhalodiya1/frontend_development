<?php require('header.php'); ?>

    <div class="container" style="padding-top: 68px;">
        <div class="row">
            <div class="col-12">

                <!-- DEV NOTE :: DON'T COPY BELOW CSS. IT'S JUST FOR DEMO PURPOSE -->
                <style>

                    .sample-img {display: block;max-width: 192px;position: relative;}
                    .sample-img::before {width: 100%;content: '';display: block;padding-top: 100%;}

                    .typography-row { padding: 20px 0; position: relative;}
                    .typography-colors { display: flex; flex-wrap: wrap; margin: 0 -10px; }
                    .typography-color-block { flex: 0 0 83px; max-width: 83px; width: 83px; margin: 10px; }
                    .typography-color-block p { margin: 10px 0 0 0; color: #000000; }
                    .typography-color { width: 83px; height: 83px; border-radius: 3px; }
                    .typography-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-col > * { margin-top: 20px; margin-bottom: 20px; }
                    .typography-key { display: block; color: #008DE3; }
                    .typography-value { display: block; }
                    .typography-row h2.h1 { margin-top: 15px; }
                    .typography-icon-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-icon-key { margin: 0 0 10px 0; font-size: 2.4rem; }
                    .typography-button-block { margin-top: 20px; margin-bottom: 20px; }
                    .typography-button-key { margin: 0 0 10px 0; display: flex; }
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
                            <h1 class="text-primary">Typography:</h1>
                        </div>
                    </div>

                    <div class="row typography-block">
                        <div class="col-12">
                            <div class="typography-col">

                                <h1><span class="typography-key">h1</span><span class="typography-value">"Poppins",Arial,sans-serif 32px, line-height= 1.5;</span></h1>

                                <h2><span class="typography-key">h2</span><span class="typography-value">"Poppins",Arial,sans-serif 24px, line-height=1.5</span></h2>

                                <h3><span class="typography-key">h3</span><span class="typography-value">"Poppins",Arial,sans-serif 22px, line-height=1.5</span></h3>

                                <h4><span class="typography-key">h4</span><span class="typography-value">"Poppins",Arial,sans-serif 20px, line-height=1.5</span></h4>

                                <h5><span class="typography-key">h5</span><span class="typography-value">"Poppins",Arial,sans-serif 18px, line-height=1.5</span></h5>

                                <h6><span class="typography-key">h6</span><span class="typography-value">"Poppins",Arial,sans-serif 16px, line-height=1.5</span></h6>

                                <div><span class="typography-key">blockquote</span><span class="typography-value">
                                <blockquote class="blockquote">
                                    <p>“Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.”</p>
                                </blockquote>
                                </span></div>
                                <div><span class="typography-key">p1</span><div class="typography-value p1">
                                    <p>Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                </div></div>
                                <div><span class="typography-key">p2</span><div class="typography-value p2">
                                    <p>Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, zeitweiliges Arbeiten im Laufe der Jahre und eine großartige Idee, aber Sie sollten jeden Monat spannend arbeiten Eirmod temporäre Durchmesser, sed diam des Projekts. Aber in Wahrheit zwei Minuten und gerecht und fühlen und die Dinge, um sie in der Vorschau anzuzeigen. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                </div></div>
                                <div><span class="typography-key">p</span><span class="typography-value text-a">
                                    <p>Lorem Ipsum is simply dummy <a href="https://www.google.com">Google</a> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                <div><span class="typography-key">ol/ul/dl</span><span class="typography-value text-a">
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
                                <div class="typography-button-key"><a href="#" class="btn btn-primary"><span class="btn-text">Primary</span></a></div>
                                <div class="typography-button-value">.btn.btn-primary</div>
                            </div>
                            <div class="typography-button-block">
                                <div class="typography-button-key"><a href="#" class="btn btn-primary btn-with-icon"><i class="gp_icon-home" aria-hidden="true"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-home"></use></svg></i><span class="btn-text">Primary</span></a></div>
                                <div class="typography-button-value">.btn.btn-primary.btn-icon</div>
                            </div>
                            <div class="typography-button-block">
                                <div class="typography-button-key"><a href="#" class="btn btn-primary btn-with-icon"><span class="btn-text">Primary</span><i class="gp_icon-home" aria-hidden="true"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-home"></use></svg></i></a></div>
                                <div class="typography-button-value">.btn.btn-primary.btn-icon</div>
                            </div>
                            <div class="typography-button-block">
                                <div class="typography-button-key"><button type="button" class="btn btn-primary" disabled><span class="btn-text">Primary disabled</span></button></div>
                                <div class="typography-button-value">.btn.btn-primary[disabled]</div>
                            </div>

                            <div class="typography-button-block">
                                <div class="typography-button-key"><a href="#" class="btn btn-primary-outline"><span class="btn-text">Primary-outline</span></a></div>
                                <div class="typography-button-value">.btn.btn-primary-outline</div>
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
                                <div class="typography-icon-key"><i class="gp_icon-plus"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-plus"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-plus</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-star"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-star"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-star</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-help"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-help"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-help</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-chat"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-chat"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-chat</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-search"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-search"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-search</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-left"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-left"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-left</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-left-2"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-left-2"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-left-2</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-left-3"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-left-3"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-left-3</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-right"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-right"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-right</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-right-2"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-right-2"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-right-2</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-right-3"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-right-3"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-right-3</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-caret-down"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-caret-down"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-caret-down</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-home"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-home"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-home</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-resources"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-resources"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-resources</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-product"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-product"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-product</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-support"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-support"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-support</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-upcoming"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-upcoming"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-upcoming</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-upcoming-2"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-upcoming-2"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-upcoming-2</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-time"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-time"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-time</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-favourite"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-favourite"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-favourite</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-arrow-next"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-arrow-next"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-arrow-next</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-chat-2"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-chat-2"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-chat-2</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-review"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-review"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-review</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-seasonality"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-seasonality"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-seasonality</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-ppt"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-ppt"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-ppt</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-webinar"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-webinar"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-webinar</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-expand"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-expand"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-expand</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-zoom-out"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-zoom-out"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-zoom-out</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-zoom-in"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-zoom-in"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-zoom-in</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-refresh"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-refresh"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-refresh</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-eye"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-eye"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-eye</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-download"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-download"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-download</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-product-resources"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-product-resources"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-product-resources</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-more"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-more"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-more</div>
                            </div>

                            <div class="typography-icon-block">
                                <div class="typography-icon-key"><i class="gp_icon-close"><svg focusable="false" tabindex="-1"><use xlink:href="#gp_icon-close"></use></svg></i></div>
                                <div class="typography-icon-value">gp_icon-close</div>
                            </div>

                            <br> <br> <br>
                            
                        </div>


                        </div>
                    </div>
                </div>
                <!-- End  [ icon ] -->


            </div>
        </div>
    </div>
    
<?php require('footer.php'); ?>
