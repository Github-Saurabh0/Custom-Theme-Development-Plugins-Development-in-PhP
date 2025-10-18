<?php
get_header();
?>

<section class="neuralglass-section">
  <div class="neuralglass-overlay"></div>
  <div class="neuralglass-container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('neuralglass-article'); ?>>
                <h1 class="neuralglass-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="neuralglass-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="neuralglass-empty">
            <p><?php esc_html_e('No content found. Neural silence detected.', 'textdomain'); ?></p>
        </div>
    <?php endif; ?>
  </div>
</section>

<style>
body {
  background: linear-gradient(180deg, #0a0014, #25002b, #3f005c);
  color: #e8e2ff;
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
}

.neuralglass-section {
  position: relative;
  min-height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 4rem 2rem;
}

.neuralglass-overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: radial-gradient(circle at 20% 30%, rgba(255,0,255,0.2), transparent 50%),
              radial-gradient(circle at 80% 70%, rgba(0,255,255,0.2), transparent 50%);
  z-index: 0;
  filter: blur(100px);
}

.neuralglass-container {
  position: relative;
  z-index: 2;
  max-width: 900px;
  background: rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  padding: 3rem;
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 40px rgba(255, 0, 255, 0.2);
  transition: all 0.3s ease;
}

.neuralglass-container:hover {
  box-shadow: 0 0 60px rgba(255, 0, 255, 0.4);
}

.neuralglass-title {
  font-size: 2.5rem;
  text-align: center;
  margin-bottom: 1.5rem;
  background: linear-gradient(90deg, #ff00e6, #00ffff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.neuralglass-content {
  font-size: 1.1rem;
  line-height: 1.8;
  color: #d1c2f0;
}

.neuralglass-footer {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  text-align: center;
  padding: 2rem 1rem;
  font-size: 0.9rem;
  color: #cfc8e6;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-links {
  margin-bottom: 1rem;
}

.footer-links a {
  color: #ff9dfc;
  margin: 0 10px;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #00ffff;
}
</style>

<?php
get_footer();
?>
