            </section>

            <footer id="main-footer">
                <nav>
                    <?php wp_nav_menu ( array('theme_location' => 'footer', 'items_wrap' => '<ul class="textcenter">%3$s</ul>', 'container' => '', 'fallback_cb' => '', 'depth' => 1) ); ?>
                </nav>

                <?php global $BannersApoiadores; ?>

                <ul class="textcenter">
                    <?php $BannersApoiadores->print_items_by_position('apoiadores'); ?>
                </ul>
                <p class="contato textcenter">Para entrar em contato com a equipe do Instituto TIM escreva para <a href="mailto:contato@institutotim.com.br">contato@institutotim.com.br</a></p>
                <p class="textcenter"><small><?php echo get_option('text_copyright_footer');?></small></p>
            </footer>
        </div>
    </div>
    
<?php wp_footer(); ?>
</body>
</html>
