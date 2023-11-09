-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2023 г., 01:27
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

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
(18, 189, 0),
(18, 190, 0.2),
(18, 191, 45),
(18, 192, 201.12),
(18, 193, 747.11111111111),
(18, 195, 0.0045034902049088);

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
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_token` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `ref_code`, `password`, `kyc_step`, `last_online`, `2fa`, `avatar`, `user_status`, `auth_token`) VALUES
(18, 'KASRO@vk.com', 'KASRO', 46224787, '$2y$10$Y0U.6niCdh7Auj3nw11qcuqoS1G.GeGCvV2VjEiUM8jdFNIMphNN6', 0, '2023-10-24 01:26:38', 0, '{\"image_url\":\"/assets/users_avatars/653682a189417.jpg\"}', 'user', 'defa29927b3670b1a81083e0a12d5c613000a923d34f42a0afaa155ccba66fba');

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
-- Индексы таблицы `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id_coin`);

--
-- Индексы таблицы `p2p_users`
--
ALTER TABLE `p2p_users`
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
-- AUTO_INCREMENT для таблицы `coins`
--
ALTER TABLE `coins`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT для таблицы `p2p_users`
--
ALTER TABLE `p2p_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
