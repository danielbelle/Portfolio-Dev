<!--==================== CONTACT ME ====================-->
<section class="contact section" id="contact">
  <h2 class="section__title">Contato</h2>
  <span class="section__subtitle">Solicite atendimento</span>

  <div class="contact_container container grid">
    <div>
      <div class="contact_information">
        <i class="uil uil-phone contact_icon"></i>

        <div>
          <h3 class="contact_title">Nos ligue</h3>
          <span class="contact_subtitle">+55 (48) 9 9699-5834</span>
        </div>
      </div>
      <div class="contact_information">
        <i class="uil uil-envelope contact_icon"></i>

        <div>
          <h3 class="contact_title">Email</h3>
          <span class="contact_subtitle">henrique.danielb@gmail.com</span>
        </div>
      </div>
      <div class="contact_information">
        <i class="uil uil-map-marker contact_icon"></i>

        <div>
          <h3 class="contact_title">Localização</h3>
          <span class="contact_subtitle">Viadutos RS</span>
        </div>
      </div>
    </div>

    <form action="/contact" method="post" class="contact_form grid">
      @csrf
      <div class="contact_inputs grid">
        <div class="contact_content">
          <label for="" class="contact_label">Nome</label>
          <input type="text" class="contact_input">
        </div>
        <div class="contact_content">
          <label for="" class="contact_label">Email</label>
          <input type="email" class="contact_input">
        </div>
      </div>
      <div class="contact_content">
        <label for="" class="contact_label">Projeto</label>
        <input type="tetx" class="contact_input">
      </div>
      <div class="contact_content">
        <label for="" class="contact_label">Descrição do Projeto</label>
        <textarea name="" id="" cols="0" rows="7" class="contact_input"></textarea>
      </div>
      <div>
        <a href="#" class="button button--flex">
          Enviar Mensagem
          <i class="uil uil-message button_icon"></i>
        </a>
      </div>
    </form>
  </div>
</section>
