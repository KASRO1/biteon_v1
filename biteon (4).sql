-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2023 г., 22:56
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `biteon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_trade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `futures_trade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `withdraw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `status`, `token`, `spot_trade`, `futures_trade`, `withdraw`) VALUES
(9, 18, 'true', 'f3da1f4ba9ab586990dfb26548c94003e91d64d8dc8f960184ab4fa9e1daf897', 'false', 'false', 'false'),
(10, 18, 'true', 'd879058736bee4c85d65ead897a7df8d00783b5ff0fce1c9e08dcd3a43f780ee', 'true', 'true', 'true');

-- --------------------------------------------------------

--
-- Структура таблицы `balances`
--

CREATE TABLE `balances` (
  `user_id` int(11) NOT NULL,
  `id_coin` int(11) NOT NULL,
  `quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `balances`
--

INSERT INTO `balances` (`user_id`, `id_coin`, `quantity`) VALUES
(18, 190, 0.2),
(18, 191, 45),
(18, 192, 201.12),
(18, 193, 747.11111111111),
(18, 195, 0.0045034902049088),
(19, 189, 0.28),
(19, 190, 3.5990873438206),
(19, 192, 15245.46),
(19, 198, 14.274952646816);

-- --------------------------------------------------------

--
-- Структура таблицы `bindings_users`
--

CREATE TABLE `bindings_users` (
  `id` int(11) NOT NULL,
  `user_id_worker` int(11) NOT NULL,
  `user_id_mamont` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chats`
--

INSERT INTO `chats` (`chat_id`, `user_1`, `date`) VALUES
(139473, 19, '2023-11-11'),
(181900, 21, '2023-11-11');

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `type_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `codes`
--

INSERT INTO `codes` (`id`, `type_code`, `user_id`, `code`, `date`) VALUES
(6, 'reset_password', 19, 881610, '2023-10-29'),
(7, 'reset_password', 19, 190626, '2023-10-29');

-- --------------------------------------------------------

--
-- Структура таблицы `coins`
--

CREATE TABLE `coins` (
  `id_coin` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `simple_name` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coins`
--

INSERT INTO `coins` (`id_coin`, `full_name`, `simple_name`) VALUES
(189, 'Bitcoin', 'BTC'),
(190, 'Ethereum', 'ETH'),
(191, 'Litecoin', 'LTC'),
(192, 'Tether', 'USDT'),
(193, 'Tron', 'TRX'),
(194, 'USD Coin', 'USDC'),
(195, 'Binance Coin', 'BNB'),
(196, 'Bitcoin Cash', 'BCH'),
(197, 'Dogecoin', 'DOGE'),
(198, 'Monero', 'XMR'),
(199, 'Stellar', 'XLM'),
(200, 'Tezos', 'XTZ'),
(201, 'EOS', 'EOS'),
(202, 'Shiba Inu', 'SHIB'),
(203, 'Chainlink', 'LINK'),
(204, 'Bitcoin Gold', 'BTG'),
(205, 'Ethereum Classic', 'ETC'),
(206, 'XRP', 'XRP'),
(207, 'Cardano', 'ADA'),
(208, 'Dash', 'DASH'),
(209, 'Zcash', 'ZEC'),
(210, 'Solana', 'SOL'),
(211, 'ApeCoin', 'APE'),
(212, 'LunarCoin', 'LUNC'),
(213, 'Polygon', 'MATIC'),
(214, 'Filecoin', 'FIL'),
(215, 'Flamingo', 'FLM'),
(216, 'Mdex', 'MDX'),
(217, 'Qtum', 'QTUM'),
(218, 'Biconomy', 'BICO'),
(219, 'Decentraland', 'MANA'),
(220, 'The Sandbox', 'SAND'),
(221, 'yearn.finance', 'YFI'),
(222, 'Serum', 'SRM'),
(223, 'BarnBridge', 'BOND'),
(224, 'Power Ledger', 'POWER'),
(225, 'Chiliz', 'CHZ'),
(226, 'SOL1', 'SOL1'),
(227, 'PAX Gold', 'PAXG'),
(228, 'ARBITRUM', 'ARB'),
(229, 'Bonfida', 'FIDA'),
(230, 'Power Ledger', 'POWR'),
(231, 'PolyYield', 'PYR'),
(232, 'Numeraire', 'NMR'),
(233, 'Ethplorer', 'EPX'),
(234, 'Perpetual Protocol', 'PERP'),
(235, 'Stratis', 'STRAX'),
(236, 'BakeryToken', 'BAKE'),
(237, 'Wing Finance', 'WING'),
(238, 'Metal', 'MTL'),
(239, 'MyNeighborAlice', 'ALICE'),
(240, 'Cocos-BCX', 'COCOS'),
(241, 'Ontology', 'ONT'),
(242, 'AdEx', 'ADX'),
(243, 'SuperRare', 'RARE'),
(244, 'Voxel', 'VOXEL'),
(245, 'BEAM', 'BEAM'),
(246, 'Augur', 'REP'),
(247, 'Dock', 'DOCK'),
(248, 'Lisk', 'LSK'),
(249, 'Akropolis', 'AKRO'),
(250, 'UMA', 'UMA'),
(251, 'Venus', 'XVS'),
(252, 'Bancor', 'BNT'),
(253, 'Audius', 'AUDIO'),
(254, 'Secret', 'SCRT'),
(255, 'FIO Protocol', 'FIO'),
(256, 'Orchid', 'OXT'),
(257, 'Celer Network', 'CELR'),
(258, 'Mithril', 'MITH'),
(259, 'Curve DAO Token', 'CRV'),
(260, 'IoTeX', 'IOTX'),
(261, 'Celo', 'CELO'),
(262, 'Conflux Network', 'CFX'),
(263, 'Ankr', 'ANKR'),
(264, 'Radiant', 'RAD'),
(265, 'Gala', 'GALA'),
(266, 'Basic Attention Token', 'BAT'),
(267, 'Helium', 'HNT'),
(268, 'VITE', 'VITE'),
(269, 'SelfKey', 'KEY'),
(270, 'TomoChain', 'TOMO'),
(271, 'Compound', 'COMP'),
(272, 'Ocean Protocol', 'OCEAN'),
(273, 'Yieldshark', 'LOKA'),
(274, 'Nexo', 'NEXO'),
(275, 'AstroTools', 'ASTR'),
(276, 'Gnosis', 'GNO'),
(277, 'Galaxy', 'GAL'),
(278, 'Woo', 'WOO'),
(279, 'Ravencoin', 'RVN'),
(280, 'Trust Wallet Token', 'TWT'),
(281, 'Near Protocol', 'NEAR'),
(282, 'Polkadot', 'DOT');

-- --------------------------------------------------------

--
-- Структура таблицы `domains`
--

CREATE TABLE `domains` (
  `id` int(11) NOT NULL,
  `domain` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain_ns` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `zone_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmp_host` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmp_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stmp_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `domains`
--

INSERT INTO `domains` (`id`, `domain`, `title`, `domain_ns`, `user_id`, `zone_id`, `stmp_host`, `stmp_email`, `stmp_password`, `date`) VALUES
(1, 'asdas1das2das2d.rio', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, '0daebc304de2a15ec9a57a62ab10a36a', '', '', '', '2023-11-05'),
(2, 'biteon.ru', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', 'ssl://smtp.gmail.com', 'jopik2424@gmail.com', 'vjfm hrxj gghw xniw', '2023-11-05');

-- --------------------------------------------------------

--
-- Структура таблицы `kyc_application`
--

CREATE TABLE `kyc_application` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `kyc_application`
--

INSERT INTO `kyc_application` (`id`, `user_id`, `files`, `status`, `date`) VALUES
(7, 19, '{\"image_url\":\"/assets/kyc_documents/6553cb223eb4a.jpg\"}', 0, '2023-11-14 22:31:46'),
(8, 19, '{\"image_url\":\"/assets/kyc_documents/6553cb225be52.jpg\"}', 0, '2023-11-14 22:31:46'),
(9, 19, '{\"image_url\":\"/assets/kyc_documents/6553cb225e993.jpg\"}', 0, '2023-11-14 22:31:46'),
(10, 19, '{\"image_url\":\"/assets/kyc_documents/6553cb2265635.jpg\"}', 0, '2023-11-14 22:31:46'),
(11, 19, '{\"kyc_images\":[\"{\"image_url\":\"\\/assets\\/kyc_documents\\/6553cc4ba2b98.png\"}\"]}', 0, '2023-11-14 22:36:43'),
(12, 19, '{\"kyc_images\":[\"/assets/kyc_documents/6553d07e491d4.jpg\",\"/assets/kyc_documents/6553d07e492d1.jpg\",\"/assets/kyc_documents/6553d07e49390.jpg\"]}', 0, '2023-11-14 22:54:38');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message_text`, `chat_id`, `date`) VALUES
(20, 21, 'asdasdasd', 516998, '2023-11-11 23:32:16'),
(21, 21, 'asdasdsad', 181900, '2023-11-11 23:32:39'),
(22, 19, 'asdasdas', 516998, '2023-11-11 23:32:53'),
(23, 19, 'asdasdasdas', 139473, '2023-11-11 23:33:09'),
(24, 21, 'asdasdasd', 181900, '2023-11-11 23:33:29'),
(25, 19, '123132', 139473, '2023-11-11 23:33:38'),
(26, 19, 'asdasd', 181900, '2023-11-11 23:33:55');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_order` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_trade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `date_close` datetime DEFAULT NULL,
  `coin_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_order_price` double NOT NULL,
  `close_order_price` double NOT NULL,
  `amount` double NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type_order`, `type_trade`, `date`, `date_close`, `coin_id`, `open_order_price`, `close_order_price`, `amount`, `status`) VALUES
(1, 19, 'buy', 'market', '2023-11-13 10:39:13', NULL, '189', 36985.5, 36985.5, 12, 'open'),
(2, 19, 'buy', 'market', '2023-11-13 10:40:30', NULL, '189', 36985.5, 36985.5, 12, 'open'),
(3, 19, 'buy', 'market', '2023-11-13 10:40:49', NULL, '189', 36985.5, 36985.5, 12, 'open'),
(4, 19, 'buy', 'market', '2023-11-13 10:43:06', NULL, '189', 36985.5, 36985.5, 12, 'open'),
(5, 19, 'buy', 'market', '2023-11-13 10:44:10', NULL, '189', 36985.5, 36985.5, 12, 'open'),
(6, 19, 'buy', 'market', '2023-11-13 10:48:31', NULL, '198', 170.51, 170.51, 200, 'open'),
(7, 19, 'buy', 'market', '2023-11-13 12:18:33', NULL, '198', 168.49, 168.49, 1, 'open'),
(8, 19, 'buy', 'market', '2023-11-13 12:18:44', NULL, '198', 168.49, 168.49, 1, 'open'),
(9, 19, 'buy', 'market', '2023-11-13 12:19:09', NULL, '198', 168.49, 168.49, 1, 'open'),
(10, 19, 'buy', 'market', '2023-11-13 12:19:14', NULL, '198', 168.49, 168.49, 1, 'open'),
(11, 19, 'buy', 'market', '2023-11-13 12:19:15', NULL, '198', 168.49, 168.49, 1, 'open'),
(12, 19, 'buy', 'market', '2023-11-13 12:19:15', NULL, '198', 168.49, 168.49, 1, 'open'),
(13, 19, 'buy', 'market', '2023-11-13 12:19:28', NULL, '198', 168.58, 168.58, 1, 'open'),
(14, 19, 'buy', 'market', '2023-11-13 12:19:29', NULL, '198', 168.58, 168.58, 1, 'open'),
(15, 19, 'buy', 'market', '2023-11-13 12:19:45', NULL, '198', 168.58, 168.58, 1, 'open'),
(16, 19, 'buy', 'market', '2023-11-13 12:20:13', '2023-11-13 12:20:15', '198', 168.58, 168.58, 1, 'close'),
(17, 19, 'buy', 'market', '2023-11-13 12:20:14', '2023-11-13 12:20:17', '198', 168.58, 168.58, 1, 'close'),
(18, 19, 'buy', 'market', '2023-11-13 12:20:55', NULL, '198', 168.58, 168.58, 24121, 'open'),
(19, 19, 'buy', 'market', '2023-11-13 12:21:02', '2023-11-13 12:21:03', '198', 168.58, 168.58, 2412, 'close');

-- --------------------------------------------------------

--
-- Структура таблицы `p2p_users`
--

CREATE TABLE `p2p_users` (
  `id` int(11) NOT NULL,
  `user_avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `spread` double NOT NULL,
  `limits` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `p2p_users`
--

INSERT INTO `p2p_users` (`id`, `user_avatar`, `username`, `payment_method`, `spread`, `limits`) VALUES
(1, '{\"image_url\":\"/assets/users_avatars/653682a189417.jpg\"}', 'ZproCoin', 'Webmoney', 1.4, '50 - 15 909,00 USD');

-- --------------------------------------------------------

--
-- Структура таблицы `payment_orders`
--

CREATE TABLE `payment_orders` (
  `id` int(11) NOT NULL,
  `payment_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` int(11) NOT NULL,
  `promo` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `staking_orders`
--

CREATE TABLE `staking_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summ_coin` double NOT NULL,
  `profit` double NOT NULL,
  `days` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_code` int(11) NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kyc_step` int(11) NOT NULL DEFAULT '0',
  `last_online` datetime NOT NULL,
  `2fa` tinyint(1) NOT NULL,
  `email_verif` tinyint(1) NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` int(11) DEFAULT NULL,
  `payment_address` text COLLATE utf8mb4_unicode_ci,
  `withdraw_error` text COLLATE utf8mb4_unicode_ci,
  `trading_error` text COLLATE utf8mb4_unicode_ci,
  `verification_error` text COLLATE utf8mb4_unicode_ci,
  `auth_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `ref_code`, `password`, `kyc_step`, `last_online`, `2fa`, `email_verif`, `avatar`, `user_status`, `telegram`, `payment_address`, `withdraw_error`, `trading_error`, `verification_error`, `auth_token`, `created_date`) VALUES
(19, 'nikita150489@mail.ru', 'kasro123', 74329601, '$2y$10$u4IK9yVAaqgZ4TTtI53nLuPESX.7PvDNXUwwxUB666uLcZTl.8Fny', 0, '2023-11-14 22:54:38', 0, 1, '{\"image_url\":\"/assets/users_avatars/6553abd190f07.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'e1f36ab54a2e6762556a2628e1c9e5f2a7812c297d17878b91d072c4153eb671', NULL),
(21, 'nikita15048769@mail.ru', 'KASRO124', 69087331, '$2y$10$/jk6vqm5U93CJs3Vzd780uVgoyaywZKfGo4N2ZlxBIQSHYVE6RwEK', 0, '2023-11-11 23:33:57', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, '0f450a652793aedd3844f18108308bbe84cba3082ea291bc2124504fe68ca6f3', '2023-11-11'),
(22, 'kasro@vk.com', 'limin123', 65311432, '$2y$10$scS.1sHuJ0K7rwjgkzxt8eUJRlEdIjUwKoDGSRX0AQdKOspdMwboC', 0, '2023-11-14 15:11:18', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-14'),
(23, 'vxz47682@zslsz.com', 'asdad123', 73409613, '$2y$10$gjMRwo/BXgTOPx22DYkbyeRFZgj23PshzaNVp5rZz/MZggEVzSxzG', 0, '2023-11-14 17:17:01', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-14');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`user_id`,`id_coin`);

--
-- Индексы таблицы `bindings_users`
--
ALTER TABLE `bindings_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_worker` (`user_id_worker`,`user_id_mamont`);

--
-- Индексы таблицы `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`) USING BTREE;

--
-- Индексы таблицы `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id_coin`);

--
-- Индексы таблицы `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `domain` (`domain`);

--
-- Индексы таблицы `kyc_application`
--
ALTER TABLE `kyc_application`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `p2p_users`
--
ALTER TABLE `p2p_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment_orders`
--
ALTER TABLE `payment_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promo` (`promo`);

--
-- Индексы таблицы `staking_orders`
--
ALTER TABLE `staking_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `bindings_users`
--
ALTER TABLE `bindings_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `coins`
--
ALTER TABLE `coins`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT для таблицы `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `kyc_application`
--
ALTER TABLE `kyc_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `p2p_users`
--
ALTER TABLE `p2p_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `payment_orders`
--
ALTER TABLE `payment_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `staking_orders`
--
ALTER TABLE `staking_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
