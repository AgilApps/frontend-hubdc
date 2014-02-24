<?php get_header(); ?>
 
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="horizon scroll">
        	<img src="images/1.jpg" alt="" />
        </div><!--end  .horizon .scroll-->

        <div class="middle scroll">
            <img src="images/middle.png" alt="" />
        </div><!--end . middle .scroll-->

        <div class="front scroll">

                <img src="images/front.png" alt="" />
                <div class="intro">
                    <h1>Bienvenido a Hub DC</h1>
                    <video width="500" height="380" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <!--<source src="movie.ogg" type="video/ogg">-->
                        Tu navegador no soporta video HTML5
                    </video>
                </div>

                <div class="description page" data-slide="1">
                    <h2>Sección 1</h2>
                    <p>
                        our bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.
                    </p>
                </div><!-- end .description .page-->

                <div class="documentation page" id="page2">
                    <h2>sección 2</h2>
                    <p>
                        The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.
                    </p>
                            
                </div>
                <!--end .documentation .page--> 

                <div class="options page">
                    <h2>Contactanos</h2>
                    <form method="post" action="" class="large-10 medium-10 columns">
                        <label for="name">Ingresa tu nombre</label>
                        <input type="text" id="name" placeholder="Mi Nombre">

                        <label for="emailContac">Ingresa un email</label>
                        <input type="text" id="emailContac" placeholder="micorreo@ejemplo.com">
                                    
                        <label for="phone">Ingresa tu celular</label>
                        <input type="text" id="phone" placeholder="123456789">
                                    
                        <label>Dejanos tus comentarios</label>
                        <p><textarea placeholder="Dejanos aquí tus comentarios"></textarea></p>
                                    
                        <input type="submit" value="enviar" id="submitForm" class="small button">
                    </form>
                </div><!--end .options .page-->
            </div><!--end .front .scroll-->


        
        <!--<div id="entrada">
            <h2><a href="<?php  the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p class="postmetadata">
            	Por <?php the_author(', '); ?> el <?php the_time('F jS, Y'); ?> en <?php the_category(', ') ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
            </p>
            <div class="imagen-post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="entry">
                <?php the_excerpt(); ?>
                <a href="<?php echo get_permalink(); ?>"> Leer mas...</a>
            </div>
        </div>-->
 
    <?php endwhile; ?>
 
    <?php /* include (TEMPLATEPATH . '/inc/nav.php' ); */?>
 
    <?php else : ?>
 
        <h2>Not Found</h2>
 
    <?php endif; ?>
    </div>
 
 
<?php get_footer(); ?>