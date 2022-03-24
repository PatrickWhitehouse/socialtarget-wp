<?php
/*
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<div>
    <?php if(
        get_field('hero_title') && get_field('hero_subtitle')
    ): ?>
        <header class="hero font-semibold">
            <div class="flex items-center justify-between h-full container mx-auto">
                <div>
                    <h1 class="text-6xl mb-4"><?= the_field('hero_title') ?></h1>
                    <h2 class="text-3xl uppercase text-regular"><?= the_field('hero_subtitle') ?></h2>
                </div>
                <div class="text-center -mt-8">
                    <img class="block" src="<?= the_field('hero_image') ?>" width="450" height="450"/>
                </div>
            </div>
        </header>
    <?php endif; ?>
    <div class="container mx-auto">
        <div class="cards">
            <a class="card gold-hover" href="/services">
                <img class="gold-target-key" src="<?= get_template_directory_uri(); ?>/images/key.png" alt="3D key"
                     width="300">
                <span class="text-xl uppercase font-semibold mb-4 block">Social Media Management</span>
                <p class="mb-4 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cum deserunt distinctio est iusto laudantium, magnam molestiae necessitatibus nemo possimus quod reprehenderit unde. A dolores harum placeat quae quo saepe.
                </p>
                <span class="btn btn-primary">Find out more</span>
            </a>
            <a class="card gold-hover" href="/services">
                <img class="gold-target-brush" src="<?= get_template_directory_uri(); ?>/images/brush.png" alt="3D
                Brush"
                     width="300">
                <span class="text-xl uppercase font-semibold mb-4 block">Content Creation</span>
                <p class="mb-4 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cum deserunt distinctio est iusto laudantium, magnam molestiae necessitatibus nemo possimus quod reprehenderit unde. A dolores harum placeat quae quo saepe.
                </p>
                <span class="btn btn-primary">Find out more</span>
            </a>
            <a class="card gold-hover" href="/services">
                <img class="gold-target-computer" src="<?= get_template_directory_uri(); ?>/images/computer.png" alt="3D Brush"
                     width="300">
                <span class="text-xl uppercase font-semibold mb-4 block">Copywriting</span>
                <p class="mb-4 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cum deserunt distinctio est iusto laudantium, magnam molestiae necessitatibus nemo possimus quod reprehenderit unde. A dolores harum placeat quae quo saepe.
                </p>
                <span class="btn btn-primary">Find out more</span>
            </a>
        </div>
        <div class="my-12">
            <h3 class="text-4xl mb-4 font-semibold">A little bit about me.</h3>
            <p class="leading-loose text-2xl">Hi I’m Beth, a social media consultant based in Manchester, UK. I have
                been working in
                social media
                marketing for the last five years, and have gained a tonne of skills and knowledge along the way. Adapting from business to business, and telling their story through the power of social media is something I am incredibly passionate about and love to do. There is no account too big or too small, I enjoy working my magic on them all!</p>
        </div>
    </div>
    <div class="cta cta-blue">
        <span class="cta-heading">Lets have a chinwag!</span>
        <a class="btn btn-primary" href="/contact">Contact</a>
    </div>
    <div class="container mx-auto">
        <div class="my-12">
            <h3 class="text-4xl mb-4 font-semibold">A handful of businesses I have worked my magic on throughout my career.</h3>
        </div>
    </div>
</div>

<?php
get_footer();
?>
