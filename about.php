<?php
/*
  * Template Name: About
  */
?>
<?php get_header(); ?>
    <div>
        <?php if(
            get_field('hero_title')
        ): ?>
            <header class="hero hero-blue font-bold">
                <div class="flex items-center justify-between h-full container mx-auto">
                    <div>
                        <span class="uppercase font-medium">About</span>
                        <h1 class="text-black text-6xl"><?= the_field('hero_title') ?></h1>
                    </div>
                    <div class="text-center">
                        <img class="block" src="<?= the_field('hero_image') ?>" width="450" height="450"/>
                    </div>
                </div>
            </header>
        <?php endif; ?>
        <div class="my-6">
            <div class="section">
                <div class="section__wrapper">
                    <div class="section__info">
                        <h2 class="mb-4 text-4xl font-semibold">An introduction to me.</h2>
                        <p class="leading-loose text-2xl">Hi there, my name is Beth and I’m a social media consultant based in
                            Manchester, UK. I
                            have
                            been
                            working in social media marketing for the last four years, and have gained a tonne of experience and made some great achievements along the way. I have worked with a complete diverse client base over the years, from a regional airport to property developers and more.</p>
                    </div>
                    <div class="section__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/cup.png" alt="3D Cup" width="300">
                    </div>
                </div>
            </div>
            <div class="section section--pink">
                <div class="section__wrapper">
                    <div class="section__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/heart.png" alt="3D Heart" width="300">
                    </div>
                    <div class="section__info text-right">
                        <h2 class="mb-4 text-4xl font-semibold">What is Social Target all about?</h2>
                        <p class="leading-loose text-2xl">Social Target is about achieving your social media goals and reaching your targets, no matter how big or small they may be. Every business is different and measures their success differently, and here at Social Target we understand that and will create a strategy to get you the very best results to help your business blossom in the world of social media.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section__wrapper">
                    <div class="section__info">
                        <h2 class="mb-4 text-4xl font-medium">So, where do we go from here?</h2>
                        <p class="leading-loose text-2xl">Give me a buzz on the phone, drop me a note over email or
                            even send me a request on LinkedIn so we can kick-start your journey to social media success. After our chat, I will go away and create a strategy to map out a plan of action to achieve your goals.</p>
                    </div>
                    <div class="section__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/mobile.png" alt="3D Mobile" width="300">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>
