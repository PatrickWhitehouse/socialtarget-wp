<?php
/*
  * Template Name: Services
  */
?>
<?php get_header(); ?>
    <div>
        <?php if(
            get_field('hero_title')
        ): ?>
            <header class="hero font-bold">
                <div class="flex items-center justify-between h-full container mx-auto">
                    <div>
                        <span class="uppercase font-medium">Services</span>
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
                        <h2 class="mb-4 text-4xl font-semibold">Social media management</h2>
                        <p class="leading-loose text-2xl">Day to day management is the key to a thriving social media account. Engaging with your audience, keeping on top of incoming messages and paying attention to the latest trends are a few of the crucial jobs on the to do list. Time consuming? That’s where Social Target comes in.</p>
                    </div>
                    <div class="section__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/key-blush.png" alt="3D Key" width="300">
                    </div>
                </div>
            </div>
            <div class="section section--blue">
                <div class="section__wrapper">
                    <div class="section__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/brush.png" alt="3D Brush" width="300">
                    </div>
                    <div class="section__info text-right">
                        <h2 class="mb-4 text-4xl font-semibold">Content creation</h2>
                        <p class="leading-loose text-2xl">Content marketing is the life of your social media
                            accounts
                            . When done right, it raises awareness of your brand, encourages audience engagement, and generates conversions. This can be done by entertaining, educating or inspiring your consumers . After research, and the production of tailored copy accompanied by creative that goes hand in hand with your brand.</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section__wrapper">
                    <div class="section__info">
                        <h2 class="mb-4 text-4xl font-semibold">So, where do we go from here?</h2>
                        <p class="leading-loose text-2xl">Give me a buzz on the phone, drop me a note over email or
                            even send me a request on LinkedIn so we can kick-start your journey to social media success. After our chat, I will go away and create a strategy to map out a plan of action to achieve your goals.</p>
                    </div>
                    <div class="section__img">
                        <img src="<?= get_template_directory_uri(); ?>/images/mobile.png" alt="3D Mobile" width="300">
                    </div>
                </div>
            </div>
    </div>

<?php
get_footer();
?>
