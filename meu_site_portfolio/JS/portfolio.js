document.addEventListener("DOMContentLoaded", function(){
  /* Destacando o link do menu do sistema referente a esta página */
  const link_portfolio = document.getElementById("link_portfolio");
  link_portfolio.classList.add("destaque");
  
  /* Deixando o catálogo no início após clique em item */
  const div_catalogo = document.getElementById("div_catalogo");
  const itens_do_catalogo = document.getElementsByClassName("item_do_catalogo");
  
  for(let i = 0; i < itens_do_catalogo.length; i++){
    itens_do_catalogo[i].addEventListener("click", function(evento){
      evento.preventDefault();
      
      div_catalogo.scrollTo(0, 0);
      
      const href = itens_do_catalogo[i].getAttribute("href");
      window.location.href = href;
    });
  }
  
  /* Posicionando melhor o catálogo e destacando o item do catálogo */
  const div_cabecalho_do_sistema = document.getElementById("div_cabecalho_do_sistema");
  const projetos = document.getElementsByClassName("projeto");
  
  let backup_da_altura_maxima_do_catalogo = div_catalogo.style.maxHeight;
  
  itens_do_catalogo[0].classList.add("destaque");
  window.addEventListener("scroll", function(){
    var estilo_computado = window.getComputedStyle(div_cabecalho_do_sistema);
    
    let altura_do_cabecalho = 0;
    altura_do_cabecalho += parseInt(estilo_computado.borderTopWidth, 10);
    altura_do_cabecalho += parseInt(estilo_computado.paddingTop, 10);
    altura_do_cabecalho += parseInt(estilo_computado.height, 10);
    altura_do_cabecalho += parseInt(estilo_computado.paddingBottom, 10);
    altura_do_cabecalho += parseInt(estilo_computado.borderBottomWidth, 10);
    
    if(window.scrollY > altura_do_cabecalho){
      setTimeout(function(){
        div_catalogo.style.top = "0px";
        div_catalogo.style.maxHeight = window.innerHeight - 100 + "px";
      }, 1);
    }else{
      setTimeout(function(){
        div_catalogo.style.top = altura_do_cabecalho - window.scrollY + "px";
        div_catalogo.style.maxHeight = backup_da_altura_maxima_do_catalogo;
      }, 1);
    }
    
    let posicao_do_item_que_sera_destacado = 0;
    for(let i = 0; i < projetos.length; i++){
      let posicao_y_do_projeto = projetos[i].getBoundingClientRect().top + window.scrollY;
      
      itens_do_catalogo[i+1].classList.remove("destaque");
      if(posicao_y_do_projeto + 30 > window.scrollY && window.scrollY !== 0
         && posicao_do_item_que_sera_destacado === 0){
        posicao_do_item_que_sera_destacado = i+1;
      }
    }
    itens_do_catalogo[posicao_do_item_que_sera_destacado].classList.add("destaque");
    if(posicao_do_item_que_sera_destacado != 0){
      itens_do_catalogo[0].classList.remove("destaque");
    }else if(window.scrollY !== 0){
      itens_do_catalogo[0].classList.remove("destaque");
    }
  });
  
  /* Comportamento das abas do projeto */
  const rotulos_das_abas = document.getElementsByClassName("rotulo_da_aba");
  
  for(let i = 0; i < rotulos_das_abas.length; i++){
    rotulos_das_abas[i].addEventListener("click", function(evento){
      evento.preventDefault();
      
      const aba_destacada = rotulos_das_abas[i].parentNode.querySelector(".destaque");
      aba_destacada.classList.remove("destaque");
      
      const aba_descricao = rotulos_das_abas[i].parentNode.parentNode.querySelector(".aba_descricao");
      const aba_imagens = rotulos_das_abas[i].parentNode.parentNode.querySelector(".aba_imagens");
      const aba_videos = rotulos_das_abas[i].parentNode.parentNode.querySelector(".aba_videos");
      
      if(rotulos_das_abas[i].classList.contains("rotulo_da_aba_descricao")){
        aba_descricao.classList.remove("tag_oculta");
        aba_imagens.classList.add("tag_oculta");
        aba_videos.classList.add("tag_oculta");
      }else if(rotulos_das_abas[i].classList.contains("rotulo_da_aba_imagens")){
        aba_descricao.classList.add("tag_oculta");
        aba_imagens.classList.remove("tag_oculta");
        aba_videos.classList.add("tag_oculta");
      }else if(rotulos_das_abas[i].classList.contains("rotulo_da_aba_videos")){
        aba_descricao.classList.add("tag_oculta");
        aba_imagens.classList.add("tag_oculta");
        aba_videos.classList.remove("tag_oculta");
      }
      rotulos_das_abas[i].classList.add("destaque");
    });
  }
  
});
