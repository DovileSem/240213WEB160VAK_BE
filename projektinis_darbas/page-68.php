<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>


  <h3><?php the_title(); ?></h3>

  <?php the_content(); ?>


  <?php

  $images = get_field('karuseles_galerija');
  // $size = 'full'; // (thumbnail, medium, large, full or custom size)
  if ($images) :

  ?>

    <div class="glide">
      <div>
        <br>
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">

            <?php foreach ($images as $image_url) : ?>
              <li class="glide__slide"><img src="<?php echo $image_url; ?>" alt="Image 1"></li>
            <?php endforeach; ?>

          </ul>
        </div>
        <br>
      </div>

      <!-- Add navigation buttons -->
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
      </div>
    </div>

  <?php endif; ?>


<?php endwhile; ?>

<!-- Include Glide.js and its dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<!-- Initialize Glide.js -->
<script>
  new Glide('.glide', {
    type: 'carousel', // Set to 'slider' if you want single item per view
    startAt: 7,
    perView: 3, // Number of slides per view
    focusAt: 'center', // Center the active slide
    gap: 20, // Space between slides
    //   breakpoints: {
    //     768: {
    //       perView: 1 // Adjust for smaller screens
    //     }
    //   }
  }).mount();
</script>



<?php get_footer(); ?>