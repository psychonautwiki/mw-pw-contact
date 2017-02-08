<?php
    class PWContact {
        public static function onParserSetup(&$parser) {
            $parser->setFunctionHook( 'pwcontact', 'PWContact::renderAbout' );
        }

        public static function renderAbout($parser) {
$contact_page =
<<<EOT
<div class="ContactPage">
    <div class="container">
        <div class="PaneContent">
            <div class="PersonGenericContainer">
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">Josie</span>
                        <span class="PersonJob">Founder</span>
                        <span class="PersonTitle"><a href="mailto:josie@psychonaut.wiki">josie@psychonaut.wiki</a></span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/d/dd/Josienewavatar.png" border="0">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">Jenny</span>
                        <span class="PersonJob">Founder</span>
                        <span class="PersonTitle"><a href="mailto:oskykins@psychonautwiki.org">oskykins@psychonautwiki.org</a></span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/e/e1/Oskykinspic.jpeg">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">Kaylee</span>
                        <span class="PersonJob">Founder</span>
                        <span class="PersonTitle"><a href="mailto:kaylee@psychonaut.wiki">kaylee@psychonaut.wiki</a></span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/2/28/Kaylee_new_avatar.jpeg" border="0">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">Kenan</span>
                        <span class="PersonJob">Operations &amp; PR</span>
                        <span class="PersonTitle"><a href="mailto:kenan@psychonaut.wiki">kenan@psychonaut.wiki</a></span>
                        <a name="MurrayDemo"></a>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/0/0d/Apx.jpg">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">Claire</span>
                        <span class="PersonJob">Product Evangelist</span>
                        <span class="PersonTitle"><a href="mailto:clarity@psychonaut.wiki">clarity@psychonaut.wiki</a></span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/2/2c/15871769_10154222031762338_7122449702448252455_n.jpg" border="0">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer placeholder">
                </div>
            </div>
        </div>
    </div>
</div>
EOT;
            return array(
                $contact_page,
                'noparse' => true, 'isHTML' => true
            );
        }
    }
?>
