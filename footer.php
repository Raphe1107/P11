    <?php get_template_part('templates_part/modale'); ?>    <!-- Ajout de la modale --> 
    <?php get_template_part('templates_part/lightbox'); ?>  <!-- Ajout de la lightbox --> 

    <footer id="footer">
        <!-- Menu footer -->
        <?php wp_nav_menu ( array ('theme_location' => 'footer-menu' ,'menu_class' => 'footer-menu', ) ); ?>
        <?php wp_footer(); ?>
    </footer>

</body>
</html>