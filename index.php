<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.alertable.min.js"></script>
<script src="js/tabs.js"></script>
<head>
<style>
	@import url(css/tabs.css);
	@import url(css/jquery-ui.css);
	@import url(css/jquery.alertable.css);
	@import url(css/bootstrap.min.css);
	@import url(css/style.css);
</style>
<body>

<ul class="nav nav-tabs" id="myTab">
  <li class=" active" ><a href="#home" data-toggle="tab"> HOME </a></li>
  <li><a href="#servicos" data-toggle="tab"> SERVICOS </a></li>
  <li><a href="#portifolio" data-toggle="tab"> PORTIFOLIO </a></li>
  <li><a href="#produtos" data-toggle="tab"> PRODUTOS </a></li>
  <li><a href="#contato" data-toggle="tab"> CONTATO </a></li>
</ul>

<div id="content"><!-- content ini -->
<div class="tab-pane active" id="home"><!--aba1-->
<section class="residence">
      <div class="image">
        <img src="src/logo white.png" alt="" />
      </div>
      <div class="residence-text">
        <h6>Oportunidade de Investimento</h6>
        <p class="title">
          Loteamento com os melhores preços da região e com otimas condições de
          pagamento!
        </p>
        <p class="title2">
          Conheça o Residencial Nova Serrana, nosso lançamento a apenas 500m do
          centro da cidade, em São João Evangelista.
        </p>
        <a
          target="_blank"
          href="https://api.whatsapp.com/send?phone=553397096552&text=Ol%C3%A1%2C%20gostaria%20de%20adquirir%20o%20meu%20lote!"
          class="ctaa"
          ><i class="ri-phone-fill"></i> Contato</a
        >
      </div>

      <div class="contact">
        <h2>Entre em <span> Contato!</span></h2>

        <form id="actions">
          <div class="input-box">
		  <input type="hidden" name="acc" id="acc" value="ins" />
            <p><label for="nome">Nome Completo*</label></p>
            <input id="nome" name="nome" type="text" placeholder="" class="required" required />
          </div>

          <div class="input-box">
            <p><label for="email">Email*</label></p>
            <input id="email" name="email" type="email" placeholder="" class="required" required />
          </div>

          <div class="input-box">
            <p><label for="telefone">Telefone / Whatsapp*</label></p>
            <input id="telefone" name="telefone" type="tel" maxlength="14" onkeyup="handlePhone(event)" placeholder="" class="required" required />
          </div>

          <div class="input-box">
            <label for="diponibilidade">Horario para Contato</label>
            <select id="diponibilidade" name="diponibilidade" class="" required>
              <option value="">Selecione</option>
              <option value="Manha">Manhã</option>
              <option value="Tarde">Tarde</option>
              <option value="Noite">Noite</option>
            </select>
          </div>

          <div class="input-box">
            <label for="finalidade">Por que esta buscando este Imóvel?</label>
            <select id="finalidade" name="finalidade" class="" required>
              <option value="">Selecione</option>
              <option value="Investimento">Investimento</option>
              <option value="Moradia">Moradia</option>
            </select>
          </div>
		<input type="button" class="submit" value="Enviar Mensagem" id="gravar" />

          <p class="text-bottom"> Prometemos não utilizar suas informações de contato para enviar
            qualquer tipo de SPAM.</p>

        </form>
      </div>
    </section>


</div><!--aba1-->

<div class="tab-pane" id="servicos"><!--aba2-->

</div><!--aba2-->

<div class="tab-pane" id="portifolio"><!--aba3-->

</div><!--aba3-->

<div class="tab-pane" id="produtos"><!--aba4-->

</div><!--aba4-->

<div class="tab-pane" id="contato"><!--aba5-->

</div><!--aba5-->
</div> <!-- content end -->
<div id="base" class="credit"><strong>Designed by: &copy; Alisson and Raylan</strong></div>
</body>