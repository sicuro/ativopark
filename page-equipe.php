<?php /* Template Name: Equipe*/ ?>
<?php get_header(); ?>
<style>

.bg-header-clear, header {
  background: #1a4df0 !important;
  background: none;
  transition: 1s;
}
.banner-contato {
  padding-top: 100px;
  width: 100%;
}
.banner-contato h1 {
  padding-top: 40px;
  color: #fff;
}
#time {
  margin-top: 50px;
}
</style>
<section class="banner-contato text-center">
  <h1>Equipe</h1>
</section>
<section id="time" class="pb-5">
    <div class="container">

        <div class="row">

          <!--pega o post type criado no functions -->
          <?php query_posts('post_type=Colaboradores&posts_per_page=-1'); ?>

          <!-- faz o condicional bolada -->
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="<?php the_field('foto_parceiro'); ?>" alt="card image"></p>
                                      <h4 class="card-title"><?php the_field('nome_parceiro'); ?></h4>
                                      <p class="card-text"><?php the_field('funcao_parceiro'); ?></p>
                                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside col-sm-12">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title"><?php the_field('nome_parceiro'); ?></h4>
                                      <p class="card-text"><?php the_field('frase_parceiro'); ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
          <?php endwhile; ?>
          <?php else : ?>
            Não possui equipe cadastrada
          <?php endif; ?>
          <!--reseta pra nao dar kao -->
          <?php wp_reset_query(); ?>



        </div>
    </div>
</section>
<?php get_footer(); ?>
