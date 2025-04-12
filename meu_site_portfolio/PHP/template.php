<?php

define('HTTP_OU_HTTPS', 'http://');
define('DOMINIO_DO_SITE', 'localhost');

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch($acao){
  case 'escolher_visual_via_ajax':
    escolher_visual_via_ajax();
    break;
}

function escolher_visual_via_ajax(){
  $post = file_get_contents('php://input');
  $post = json_decode($post, true);

  $visual = 'visual_padrao_fundo_claro';
  if(isset($post['visual'])){
    switch($post['visual']){
      case 'visual_padrao_fundo_claro':
      case 'visual_padrao_fundo_escuro':
        $visual = $post['visual'];
        break;
    }
  }

  $cem_anos = time() + 60 * 60 * 24 * 365 * 100;

  $retorno['nome_do_cookie'] = 'visual_escolhido';
  $retorno['valor_do_cookie'] = $visual;
  $retorno['vencimento_do_cookie'] = $cem_anos;
  $retorno['caminho_do_cookie'] = '/';
  $retorno['dominio_do_cookie'] = DOMINIO_DO_SITE;
  $retorno['restricao_do_cookie'] = 'Strict';

  echo json_encode($retorno);
  die;
}
