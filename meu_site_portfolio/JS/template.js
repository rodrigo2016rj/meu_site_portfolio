document.addEventListener("DOMContentLoaded", function(){
  /* Ajustando altura do tronco para preencher a parte vertical visível da tela: */
  const body = document.querySelector("body");
  const div_cabecalho_do_sistema = document.getElementById("div_cabecalho_do_sistema");
  const div_tronco_do_sistema = document.getElementById("div_tronco_do_sistema");
  
  let altura_minima = window.innerHeight;
  
  var estilo_computado = window.getComputedStyle(body);
  altura_minima -= parseInt(estilo_computado.marginTop, 10);
  altura_minima -= parseInt(estilo_computado.borderTopWidth, 10);
  altura_minima -= parseInt(estilo_computado.paddingTop, 10);
  
  estilo_computado = window.getComputedStyle(div_cabecalho_do_sistema);
  altura_minima -= parseInt(estilo_computado.marginTop, 10);
  altura_minima -= parseInt(estilo_computado.borderTopWidth, 10);
  altura_minima -= parseInt(estilo_computado.paddingTop, 10);
  altura_minima -= parseInt(estilo_computado.height, 10);
  altura_minima -= parseInt(estilo_computado.paddingBottom, 10);
  altura_minima -= parseInt(estilo_computado.borderBottomWidth, 10);
  altura_minima -= parseInt(estilo_computado.marginBottom, 10);
  
  estilo_computado = window.getComputedStyle(div_tronco_do_sistema);
  altura_minima -= parseInt(estilo_computado.marginTop, 10);
  altura_minima -= parseInt(estilo_computado.borderTopWidth, 10);
  altura_minima -= parseInt(estilo_computado.paddingTop, 10);
  altura_minima -= parseInt(estilo_computado.paddingBottom, 10);
  altura_minima -= parseInt(estilo_computado.borderBottomWidth, 10);
  altura_minima -= parseInt(estilo_computado.marginBottom, 10);
  
  div_tronco_do_sistema.style.minHeight = altura_minima + "px";
  
  /* Ao clicar em uma imagem, acionar a div_imagem_no_tamanho_original: */
  const div_rodape_do_sistema = document.getElementById("div_rodape_do_sistema");
  const div_imagem_no_tamanho_original = document.getElementById("div_imagem_no_tamanho_original");
  const imagem_no_tamanho_original = document.getElementById("imagem_no_tamanho_original");
  const div_fechar_imagem = document.getElementById("div_fechar_imagem");
  const imagens = document.getElementsByTagName("img");
  
  let backup_do_scroll_y = 0;
  
  for(let i = 0; i < imagens.length; i++){
    imagens[i].addEventListener("click", function(){
      if(imagens[i].getAttribute("id") === "imagem_no_tamanho_original"){
        fechar_imagem(event);
        return;
      }
      backup_do_scroll_y = window.scrollY;
      div_imagem_no_tamanho_original.classList.remove("tag_oculta");
      div_cabecalho_do_sistema.classList.add("tag_oculta");
      div_tronco_do_sistema.classList.add("tag_oculta");
      div_rodape_do_sistema.classList.add("tag_oculta");
      const source = imagens[i].getAttribute("src");
      imagem_no_tamanho_original.setAttribute("src", source);
      window.scrollTo(0, 0);
    });
  }
  
  div_fechar_imagem.addEventListener("click", fechar_imagem);
  
  function fechar_imagem(evento){
    div_imagem_no_tamanho_original.classList.add("tag_oculta");
    div_cabecalho_do_sistema.classList.remove("tag_oculta");
    div_tronco_do_sistema.classList.remove("tag_oculta");
    div_rodape_do_sistema.classList.remove("tag_oculta");
    window.scrollTo(0, backup_do_scroll_y);
    imagem_no_tamanho_original.setAttribute("src", "");
  }
  
});
