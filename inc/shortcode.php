<?php

function news_shortcode() {
    ob_start();

    $query = new WP_Query([
        'post_type' => 'news',
        'posts_per_page' => 6,
        'orderby' => 'id',
        'order' => 'desc',
        'tax_query' => [
            [
                'taxonomy' => 'news_categories',
                'field' => 'slug',
                'terms' => ['news', 'events']
            ]
        ]
    ]);

    echo '<div class="row">';
    while($query->have_posts(  )) : $query->the_post(  );
?>
<style scoped>
    .card {
        overflow: hidden;
        position: relative;
        width: 100%;
        max-height: 290px;
        border: 0;
    }
    .card-img-box {
        width: 100%;
        height: 100%;
    }
    .card-img-box img {
        display: block;
        object-fit: cover;
        transition: .3s;
    }
    .card-content-box {
        position: absolute;
        left: 0;
        bottom: -100%;
        width: 100%;
        background: #708053;
        opacity: .9;
        transition: .2s;
    }
    .card-content-box .title {
        padding: 20px;
    }
    .card-content-box .title h1 {
        font-size: 30px;
        color: #fff;
        font-weight: 200;
    }
    a:hover .card-content-box {
        bottom: 0;
    }
    a:hover .card-img-box img {
        transform: scale(1.1);
    }
</style>
<div class="col-lg-4">
    <a href="<?= get_permalink()?>">
    <div class="card mb-5">
        <div class="card-body p-0">
          <div class="card-img-box">
            <?php if( has_post_thumbnail( )): ?>
                <img src="<?= get_the_post_thumbnail_url(  ); ?>" alt="<?= the_title(); ?>">
            <?php else: ?>
                <img src="<?= bloginfo( 'template_directory' ).'.img/sub.jpg';?>" alt="sub">
            <?php endif; ?>
          </div>
          <div class="card-content-box">
                <div class="title">
                    <h1><?= the_title(); ?></h1>
                </div>
          </div>
        </div>
    </div>
</a>
</div>
<?php
    endwhile;
    echo '<div/>';
    wp_reset_query(  );
    return ob_get_clean();
}

add_shortcode( 'news_shortcode', 'news_shortcode' );


function custom_contact_form() {
    ob_start();
?>
    <?= do_shortcode( '[gravityform id="1"]' );?>

<?php
return ob_get_clean();
}
add_shortcode('custom_contact_form', 'custom_contact_form');

// Donation Logos

function donation_logos(){
    ob_start();
?>
    <style scoped>
        .donation-logos {
            position: relative;
            display: flex;
            align-items: center;
        }
        .donation-logos img {
            width: 100%;
            max-width: 162px;
        }
        .donation-logos img + img {
            margin-left: 30px;
        }
        
    </style>
    <div class="donation-logos">
        <div class="row d-flex align-items-center">
            <div class="col-lg-3 col-6">
                <img src="<?= bloginfo( 'template_directory' )."/img/mastercard.png";?>" alt="mastercard">
            </div>
            <div class="col-lg-3 col-6">
                <img src="<?= bloginfo( 'template_directory' )."/img/visa.png";?>" alt="visa">
            </div>
            <div class="col-lg-3 col-6">
                <img src="<?= bloginfo( 'template_directory' )."/img/paypal.png";?>" alt="paypal">
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode( 'donation_logos', 'donation_logos' );

function accredited() {
    ob_start();
?>

<style scoped>
    .donation-logos {
        position: relative;
        display: flex;
        align-items: center;
    }
    .donation-logos img {
        width: 100%;
        max-width: 162px;
    }
    .donation-logos img + img {
        margin-left: 30px;
    }
</style>
<div class="donation-logos">
    <div class="row d-flex align-items-center">
        <div class="col-lg-3 col-6">
            <img src="<?= bloginfo( 'template_directory' )."/img/pcnc.png";?>" alt="pcnc">
        </div>
        <div class="col-lg-3 col-6">
            <img src="<?= bloginfo( 'template_directory' )."/img/dsdw.png";?>" alt="dsdw">
        </div>
    </div>
</div>

<?php
    return ob_get_clean();
}
add_shortcode( 'accredited', 'accredited' );
