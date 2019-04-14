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
                        <a href="mailto:kenan@psy.is">kenan@psy.is</a>
                    </span>
                    <span style="font-size: 14px;display: flex;margin-top: 5px;">
                        <a href="https://psychonautwiki.org/team/kenan.asc.txt">0x9337CFF2ED85FF40</a>
                        <a href="http://pgp.mit.edu/pks/lookup?op=vindex&amp;search=0x9337CFF2ED85FF40" style="margin-left: 5px;">(verify)</a>
                    </span>
                    <a name="MurrayDemo"></a>
                </h3>
                <div class="PersonDetailsContainer">
                    <div class="PersonPhoto">
                        <img src="https://psychonautwiki.org/team/kenan-nights.jpg">
                    </div>
                </div>
            </div>
            <div class="PersonContainer">
                <h3>
                    <span class="PersonName2">
                        <a href="https://psychonautwiki.org/wiki/User:Unity">Chris</a>
                    </span>
                    <span class="PersonJob">Content &amp; Community</span>
                    <span class="PersonTitle">
                        <a href="mailto:chris@psy.is">chris@psy.is</a>
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
                        <a href="mailto:nami@psy.is">nami@psy.is</a>
                    </span>
                    <span style="font-size: 14px;display: flex;margin-top: 5px;">
                        <a href="https://psychonautwiki.org/team/nami.asc.txt">0x9DE96751F5BD28E4</a>
                        <a href="http://pgp.mit.edu/pks/lookup?op=vindex&amp;search=0x9DE96751F5BD28E4" style="margin-left: 5px;">(verify)</a>
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
                        <a href="mailto:benjamin@psy.is">benjamin@psy.is</a>
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
                            <a href="mailto:josie@psy.is">josie@psy.is</a>
                        </span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.org/team/josie.jpg" border="0">
                        </div>
                    </div>
                </div>
                <!--<div class="PersonContainer">
                    <h3>
                        <span class="PersonName2">
                            <a href="https://psychonautwiki.org/wiki/User:Kaylee">Kaylee</a>
                        </span>
                        <span class="PersonJob">Subjective Effects</span>
                        <span class="PersonTitle">
                            <a href="mailto:kaylee@psy.is">kaylee@psy.is</a>
                        </span>
                    </h3>
                    <div class="PersonDetailsContainer">
                        <div class="PersonPhoto">
                            <img src="https://psychonautwiki.org/team/kaylee.jpg" border="0">
                        </div>
                    </div>
                </div>-->
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
