<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
?>

<footer class="py-4 border-top small">
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
    
    <!-- Site Info -->
    <div>
      <?php bloginfo('name'); ?> | Serving Austin & Surrounding Texas Areas
    </div>

    <!-- Contact Info -->
    <div>
      Email: <a href="mailto:sales@omgsteeldoors.com">sales@omgsteeldoors.com </a> | Phone: <a href="tel:+1 (512) 773-4192">(512) 773-4192</a>
    </div>

    <!-- Social Links -->
    <div class="d-flex gap-3">
      <?php if( get_field('facebook','option') ): ?>
        <a href="<?php the_field('facebook','option'); ?>" aria-label="Facebook" target="_blank" rel="noopener">
          <i class="bi bi-facebook"></i>
        </a>
      <?php endif; ?>

      <?php if( get_field('instagram','option') ): ?>
        <a href="<?php the_field('instagram','option'); ?>" aria-label="Instagram" target="_blank" rel="noopener">
          <i class="bi bi-instagram"></i>
        </a>
      <?php endif; ?>

      <?php if( get_field('twitter','option') ): ?>
        <a href="<?php the_field('twitter','option'); ?>" aria-label="X" target="_blank" rel="noopener">
          <i class="bi bi-twitter-x"></i>
        </a>
      <?php endif; ?>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
