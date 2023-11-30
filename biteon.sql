-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 29 2023 г., 02:27
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
(19, 189, 15.293877016442),
(19, 190, 2.5990873438206),
(19, 191, 29.812149808316),
(19, 192, 3453849.25),
(19, 198, 14.274952646816),
(39, 189, 1),
(59, 189, 10),
(59, 192, 36958.07);

-- --------------------------------------------------------

--
-- Структура таблицы `bindings_users`
--

CREATE TABLE `bindings_users` (
  `id` int(11) NOT NULL,
  `user_id_worker` int(11) NOT NULL,
  `user_id_mamont` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bindings_users`
--

INSERT INTO `bindings_users` (`id`, `user_id_worker`, `user_id_mamont`, `type`, `date`) VALUES
(4, 19, 41, 'id', '2023-11-17'),
(7, 19, 18, 'id', '2023-11-17'),
(8, 19, 46, 'email', '2023-11-18'),
(9, 19, 59, 'promo', '2023-11-21');

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
(191076, 59, '2023-11-21'),
(200807, 19, '2023-11-25'),
(814898, 46, '2023-11-18');

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `type_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `codes`
--

INSERT INTO `codes` (`id`, `type_code`, `user_id`, `token`, `code`, `date`) VALUES
(6, 'reset_password', 19, '', 881610, '2023-10-29'),
(7, 'reset_password', 19, '', 190626, '2023-10-29'),
(8, '2fa', 59, '0310f1648a89f70eda8bb9606a514277d2ca3f3ab40e3dd095faae8249ca6637', 366096, '2023-11-27'),
(9, '2fa', 59, 'e85e52568eaacc314af621463524e0cccea99b4c1bd1544c0a7780450bb22d6d', 348813, '2023-11-27'),
(10, '2fa', 59, 'fac5206d3ab2b6cb956e787d5a16f97c9cd3155237477b38732ce07d2ea40835', 870681, '2023-11-27'),
(11, '2fa', 59, 'f3f6344456e277141d2ee5ec7b03cc5fbdc40fa8762a3f574eb25b2d252a1dc4', 879266, '2023-11-27'),
(12, '2fa', 19, 'af2b492a05c7a01fa37519b407d706a1ad43a25fbc1f8a83852c93a3f5210c92', 917282, '2023-11-27'),
(13, '2fa', 59, '9424343fb657e512fc244751e57eca66a0c87f17c75881b7634b2c2d4053f4bb', 315556, '2023-11-27'),
(14, '2fa', 59, 'e14d4505ef0271eb81a10a36da924af96b8233be1e61ffbecf07b2edadd41ac2', 994462, '2023-11-27'),
(15, '2fa', 19, '08b1f99fccbc9ffb2a447cdca677ff8ce60b921be908d38f6bb7cfdda9ec4b76', 904931, '2023-11-27'),
(16, '2fa', 59, '04f681b7a01959bfc9bc21d07e7730b610e2da21027b2387d7de2dd0457b2dbf', 328526, '2023-11-27'),
(17, '2fa', 59, 'abb300ae932d06f9adb572c2fe3332cc91669571e6619954adb0dcf3f202b2e0', 860577, '2023-11-27'),
(18, '2fa', 59, 'fdee97684994eae149473b2b889aaca8544afb1d866533b6e5bc08a1f2f985cf', 544616, '2023-11-27'),
(19, '2fa', 59, 'ff2ababf01cfcbd867c8a601604395a555549648820853472347452fdd838475', 118749, '2023-11-27'),
(20, '2fa', 59, '1d9a17796ec3f99e43b04d9edfec01baf61a007012f63305fd9a82225169e40b', 905647, '2023-11-27'),
(21, '2fa', 59, 'e7fdb669c12b8071620f89d1b2cc694ae29aaec87dbc99d366d61a3843f060a5', 607788, '2023-11-27'),
(22, '2fa', 59, '03fc8e6e955b9a63e86edc01e412fd59e94efe201667ba93b108d4295c0e5d57', 336390, '2023-11-27'),
(23, '2fa', 19, 'd9ab4c68ec63f04bd4af4a0303ab69848e69e1426ac918262bd8d14ea5a46c93', 828551, '2023-11-27'),
(24, '2fa', 19, '124d91626cb14fae107a757ac61a1d2c68053fde1fd87f513b94c70d9931aebf', 505394, '2023-11-27'),
(25, '2fa', 19, 'dc6b1e4e0a06d4979201f02ec8d8eb93ad4bf5d6b192f7e455cf84b3c3e1fb9b', 397218, '2023-11-27');

-- --------------------------------------------------------

--
-- Структура таблицы `coins`
--

CREATE TABLE `coins` (
  `id_coin` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `simple_name` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_coin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'coin',
  `spread` double NOT NULL DEFAULT '0',
  `payment_address` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coins`
--

INSERT INTO `coins` (`id_coin`, `full_name`, `simple_name`, `type_coin`, `spread`, `payment_address`) VALUES
(189, 'Bitcoin', 'BTC', 'coin', 123, 'bc1qd2uzn6padt89qw9yed4g8udhhf2eku8nvekegf'),
(190, 'Ethereum', 'ETH', 'coin', 0, ''),
(191, 'Litecoin', 'LTC', 'coin', 0, ''),
(192, 'Tether', 'USDT', 'coin', 0, ''),
(193, 'Tron', 'TRX', 'coin', 0, ''),
(194, 'USD Coin', 'USDC', 'coin', 0, ''),
(195, 'Binance Coin', 'BNB', 'coin', 0, ''),
(196, 'Bitcoin Cash', 'BCH', 'coin', 0, ''),
(197, 'Dogecoin', 'DOGE', 'coin', 0, ''),
(198, 'Monero', 'XMR', 'coin', 0, ''),
(199, 'Stellar', 'XLM', 'coin', 0, ''),
(200, 'Tezos', 'XTZ', 'coin', 0, ''),
(201, 'EOS', 'EOS', 'coin', 0, ''),
(202, 'Shiba Inu', 'SHIB', 'coin', 0, ''),
(203, 'Chainlink', 'LINK', 'coin', 0, ''),
(204, 'Bitcoin Gold', 'BTG', 'coin', 0, ''),
(205, 'Ethereum Classic', 'ETC', 'coin', 0, ''),
(206, 'XRP', 'XRP', 'coin', 0, ''),
(207, 'Cardano', 'ADA', 'coin', 0, ''),
(208, 'Dash', 'DASH', 'coin', 0, ''),
(209, 'Zcash', 'ZEC', 'coin', 0, ''),
(210, 'Solana', 'SOL', 'coin', 0, ''),
(211, 'ApeCoin', 'APE', 'coin', 0, ''),
(212, 'LunarCoin', 'LUNC', 'coin', 0, ''),
(213, 'Polygon', 'MATIC', 'coin', 0, ''),
(214, 'Filecoin', 'FIL', 'coin', 0, ''),
(215, 'Flamingo', 'FLM', 'coin', 0, ''),
(216, 'Mdex', 'MDX', 'coin', 0, ''),
(217, 'Qtum', 'QTUM', 'coin', 0, ''),
(218, 'Biconomy', 'BICO', 'coin', 0, ''),
(219, 'Decentraland', 'MANA', 'coin', 0, ''),
(220, 'The Sandbox', 'SAND', 'coin', 0, ''),
(221, 'yearn.finance', 'YFI', 'coin', 0, ''),
(222, 'Serum', 'SRM', 'coin', 0, ''),
(223, 'BarnBridge', 'BOND', 'coin', 0, ''),
(224, 'Power Ledger', 'POWER', 'coin', 0, ''),
(225, 'Chiliz', 'CHZ', 'coin', 0, ''),
(226, 'SOL1', 'SOL1', 'coin', 0, ''),
(227, 'PAX Gold', 'PAXG', 'coin', 0, ''),
(228, 'ARBITRUM', 'ARB', 'coin', 0, ''),
(229, 'Bonfida', 'FIDA', 'coin', 0, ''),
(230, 'Power Ledger', 'POWR', 'coin', 0, ''),
(231, 'PolyYield', 'PYR', 'coin', 0, ''),
(232, 'Numeraire', 'NMR', 'coin', 0, ''),
(233, 'Ethplorer', 'EPX', 'coin', 0, ''),
(234, 'Perpetual Protocol', 'PERP', 'coin', 0, ''),
(235, 'Stratis', 'STRAX', 'coin', 0, ''),
(236, 'BakeryToken', 'BAKE', 'coin', 0, ''),
(237, 'Wing Finance', 'WING', 'coin', 0, ''),
(238, 'Metal', 'MTL', 'coin', 0, ''),
(239, 'MyNeighborAlice', 'ALICE', 'coin', 0, ''),
(240, 'Cocos-BCX', 'COCOS', 'coin', 0, ''),
(241, 'Ontology', 'ONT', 'coin', 0, ''),
(242, 'AdEx', 'ADX', 'coin', 0, ''),
(243, 'SuperRare', 'RARE', 'coin', 0, ''),
(244, 'Voxel', 'VOXEL', 'coin', 0, ''),
(245, 'BEAM', 'BEAM', 'coin', 0, ''),
(246, 'Augur', 'REP', 'coin', 0, ''),
(247, 'Dock', 'DOCK', 'coin', 0, ''),
(248, 'Lisk', 'LSK', 'coin', 0, ''),
(249, 'Akropolis', 'AKRO', 'coin', 0, ''),
(250, 'UMA', 'UMA', 'coin', 0, ''),
(251, 'Venus', 'XVS', 'coin', 0, ''),
(252, 'Bancor', 'BNT', 'coin', 0, ''),
(253, 'Audius', 'AUDIO', 'coin', 0, ''),
(254, 'Secret', 'SCRT', 'coin', 0, ''),
(255, 'FIO Protocol', 'FIO', 'coin', 0, ''),
(256, 'Orchid', 'OXT', 'coin', 0, ''),
(257, 'Celer Network', 'CELR', 'coin', 0, ''),
(258, 'Mithril', 'MITH', 'coin', 0, ''),
(259, 'Curve DAO Token', 'CRV', 'coin', 0, ''),
(260, 'IoTeX', 'IOTX', 'coin', 0, ''),
(261, 'Celo', 'CELO', 'coin', 0, ''),
(262, 'Conflux Network', 'CFX', 'coin', 0, ''),
(263, 'Ankr', 'ANKR', 'coin', 0, ''),
(264, 'Radiant', 'RAD', 'coin', 0, ''),
(265, 'Gala', 'GALA', 'coin', 0, ''),
(266, 'Basic Attention Token', 'BAT', 'coin', 0, ''),
(267, 'Helium', 'HNT', 'coin', 0, ''),
(268, 'VITE', 'VITE', 'coin', 0, ''),
(269, 'SelfKey', 'KEY', 'coin', 0, ''),
(270, 'TomoChain', 'TOMO', 'coin', 0, ''),
(271, 'Compound', 'COMP', 'coin', 0, ''),
(272, 'Ocean Protocol', 'OCEAN', 'coin', 0, ''),
(273, 'Yieldshark', 'LOKA', 'coin', 0, ''),
(274, 'Nexo', 'NEXO', 'coin', 0, ''),
(275, 'AstroTools', 'ASTR', 'coin', 0, ''),
(276, 'Gnosis', 'GNO', 'coin', 0, ''),
(277, 'Galaxy', 'GAL', 'coin', 0, ''),
(278, 'Woo', 'WOO', 'coin', 0, ''),
(279, 'Ravencoin', 'RVN', 'coin', 0, ''),
(280, 'Trust Wallet Token', 'TWT', 'coin', 0, ''),
(281, 'Near Protocol', 'NEAR', 'coin', 0, ''),
(282, 'Polkadot', 'DOT', 'coin', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `deposits`
--

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) DEFAULT NULL,
  `mamont_id` int(11) NOT NULL,
  `amount_usd` double NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` text COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `deposits`
--

INSERT INTO `deposits` (`id`, `worker_id`, `mamont_id`, `amount_usd`, `type`, `domain`, `date`) VALUES
(1, 19, 22, 1000, 'card', 'biteon.ru', '2023-11-16 12:22:59'),
(2, 19, 24, 2000, 'card', NULL, '2023-11-18 11:33:52'),
(3, 19, 24, 2000, 'card', NULL, '2023-11-18 11:33:52');

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
(1, 'dde7-185-192-110-173.ngrok-free.app', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, '0daebc304de2a15ec9a57a62ab10a36a', '', '', '', '2023-11-05'),
(2, 'biteon.ru', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', 'ssl://smtp.gmail.com', 'jopik2424@gmail.com', 'vjfm hrxj gghw xniw', '2023-11-05'),
(3, 'localhost', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', 'ssl://smtp.gmail.com', 'jopik2424@gmail.com', 'vjfm hrxj gghw xniw', '2023-11-05'),
(4, 'ngrok-free.app', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, '0daebc304de2a15ec9a57a62ab10a36a', '', '', '', '2023-11-05');

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
(13, 46, '{\"kyc_images\":[\"/assets/kyc_documents/6558609932616.jpg\",\"/assets/kyc_documents/655860993c703.jpg\"]}', 1, '2023-11-18 09:58:33'),
(14, 19, '{\"kyc_images\":[\"/assets/kyc_documents/655e0a0c4b46d.png\"]}', 0, '2023-11-22 17:02:52');

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
(26, 19, 'asdasd', 181900, '2023-11-11 23:33:55'),
(27, 19, '123321', 181900, '2023-11-17 15:41:09'),
(30, 19, 'Привет', 139473, '2023-11-18 13:21:28'),
(31, 19, 'Привет', 440846, '2023-11-18 13:21:35'),
(34, 46, '124', 814898, '2023-11-18 16:50:08'),
(35, 46, '123123', 814898, '2023-11-18 16:56:03'),
(36, 19, '123123', 814898, '2023-11-18 16:56:15'),
(37, 19, '123123', 814898, '2023-11-18 16:56:18'),
(38, 19, '123123', 814898, '2023-11-18 16:56:20'),
(40, 19, '123', 814898, '2023-11-18 16:56:24'),
(44, 46, '12', 814898, '2023-11-18 16:59:41'),
(45, 46, '123', 814898, '2023-11-18 17:06:58'),
(46, 19, '123', 814898, '2023-11-18 17:07:01'),
(47, 19, '123', 814898, '2023-11-18 17:07:05'),
(48, 59, 'ртолтошлщ', 191076, '2023-11-21 22:17:50');

-- --------------------------------------------------------

--
-- Структура таблицы `networks_coin`
--

CREATE TABLE `networks_coin` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_coin` int(11) NOT NULL,
  `wallet` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `networks_coin`
--

INSERT INTO `networks_coin` (`id`, `title`, `id_coin`, `wallet`) VALUES
(3, 'Tether  <span>ERC20</span>', 192, ''),
(4, 'Tether  <span>TRC20</span>', 192, ''),
(5, 'Tether  <span>BEP20</span>', 192, '');

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
(16, 19, 'buy', 'market', '2023-11-13 12:20:13', '2023-11-13 12:20:15', '198', 168.58, 168.58, 1, 'close'),
(17, 19, 'buy', 'market', '2023-11-13 12:20:14', '2023-11-13 12:20:17', '198', 168.58, 168.58, 1, 'close'),
(18, 19, 'buy', 'market', '2023-11-13 12:20:55', NULL, '198', 168.58, 168.58, 24121, 'close'),
(19, 19, 'buy', 'market', '2023-11-13 12:21:02', '2023-11-13 12:21:03', '198', 168.58, 168.58, 2412, 'close'),
(20, 19, 'buy', 'limit', '2023-11-17 08:57:42', '2023-11-22 21:23:54', '189', 36228.3, 12, 12, 'close'),
(21, 19, 'sell', 'limit', '2023-11-17 09:09:48', '2023-11-23 01:50:26', '189', 36318.3, 12, 12, 'close'),
(22, 19, 'sell', 'limit', '2023-11-17 09:09:59', '2023-11-21 22:24:33', '189', 36318, 12, 12, 'close'),
(23, 19, 'buy', 'market', '2023-11-17 11:18:51', '2023-11-17 11:18:52', '189', 36204.7, 36204.7, 12, 'close'),
(24, 19, 'buy', 'market', '2023-11-17 11:25:02', '2023-11-17 11:25:03', '189', 36179.3, 36179.3, 12, 'close'),
(25, 19, 'buy', 'market', '2023-11-17 11:25:14', '2023-11-17 11:25:15', '189', 36179.3, 36179.3, 12, 'close'),
(26, 19, 'buy', 'market', '2023-11-17 11:25:27', '2023-11-17 11:25:28', '189', 36179.3, 36179.3, 1, 'close'),
(27, 19, 'buy', 'limit', '2023-11-17 11:26:04', '2023-11-21 22:24:32', '189', 36179.7, 36180, 12, 'close'),
(28, 19, 'buy', 'limit', '2023-11-17 11:27:27', '2023-11-25 16:48:40', '189', 36163.5, 40000, 12, 'close'),
(29, 19, 'buy', 'limit', '2023-11-17 11:27:27', '2023-11-25 16:48:40', '189', 36137.2, 40000, 12, 'close'),
(30, 19, 'buy', 'limit', '2023-11-20 02:08:07', '2023-11-21 22:24:32', '189', 37409.3, 12, 12, 'close'),
(31, 19, 'buy', 'trigger', '2023-11-20 02:13:49', '2023-11-27 22:22:10', '189', 37392.5, 12, 12, 'close'),
(32, 19, 'buy', 'trigger', '2023-11-20 02:18:23', '2023-11-27 22:22:10', '189', 37500, 12, 12, 'close'),
(33, 19, 'buy', 'trigger', '2023-11-20 02:20:06', '2023-11-27 22:22:11', '189', 37437.4, 12, 51, 'close'),
(34, 19, 'buy', 'market', '2023-11-20 02:20:11', '2023-11-20 02:20:12', '189', 37441.2, 37441.2, 1, 'close'),
(35, 19, 'buy', 'market', '2023-11-20 02:20:13', '2023-11-20 02:20:14', '189', 37441.2, 37441.2, 1, 'close'),
(36, 19, 'buy', 'market', '2023-11-20 02:20:18', '2023-11-20 02:20:19', '189', 37441.2, 37441.2, 12, 'close'),
(37, 19, 'buy', 'market', '2023-11-20 02:20:18', '2023-11-20 02:20:19', '189', 37441.2, 37441.2, 12, 'close'),
(38, 19, 'buy', 'market', '2023-11-20 02:20:28', '2023-11-20 02:20:28', '189', 37441.2, 37441.2, 126, 'close'),
(39, 19, 'buy', 'market', '2023-11-20 02:21:04', '2023-11-20 02:21:04', '189', 37442.4, 37442.4, 7, 'close'),
(40, 19, 'buy', 'market', '2023-11-20 02:22:05', '2023-11-20 02:22:05', '189', 37442.4, 37442.4, 123, 'close'),
(41, 19, 'buy', 'market', '2023-11-20 02:23:16', '2023-11-20 02:23:17', '189', 37482.7, 37482.7, 12, 'close'),
(42, 19, 'buy', 'limit', '2023-11-20 02:23:39', '2023-11-21 22:24:32', '189', 37471.5, 123, 123, 'close'),
(43, 19, 'sell', 'market', '2023-11-20 02:33:05', '2023-11-20 02:33:06', '189', 37366.7, 37366.7, 1, 'close'),
(44, 19, 'sell', 'market', '2023-11-20 02:34:45', '2023-11-20 02:34:45', '189', 37427, 37427, 1, 'close'),
(45, 19, 'sell', 'trigger', '2023-11-19 03:01:03', '2023-11-27 22:22:11', '189', 37364.6, 12, 12, 'close'),
(46, 19, 'buy', 'trigger', '2023-11-20 03:05:50', '2023-11-27 22:22:12', '189', 37288.6, 37230, 12, 'close'),
(47, 19, 'buy', 'trigger', '2023-11-20 03:06:24', '2023-11-27 22:22:12', '189', 37300, 37310, 12, 'close'),
(48, 59, 'sell', 'market', '2023-11-21 19:12:48', '2023-11-21 19:12:48', '189', 36982, 36982, 1, 'close'),
(49, 59, 'buy', 'limit', '2023-11-21 19:16:38', '2023-11-22 23:59:20', '189', 36959.4, 3700, 1, 'close'),
(50, 59, 'buy', 'limit', '2023-11-21 19:16:38', '2023-11-25 16:37:03', '189', 37010.8, 3700, 1, 'close'),
(51, 59, 'buy', 'limit', '2023-11-21 19:16:38', '2023-11-21 22:24:32', '189', 36959.4, 3700, 1, 'close'),
(52, 59, 'buy', 'limit', '2023-11-21 19:17:26', '2023-11-25 16:36:58', '189', 36946.8, 37000, 1, 'close'),
(53, 59, 'buy', 'limit', '2023-11-21 19:30:13', '2023-11-22 21:20:44', '189', 36962, 36940, 1, 'close'),
(54, 19, 'buy', 'limit', '2023-11-21 19:32:02', '2023-11-22 21:19:43', '189', 36906.5, 36907, 12, 'close'),
(55, 19, 'buy', 'trigger', '2023-11-25 16:09:35', '2023-11-27 22:22:12', '189', 37472.7, 123, 123, 'close'),
(56, 19, 'buy', 'trigger', '2023-11-25 16:11:47', '2023-11-27 22:22:13', '189', 37466, 37470, 123, 'close'),
(57, 19, 'sell', 'trigger', '2023-11-25 16:11:53', '2023-11-27 22:22:13', '189', 37466, 37470, 1, 'close'),
(58, 19, 'buy', 'trigger', '2023-11-25 16:47:53', '2023-11-27 22:22:14', '189', 37447.3, 37490, 123, 'close'),
(59, 19, 'buy', 'trigger', '2023-11-25 17:04:55', '2023-11-27 22:22:14', '189', 37757.07504268552, 37790, 20, 'close'),
(60, 19, 'buy', 'trigger', '2023-11-25 17:06:33', '2023-11-27 22:22:15', '189', 37753.92, 1, 1, 'close'),
(61, 19, 'buy', 'market', '2023-11-27 21:07:07', '2023-11-27 21:07:08', '189', 37274.9, 37274.9, 123, 'close'),
(62, 19, 'buy', 'limit', '2023-11-27 21:07:20', NULL, '189', 36962.07, 123, 123, 'open'),
(63, 19, 'buy', 'trigger', '2023-11-27 21:07:27', '2023-11-27 22:19:24', '189', 36954.59, 123, 3123, 'close');

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
(1, '{\"image_url\":\"/assets/users_avatars/653682a189417.jpg\"}', 'ZproCoin', 'Webmoney', 1.4, '50 - 15 909,00 USD'),
(2, '{\"image_url\":\"/assets/users_avatars/653682a189417.jpg\"}', 'ZproCoin', 'Webmoney', 1.4, '50 - 15 909,00 USD'),
(3, '{\"image_url\":\"/assets/users_avatars/653682a189417.jpg\"}', 'ZproCoin', 'Webmoney', 1.4, '50 - 15 909,00 USD');

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

--
-- Дамп данных таблицы `promo_codes`
--

INSERT INTO `promo_codes` (`id`, `promo`, `user_id`, `coin_id`, `amount`, `text`, `date`) VALUES
(3, '123', 19, 189, 11, 'Your PROMO CODE has been successfuly activated!', '2023-11-17'),
(7, '1', 19, 189, 1, 'Your PROMO CODE has been successfuly activated!', '2023-11-17');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `staking_percents` text COLLATE utf8mb4_unicode_ci,
  `min_deposit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `staking_percents`, `min_deposit`) VALUES
(1, '{\"week1\":\"1\",\"week2\":\"2\",\"mouth1\":\"3\",\"mouth3\":\"44\"}', 123);

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
  `minLimit` double NOT NULL DEFAULT '0',
  `verification_error` text COLLATE utf8mb4_unicode_ci,
  `auth_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `ref_code`, `password`, `kyc_step`, `last_online`, `2fa`, `email_verif`, `avatar`, `user_status`, `telegram`, `payment_address`, `withdraw_error`, `trading_error`, `minLimit`, `verification_error`, `auth_token`, `created_date`) VALUES
(18, 'nikita15048769@mail.ru', 'KASRO124', 69087331, '$2y$10$/jk6vqm5U93CJs3Vzd780uVgoyaywZKfGo4N2ZlxBIQSHYVE6RwEK', 0, '2023-11-11 23:33:57', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, '0f450a652793aedd3844f18108308bbe84cba3082ea291bc2124504fe68ca6f3', '2023-11-11'),
(19, 'nikita150489@mail.ru', 'kasro12', 74329601, '$2y$10$u4IK9yVAaqgZ4TTtI53nLuPESX.7PvDNXUwwxUB666uLcZTl.8Fny', 0, '2023-11-29 02:26:36', 1, 1, '{\"image_url\":\"/assets/users_avatars/6553abd190f07.png\"}', 'admin', 12345, '{\"address1\":\"123\",\"address2\":\"123\",\"address3\":\"131\"}', 'asd', '123', 123123, '123', '51f8d1ca89cc01ff5b11c0254cc71379142af1df659a2bca580f6cd0fc4d90a2', NULL),
(22, 'kasro@vk.com', 'limin123', 65311432, '$2y$10$scS.1sHuJ0K7rwjgkzxt8eUJRlEdIjUwKoDGSRX0AQdKOspdMwboC', 0, '2023-11-14 15:11:18', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'worker', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-14'),
(23, 'vxz47682@zslsz.com', 'asdad123', 73409613, '$2y$10$gjMRwo/BXgTOPx22DYkbyeRFZgj23PshzaNVp5rZz/MZggEVzSxzG', 0, '2023-11-14 17:17:01', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-14'),
(39, 'asdasd@mail.ru', 'asdasd', 16484404, '$2y$10$rhW6VDm4dgVKQ7oNDpelSOcqX5U6n2O4Dkr1k2gG.jIXglIIHng2G', 0, '2023-11-17 15:27:17', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-17'),
(40, 'asd1asd@mail.ru', 'asdas1d', 24540522, '$2y$10$y0gOWrYuw0TNu7R/tjLLBuXRPcjB8meEwyBYSqYOGTnTM2Bc1hzbW', 0, '2023-11-17 15:28:27', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-17'),
(41, 'asd1a1sd@mail.ru', 'asdas11d', 12908971, '$2y$10$nJW1PjSC5fVrHA09DpSZHOTBZb8N6zQcfSpgz4QkVSyAEPomiOt1a', 0, '2023-11-17 15:36:22', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-17'),
(42, '1asd1a1sd@mail.ru', 'asd1as11d', 35286999, '$2y$10$Bs4OwtxZC6F9zjeRDoiyjOBDkgdyYSCG3Sn0Edm9HEiJslPIS7Wj6', 0, '2023-11-17 15:37:13', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-17'),
(44, '1asd1a11sd@mail.ru', 'asd1a1s11d', 16809882, '$2y$10$PBeuV7BhvGAEPDADPhgna.wfFQ2MGzO9ZDLlWk/sMVVrTZv8tdS9q', 0, '2023-11-17 15:37:32', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-17'),
(45, 'kasro1234@vk.com', 'kasro1234', 49144580, '$2y$10$i6xTnj14HYt6FHsCH17tHOciOCvhdQ0Oy8vYRuylRMPM06UTqL3Om', 0, '2023-11-17 15:56:04', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-17'),
(46, 'fqk78661@zbock.com', 'fqk78661', 14191481, '$2y$10$2yf8YO/2co8Q.YblluHvouUc3.Aglz2ph9jINPSRDmPDBN9dY0PYa', 0, '2023-11-18 17:06:58', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, '1446fe48353aa0056e81f837f1ac1d3de95f2434cf45190c5dc744af3e96ada3', '2023-11-17'),
(47, 'xkv04280@zslsz.com', 'xkv04280@zslsz.com', 99855455, '$2y$10$kqrXQxO90Pw7Z9GRseki4eIArzCUkVJPsRJgEBaU.XQN5EnN3k6zS', 0, '2023-11-21 18:48:09', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(49, 'xkv042180@zslsz.com', 'xkv042180@zslsz.com', 58750616, '$2y$10$wnQmBi40JCG.bAWxvsd7seu765AA8Giu.8lFhf/G0cP8NtAGGa/oy', 0, '2023-11-21 18:50:18', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(51, 'xkv0421180@zslsz.com', 'x1kv042180@zslsz.com', 91660381, '$2y$10$bUTf7W3x9/gdZjZ.mDx1ZOvTqbOEoJOpfRZyP9L87s8cx7wuIp7qq', 0, '2023-11-21 18:50:30', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(58, 'glj41469@zbock.com', 'glj41469@zbock.com', 48062602, '$2y$10$o84I5azlalU5O.0Ab9ie2eZttUrFBbLZG6OYH0z17q8xekIElZSYS', 0, '2023-11-21 18:53:00', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(59, 'ccbablos@gmail.com', 'Nikolay22121', 55187887, '$2y$10$2jtiqMBO6ySO0vGyHc6tde1iMm3RQ1maKY5P.JYq3lODKURXQw6lO', 0, '2023-11-27 21:00:10', 1, 1, '{\"image_url\":\"/assets/users_avatars/655cd4a7ecc1d.png\"}', 'admin', NULL, NULL, NULL, NULL, 0, NULL, '3b807e4a9326f0ea7d40bbe8b83af2b70f62bf1a499086fcb70297dbf55c3925', '2023-11-21'),
(60, 'glj414169@zbock.com', 'glj414169@zbock.com', 86699928, '$2y$10$cqGcwZKpiGi0SPVF0Xlw4.bRwlo4C3sGdJB2UGG7y52A3lDaE6p.e', 0, '2023-11-21 18:54:21', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(62, 'glj4114169@zbock.com', 'glj4114169@zbock.com', 68449092, '$2y$10$CAuJ88YJARuoYUG5ZESSoe45zp/BsBRfY8dEGtCG9vocSTna8FiXO', 0, '2023-11-21 18:55:01', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(63, 'yzu89888@zslsz.com', 'yzu89888@zslsz.com', 88917426, '$2y$10$xfOEkARM63a8AIGJ1yIEO.tO7YvUEwWEBqhE7VuQe/gGD/3ghIxey', 0, '2023-11-21 19:25:03', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(64, 'bfd84037@zbock.com', 'bfd84037@zbock.com', 76461552, '$2y$10$S0Mnz1PHMnm0P6pd7EA3yeO7bt8DD5jj0J5n28JWidMXwDD5yr/WK', 0, '2023-11-21 19:27:41', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-21'),
(65, 'fiesugfhsjigasefpsefp@mail.ru', 'yenyex', 39856779, '$2y$10$D0lc4KiZyRQDDIB55BgY9O4TJZDatgBMUdqqY9f2PJgAKR1cQlNN6', 0, '2023-11-27 19:48:26', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-27');

-- --------------------------------------------------------

--
-- Структура таблицы `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `id_coin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `amount` double NOT NULL,
  `withdraw_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Индексы таблицы `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `networks_coin`
--
ALTER TABLE `networks_coin`
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
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `coins`
--
ALTER TABLE `coins`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT для таблицы `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `kyc_application`
--
ALTER TABLE `kyc_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `networks_coin`
--
ALTER TABLE `networks_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `p2p_users`
--
ALTER TABLE `p2p_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `payment_orders`
--
ALTER TABLE `payment_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `staking_orders`
--
ALTER TABLE `staking_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
