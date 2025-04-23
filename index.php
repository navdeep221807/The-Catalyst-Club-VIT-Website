<?php get_header(); ?>

<header class="relative h-screen w-full overflow-hidden">
    <img src="<?php echo get_theme_file_uri('assets/TCC logo(1).png'); ?>" alt="Catalyst Club Logo" class="absolute inset-0 w-full h-full object-contain object-center hero-img z-0"/>
    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
    <div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-4">
        <div class="flex items-center space-x-2 mb-8">
            <span class="orbitron text-5xl font-extrabold tracking-widest text-white">The</span>
            <span class="orbitron text-5xl font-extrabold tracking-widest text-white">Catalyst</span>
            <span class="text-5xl font-light tracking-wide text-white">Club</span>
        </div>
        <nav class="bg-white bg-opacity-90 text-gray-800 rounded-md px-6 py-2 flex flex-wrap justify-center gap-4 shadow-md text-sm font-medium mb-10">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex flex-wrap justify-center gap-4',
                'fallback_cb' => false,
                'items_wrap' => '%3$s',
                'walker' => new TCC_Menu_Walker()
            ));
            ?>
        </nav>
        <div class="max-w-lg space-y-4">
            <h1 class="text-3xl md:text-4xl font-light leading-snug">
                <?php echo get_theme_mod('hero_title', 'Inspiring Change Through Innovation and Collaboration'); ?>
            </h1>
            <p class="text-sm font-light">
                <?php echo get_theme_mod('hero_description', 'The Catalyst Club is an independent, student-driven organization dedicated to empowering young leaders and innovators.'); ?>
            </p>
            <a href="<?php echo get_theme_mod('cta_button_url', '#'); ?>" class="inline-block bg-pink-600 text-white text-xs font-bold rounded-full px-6 py-2 tracking-widest hover:bg-pink-700 transition">
                <?php echo get_theme_mod('cta_button_text', 'ABOUT US'); ?>
            </a>
        </div>
    </div>
</header>

<?php get_footer(); ?> 