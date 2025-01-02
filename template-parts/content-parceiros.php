<h2>Nossos Parceiros</h2>
<?php
// Check if the gallery field has images
$gallery = get_field('logo_parceiros');
if ($gallery): ?>
    <div class="logo-parceiros-carousel-wrapper">
        <div class="logo-parceiros-carousel">
            <?php foreach ($gallery as $image): ?>
                <div class="carousel-item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endforeach; ?>
            <?php foreach ($gallery as $image): ?>
                <div class="carousel-item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endforeach; ?>
            <?php foreach ($gallery as $image): ?>
                <div class="carousel-item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endforeach; ?>
            <?php foreach ($gallery as $image): ?>
                <div class="carousel-item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
