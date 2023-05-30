-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10-Abr-2023 às 15:36
-- Versão do servidor: 8.0.32-0ubuntu0.22.04.2
-- versão do PHP: 8.1.2-1ubuntu2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `abravir`
--

--
-- Extraindo dados da tabela `textos`
--

INSERT IGNORE INTO `textos` (`id`, `nome`, `valor`, `tipo`, `ordem`, `created_at`, `updated_at`) VALUES
(1, 'titulo_site', '<p>N&atilde;o sou mais a Associa&ccedil;&atilde;o de Brasileiros de Vila Real</p>', 'string', 0, NULL, '2023-03-21 11:09:12'),
(2, 'texto_inicial', '<p>Bem vindo a ABRAVIR</p>', 'string', 0, '2023-02-08 15:50:09', '2023-04-10 12:12:09'),
(3, 'descricao_inicial', '<p>Somos a Associa&ccedil;&atilde;o de Brasileiros do Distrito&nbsp;de Vila Real, juridicamente composta que objetiva representar a comunidade brasileira e promover a&ccedil;&otilde;es de integra&ccedil;&atilde;o em todas as &aacute;reas.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>', 'string', 0, '2023-02-08 16:04:29', '2023-03-17 10:10:36'),
(4, 'Home', '/', 'menu', 0, '2023-02-08 16:25:15', '2023-02-08 16:27:54'),
(5, 'Quem somos', '/sobre', 'menu', 1, '2023-02-08 16:29:30', '2023-03-17 10:29:58'),
(6, 'Parceiros', '/parceiros', 'menu', 2, '2023-02-08 16:29:43', '2023-02-08 16:41:07'),
(7, 'Notícias', '/noticias', 'menu', 3, '2023-02-08 16:29:56', '2023-03-08 15:58:08'),
(8, 'Associe-se', '/associar', 'menu', 4, '2023-02-08 16:30:26', '2023-02-08 16:33:06'),
(9, 'Momentos Especiais', '/momentos', 'menu', 5, '2023-02-08 16:33:35', '2023-03-17 10:30:25'),
(10, 'text_parceiros', 'Nossos Parceiros', 'string', 0, '2023-02-10 11:01:52', '2023-02-10 11:01:52'),
(11, 'descricao_parceiros', NULL, 'string', 0, '2023-02-10 13:45:18', '2023-03-17 10:22:27'),
(12, 'botao_ver_parceiros', 'Ver todos parceiros', 'string', 0, '2023-02-13 09:52:49', '2023-02-13 09:52:49'),
(13, 'texto_footer', '<p>Juntos podemos fazer mais&nbsp;por muitos.</p>\r\n\r\n<p>ABRAVIR somos todos n&oacute;s!</p>', 'string', 0, '2023-02-13 10:14:07', '2023-03-17 14:55:55'),
(14, 'nome_site', 'ABRAVIR', 'string', 0, '2023-02-13 10:17:22', '2023-02-13 10:17:22'),
(15, 'texto_siganos', 'Nossas redes sociais', 'string', 0, '2023-02-13 10:18:01', '2023-02-13 10:18:34'),
(16, 'texto_paginas', 'Páginas', 'string', 0, '2023-02-13 10:19:09', '2023-02-13 10:19:09'),
(17, 'text_sobre', 'Sobre nós', 'string', 0, '2023-02-13 10:22:35', '2023-02-13 10:22:35'),
(18, 'descricao_inicial_sobre', '<p>ABRAVIR &eacute; a Associa&ccedil;&atilde;o de Brasileiros do Distrito de Vila Real. Fundada em 29 de setembro de 2022, sem fins lucrativos. Desenvolve a&ccedil;&otilde;es nas &aacute;reas social, educacional, jur&iacute;dica, cont&aacute;bil e outras que dizem respeito ao desenvolvimento da comunidade Brasileira em Vila Real, bem como do pr&oacute;prio Distrito.</p>', 'string', 0, '2023-02-13 10:23:26', '2023-03-17 10:14:12'),
(21, 'texto_endereco', '<p>Endere&ccedil;o</p>', 'string', 0, '2023-02-14 16:02:22', '2023-02-14 16:02:22'),
(22, 'texto_fale_conosco', '<p>Fale Conosco</p>', 'string', 0, '2023-02-14 16:06:53', '2023-02-14 16:06:53'),
(23, 'endereco', '<p>Rua da ABRAVIR, 3</p>', 'string', 0, '2023-02-14 17:14:28', '2023-02-14 17:14:28'),
(24, 'fale_conosco', '<p>Deixe-nos uma mensagem que em breve responderemos</p>', 'string', 0, '2023-02-14 17:17:34', '2023-02-14 17:17:34'),
(25, 'enviar', '<p>Enviar</p>', 'string', 0, '2023-02-14 17:18:51', '2023-02-14 17:18:51'),
(27, 'texto_email_cliente', '<p>Ficamos muito felizes por recebermos o seu contato manifestando a inten&ccedil;&atilde;o de fazer parte de nossa associa&ccedil;&atilde;o, gozando de benef&iacute;cios e fortalecendo nossa comunidade.</p>\r\n\r\n<p>Para que nossa rela&ccedil;&atilde;o siga de forma tranquila e com o m&aacute;ximo de transpar&ecirc;ncia, achamos por bem lhe enviar este email pr&eacute;vio, com os esclarecimentos gerais sobre quem somos e como objetivamos atuar enquanto associa&ccedil;&atilde;o.</p>\r\n\r\n<p>Agora preciso que leia com bastante aten&ccedil;&atilde;o ao que segue:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>O que &eacute; a ABRAVIR?</p>\r\n\r\n<p>ABRAVIR &eacute; a Associa&ccedil;&atilde;o de Brasileiros do Distrito de Vila Real.</p>\r\n\r\n<p>Foi criada em 29 de setembro de 2022, de personalidade jur&iacute;dica, sem fins lucrativos e tem como objetivos principais previstos em Estatuto:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>a) A dinamiza&ccedil;&atilde;o do apoio moral, social e jur&iacute;dico aos imigrantes brasileiros e de outras nacionalidades, visando a salvaguarda da reciprocidade dos direitos, reconhecidos internacionalmente;</p>\r\n\r\n<p>b) A promo&ccedil;&atilde;o de a&ccedil;&otilde;es de preserva&ccedil;&atilde;o dos valores da identidade brasileira em Portugal;</p>\r\n\r\n<p>c) A realiza&ccedil;&atilde;o de eventos s&oacute;cio-culturais, tais como a&ccedil;&otilde;es de forma&ccedil;&atilde;o, confer&ecirc;ncias, palestras, semin&aacute;rios, feiras, workshops.</p>\r\n\r\n<p>d) A realiza&ccedil;&atilde;o de atividades recreativas, desportivas e gastron&ocirc;micas, apresenta&ccedil;&atilde;o de espet&aacute;culos e comemora&ccedil;&otilde;es;</p>\r\n\r\n<p>e) Apoio moral e social &agrave; comunidade brasileira, visando uma conviv&ecirc;ncia fraterna e uma maior integra&ccedil;&atilde;o social e comunit&aacute;ria entre brasileiros, portugueses e cidad&atilde;os de outras nacionalidades;</p>\r\n\r\n<p>f) Estabelecer rela&ccedil;&otilde;es de interc&acirc;mbio e solidariedade com institui&ccedil;&otilde;es cong&ecirc;neres, bem como participar de atos de solidariedade diversos, que sejam de car&aacute;ter fechado ou p&uacute;blico;</p>\r\n\r\n<p>g) A veicula&ccedil;&atilde;o de publicidade nos seus espa&ccedil;os, materiais de divulga&ccedil;&atilde;o, a edi&ccedil;&atilde;o e venda de publica&ccedil;&otilde;es, bem como a presta&ccedil;&atilde;o de servi&ccedil;os associados ao seu objeto.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Quem pode se associar a ABRAVIR? Podem se associar todas as pessoas singulares brasileiras, portuguesas e de outras nacionalidades que reconhe&ccedil;am e se identifiquem com a identidade cultural e as realidades dos povos do Brasil e de Portugal.</p>\r\n\r\n<p>Quais as vantagens de ser associado ABRAVIR? Al&eacute;m dos direitos previstos em Estatuto, ao se associar a pessoa passa a gozar de todos os benef&iacute;cios oriundos das a&ccedil;&otilde;es e das diversas parcerias estabelecidas na &aacute;rea jur&iacute;dica, educacional/forma&ccedil;&otilde;es, cont&aacute;bil, m&eacute;dica/odontol&oacute;gica/psicol&oacute;gica, hoteleira, beleza e est&eacute;tica, restaura&ccedil;&atilde;o e outras parcerias que est&atilde;o sendo firmadas, podendo receber alguns servi&ccedil;os de forma gratuita ou com descontos muito especiais. A ABRAVIR tamb&eacute;m objetiva realizar atividades culturais interativas, tais como Encontros, como o Encontro de Brasileiros de Vila Real, que j&aacute; vem sendo realizado informalmente, Encontro de Mulheres, Caminhadas, Palestras, Semin&aacute;rios, Forma&ccedil;&otilde;es, Atividades por videoconfer&ecirc;ncia como Lives Explicativas e outros. Vale destacar que o associado conta com o nosso apoio em todas as situa&ccedil;&otilde;es que se fa&ccedil;am necess&aacute;rias e poss&iacute;veis, sempre dentro dos crit&eacute;rios previstos na legisla&ccedil;&atilde;o que rege a vida dos imigrantes, bem como em comum acordo com os &oacute;rg&atilde;os de controle do pais, como SEF, Seguran&ccedil;a Social, Finan&ccedil;as.</p>\r\n\r\n<p>Quanto preciso pagar para me associar a ABRAVIR?</p>\r\n\r\n<p>Cada associado paga uma taxa (joia) de admiss&atilde;o, anual, seguem valor das Taxas:</p>\r\n\r\n<p>Socio: 12 euros;</p>\r\n\r\n<p>Dependentes maiores de 18 anos: 12 euros</p>\r\n\r\n<p>Dependentes menores de 18 anos: 5 euros</p>\r\n\r\n<p>Ser&aacute; uma grande alegria poder contar com voc&ecirc; para o fortalecimento de nossa comunidade, te ajudar no que pudermos e estreitar os la&ccedil;os que nos unem enquanto brasileiros que somos.</p>\r\n\r\n<p>Estamos a disposi&ccedil;&atilde;o para esclarecer quaisquer d&uacute;vidas e, caso continue com o desejo de se associar, por entender a import&acirc;ncia de estarmos juntos enquanto comunidade, juridicamente representados, por favor, responda positivamente a este email.</p>\r\n\r\n<p>Ficamos no aguardo, lembrando que juntos somos ainda mais fortes e podemos ir mais longe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Um forte abra&ccedil;o!!!</p>\r\n\r\n<p>&nbsp;</p>', 'string', 0, '2023-02-16 15:04:58', '2023-02-16 15:24:54'),
(28, 'assinatura', '<p>V&acirc;nia Holanda - Presidente</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nossos Contatos:</p>\r\n\r\n<p>Dire&ccedil;&atilde;o: (+351) 962.713.924</p>\r\n\r\n<p>Ass.Social: (351) 910.640.924</p>\r\n\r\n<p>email: diretoriaabravir@gmail.com</p>\r\n\r\n<p>Instagram: @abra.vir</p>', 'string', 0, '2023-02-16 15:07:51', '2023-02-16 15:07:51'),
(29, 'video_inicial', '<p>Hfuk58tUqX8</p>', 'string', 0, '2023-02-20 11:10:15', '2023-02-20 11:18:33'),
(30, 'texto_pessoas', '<p>Nossa Equipe!</p>', 'string', 0, '2023-02-28 14:41:35', '2023-03-17 10:19:33'),
(31, 'texto_sobre_pessoal', '<p>Aqui est&atilde;o as pessoas que fazem parte diretamente da ABRAVIR, compondo a Diretoria.</p>', 'string', 0, '2023-02-28 17:58:05', '2023-03-17 10:20:21'),
(32, 'text_noticias_home', '<p>&Uacute;ltimas Not&iacute;cias</p>', 'string', 0, '2023-03-08 16:05:26', '2023-03-08 16:05:26'),
(33, 'texto_home_noticias', NULL, 'string', 0, '2023-03-08 16:08:24', '2023-03-17 10:15:32'),
(34, 'botao_ver_noticias', '<p>Ver todas as not&iacute;cias</p>', 'string', 0, '2023-03-08 16:10:26', '2023-03-08 16:10:26'),
(35, 'text_noticias', '<p>Not&iacute;cias</p>', 'string', 0, '2023-03-08 16:36:04', '2023-03-08 16:36:04'),
(36, 'cadastro_sucesso', '<p>Solicita&ccedil;&atilde;o de associado cadastrado com sucesso, abra seu e-mail para visualizar os proximos passos, fa&ccedil;a o pagamento da inscri&ccedil;&atilde;o&nbsp;e aguarde a libera&ccedil;&atilde;o do seu cadastro. Prazo em torno de 10 dias para libera&ccedil;&atilde;o.</p>\r\n\r\n<p>Obrigada</p>\r\n\r\n<p>ABRAVIR</p>', 'string', 0, '2023-03-17 14:50:31', '2023-03-17 14:50:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
