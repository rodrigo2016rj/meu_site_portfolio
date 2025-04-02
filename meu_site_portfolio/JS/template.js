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
  
  /* Opções de Visual */
  const link_visual_padrao_fundo_claro = document.getElementById("link_visual_padrao_fundo_claro");
  const link_visual_padrao_fundo_escuro = document.getElementById("link_visual_padrao_fundo_escuro");
  
  link_visual_padrao_fundo_claro.addEventListener("click", evento_escolher_visual);
  link_visual_padrao_fundo_escuro.addEventListener("click", evento_escolher_visual);
  
  function evento_escolher_visual(evento){
    evento.preventDefault();
    
    const tag_que_disparou_o_evento = evento.currentTarget;
    
    let visual = "";
    switch(tag_que_disparou_o_evento.getAttribute("id")){
      case "link_visual_padrao_fundo_claro":
        visual = "visual_padrao_fundo_claro";
      break;
      case "link_visual_padrao_fundo_escuro":
        visual = "visual_padrao_fundo_escuro";
      break;
    }
    
    /* Requisição ajax */
    let conexao_ajax = null;
    if(window.XMLHttpRequest){
      conexao_ajax = new XMLHttpRequest();
      const tipo = "POST";
      let url_mais = "";
      let url = "template.php?acao=escolher_visual_via_ajax" + url_mais;
      let dados_post = {visual: visual};
      let resposta = null;
      conexao_ajax.onreadystatechange = function(){
        if(conexao_ajax.readyState == 4){
          if(conexao_ajax.status == 200){
            resposta = JSON.parse(conexao_ajax.responseText);
            let cookie = `${resposta.nome_do_cookie}=${resposta.valor_do_cookie};`;
            cookie += ` max-age=${resposta.vencimento_do_cookie};`;
            cookie += ` path='${resposta.caminho_do_cookie}';`;
            cookie += ` domain=${resposta.dominio_do_cookie};`;
            cookie += ` SameSite=${resposta.restricao_do_cookie};`;
            document.cookie = cookie;
            window.location.reload(true);
          }
        }
      }
      conexao_ajax.open(tipo, url, true);
      conexao_ajax.setRequestHeader("Content-Type", "application/json");
      conexao_ajax.send(JSON.stringify(dados_post));
    }
  }
  
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
