<aside>
   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
        <div id="buscador">
           <?php get_search_form(); ?>
        </div>
     <h2>Archivos</h2>
        <ul>
           <?php wp_get_archives('type=monthly'); ?>
        </ul>
 
     <h2>Categorias</h2>
        <ul>
           <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
 
        <?php wp_list_bookmarks(); ?>
 
     <h2>Meta</h2>
        <ul>
          <?php wp_register(); ?>
          <li><?php wp_loginout(); ?></li>
          <li><a href="http://wordpress.org/">WordPress</a></li>
          <?php wp_meta(); ?>
        </ul>
 
        <h2>Subscribirse</h2>
        <ul>
          <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
          <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
        </ul>
    <?php endif; ?>
</aside>