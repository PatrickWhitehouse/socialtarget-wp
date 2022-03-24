
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer class="bg-pastelpurple py-12">
    <div class="container mx-auto lg:grid lg:grid-cols-3">
        <div>
            <span class="text-xl">Lets connect!</span>
        </div>
        <div>
            <span class="text-xl">Explore</span>
            <?php
            wp_nav_menu(
                array(
                    'container_id'    => 'footer-menu',
                    'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                    'menu_class'      => 'block',
                    'theme_location'  => 'footer',
                    'li_class'        => 'my-2',
                    'fallback_cb'     => false,
                )
            );
            ?>
        </div>
        <div>
            <?php the_custom_logo(); ?>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
