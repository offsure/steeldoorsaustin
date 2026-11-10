<?php
/* Template Name: Leander */
get_header();
?>


<!-- Hero Section -->
<?php 
$hero_bg = get_field('hero_bg'); 
$bg_url  = $hero_bg ? esc_url($hero_bg['url']) : '';
?>
<section class="hero-section d-flex align-items-center text-center text-white" 
    style="background: url('<?php echo esc_url($bg_url); ?>') no-repeat center center/cover;">
  <div class="container">
    <h1 class="display-5 fw-bold"><?php the_field('hero_title'); ?></h1>
    </div>
</section>

<!-- About -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-7">
        <h3><?php the_field('sec1_hd'); ?></h3>
        <p><?php the_field('sec1_cnt'); ?></p>
      </div>
      <div class="col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219843.32177447883!2d-98.0219954725302!3d30.576080188772004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b2ad506191875%3A0x7d7f1ea55ab62496!2sSan Marcos%2C%20TX%2C%20USA!5e0!3m2!1sen!2sin!4v1756120781965!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="service-box">
            <div class="srvc_box_hd d-flex align-items-center gap-3 pb-2">
                <?php 
    $res_img = get_field('res_img'); 
    if( $res_img ): ?>
        <img src="<?php echo esc_url($res_img['url']); ?>" alt="<?php echo esc_attr($res_img['alt']); ?>" class="img-fluid">
    <?php endif; ?>
          <h5><?php the_field('res_hd'); ?></h5>
          </div>
          <p><?php the_field('res_cnt'); ?></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-box">
                        <div class="srvc_box_hd d-flex align-items-center gap-3 pb-2">
                          <?php 
    $front_img = get_field('front_img'); 
    if( $res_img ): ?>
        <img src="<?php echo esc_url($front_img['url']); ?>" alt="<?php echo esc_attr($front_img['alt']); ?>" class="img-fluid">
    <?php endif; ?>

          <h5><?php the_field('front_hd'); ?></h5>
          </div>
          <p><?php the_field('front_cnt'); ?></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-box">
                        <div class="srvc_box_hd d-flex align-items-center gap-3 pb-2">

         <?php 
    $oversized_img = get_field('oversized_img'); 
    if( $oversized_img ): ?>
        <img src="<?php echo esc_url($oversized_img['url']); ?>" alt="<?php echo esc_attr($oversized_img['alt']); ?>" class="img-fluid">
    <?php endif; ?>
          <h5><?php the_field('oversized_hd'); ?></h5>
          </div>
          <p><?php the_field('oversized_cnt'); ?></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-box">
                        <div class="srvc_box_hd d-flex align-items-center gap-3 pb-2">
           <?php 
    $patio_img = get_field('patio_img'); 
    if( $patio_img ): ?>
        <img src="<?php echo esc_url($patio_img['url']); ?>" alt="<?php echo esc_attr($patio_img['alt']); ?>" class="img-fluid">
    <?php endif; ?>
          <h5><?php the_field('patio_hd'); ?></h5>
          </div>
          <p><?php the_field('patio_cnt'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="why-us py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">

		  <?php 
    $get_strt_img = get_field('get_strt_img'); 
    if( $get_strt_img ): ?>
        <img src="<?php echo esc_url($get_strt_img['url']); ?>" alt="<?php echo esc_attr($get_strt_img['alt']); ?>" class="img-fluid roundes">
    <?php endif; ?>
      </div>
      <div class="col-md-6">
        <h3 class="mb-3"><?php the_field('get_strt_hd'); ?></h3>
         <?php 
    $get_strt_txt = get_field('get_strt_txt'); 
    if ( $get_strt_txt ) : 
        echo wp_kses_post($get_strt_txt); 
    endif; 
    ?>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta py-5 text-center bg-light container br-4">
    <h4 class="py-4">Steel Doors Austin – Premium Steel Doors in Leander, TX</h4>
    <p class="pb-4">Enhancing homes and businesses with residential steel doors, iron front doors, oversized steel doors, and steel patio doors designed for strength, style, and security. Serving Leander and surrounding Central Texas communities with expert installation and unmatched customer care.</p>
    <a href="#" class="cta-btn">Schedule a Free Consultation</a>
</section>



<!---->

<?php get_footer(); ?>