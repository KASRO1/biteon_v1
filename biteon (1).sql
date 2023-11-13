-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2023 г., 00:27
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
(19, 189, 0.0172137021988),
(19, 192, 34726.28),
(19, 214, 2.2181146025878);

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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `domains`
--

INSERT INTO `domains` (`id`, `domain`, `title`, `domain_ns`, `user_id`, `zone_id`, `date`) VALUES
(1, 'asdas1das2das2d.rio', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, '0daebc304de2a15ec9a57a62ab10a36a', '2023-11-05'),
(2, 'asdas21das2das2d.rio', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', '2023-11-05');

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
  `size` double DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type_order`, `type_trade`, `date`, `date_close`, `coin_id`, `open_order_price`, `close_order_price`, `amount`, `size`, `status`) VALUES
(1, 19, 'buy', 'market', '2023-11-13 19:14:41', '2023-11-13 19:14:42', '214', 5.464, 5.464, 12, NULL, 'close'),
(2, 19, 'buy', 'market', '2023-11-13 22:32:20', '2023-11-13 22:32:21', '189', 37108, 37108, 123, NULL, 'close'),
(3, 19, 'sell', 'market', '2023-11-13 23:17:45', '2023-11-13 23:17:46', '189', 36938.9, 36938.9, 0.4, NULL, 'close'),
(4, 19, 'buy', 'market', '2023-11-13 23:18:35', '2023-11-13 23:18:36', '189', 36935.2, 36935.2, 30000, NULL, 'close'),
(5, 19, 'sell', 'market', '2023-11-13 23:18:52', '2023-11-13 23:18:52', '189', 37080.5, 37080.5, 0.8, NULL, 'close'),
(6, 19, 'buy', 'market', '2023-11-13 23:24:55', '2023-11-13 23:24:55', '189', 37041.1, 37041.1, 100, NULL, 'close'),
(7, 19, 'buy', 'market', '2023-11-13 23:26:33', '2023-11-13 23:26:34', '189', 37033.6, 37033.6, 90, NULL, 'close'),
(8, 19, 'buy', 'market', '2023-11-13 23:26:58', '2023-11-13 23:26:59', '189', 37131.4, 37131.4, 29, NULL, 'close'),
(9, 19, 'buy', 'market', '2023-11-13 23:27:29', '2023-11-13 23:27:30', '189', 36962.1, 36962.1, 800, NULL, 'close'),
(10, 19, 'buy', 'market', '2023-11-13 23:43:52', '2023-11-13 23:43:53', '189', 36901, 36901, 100, NULL, 'close'),
(12, 19, 'sell', 'market', '2023-11-13 23:47:42', '2023-11-13 23:47:43', '189', 37076.6, 37076.6, 0.05, NULL, 'close'),
(13, 19, 'sell', 'market', '2023-11-13 23:47:48', '2023-11-13 23:47:49', '189', 37076.6, 37076.6, 0.05, NULL, 'close'),
(15, 19, 'sell', 'market', '2023-11-13 23:48:07', '2023-11-13 23:48:08', '189', 37076.6, 37076.6, 0.01, NULL, 'close'),
(16, 19, 'sell', 'market', '2023-11-13 23:48:10', '2023-11-13 23:48:11', '189', 37076.6, 37076.6, 0.01, NULL, 'close'),
(17, 19, 'sell', 'market', '2023-11-13 23:48:13', '2023-11-13 23:48:13', '189', 37076.6, 37076.6, 0.01, NULL, 'close'),
(18, 19, 'sell', 'market', '2023-11-13 23:49:47', '2023-11-13 23:49:48', '189', 37076.6, 37076.6, 0.001, NULL, 'close');

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
(18, 'KASRO@vk.com', 'KASRO', 46224787, '$2y$10$Y0U.6niCdh7Auj3nw11qcuqoS1G.GeGCvV2VjEiUM8jdFNIMphNN6', 0, '2023-10-25 00:28:53', 0, 0, '{\"image_url\":\"/assets/users_avatars/653682a189417.jpg\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'defa29927b3670b1a81083e0a12d5c613000a923d34f42a0afaa155ccba66fba', NULL),
(19, 'nikita150489@mail.ru', 'kasro123', 74329601, '$2y$10$u4IK9yVAaqgZ4TTtI53nLuPESX.7PvDNXUwwxUB666uLcZTl.8Fny', 0, '2023-11-14 00:27:05', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, '4fbff7c634f69331b3d6d799987b3ea6961307fef95dba52d351e9ae3e37c8a8', NULL),
(21, 'nikita15048769@mail.ru', 'KASRO124', 69087331, '$2y$10$/jk6vqm5U93CJs3Vzd780uVgoyaywZKfGo4N2ZlxBIQSHYVE6RwEK', 0, '2023-11-11 23:33:57', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, '0f450a652793aedd3844f18108308bbe84cba3082ea291bc2124504fe68ca6f3', '2023-11-11');

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
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `p2p_users`
--
ALTER TABLE `p2p_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
