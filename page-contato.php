<?php /* Template Name: contato*/ ?>
<?php get_header(); ?>
<style>
.contato {
  padding-top: 110px;
}
</style>
<section class="contato">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Contato</h2>
        <div class="row">
          <div class="container area-contato pt-3">
            <div class="row">
              <div class="col-sm-8">
                <h3>Preencha abaixo</h3>
                <hr />
                <?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
              </div>
              <div class="col-sm-4">
                <h3>Ou se preferir</h3>
                <hr />
                <p>
                  Mande um email para: <a href="mailto:contato@ativopark.com.br">contato@ativopark.com.br</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
