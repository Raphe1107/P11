    <?php get_template_part('templates_part/modale'); ?>
    <?php get_template_part('templates_part/lightbox'); ?>

    <footer id="footer">
        <?php wp_nav_menu ( array ('theme_location' => 'footer-menu' ,'menu_class' => 'footer-menu', ) ); ?>
        <?php wp_footer(); ?>
    </footer>
    
    
</body>
</html>