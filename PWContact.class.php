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
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/avatars/mediawiki_3_l.png" border="0">
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
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/avatars/mediawiki_4_l.png">
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
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/avatars/mediawiki_23_l.png" border="0">
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
                            <img src="https://psychonautwiki.global.ssl.fastly.net/w/images/d/d7/Clarity.png" border="0">
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
