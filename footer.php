
    </main>
    <footer>
        <div>
            <?php
                wp_nav_menu(array(
                'theme_location' =>	'nav-menu-footer',
                'container' => false,
                'menu_class' => 'menu',
                ));
            ?>
        </div>  
        <?php get_template_part('templates_part/modale-contact'); ?>      
    </footer>
    <?php wp_footer(); ?>
</body>
</html>