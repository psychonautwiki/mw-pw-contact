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
                    <span class="PersonName2">
                        <a href="https://psychonautwiki.org/wiki/User:Kenan">Kenan</a>
                    </span>
                    <span class="PersonJob">Operations &amp; PR</span>
                    <span class="PersonTitle">
                        <a href="mailto:kenan@psychonaut.wiki">kenan@psychonaut.wiki</a>
                    </span>
                    <a name="MurrayDemo"></a>
                </h3>
                <div class="PersonDetailsContainer">
                    <div class="PersonPhoto">
                        <img src="https://psychonautwiki.org/team/kenan-club.jpg">
                    </div>
                </div>
            </div>
            <div class="PersonContainer">
                <h3>
                    <span class="PersonName2">
                        <a href="https://psychonautwiki.org/wiki/User:Clarity">Chris</a>
                    </span>
                    <span class="PersonJob">Content &amp; Community</span>
                    <span class="PersonTitle">
                        <a href="mailto:chris@psychonaut.wiki">chris@psychonaut.wiki</a>
                    </span>
                </h3>
                <div class="PersonDetailsContainer">
                    <div class="PersonPhoto">
                        <img src="https://psychonautwiki.org/team/chris.jpg" border="0">
                    </div>
                </div>
            </div>
            <div class="PersonContainer">
                <h3>
                    <span class="PersonName2">
                        <a href="https://psychonautwiki.org/wiki/User:White">Nami</a>
                    </span>
                    <span class="PersonJob">Botany &amp; Mycology</span>
                    <span class="PersonTitle">
                        <a href="mailto:nami@psychonaut.wiki">nami@psychonaut.wiki</a>
                    </span>
                    <a name="MurrayDemo"></a>
                </h3>
                <div class="PersonDetailsContainer">
                    <div class="PersonPhoto">
                        <img src="https://psychonautwiki.org/team/nami.jpg">
                    </div>
                </div>
            </div>
            <div class="PersonContainer">
                <h3>
                    <span class="PersonName2">
                        <a href="https://psychonautwiki.org/wiki/User:BronzeManul">Benjamin</a>
                    </span>
                    <span class="PersonJob">Chemistry</span>
                    <span class="PersonTitle">
                        <a href="mailto:benjamin@psychonaut.wiki">benjamin@psychonaut.wiki</a>
                    </span>
                </h3>
                <div class="PersonDetailsContainer">
                    <div class="PersonPhoto">
                        <img src="https://psychonautwiki.org/team/benjamin.jpg" border="0">
                    </div>
                </div>
            </div>
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">
                            <a href="https://psychonautwiki.org/wiki/User:Josikins">Josie</a>
                        </span>
                        <span class="PersonJob">Subjective Effects</span>
                        <span class="PersonTitle">
                            <a href="mailto:josie@psychonaut.wiki">josie@psychonaut.wiki</a>
                        </span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.org/team/josie.jpg" border="0">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">
                            <a href="https://psychonautwiki.org/wiki/User:Kaylee">Kaylee</a>
                        </span>
                        <span class="PersonJob">Subjective Effects</span>
                        <span class="PersonTitle">
                            <a href="mailto:kaylee@psychonaut.wiki">kaylee@psychonaut.wiki</a>
                        </span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.org/team/kaylee.jpg" border="0">
                        </div>
                    </div>
                </div>
                <div class="PersonContainer placeholder"></div>
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
