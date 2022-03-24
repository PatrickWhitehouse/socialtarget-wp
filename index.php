<?php get_header(); ?>

<div>
    <?php if(
        get_field('hero_title') && get_field('hero_subtitle')
    ): ?>
        <header class="hero font-bold">
            <div class="flex items-center justify-between h-full container mx-auto">
                <div>
                    <h1 class="text-black text-3xl"><?= the_field('hero_title') ?></h1>
                    <h2 class="text-black text-2xl"><?= the_field('hero_subtitle') ?></h2>
                </div>
                <div class="text-center">
                    <img class="block" src="<?= the_field('hero_image') ?>" width="450" height="450"/>
                </div>
            </div>
        </header>
    <?php endif; ?>
    <div class="container mx-auto">
        Index.php
    </div>
</div>

<?php
get_footer();
?>
