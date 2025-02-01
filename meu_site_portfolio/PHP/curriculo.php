<?php

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch($acao){
  default:
    carregar_pagina();
    break;
}

function carregar_pagina(){
  $html = file_get_contents('../HTML/template.html');

  $titulo_da_pagina = 'Currículo de Rodrigo Diniz da Silva';
  $html = str_replace('{titulo_da_pagina}', $titulo_da_pagina, $html);

  $html_head_especifico = file_get_contents('../HTML/curriculo/head_especifico.html');
  $html = str_replace('<!-- head_especifico -->', $html_head_especifico, $html);

  $visual_escolhido = 'visual_padrao_fundo_claro';
  if(isset($_COOKIE['visual_escolhido'])){
    if($_COOKIE['visual_escolhido'] !== '' and $_COOKIE['visual_escolhido'] !== null){
      $visual_escolhido = htmlspecialchars($_COOKIE['visual_escolhido']);
    }
  }
  $html = str_replace('{visual_escolhido}', $visual_escolhido, $html);
  
  $html_conteudo_da_pagina = file_get_contents('../HTML/curriculo/conteudo_da_pagina.html');
  $html = str_replace('{conteudo_da_pagina}', $html_conteudo_da_pagina, $html);
  
  echo $html;
}
