<?php /* Template Name: Página inicial*/ ?>
<?php get_header(); ?>

<section class="bloco-inicial">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1>Conforto e segurança para você e seu carro.</h1>
        <p class="descricao-home">
          Fornecemos um serviço de qualidade, visando sempre o bem estar e tranquilidade de nossos clientes para que fiquem tranquilos em seus compromissos diários.
        </p>
        <button class="mt-3 servicos-home">Veja mais</button>
      </div>
      <div class="col-sm-6 text-center img-bloco-inicial">
         <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/car-home.png">
      </div>
    </div>
  </div>
</section>
<section id="servicos" class="servicos">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mt-4">Serviços</h2>
        <div class="row">
          <div class="col-sm-4">
            <div class="col-sm-12 bloco-servicos text-center">
              <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/carro-01.svg">
              <h3>Mensalista</h3>
              <p>
Para você que precisa de um lugar cativo, que zele pelo seu patrimônio e qualidade do serviço. Garantimos os melhores cuidados ao seu carro.              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-sm-12 bloco-servicos text-center">
              <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/carro-02.svg">
              <h3>Rotativo</h3>
              <p>
Você que precisa de agilidade e está sempre no corre do dia-a-dia estamos aqui para que você tenha agilidade do seu dia alinhado a confiança da nossa prestação de serviço.              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-sm-12 bloco-servicos text-center">
              <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/carro-03.svg">
              <h3>Prestador de serviço</h3>
              <p>
Temos os melhores motoristas para iniciarmos uma parceria com nossos futuros parceiros.              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="quemsomos" class="quem-somos">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <h2>Quem somos</h2>
        <h3>REFERÊNCIA EM GESTÃO DE ESTACIONAMENTOS</h3>
        <p class="mt-4">
          Atuante no mercado desde 2010, a Ativo Park é uma empresa especializada na gestão, operação e prestação de serviços terceirizados em estacionamentos, parqueamento e guarda de veículos em edifícios comerciais, flats, agências bancárias, aeroportos, hospitais, pátios e terrenos.
        </p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>unidades"><button class="mt-4">Ver unidades</button></a>
      </div>
    </div>
  </div>
</section>
<section class="parceiros">
  <div class="container">
    <div class="row">

      <div class="col-sm-3 logo_01">
        <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/logo_01.jpg" />
      </div>
      <div class="col-sm-3 logo_02">
        <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/logo_02.jpg" />
      </div>
      <div class="col-sm-3 logo_03">
        <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/logo_03.jpg" />
      </div>
      <div class="col-sm-3 logo_04">
        <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/logo_04.jpg" />
      </div>
    </div>
  </div>
</section>
<section class="unidades">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="col-sm-12">Unidades</h2>
        <span class="todas-unidades"><a href="<?php echo esc_url( home_url( '/' ) ); ?>unidades">Ver todas as unidades</a></span>
        <div class="row">
          <div class="col-sm-4">
            <div class="col-sm-12 text-center mt-4 unidades-box">
              <div class="thumb-rota row text-center">
                <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/rota.svg">
            </div>
              <div class="col-sm-12">
                <h3>Unid. PVI</h3>
                <a href="https://www.google.com/maps?saddr=My+Location&daddr=Av.Presidente+Vargas+1140+Centro" target="_blank">
                  <button>Ver rota</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-sm-12 text-center mt-4 unidades-box">
              <div class="thumb-rota row text-center">
                <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/rota.svg">
            </div>
              <div class="col-sm-12">
                <h3>Unid. PVII</h3>
                <a href="https://www.google.com/maps?saddr=My+Location&daddr=Av.Presidente+Vargas+989+Centro" target="_blank">
                  <button>Ver rota</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="col-sm-12 text-center mt-4 unidades-box">
              <div class="thumb-rota row text-center">
                <img class="img-fluid" src="<?=bloginfo('template_url')?>/images/rota.svg">
            </div>
              <div class="col-sm-12">
                <h3>Unid. Charitas</h3>
                <a href="https://www.google.com/maps?saddr=My+Location&daddr=Av.Prefeito+Silvio+Picanço+867+Charitas" target="_blank">
                  <button>Ver rota</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
