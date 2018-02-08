<div>
    <p> Hydrofiel is de Nijmeegse Studenten Zwem- en Waterpolovereniging die haar leden de mogelijkheid geeft om op een sportieve en vooral gezellige manier de zwem- of waterpolosport te beoefenen.
        Ben je een beginnende of juist een ervaren zwemmer of waterpoloer?
        In beide gevallen ben je bij ons op de juiste plek.
        Onze trainingen zijn toegankelijk voor elk niveau.
        Kom eens een keertje meetrainen om te kijken of Hydrofiel en haar leden bij jou passen! Iedereen is meer dan welkom!<br><br>
        Naast de trainingen die twee keer per week plaatsvinden en de wekelijkse borrel op donderdagavond in Cafe de Kroon zijn er maandelijks activiteiten die uiteenlopen van toernooien, wedstrijden tot borrels, een cantus, een barbeque, lasergamen, diner rouler en nog veel meer.
        <br><br>Hieronder staan de leukste nieuwtjes over onze vereniging op een rijtje.
    </p>
</div>
<hr>
<div class="container-fluid" align="left">
    <div class="col-sm-6 homepage_block">
        <h3 class="oranje_tekst">Evenementen</h3>
<!--        <div class="container-fluid">-->
            <?php if(!empty($events)) { foreach ($events as $event) { ?>
                <div>
                    <span class="fa fa-calendar-o"></span><a href="/agenda/id/<?=$event->event_id?>"> <?= $event->naam ?></a><br><div style="padding-left: 1em"><?= date_format(date_create($event->van), 'd-m-Y')?></div>
                </div>
            <?php } } else { ?>
                <span class="fa fa-frown-o"></span> Er zijn geen aankomende evenementen.
            <?php } ?>
<!--        </div>-->
    </div>
    <div class="col-sm-6 homepage_block">
        <h3 class="oranje_tekst">Verjaardagen</h3>
<!--        <div class="container-fluid">-->
            <?php foreach ($verjaardagen as $verjaardag) { ?>
                <div><span class="fa fa-birthday-cake"></span>
                    <a href="/profile/id/<?= $verjaardag->id?>"><?= $verjaardag->naam?> (<?= date('Y') - $verjaardag->geboortejaar ?>)</a><br><div style="padding-left: 2em"><?= $verjaardag->geboortedatum ?></div>
                </div>
            <?php } ?>
<!--        </div>-->
    </div>
</div>
<hr>
<?php foreach ($posts as $post) {
    if(isset($post->media)){ ?>
        <div class="container">
            <div class="col-md-3 visible-sm visible-xs">
                <img class="img-responsive center-block" src="<?= $post->media->image->src ?>" style="padding-top: 0; padding-bottom: 10px;max-height: 20em">
            </div>
            <div class="col-md-3 visible-md visible-mg visible-lg">
                <img class="img-responsive center-block" src="<?= $post->media->image->src ?>" style="padding-top: 0; padding-bottom: 10px;max-height: 10em">
            </div>
            <div class="col-md-9 hidden-xs hidden-sm">
                <p><?php
                    $num_words = 100;
                    $words = explode(" ", $post->message, $num_words);
                    if (count($words) === $num_words){
                        $words[99] = '<a href="'.$post->link.'">...Lees meer</a>';
                    }
                    echo implode(" ", $words);
                    ?></p>
            </div>
            <div class="col-md-9 visible-xs visible-sm">
                <p><?php
                    $num_words = 31;
                    $words = explode(" ", $post->message, $num_words);
                    if (count($words) === $num_words){
                        $words[30] = '<a href="'.$post->link.'">...Lees meer</a>';
                    }
                    echo implode(" ", $words);
                    ?></p>
            </div>
        </div>
        <hr>
    <?php } else { ?>
    <div class="container">
            <div class="col-sm-12" align="left">
                <p><?php
                    $num_words = 51;
                    $words = explode(" ", $post->message, $num_words);
                    if (count($words) === $num_words){
                        $words[50] = '<a href="">...Lees meer</a>';
                    }
                    echo implode(" ", $words);
                    ?></p>
            </div>
    </div>
    <hr>
<?php } }?>