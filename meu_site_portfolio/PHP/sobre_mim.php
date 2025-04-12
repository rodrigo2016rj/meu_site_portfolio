<?php

require_once 'template.php';

define('CAMINHO_DESTE_ARQUIVO', '/meu_site_portfolio/sobre_mim.php');

if(getallheaders()['Sec-Fetch-Site'] != 'same-origin'){
  $html = file_get_contents('../HTML/nova_requisicao.html');

  $endereco = HTTP_OU_HTTPS.DOMINIO_DO_SITE.CAMINHO_DESTE_ARQUIVO;
  $html = str_replace('{endereco}', $endereco, $html);

  echo $html;
  die;
}

if(strlen($_SERVER['REQUEST_URI']) > 33 and substr($_SERVER['REQUEST_URI'], 33, 1) !== '?'){
  header('Location: '.CAMINHO_DESTE_ARQUIVO);
  die;
}

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch($acao){
  default:
    carregar_pagina();
    break;
}

function carregar_pagina(){
  $html = file_get_contents('../HTML/template.html');

  $titulo_da_pagina = 'Sobre Rodrigo Diniz da Silva';
  $html = str_replace('{titulo_da_pagina}', $titulo_da_pagina, $html);

  $html_head_especifico = file_get_contents('../HTML/sobre_mim/head_especifico.html');
  $html = str_replace('<!-- head_especifico -->', $html_head_especifico, $html);

  $visual_escolhido = 'visual_padrao_fundo_claro';
  if(isset($_COOKIE['visual_escolhido'])){
    switch($_COOKIE['visual_escolhido']){
      case 'visual_padrao_fundo_claro':
      case 'visual_padrao_fundo_escuro':
        $visual_escolhido = $_COOKIE['visual_escolhido'];
        break;
    }
  }
  $html = str_replace('{visual_escolhido}', $visual_escolhido, $html);

  $html_conteudo_da_pagina = file_get_contents('../HTML/sobre_mim/conteudo_da_pagina.html');

  $fuso_horario_de_brasilia = new DateTimeZone('America/Sao_Paulo');
  $momento_atual = new DateTime('now', $fuso_horario_de_brasilia);
  $data_do_meu_nascimento = new DateTime('1991-09-03 00:00:00', $fuso_horario_de_brasilia);
  $tempo_decorrido = date_diff($data_do_meu_nascimento, $momento_atual);
  $idade = $tempo_decorrido->y;
  $html_conteudo_da_pagina = str_replace('{idade}', $idade, $html_conteudo_da_pagina);

  $html = str_replace('{conteudo_da_pagina}', $html_conteudo_da_pagina, $html);

  echo $html;
  die;
}
