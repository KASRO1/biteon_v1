-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 19 2023 г., 03:18
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

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
  `status` text NOT NULL,
  `token` text NOT NULL,
  `spot_trade` text NOT NULL,
  `futures_trade` text NOT NULL,
  `withdraw` text NOT NULL
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
(19, 189, 3.2851971333901),
(19, 190, 3.5990873438206),
(19, 192, 4383042.44),
(19, 198, 14.274952646816);

-- --------------------------------------------------------

--
-- Структура таблицы `bindings_users`
--

CREATE TABLE `bindings_users` (
  `id` int(11) NOT NULL,
  `user_id_worker` int(11) NOT NULL,
  `user_id_mamont` int(11) NOT NULL,
  `type` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bindings_users`
--

INSERT INTO `bindings_users` (`id`, `user_id_worker`, `user_id_mamont`, `type`, `date`) VALUES
(4, 19, 41, 'id', '2023-11-17'),
(7, 19, 18, 'id', '2023-11-17'),
(8, 19, 46, 'email', '2023-11-18');

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
(814898, 46, '2023-11-18');

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `type_code` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `token` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `codes`
--

INSERT INTO `codes` (`id`, `type_code`, `user_id`, `code`, `token`, `date`) VALUES
(6, 'reset_password', 19, 881610, '', '2023-10-29'),
(7, 'reset_password', 19, 190626, '', '2023-10-29'),
(8, '2fa', 19, 565576, '29b4947cff9fbd64e2cba53afb2a52734f45d74e5d7887f3955c50c55f7e7a06', '2023-11-19'),
(9, '2fa', 19, 467988, '12b9cafadf15a4fd1c4b0904159f59d8173c1def7fb4f981a876d65b0a67f140', '2023-11-19'),
(10, '2fa', 19, 449697, '07cee16dcdbb7b0067f43b7873ee904040be0bb681ea019fdbb15425744034b8', '2023-11-19'),
(11, '2fa', 19, 480525, '0cb68858b453650412fd1ef4f0db036da9215b3bed3853e8ba71d6b3d4b0d85e', '2023-11-19'),
(12, '2fa', 19, 124385, 'a8e966ac92d14ee7c063d29a4b09eeab15c1469e1ffa7af716f1603a6217cb51', '2023-11-19'),
(13, '2fa', 19, 468570, '3aa938950a737c04bddec202aae148dc2b5670f3e1559d740d9aecbb0f9b9549', '2023-11-19'),
(14, '2fa', 19, 198607, '11992a1d086f060126925db4a00cd12cb5c5653827b5497127b4d2ed88537818', '2023-11-19'),
(15, '2fa', 19, 501139, '86e96300dca6d437ee78de151c019ba50490d2fdf001c01c5eea5be6fc7db876', '2023-11-19'),
(16, '2fa', 19, 321475, 'a6d7c4340bbc1f0a843da1674964a7718d5dc8b5dbd6b50132659f444d309c96', '2023-11-19'),
(17, '2fa', 19, 911337, '3a112e3b7e9f12b9d4e4f2503b7c314c1aa2ddf324c43f69b7357708b1262abe', '2023-11-19'),
(18, '2fa', 19, 672953, '59da66f011c438f05f4f77817439b80bc5231a5739246ba86147bff6b9c721b9', '2023-11-19');

-- --------------------------------------------------------

--
-- Структура таблицы `coins`
--

CREATE TABLE `coins` (
  `id_coin` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `simple_name` varchar(12) DEFAULT NULL
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
-- Структура таблицы `deposits`
--

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) DEFAULT NULL,
  `mamont_id` int(11) NOT NULL,
  `amount_usd` double NOT NULL,
  `type` text NOT NULL,
  `domain` text DEFAULT NULL,
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
  `domain` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `domain_ns` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `zone_id` text NOT NULL,
  `stmp_host` text NOT NULL,
  `stmp_email` text NOT NULL,
  `stmp_password` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `domains`
--

INSERT INTO `domains` (`id`, `domain`, `title`, `domain_ns`, `user_id`, `zone_id`, `stmp_host`, `stmp_email`, `stmp_password`, `date`) VALUES
(2, 'biteon.ru', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', 'ssl://smtp.gmail.com', 'jopik2424@gmail.com', 'vjfm hrxj gghw xniw', '2023-11-05'),
(3, 'localhost', 'KASRO-DOMEN', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', 'ssl://smtp.gmail.com', 'jopik2424@gmail.com', 'vjfm hrxj gghw xniw', '2023-11-05');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `kyc_application`
--

INSERT INTO `kyc_application` (`id`, `user_id`, `files`, `status`, `date`) VALUES
(13, 46, '{\"kyc_images\":[\"/assets/kyc_documents/6558609932616.jpg\",\"/assets/kyc_documents/655860993c703.jpg\"]}', 0, '2023-11-18 09:58:33');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_text` text NOT NULL,
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
(47, 19, '123', 814898, '2023-11-18 17:07:05');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_order` text NOT NULL,
  `type_trade` text NOT NULL,
  `date` datetime NOT NULL,
  `date_close` datetime DEFAULT NULL,
  `coin_id` text NOT NULL,
  `open_order_price` double NOT NULL,
  `close_order_price` double NOT NULL,
  `amount` double NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type_order`, `type_trade`, `date`, `date_close`, `coin_id`, `open_order_price`, `close_order_price`, `amount`, `status`) VALUES
(16, 19, 'buy', 'market', '2023-11-13 12:20:13', '2023-11-13 12:20:15', '198', 168.58, 168.58, 1, 'close'),
(17, 19, 'buy', 'market', '2023-11-13 12:20:14', '2023-11-13 12:20:17', '198', 168.58, 168.58, 1, 'close'),
(18, 19, 'buy', 'market', '2023-11-13 12:20:55', NULL, '198', 168.58, 168.58, 24121, 'open'),
(19, 19, 'buy', 'market', '2023-11-13 12:21:02', '2023-11-13 12:21:03', '198', 168.58, 168.58, 2412, 'close'),
(20, 19, 'buy', 'limit', '2023-11-17 08:57:42', '2023-11-18 22:35:25', '189', 36228.3, 12, 12, 'close'),
(21, 19, 'sell', 'limit', '2023-11-17 09:09:48', '2023-11-18 22:35:26', '189', 36318.3, 12, 12, 'close'),
(22, 19, 'sell', 'limit', '2023-11-17 09:09:59', '2023-11-18 22:35:27', '189', 36318, 12, 12, 'close'),
(23, 19, 'buy', 'market', '2023-11-17 11:18:51', '2023-11-17 11:18:52', '189', 36204.7, 36204.7, 12, 'close'),
(24, 19, 'buy', 'market', '2023-11-17 11:25:02', '2023-11-17 11:25:03', '189', 36179.3, 36179.3, 12, 'close'),
(25, 19, 'buy', 'market', '2023-11-17 11:25:14', '2023-11-17 11:25:15', '189', 36179.3, 36179.3, 12, 'close'),
(26, 19, 'buy', 'market', '2023-11-17 11:25:27', '2023-11-17 11:25:28', '189', 36179.3, 36179.3, 1, 'close'),
(27, 19, 'buy', 'limit', '2023-11-17 11:26:04', '2023-11-18 22:35:28', '189', 36179.7, 36180, 12, 'close'),
(28, 19, 'buy', 'limit', '2023-11-17 11:27:27', NULL, '189', 36163.5, 40000, 12, 'open'),
(29, 19, 'buy', 'limit', '2023-11-17 11:27:27', NULL, '189', 36137.2, 40000, 12, 'open'),
(30, 19, 'sell', 'limit', '2023-11-18 22:32:20', '2023-11-18 22:35:29', '189', 36567.8, 12, 1, 'close'),
(31, 19, 'sell', 'limit', '2023-11-18 22:32:23', '2023-11-18 22:35:30', '189', 36553.2, 12, 1, 'close'),
(32, 19, 'sell', 'limit', '2023-11-18 22:32:24', '2023-11-18 22:35:31', '189', 36553.2, 12, 1, 'close'),
(33, 19, 'sell', 'limit', '2023-11-18 22:32:24', '2023-11-18 22:35:31', '189', 36553.2, 12, 1, 'close'),
(34, 19, 'sell', 'limit', '2023-11-18 22:32:25', '2023-11-18 22:35:33', '189', 36553.2, 12, 1, 'close'),
(35, 19, 'buy', 'limit', '2023-11-18 22:32:31', '2023-11-18 22:35:33', '189', 36584.3, 1, 12, 'close'),
(36, 19, 'buy', 'limit', '2023-11-18 22:33:08', '2023-11-18 22:35:34', '189', 36583.5, 12, 12, 'close'),
(37, 19, 'sell', 'limit', '2023-11-18 22:33:30', '2023-11-18 22:35:35', '189', 36583.5, 12, 12, 'close'),
(38, 19, 'sell', 'limit', '2023-11-18 22:33:38', '2023-11-18 22:35:36', '189', 36575.5, 13, 13, 'close'),
(39, 19, 'sell', 'limit', '2023-11-18 22:33:41', '2023-11-18 22:35:37', '189', 36575, 13, 13, 'close'),
(40, 19, 'sell', 'limit', '2023-11-18 22:33:41', '2023-11-18 22:35:38', '189', 36575, 13, 13, 'close');

-- --------------------------------------------------------

--
-- Структура таблицы `p2p_users`
--

CREATE TABLE `p2p_users` (
  `id` int(11) NOT NULL,
  `user_avatar` text NOT NULL,
  `username` text NOT NULL,
  `payment_method` text NOT NULL,
  `spread` double NOT NULL,
  `limits` text NOT NULL
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
  `payment_id` text NOT NULL,
  `status` text NOT NULL,
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
  `promo` varchar(22) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `text` text NOT NULL,
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
-- Структура таблицы `staking_orders`
--

CREATE TABLE `staking_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin_name` text NOT NULL,
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
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ref_code` int(11) NOT NULL,
  `password` text NOT NULL,
  `kyc_step` int(11) NOT NULL DEFAULT 0,
  `last_online` datetime NOT NULL,
  `2fa` tinyint(1) NOT NULL,
  `email_verif` tinyint(1) NOT NULL,
  `avatar` text NOT NULL,
  `user_status` text NOT NULL,
  `telegram` int(11) DEFAULT NULL,
  `payment_address` text DEFAULT NULL,
  `withdraw_error` text DEFAULT NULL,
  `trading_error` text DEFAULT NULL,
  `verification_error` text DEFAULT NULL,
  `auth_token` text NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `ref_code`, `password`, `kyc_step`, `last_online`, `2fa`, `email_verif`, `avatar`, `user_status`, `telegram`, `payment_address`, `withdraw_error`, `trading_error`, `verification_error`, `auth_token`, `created_date`) VALUES
(18, 'nikita15048769@mail.ru', 'KASRO124', 69087331, '$2y$10$/jk6vqm5U93CJs3Vzd780uVgoyaywZKfGo4N2ZlxBIQSHYVE6RwEK', 0, '2023-11-11 23:33:57', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, '0f450a652793aedd3844f18108308bbe84cba3082ea291bc2124504fe68ca6f3', '2023-11-11'),
(19, 'nikita150489@mail.ru', 'kasro12', 74329601, '$2y$10$u4IK9yVAaqgZ4TTtI53nLuPESX.7PvDNXUwwxUB666uLcZTl.8Fny', 0, '2023-11-19 03:18:00', 1, 1, '{\"image_url\":\"/assets/users_avatars/6553abd190f07.png\"}', 'worker', 1849893126, NULL, NULL, NULL, NULL, 'd7e76e1fec852475649f1e8d19d0d749149631512c88671f557ed469a3d8b032', NULL),
(22, 'kasro@vk.com', 'limin123', 65311432, '$2y$10$scS.1sHuJ0K7rwjgkzxt8eUJRlEdIjUwKoDGSRX0AQdKOspdMwboC', 0, '2023-11-14 15:11:18', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'worker', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-14'),
(23, 'vxz47682@zslsz.com', 'asdad123', 73409613, '$2y$10$gjMRwo/BXgTOPx22DYkbyeRFZgj23PshzaNVp5rZz/MZggEVzSxzG', 0, '2023-11-14 17:17:01', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-14'),
(39, 'asdasd@mail.ru', 'asdasd', 16484404, '$2y$10$rhW6VDm4dgVKQ7oNDpelSOcqX5U6n2O4Dkr1k2gG.jIXglIIHng2G', 0, '2023-11-17 15:27:17', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-17'),
(40, 'asd1asd@mail.ru', 'asdas1d', 24540522, '$2y$10$y0gOWrYuw0TNu7R/tjLLBuXRPcjB8meEwyBYSqYOGTnTM2Bc1hzbW', 0, '2023-11-17 15:28:27', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-17'),
(41, 'asd1a1sd@mail.ru', 'asdas11d', 12908971, '$2y$10$nJW1PjSC5fVrHA09DpSZHOTBZb8N6zQcfSpgz4QkVSyAEPomiOt1a', 0, '2023-11-17 15:36:22', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-17'),
(42, '1asd1a1sd@mail.ru', 'asd1as11d', 35286999, '$2y$10$Bs4OwtxZC6F9zjeRDoiyjOBDkgdyYSCG3Sn0Edm9HEiJslPIS7Wj6', 0, '2023-11-17 15:37:13', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-17'),
(44, '1asd1a11sd@mail.ru', 'asd1a1s11d', 16809882, '$2y$10$PBeuV7BhvGAEPDADPhgna.wfFQ2MGzO9ZDLlWk/sMVVrTZv8tdS9q', 0, '2023-11-17 15:37:32', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-17'),
(45, 'kasro1234@vk.com', 'kasro1234', 49144580, '$2y$10$i6xTnj14HYt6FHsCH17tHOciOCvhdQ0Oy8vYRuylRMPM06UTqL3Om', 0, '2023-11-17 15:56:04', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, 'NULL', '2023-11-17'),
(46, 'fqk78661@zbock.com', 'fqk78661', 14191481, '$2y$10$2yf8YO/2co8Q.YblluHvouUc3.Aglz2ph9jINPSRDmPDBN9dY0PYa', 0, '2023-11-18 17:06:58', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, NULL, '1446fe48353aa0056e81f837f1ac1d3de95f2434cf45190c5dc744af3e96ada3', '2023-11-17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `bindings_users`
--
ALTER TABLE `bindings_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `kyc_application`
--
ALTER TABLE `kyc_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
-- AUTO_INCREMENT для таблицы `staking_orders`
--
ALTER TABLE `staking_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
