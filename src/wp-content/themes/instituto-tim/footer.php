            </section>

            <footer id="main-footer">
                <nav>
                    <?php wp_nav_menu ( array('theme_location' => 'footer', 'items_wrap' => '<ul class="textcenter">%3$s</ul>', 'container' => '', 'fallback_cb' => '') ); ?>
                </nav>
                <ul class="textcenter">
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo.png"></li>
                </ul>
                <p class="textcenter"><small>© Copyright TIM Celular 2010. Todos os direitos reservados.</small></p>
            </footer>
        </div>
    </div>
    
<?php wp_footer(); ?>
</body>
</html>
