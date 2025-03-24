
    </main>
    <footer>
        <div>
            <?php
                wp_nav_menu(array(
                'theme_location' =>	'menu-footer',
                'container' => false,
                'menu_class' => 'menu',
                ));
            ?>
        </div>        
    </footer>
    <?php wp_footer(); ?>
</body>
</html>