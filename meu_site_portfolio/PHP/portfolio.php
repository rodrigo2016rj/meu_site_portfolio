<?php

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
switch($acao){
  default:
    carregar_pagina();
    break;
}

function carregar_pagina(){
  $html = file_get_contents('../HTML/template.html');

  $titulo_da_pagina = 'Portfólio de Rodrigo Diniz da Silva';
  $html = str_replace('{titulo_da_pagina}', $titulo_da_pagina, $html);

  $html_head_especifico = file_get_contents('../HTML/portfolio/head_especifico.html');
  $html = str_replace('<!-- head_especifico -->', $html_head_especifico, $html);

  $visual_escolhido = 'visual_padrao_fundo_claro';
  if(isset($_COOKIE['visual_escolhido'])){
    if($_COOKIE['visual_escolhido'] !== '' and $_COOKIE['visual_escolhido'] !== null){
      $visual_escolhido = htmlspecialchars($_COOKIE['visual_escolhido']);
    }
  }
  $html = str_replace('{visual_escolhido}', $visual_escolhido, $html);

  $html_conteudo_da_pagina = file_get_contents('../HTML/portfolio/conteudo_da_pagina.html');

  $array_projetos = array();

  $array_create_test_tabs_firefox = array();
  $array_create_test_tabs_firefox['nome'] = 'Create Test Tabs FireFox';
  $array_create_test_tabs_firefox['identificador'] = 'create_test_tabs_firefox';
  $array_create_test_tabs_firefox['imagem_destaque'] = 'https://i.imgur.com/xLQ0rAS.png';
  $array_create_test_tabs_firefox['descricao'] = 'Este projeto é um addon para navegadores Mozilla 
(FireFox, WaterFox e etc) que permite criar abas com formulários preenchidos, facilitando os testes.
Este addon permite que você registre páginas com formulários do seu projeto, combinações de entradas 
de formulário para cada página e pares de nome e valor para cada combinação. Após registrar uma 
página com uma ou mais combinações de entradas de formulário, você pode clicar no botão "Create Test 
Tabs" e seu navegador criará uma aba para cada combinação. Cada aba aberta no seu navegador dessa 
forma aparecerá com o formulário preenchido com os respectivos pares de nome e valor da combinação. 
Então, basta enviar cada formulário e verificar se o resultado encontrado é o esperado. Este addon 
é recomendado para desenvolvedores que precisam executar os mesmos testes várias vezes em cada 
página de formulário do projeto web que estão desenvolvendo.
<br/>
<br/>
Acesse a página do Create Test Tabs FireFox no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/create_test_tabs_firefox" target="blank">
https://github.com/rodrigo2016rj/create_test_tabs_firefox</a>
<br/>
<br/>
Acesse a página do Create Test Tabs FireFox no Addons Mozilla:
<br/>
<a href="https://addons.mozilla.org/firefox/addon/create-test-tabs/" target="blank">
https://addons.mozilla.org/firefox/addon/create-test-tabs/</a>';
  $array_imagens = array();
  $array_imagens[] = 'https://i.imgur.com/xLQ0rAS.png';
  $array_imagens[] = 'https://i.imgur.com/n1bAocC.png';
  $array_imagens[] = 'https://i.imgur.com/aJrzQNu.png';
  $array_imagens[] = 'https://i.imgur.com/VjwiHnh.png';
  $array_imagens[] = 'https://i.imgur.com/p7oYSPY.png';
  $array_imagens[] = 'https://i.imgur.com/Kh7hox4.png';
  $array_imagens[] = 'https://i.imgur.com/7FwZRfC.png';
  $array_imagens[] = 'https://i.imgur.com/MTwPcTy.png';
  $array_imagens[] = 'https://i.imgur.com/2ekxtKB.png';
  $array_imagens[] = 'https://i.imgur.com/iSLEQ0b.png';
  $array_imagens[] = 'https://i.imgur.com/nVexrkF.png';
  $array_imagens[] = 'https://i.imgur.com/gPN8H8b.png';
  $array_imagens[] = 'https://i.imgur.com/5CVfrjY.png';
  $array_create_test_tabs_firefox['imagens'] = $array_imagens;
  $array_videos = array();
  $array_create_test_tabs_firefox['videos'] = $array_videos;

  $array_projetos[] = $array_create_test_tabs_firefox;

  $array_crud_laravel_bootstrap = array();
  $array_crud_laravel_bootstrap['nome'] = 'CRUD Laravel Bootstrap';
  $array_crud_laravel_bootstrap['identificador'] = 'crud_laravel_bootstrap';
  $array_crud_laravel_bootstrap['imagem_destaque'] = 'https://i.imgur.com/BYzoAss.png';
  $array_crud_laravel_bootstrap['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, 
HTML, CSS e Bootstrap: Formulários de inclusão, formulários de edição, listas paginadas, filtros, 
ordenações, visualização detalhada, exclusão, associação única (radio button), mensagens de aviso, 
popups com formulários, popups de confirmação, validações, máscara para campo de CPF, máscara para 
campo de telefone, seletor de data (calendário), balão de descrição e compatibilidade com telas 
menores (mobile) e maiores. Também utilizei neste projeto: Ajax, GIT, Composer, NPM, Vite, PHPUnit e 
Servidor Apache. Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do CRUD Laravel Bootstrap no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/crud_laravel_bootstrap" target="blank">
https://github.com/rodrigo2016rj/crud_laravel_bootstrap</a>';
  $array_imagens = array();
  $array_imagens[] = 'https://i.imgur.com/BYzoAss.png';
  $array_imagens[] = 'https://i.imgur.com/i6kuSlr.png';
  $array_imagens[] = 'https://i.imgur.com/UoGbJzp.png';
  $array_imagens[] = 'https://i.imgur.com/8y090GL.png';
  $array_imagens[] = 'https://i.imgur.com/73EWbol.png';
  $array_imagens[] = 'https://i.imgur.com/8vWT2Yt.png';
  $array_imagens[] = 'https://i.imgur.com/5pylW7F.png';
  $array_imagens[] = 'https://i.imgur.com/JuMWb3Y.png';
  $array_imagens[] = 'https://i.imgur.com/XbFswOi.png';
  $array_imagens[] = 'https://i.imgur.com/FIKM7oo.png';
  $array_imagens[] = 'https://i.imgur.com/ILBMGdg.png';
  $array_imagens[] = 'https://i.imgur.com/g9qNlv0.png';
  $array_imagens[] = 'https://i.imgur.com/w2d6Akl.png';
  $array_imagens[] = 'https://i.imgur.com/nP7Tds2.png';
  $array_imagens[] = 'https://i.imgur.com/0CRvyvc.png';
  $array_imagens[] = 'https://i.imgur.com/aSnHwBK.png';
  $array_imagens[] = 'https://i.imgur.com/W6O07hX.png';
  $array_imagens[] = 'https://i.imgur.com/9i8XD13.png';
  $array_imagens[] = 'https://i.imgur.com/orlynqN.png';
  $array_imagens[] = 'https://i.imgur.com/1aElHhv.png';
  $array_crud_laravel_bootstrap['imagens'] = $array_imagens;
  $array_videos = array();
  $array_crud_laravel_bootstrap['videos'] = $array_videos;

  $array_projetos[] = $array_crud_laravel_bootstrap;

  $array_crud_laravel_javascript = array();
  $array_crud_laravel_javascript['nome'] = 'CRUD Laravel Javascript';
  $array_crud_laravel_javascript['identificador'] = 'crud_laravel_javascript';
  $array_crud_laravel_javascript['imagem_destaque'] = 'https://i.imgur.com/KoIuwEs.png';
  $array_crud_laravel_javascript['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, 
HTML e CSS: Formulários de inclusão, formulários de edição, listas paginadas, filtros, ordenações, 
visualização detalhada, exclusão, associação única (radio button), mensagens de aviso, popups com 
formulários, popups de confirmação, validações, máscara para campo de CPF, máscara para campo de 
telefone, seletor de data (calendário), balão de descrição e compatibilidade com telas menores 
(mobile) e maiores. Também utilizei neste projeto: Ajax, GIT, Composer, PHPUnit e Servidor Apache. 
Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do CRUD Laravel Javascript no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/crud_laravel_javascript" target="blank">
https://github.com/rodrigo2016rj/crud_laravel_javascript</a>';
  $array_imagens = array();
  $array_crud_laravel_javascript['imagens'] = $array_imagens;
  $array_videos = array();
  $array_crud_laravel_javascript['videos'] = $array_videos;

  $array_projetos[] = $array_crud_laravel_javascript;

  $array_crud_laravel_jquery = array();
  $array_crud_laravel_jquery['nome'] = 'CRUD Laravel jQuery';
  $array_crud_laravel_jquery['identificador'] = 'crud_laravel_jquery';
  $array_crud_laravel_jquery['imagem_destaque'] = 'https://i.imgur.com/3ciVipD.png';
  $array_crud_laravel_jquery['descricao'] = 'Implementei com PHP, Laravel, MySQL, jQuery, HTML e 
CSS: Formulários de inclusão, formulários de edição, listas paginadas, filtros, ordenações, 
visualização detalhada, exclusão, associação única (radio button), mensagens de aviso, popups com 
formulários, popups de confirmação, validações, máscara para campo de CPF, máscara para campo de 
telefone, seletor de data (calendário), balão de descrição e compatibilidade com telas menores 
(mobile) e maiores. Também utilizei neste projeto: Ajax, GIT, Composer, PHPUnit e Servidor Apache. 
Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do CRUD Laravel jQuery no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/crud_laravel_jquery" target="blank">
https://github.com/rodrigo2016rj/crud_laravel_jquery</a>';
  $array_imagens = array();
  $array_crud_laravel_jquery['imagens'] = $array_imagens;
  $array_videos = array();
  $array_crud_laravel_jquery['videos'] = $array_videos;

  $array_projetos[] = $array_crud_laravel_jquery;

  $array_crud_laravel_react = array();
  $array_crud_laravel_react['nome'] = 'CRUD Laravel React';
  $array_crud_laravel_react['identificador'] = 'crud_laravel_react';
  $array_crud_laravel_react['imagem_destaque'] = 'https://i.imgur.com/L1rJerl.png';
  $array_crud_laravel_react['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, React, 
HTML e CSS: Formulários de inclusão, formulários de edição, listas paginadas, filtros, ordenações, 
visualização detalhada, exclusão, associação única (radio button), mensagens de aviso, popups com 
formulários, popups de confirmação, validações, máscara para campo de CPF, máscara para campo de 
telefone, seletor de data (calendário), balão de descrição e compatibilidade com telas menores 
(mobile) e maiores. Também utilizei neste projeto: Ajax, GIT, Composer, PHPUnit e Servidor Apache. 
Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do CRUD Laravel React no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/crud_laravel_react" target="blank">
https://github.com/rodrigo2016rj/crud_laravel_react</a>';
  $array_imagens = array();
  $array_crud_laravel_react['imagens'] = $array_imagens;
  $array_videos = array();
  $array_crud_laravel_react['videos'] = $array_videos;

  $array_projetos[] = $array_crud_laravel_react;

  $array_crud_laravel_vue_inertia = array();
  $array_crud_laravel_vue_inertia['nome'] = 'CRUD Laravel Vue Inertia';
  $array_crud_laravel_vue_inertia['identificador'] = 'crud_laravel_vue_inertia';
  $array_crud_laravel_vue_inertia['imagem_destaque'] = 'https://i.imgur.com/AO1rIuA.png';
  $array_crud_laravel_vue_inertia['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, 
Vue, Inertia, HTML e CSS: Formulários de inclusão, formulários de edição, listas paginadas, filtros, 
ordenações, visualização detalhada, exclusão, associação única (radio button), mensagens de aviso, 
popups com formulários, popups de confirmação, validações, máscara para campo de CPF, máscara para 
campo de telefone, seletor de data (calendário), balão de descrição e compatibilidade com telas 
menores (mobile) e maiores. Também utilizei neste projeto: Ajax, GIT, Composer, NPM, Vite, PHPUnit e 
Servidor Apache. Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do CRUD Laravel Vue Inertia no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/crud_laravel_vue_inertia" target="blank">
https://github.com/rodrigo2016rj/crud_laravel_vue_inertia</a>';
  $array_imagens = array();
  $array_crud_laravel_vue_inertia['imagens'] = $array_imagens;
  $array_videos = array();
  $array_crud_laravel_vue_inertia['videos'] = $array_videos;

  $array_projetos[] = $array_crud_laravel_vue_inertia;

  $array_demonstracao_de_slides_com_code_igniter = array();
  $array_demonstracao_de_slides_com_code_igniter['nome'] = 'Demonstração de Slides com Code Igniter';
  $array_demonstracao_de_slides_com_code_igniter['identificador'] = 'demonstracao_de_slides_com_code_igniter';
  $array_demonstracao_de_slides_com_code_igniter['imagem_destaque'] = 'https://i.imgur.com/xHuv5Tp.png';
  $array_demonstracao_de_slides_com_code_igniter['descricao'] = 'Implementei com PHP, CodeIgniter, 
Smarty, MySQL, HTML e CSS: Slide que fiz com Javascript, slide que fiz com jQuery e slide que fiz 
com React. Cada slide possui: Movimento automático, botão para parar movimento automático, botão 
para iniciar movimento automático, botão para mostrar próximo item do slide (seta para direita), 
botão para mostrar item anterior do slide (seta para esquerda), marcadores do slide para mostrar um 
item específico do slide (também servem para indicar qual item está sendo exibido atualmente), lista 
de subitens que aparecem conforme o usuário muda o item do slide e link para a página do item. 
Também implementei a página do item com lista paginada de subitens e a página do subitem. Também 
utilizei neste projeto: GIT e Servidor Apache. Testei este projeto em várias versões do PHP, sendo a 
última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do Demonstração de Slides com Code Igniter no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/demonstracao_de_slides_com_code_igniter" target="blank">
https://github.com/rodrigo2016rj/demonstracao_de_slides_com_code_igniter</a>';
  $array_imagens = array();
  $array_demonstracao_de_slides_com_code_igniter['imagens'] = $array_imagens;
  $array_videos = array();
  $array_demonstracao_de_slides_com_code_igniter['videos'] = $array_videos;

  $array_projetos[] = $array_demonstracao_de_slides_com_code_igniter;

  $array_desafio_da_construp = array();
  $array_desafio_da_construp['nome'] = 'Desafio da Construp';
  $array_desafio_da_construp['identificador'] = 'desafio_da_construp';
  $array_desafio_da_construp['imagem_destaque'] = 'https://i.imgur.com/vnCVfZg.png';
  $array_desafio_da_construp['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, HTML e 
CSS, uma tabela (tag table) paginada que mostra materiais de construção com as seguintes 
informações: momento do cadastrado, nome, descrição, marca, valor e opções. Implementei para que a 
tabela possa ser filtrada pelo nome do material, pela descrição do material, pelo nome da marca do 
material, pelo valor do material (comparando com um valor mínimo ou com um valor máximo) e pelo 
momento de cadastro do material (comparando com uma data mínima ou com uma data limite). Implementei 
para que a tabela possa ser ordenada pelas seguintes informações: nome do material, descrição, nome 
da marca, valor e momento do cadastro. Também implementei neste projeto: seletor de data 
(calendário), botões para limpar formulários, popup com formulário de cadastro do material, 
mensagens de validação, mensagens de sucesso, abreviação de descrição, popup com a descrição 
completa do material, popup com formulário para editar o material, popup para excluir o material e 
compatibilidade com mobile. Também utilizei neste projeto: Ajax, GIT, Composer e Servidor Apache. 
Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.1.2.
<br/>
<br/>
Acesse a página do Desafio da Construp no GitLab:
<br/>
<a href="https://gitlab.com/rodrigo2016rj/desafio_da_construp" target="blank">
https://gitlab.com/rodrigo2016rj/desafio_da_construp</a>';
  $array_imagens = array();
  $array_desafio_da_construp['imagens'] = $array_imagens;
  $array_videos = array();
  $array_desafio_da_construp['videos'] = $array_videos;

  $array_projetos[] = $array_desafio_da_construp;

  $array_login_codeigniter_jquery = array();
  $array_login_codeigniter_jquery['nome'] = 'Login CodeIgniter jQuery';
  $array_login_codeigniter_jquery['identificador'] = 'login_codeigniter_jquery';
  $array_login_codeigniter_jquery['imagem_destaque'] = 'https://i.imgur.com/oMtpYWu.png';
  $array_login_codeigniter_jquery['descricao'] = 'Implementei com PHP, CodeIgniter, Smarty, MySQL, 
jQuery, HTML e CSS: Formulário de cadastro com confirmação via e-mail, formulário de login, tabela 
de usuários com navegação contínua (com link para carregar mais registros), formulário de busca com 
opção para alterar a quantidade de registros que a tabela mostra por vez, colunas ordenáveis, página 
de configurações com abas, possibilidade de salvar cada configuração individualmente por meio de 
requisições ajax, configuração de fuso horário para o usuário poder ver as datas e horas que o 
sistema exibe conforme o fuso horário escolhido, dois temas visuais (Tema Inicial e Tema 
Sofisticado), compatibilidade com telas menores (mobile) e maiores para ambos os temas, níveis de 
permissão que atuam em diversas páginas do sistema (definem que algumas informações e opções sejam 
permitidas apenas para determinados tipos de usuário), página de perfil, página para alterar o tipo 
de usuário de um usuário, validações e mensagens. Também utilizei neste projeto: Ajax, GIT e 
Servidor Apache. Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do Login CodeIgniter jQuery no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/login_codeigniter_jquery" target="blank">
https://github.com/rodrigo2016rj/login_codeigniter_jquery</a>';
  $array_imagens = array();
  $array_login_codeigniter_jquery['imagens'] = $array_imagens;
  $array_videos = array();
  $array_login_codeigniter_jquery['videos'] = $array_videos;

  $array_projetos[] = $array_login_codeigniter_jquery;

  $array_login_laravel_pdo_vue_inertia = array();
  $array_login_laravel_pdo_vue_inertia['nome'] = 'Login Laravel PDO Vue Inertia';
  $array_login_laravel_pdo_vue_inertia['identificador'] = 'login_laravel_pdo_vue_inertia';
  $array_login_laravel_pdo_vue_inertia['imagem_destaque'] = 'https://i.imgur.com/JiNAi9L.png';
  $array_login_laravel_pdo_vue_inertia['descricao'] = 'Implementei com PHP, Laravel, PDO, MySQL, 
Javascript, Vue, Inertia, HTML e CSS: Formulário de cadastro, formulário de login, tabela de 
usuários com navegação contínua (com link para carregar mais registros), formulário de busca com 
opção para alterar a quantidade de registros que a tabela mostra por vez, colunas ordenáveis, página 
de configurações com abas, possibilidade de salvar cada configuração individualmente por meio de 
requisições ajax, configuração de fuso horário para o usuário poder ver as datas e horas que o 
sistema exibe conforme o fuso horário escolhido, dois temas visuais (Tema Inicial e Tema 
Sofisticado), compatibilidade com telas menores (mobile) e maiores para ambos os temas, níveis de 
permissão que atuam em diversas páginas do sistema (definem que algumas informações e opções sejam 
permitidas apenas para determinados tipos de usuário), página de perfil, página para alterar o tipo 
de usuário de um usuário, validações e mensagens. Também utilizei neste projeto: Ajax, GIT, 
Composer, NPM, Vite e Servidor Apache. Testei este projeto em várias versões do PHP, sendo a última 
vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do Login Laravel PDO Vue Inertia no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/login_laravel_pdo_vue_inertia" target="blank">
https://github.com/rodrigo2016rj/login_laravel_pdo_vue_inertia</a>';
  $array_imagens = array();
  $array_login_laravel_pdo_vue_inertia['imagens'] = $array_imagens;
  $array_videos = array();
  $array_login_laravel_pdo_vue_inertia['videos'] = $array_videos;

  $array_projetos[] = $array_login_laravel_pdo_vue_inertia;

  $array_servicos_laravel_vue_inertia = array();
  $array_servicos_laravel_vue_inertia['nome'] = 'Serviços Laravel Vue Inertia';
  $array_servicos_laravel_vue_inertia['identificador'] = 'servicos_laravel_vue_inertia';
  $array_servicos_laravel_vue_inertia['imagem_destaque'] = 'https://i.imgur.com/fHHVhek.png';
  $array_servicos_laravel_vue_inertia['descricao'] = 'Implementei com PHP, Laravel, MySQL, 
Javascript, Vue, Inertia, HTML e CSS: Um sistema que consome serviços web de outros sistemas. 
Implementei neste sistema: Um menu lateral com grupos de links; A Página Inicial com texto que 
descreve o sistema, instruções para a configuração do arquivo .env (.env.example que deve ser 
renomeado para .env) e possibilidade de expandir ou encolher cada instrução; A página Publicar 
Imagem com formulário de envio de imagem, validações, mensagens, consumo do serviço do Imgur para 
publicar a imagem e lista paginada das imagens publicadas compatível com diferentes larguras de tela 
ou janela; A página Login com Facebook com mensagens, status que indica se a conta de Facebook da 
pessoa está ou não conectada ao sistema, botão conectar que mostra um formulário de login do próprio 
Facebook para que a pessoa possa conectar sua conta de Facebook, possibilidade da pessoa conectar 
novamente (caso queira conectar outra conta), botão desconectar que realiza o logout do Facebook, 
popup com aviso indicando sucesso ou falha de cada ação e um exemplo de funcionalidade que necessita 
de autenticação. Também utilizei neste projeto: Ajax, GIT, Composer, GuzzleHttp, NPM, Vite e 
Servidor Apache. Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.3.1.
<br/>
<br/>
Acesse a página do Serviços Laravel Vue Inertia no GitHub:
<br/>
<a href="https://github.com/rodrigo2016rj/servicos_laravel_vue_inertia" target="blank">
https://github.com/rodrigo2016rj/servicos_laravel_vue_inertia</a>';
  $array_imagens = array();
  $array_servicos_laravel_vue_inertia['imagens'] = $array_imagens;
  $array_videos = array();
  $array_servicos_laravel_vue_inertia['videos'] = $array_videos;

  $array_projetos[] = $array_servicos_laravel_vue_inertia;

  $array_teste_da_clinica_experts = array();
  $array_teste_da_clinica_experts['nome'] = 'Teste da Clínica Experts';
  $array_teste_da_clinica_experts['identificador'] = 'teste_da_clinica_experts';
  $array_teste_da_clinica_experts['imagem_destaque'] = 'https://i.imgur.com/e9Ueqfd.png';
  $array_teste_da_clinica_experts['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, 
Vue, Inertia, HTML e CSS um sistema encurtador de links que: Exibe um formulário com os campos url e 
identificador, valida a url e o identificador (quando enviado pelo usuário), gera um identificador 
quando o usuário não envia um, verifica disponibilidade de identificador, cria uma url curta com o 
identificador, armazena informações no banco de dados que permitem encontrar a url original por meio 
da url curta e do identificador, exibe mensagens de validação, exibe a url curta, permite copiar a 
url curta por meio de um botão, permite acessar a url por meio de um botão, redireciona a url curta 
para a url original, armazena no banco de dados informações relacionadas à requisição de 
redirecionamento feita pelo usuário, contabiliza a quantidade de acessos, lista de forma paginada 
os links, permite filtrar a lista de links, permite ordenar a lista de links, permite editar e 
excluir cada link, e uma função agendada que zera a quantidade de acessos dos links no primeiro dia 
do mês às 00h00 do horário de Brasília. Implementei também a compatibilidade com telas menores 
(mobile) e maiores. Também utilizei neste projeto: Ajax, Axios, GIT, Composer, NPM, Vite e Servidor 
Apache. Testei este projeto em várias versões do PHP, sendo a última vez na versão 8.2.4.
<br/>
<br/>
Acesse a página do Teste da Clínica Experts no GitLab:
<br/>
<a href="https://gitlab.com/rodrigo2016rj/teste_da_clinica_experts" target="blank">
https://gitlab.com/rodrigo2016rj/teste_da_clinica_experts</a>';
  $array_imagens = array();
  $array_teste_da_clinica_experts['imagens'] = $array_imagens;
  $array_videos = array();
  $array_teste_da_clinica_experts['videos'] = $array_videos;

  $array_projetos[] = $array_teste_da_clinica_experts;

  $array_teste_da_proconsult = array();
  $array_teste_da_proconsult['nome'] = 'Teste da Proconsult';
  $array_teste_da_proconsult['identificador'] = 'teste_da_proconsult';
  $array_teste_da_proconsult['imagem_destaque'] = 'https://i.imgur.com/YKrkOwg.png';
  $array_teste_da_proconsult['descricao'] = 'Implementei com PHP, Laravel, MySQL, Javascript, Vue, 
Inertia, HTML e CSS um sistema que possui: Página inicial com informações sobre o sistema; Página de 
cadastro com validações, mensagens e máscara para o campo CPF; Formulário de login exibido em um 
popup com validações e mensagens; Menu no topo que mostra os links conforme o usuário está ou não 
autenticado; Página de usuários com campos de filtros, possibilidade de escolher a quantidade de 
usuários por página, tabela de usuários paginada e com colunas ordenáveis, e opção para mudar o tipo 
de usuário mais novo com validações e mensagens; Página de chamados com validações, mensagens, 
formulário para abertura de novo chamado, lista paginada de chamados com as informações dos 
chamados, filtros, opções para ordenar a lista e restrição que impede que um cliente veja chamados 
de outros clientes; Página do chamado com validações, mensagens, informações do chamado, links com 
os anexos (se houver), lista de respostas e seus respectivos anexos (se houverem), formulário para 
enviar resposta com opção para colocar anexos e opção para finalizar o chamado que insere uma 
resposta automática e modifica o status do chamado para finalizado. Implementei também a 
compatibilidade com telas menores (mobile) e maiores. Também utilizei neste projeto: Ajax, Axios, 
GIT, Composer, NPM, Mix e Servidor Apache. Fiz e testei este projeto na versão 7.3.9 do PHP para 
atender um requisito do teste da empresa.
<br/>
<br/>
Acesse a página do Teste da Proconsult no GitLab:
<br/>
<a href="https://gitlab.com/rodrigo2016rj/teste_da_proconsult" target="blank">
https://gitlab.com/rodrigo2016rj/teste_da_proconsult</a>';
  $array_imagens = array();
  $array_teste_da_proconsult['imagens'] = $array_imagens;
  $array_videos = array();
  $array_teste_da_proconsult['videos'] = $array_videos;

  $array_projetos[] = $array_teste_da_proconsult;

  $html_itens_do_catalogo = '';
  $html_projetos = '';
  foreach($array_projetos as $array_projeto){
    $html_item_do_catalogo = file_get_contents('../HTML/portfolio/item_do_catalogo.html');
    $html_item_do_catalogo = str_replace('{identificador_do_projeto}', $array_projeto['identificador'], $html_item_do_catalogo);
    $html_item_do_catalogo = str_replace('{nome_do_projeto}', $array_projeto['nome'], $html_item_do_catalogo);
    $html_itens_do_catalogo .= $html_item_do_catalogo;

    $html_projeto = file_get_contents('../HTML/portfolio/projeto.html');

    $html_imagens_do_projeto = '';
    $contador = 0;
    foreach($array_projeto['imagens'] as $imagem){
      $contador++;

      $html_imagem_do_projeto = file_get_contents('../HTML/portfolio/imagem_do_projeto.html');
      $html_imagem_do_projeto = "<td>$html_imagem_do_projeto</td>";
      $resto_da_divisao = $contador % 3;
      if($resto_da_divisao === 1){
        $html_imagem_do_projeto = "<tr>$html_imagem_do_projeto";
      }
      if($resto_da_divisao === 0){
        $html_imagem_do_projeto = "$html_imagem_do_projeto</tr>";
      }
      if($contador === 1){
        $html_imagem_do_projeto = "<table><tbody>$html_imagem_do_projeto";
      }
      if($contador === count($array_projeto['imagens'])){
        switch($resto_da_divisao){
          case 1:
            $html_imagem_do_projeto = "$html_imagem_do_projeto<td><div class=\"celula_vazia\"></div></td>";
          case 2:
            $html_imagem_do_projeto = "$html_imagem_do_projeto<td><div class=\"celula_vazia\"></div></td></tr>";
          default:
            $html_imagem_do_projeto = "$html_imagem_do_projeto</tbody></table>";
        }
      }
      $html_imagem_do_projeto = str_replace('{imagem}', $imagem, $html_imagem_do_projeto);

      $html_imagens_do_projeto .= $html_imagem_do_projeto;
    }
    if($html_imagens_do_projeto === ''){
      $html_imagens_do_projeto = '<span>Em breve</span>';
    }
    $html_projeto = str_replace('{imagens_do_projeto}', $html_imagens_do_projeto, $html_projeto);

    $html_videos_do_projeto = '';
    foreach($array_projeto['videos'] as $video){
      $html_video_do_projeto = file_get_contents('../HTML/portfolio/video_do_projeto.html');
      $html_video_do_projeto = str_replace('{video}', $video, $html_video_do_projeto);
      $html_videos_do_projeto .= $html_video_do_projeto;
    }
    if($html_videos_do_projeto === ''){
      $html_videos_do_projeto = '<span>Em breve</span>';
    }
    $html_projeto = str_replace('{videos_do_projeto}', $html_videos_do_projeto, $html_projeto);

    $html_projeto = str_replace('{identificador_do_projeto}', $array_projeto['identificador'], $html_projeto);
    $html_projeto = str_replace('{nome_do_projeto}', $array_projeto['nome'], $html_projeto);
    $html_projeto = str_replace('{imagem_destaque_do_projeto}', $array_projeto['imagem_destaque'], $html_projeto);
    $html_projeto = str_replace('{descricao_do_projeto}', $array_projeto['descricao'], $html_projeto);

    $html_projetos .= $html_projeto;
  }
  $html_conteudo_da_pagina = str_replace('{itens_do_catalogo}', $html_itens_do_catalogo, $html_conteudo_da_pagina);
  $html_conteudo_da_pagina = str_replace('{projetos}', $html_projetos, $html_conteudo_da_pagina);

  $html = str_replace('{conteudo_da_pagina}', $html_conteudo_da_pagina, $html);

  echo $html;
}
