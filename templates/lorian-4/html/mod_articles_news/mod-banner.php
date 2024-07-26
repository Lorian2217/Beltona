<?php
defined('_JEXEC') or die;
// echo '<pre>'; print_r($list); die();

foreach ($list as $item) {
    $title = $item->title;
    $introtext = $item->introtext;
    $fulltext = $item->fulltext;
    $images = json_decode($item->images);
    $urls = json_decode($item->urls);
}

?>
<div class="moduletable <?php echo $moduleclass_sfx; ?> bg-color">
    <div class="col-xxl-6">
        <div class="wrap-title">
            <div class="blur"></div>
            <div class="slideshow">
                <div class="slide slide--current">
                    <div class="title word"><?=$title;?></div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between wrap-text" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000">
                <div class="introtext"><?=$introtext;?></div>
                <div class="fulltext"><?=$fulltext;?></div>
            </div>
        </div>
        <div class="wrap-urls">
            <div class="blur"></div>
            <div class="urla" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000"><?=$urls->urlatext;?></div>
            <div class="urlb" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="2000"><?=$urls->urlbtext;?></div>
            <div class="urlc" data-aos="fade-right" data-aos-delay="2000" data-aos-duration="3000"><?=$urls->urlctext;?></div>
        </div>
        <div class="d-flex align-items-center wrap-images">
            <div class="blur"></div>
            <div id="gear65"></div>
            <div class="subtitle">Татьяна <br>Панченко</div>
        </div>
    </div>
    <div class="images "><img src="/images/modules/mod-bottom-block/002.png" alt=""></div>
</div>