<a href ="https://spielcenter-chemnitz.de/silvester/" target="_blank"><img src="<?=base_url("assets/header/slider_silvester2020.png")?>" alt="Silvester 2020/21" class="img-fluid"></a>

<div class="card shadow-sm text-white bg-danger my-3" style="width: auto;">
    <img src="<?= base_url('assets/header/Corona.jpg'); ?>" class="card-img-top" alt="China-Virus">
    <div class="card-body">
    <h4 class="card-title text-uppercase"><i class="fas fa-viruses"></i> COVID-19 INFORMATIONEN</h4>
        <div class="card-text text-justify text-white">           
        <?php
            $url = 'https://spielcenter-chemnitz.de/corona.html';
            $content = file_get_contents($url);

            $doc = new DOMDocument();
            $doc->loadHtml($content);

            echo $content;
        ?>
        </div>
    </div>
    <div class="card-footer d-flex flex-column">
        <a href="<?=base_url("hygienekonzept")?>" class="btn btn-danger mt-auto"><i class="fas fa-shield-virus"></i> aktuelles Hygiene-Konzept</a>
    </div>
</div>

<div class="card mt-3">
    <img class="card-img-top" src="<?= base_url('assets/header/start_faces.webp'); ?>" alt="Escaperoom Chemnitz" />
    <div class="card-header text-center bg-primary text-light">
        <h2 class="display-4 text-uppercase"><i class="fas fa-puzzle-piece"></i> Holt Euch den Kick</h2>
    </div>
    <div class="card-body">
        <div class="card-text">
            <p class="lead">Lasst für kurze Zeit den grauen Alltag hinter Euch. Taucht ein in unseren geheimnisvollen
                Escaperoom <a href="escaperoom-chemnitz.html" class="text-dark">Chemnitz</a> und genießt ein
                unvergessliches Erlebnis mit dem gewissen Kick.</p>
            <p>Wir haben für Euch drei spannende Spiele bei uns im Escaperoom <a href="escaperoom-chemnitz.html"
                    class="text-dark">Chemnitz</a> mit unterschiedlichem Schwierigkeitsgrad entwickelt. Folglich gibt es
                viele Rätsel zu knacken. Egal ob Ihr einen tödlichen Virus aus unserem geheimen Labor entwenden wollt,
                aus dem Hochsicherheitstrakt ausbrecht oder aus einer völlig kranken Psychiatrie entflieht… wir haben
                all dies!</p>
            <p class="lead">Der neue abgefahrene Freizeitspaß garantiert 100 % Spannung, 100 % Herausforderung, 100 %
                Spaß.</p>
        </div>
    </div>
    <div class="card-footer">
        <a class="btn btn-lg btn-block btn-primary" href="<?= base_url('escaperooms'); ?>"><i class="fas fa-info"></i>
            weitere Informationen</a>
    </div>
</div>