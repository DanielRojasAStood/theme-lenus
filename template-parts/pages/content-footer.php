<?php 
$sitename           = get_bloginfo('name');
$global_content     = get_page_by_path('global-content')->ID;
$group_footer       = ($global_content) ? get_field('group_footer', $global_content) : null;

$logo               = $group_footer['group_logo']['logo'];
$text               = $group_footer['group_logo']['text'];

$heading            = $group_footer['group_map']['heading'];
$links              = $group_footer['group_map']['links'];

$contact_heading    = $group_footer['group_contactanos']['heading'];
$contact_copy       = $group_footer['group_contactanos']['copy'];

$newsletter_heading = $group_footer['group_newsletter']['heading'];
$formulario_id = $group_footer['group_newsletter']['formulario_id'];
$fellow_heading     = $group_footer['group_newsletter']['fellow_heading'];
$social             = $group_footer['group_newsletter']['social'];

?>

<style>
    .textLink1 {
        max-width: 270px
    }
    .textLink1 p{
        margin: 0;
    }
    .columnTwoPro {
        justify-content: flex-start;
        column-gap: 24px
    }
    .redesFooter {
        display: flex;
        align-items: center;
        column-gap: 6px;
    }
    .redesFooter:hover {
        color: var(--jvm-color-text-1);
    }
    .form-newsletter {
        display: flex;
        padding: 24px 0 30px;
    }
    .form-newsletter input[type="email"] {
        font-family: "Source Sans Pro";
        padding: 0 18px;
        color: var(--jvm-color-text-1) !important;
        font-size: 18px;
        line-height: 24px;
        letter-spacing: 0.27px;
        border-right: 0;
        border-radius: 0;
        border: 1px solid #fff;
        background: transparent;
    }
    .form-newsletter input[type="submit"] {
        font-family: "Source Sans Pro";
        padding: 0 38px;
        color: #246440;
        font-size: 18px;
        font-weight: 600;
        line-height: 22px;
        border: 0;
        border-radius: 0px 18px 0px 0px;
    }

    .form-newsletter input[type="email"]::-webkit-input-placeholder {
        color: var(--jvm-color-text-1);
    }
    .form-newsletter input[type="email"]::-moz-placeholder {
        color: var(--jvm-color-text-1);
    }
    .form-newsletter input[type="email"]:-ms-input-placeholder { 
        color: var(--jvm-color-text-1);
    }
    .form-newsletter input[type="email"]:-moz-placeholder {
        color: var(--jvm-color-text-1);
    }
    .form-newsletter .wpcf7-not-valid-tip {
        position: absolute;
        color: var(--jvm-color-text-1);
        font-size: 12px;
        padding-top: 10px;
    }
    .wpcf7 form.invalid .form-newsletter + .wpcf7-response-output, 
    .wpcf7 form.unaccepted .form-newsletter + .wpcf7-response-output, 
    .wpcf7 form.payment-required .form-newsletter + .wpcf7-response-output {
        margin: 5px 0 5px 0 ;
        border-color: var(--jvm-color-text-1);
        font-size: 12px;
        text-align: center;
        color: var(--jvm-color-text-1);
    }

    .wpcf7 form.sent .form-newsletter + .wpcf7-response-output {
        border-color: var(--jvm-color-text-1);
        font-size: 12px;
        text-align: center;
        color: var(--jvm-color-text-1);
        margin: 0 0 10px 0;
    }

</style>
<footer>
    <div class=footer>
        <div class="row columnFooterLenus">
            <div class="col-8 columnFooterOne">
                <div class="row">
                    <div class="col">
                        <a href="">
                            <img width="180" height="48" src="<?php echo $logo; ?>" alt="Lenus capital partners - <?php echo $sitename ?>" title="Lenus capital partners">
                        </a>
                        <?php if($text); { ?>
                        <p class="textWhite textCopyRight"> <?php echo $text; ?></p>
                        <?php } ?>
                    </div>
                    <div class="col">
                        <div class="textLinkInfo">
                            <div class="item">
                                <?php if($heading) { ?>
                                <h1 class="textColumnLenusBlue"><?php echo $heading; ?></h1>
                                <?php } ?>
                                <div class="textLink1">
                                    <?php foreach ($links as $key => $link) { 
                                        $link_title = $link['link']['title'];
                                        $link_url = $link['link']['url'];
                                        $link_target = $link['link']['target'];
                                    ?>
                                        <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="textLinkInfo">
                            <div class="item">
                                <?php if($contact_heading) { ?>
                                <h1 class="textColumnLenusBlue"><?php echo $contact_heading; ?></h1>
                                <?php } ?>

                                <?php if($contact_copy) { ?>
                                <div class="textLink1">
                                    <?php echo $contact_copy; ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 columnGreenFooter">
                <?php if($newsletter_heading) { ?>
                <h1 class="logo-lenus-up textWhite"><?php echo $newsletter_heading; ?></h1>
                <?php } ?>

                <div>
                    <?php echo $formulario_id; ?>
                </div>
                <div>
                    <?php if($fellow_heading) { ?>
                    <h1 class="logo-lenus-up textWhite"><?php echo $fellow_heading ?></h1>
                    <?php } ?>

                    <div class="columnTwoPro">
                        <?php foreach ($social as $key => $item) { 
                            $link_title = $item['link']['title'];
                            $link_url = $item['link']['url'];
                            $link_target = $item['link']['target'];
                        ?>
                            <a href="<?php echo $link_url; ?>" class="redesFooter" title="<?php echo $link_title; ?>"> 
                                <img width="24" height="24" src="<?php echo $item['icon']; ?>" alt="<?php echo $link_title . ' - ' . $sitename ?>" title="<?php echo $link_title; ?>">
                                <?php echo $link_title; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>