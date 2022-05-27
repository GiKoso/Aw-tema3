<?php get_header();?>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				 <h2>Seja bem vindo ao meu primeiro tema</h2>
			</div>
		</div>
	</div>
    <div class="container">
    <div class="row">
            <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/vegito.jpg" class="pri">
            </div>
            <div class="col-md-6">
            <h1>Vegito Blue </h1>
            <p>Personagem já disponivel entre agora e obtenha.</p>
            </div>
     </div>
     </div>
     <br>
     <div class="container">
     <div class="row">
        <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/goku.jpg" class="seg">
        </div>
        <div class="col-md-6">
        <h1> Goku Super Saiyajin </h1>
        <p> Personagem já disponivel obtenha agora.</p>
        </div>
      </div>
      </div>
      <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/gogeta.jpg" class="ter">
            </div>
            <div class="col-md-6">
                <h1> Goku e Vegeta </h1>
                <p> Personagem já disponivel obtenha agora. </p>
            </div>
        </div>
    </div>
      <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/mui.jpg" class="qua">
                </div>
                <div class="col-md-6">
                  <h1> Goku Instinto Superior </h1>
                    <p> Personagem já disponivel obtenha agora. </p>
                </div>
            </div>
        </div>
    <div class="row">
    <?php 
    $cont= 0;
    if ( have_posts() ){
        While( have_posts() ){
            the_post();
            $cont++;
            if($cont <= 3){
    ?>
                <div class="col-md-4"
                    <h3><?php the_title();?></h3>
                    <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail();?></div>
                    <p><?php the_excerpt();?></p>
                    <a class="btn btn-primary" href="<?php the_permalink();?>">leia Mais</a>
                </div>
        <?php
            }
        }
    }
    ?>
    </div>
<?php get_footer();?>