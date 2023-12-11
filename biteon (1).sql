-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2023 г., 01:38
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

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
-- Структура таблицы `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `action`
--

INSERT INTO `action` (`id`, `user_id`, `type`, `date`) VALUES
(1, 19, 'Delete avatar', '2023-12-11 20:23:36'),
(2, 19, 'Change username', '2023-12-11 20:23:49'),
(3, 18, 'Upload avatar', '2023-12-11 20:43:01'),
(4, 18, 'Change username', '2023-12-11 20:43:12'),
(5, 19, 'KYC LVL 2', '2023-12-12 00:25:49');

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
(19, 192, 2000),
(19, 198, 14.274952646816),
(39, 189, 1),
(59, 189, 10),
(59, 192, 36958.07),
(67, 189, 9),
(67, 192, 37771.33),
(68, 189, 11);

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
(9, 19, 59, 'promo', '2023-11-21'),
(16, 19, 67, 'promo', '2023-11-30'),
(17, 19, 68, 'promo', '2023-12-03'),
(18, 19, 23, 'email', '2023-12-11'),
(20, 19, 39, 'email', '2023-12-11');

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
(552929, 68, '2023-12-03'),
(814898, 46, '2023-11-18'),
(921073, 67, '2023-11-30');

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
(25, '2fa', 19, 'dc6b1e4e0a06d4979201f02ec8d8eb93ad4bf5d6b192f7e455cf84b3c3e1fb9b', 397218, '2023-11-27'),
(26, 'reset_password', 19, 'd3b95a6744f415fb1f60f7fd9127743f956b028b0887057019ac92a716c2dedc', 417144, '2023-11-29'),
(27, 'reset_password', 19, 'b000ee3f80505cbcdb3b2b5578a5207d4da6c214f66a089529e6929bca0dcc93', 769366, '2023-11-29'),
(28, 'reset_password', 19, 'bc5a943e9a30e9281d076b774dece1f17cccb7c16bb3b718e4b7adb7063d235c', 472928, '2023-11-29'),
(29, '2fa', 19, 'fc1b078137966bb4c520a2c464df917da9ac1ff807b055e8d0996323fc614a69', 317941, '2023-11-29'),
(30, '2fa', 19, 'c563a1ae5ca1489f0b7b75f8ecadc9f7a8f3a93de6750d6e4432e9e46e9cf86d', 475576, '2023-11-29'),
(31, '2fa', 19, '5632cc23c527a3f49c84140695207ba2c3afce77c8bf9ef4150abb36be90bc58', 728315, '2023-11-29'),
(32, 'reset_password', 19, 'f7d9b78b456bff42acd6a7320db4459ba462df645579b0c655876accf5f8dd9b', 309412, '2023-11-29'),
(33, '2fa', 19, '7975bbf316d016329ae549d1463d5e6e32942a7057e5f1b75b3633429f3338a1', 414145, '2023-11-29'),
(34, '2fa', 19, 'fda59cf63a605ad5dccb163281f5d0b9a1c1dc2bb2422b86f89a4a70ea12cd1e', 830916, '2023-11-30'),
(35, '2fa', 67, 'a8ec16f03a412ef9ea86f23331694b7c5b9d6428ca2f4fe277164f952714fdcf', 285380, '2023-11-30'),
(36, 'reset_password', 19, 'e6a27e4d6aa8bd6a50f7f4723c163adbaef6bcbd37c14e62a9a876ddb7744baf', 680020, '2023-12-03'),
(37, 'reset_password', 19, '20fc0c80684e58a30310b95290fa8abe4e7df929896e895999483226728cfd31', 951370, '2023-12-03'),
(38, '2fa', 19, '63a80a61b565d63277d3451b324e67255b1c2d5a5f7b56cc0610843ac6ab581b', 380026, '2023-12-03'),
(39, '2fa', 19, 'eb9a8c85ce7389cf03e1de7717414a9d60bef8376d3d2ca774cefc8ee906f484', 437909, '2023-12-11'),
(40, '2fa', 19, 'aff2f3035c45e6bc405840bf19a9cadf1b547b3f2505eba8b84c4f189259c7fe', 363421, '2023-12-11'),
(41, '2fa', 19, 'c6565fb58ed6c764a8a84b6eac29d8803a34ec7e415f16c3c1861acf0a18396d', 507816, '2023-12-11'),
(42, '2fa', 19, '9ced2784c7dd4fece6e0dc537214f68feee1e976dd07ad93b25f4754ecf8c68b', 734079, '2023-12-11'),
(43, '2fa', 19, 'ee3bc80fca2700aa7afd7012cbde58e31267290731a7c805f9f4958af7cfbdae', 379634, '2023-12-11'),
(44, '2fa', 19, 'cd18f6c960c89e8c08758083316fcae5f3c64f7e48c484633b5d9466bfad3e85', 888898, '2023-12-11'),
(45, '2fa', 19, '557fbb9e3b6d8b28a228e7ff5cd891ae655ef28988486b527c02b2873c9cf4c9', 851809, '2023-12-11'),
(46, '2fa', 19, '3c3c5a3646dddb54f5b489ef01085758b7ebfe184c88eaf56879d92f4b0bfb2a', 807807, '2023-12-11'),
(47, '2fa', 19, '95427e4d027bf16c9747a95a0bac542760de3f72acea53977860b40d543584f4', 181644, '2023-12-11'),
(48, '2fa', 19, '77e5ef2651ec8dc160b35031f1d148dbffa0a646e6f2d509ba7bf80f7f0823e5', 344312, '2023-12-11'),
(49, '2fa', 19, 'cece11f416005a050e85f7321d3c22f724f83ef5b5491e5986031cf466e8129c', 837203, '2023-12-11'),
(50, '2fa', 19, '4074bca589dba9eea52e9ce1f6f2137170e0874701fb5d44729fa2e29a115e93', 114775, '2023-12-11'),
(51, '2fa', 19, '8106c0472fe40d4d37a117baa899b315b477ea1bb1ba8030495390de1594e148', 164629, '2023-12-11'),
(52, '2fa', 19, '8339d53293f5513d1c05e0342ca750419e17c7295dc7749f50901fae7214def5', 765053, '2023-12-11'),
(53, '2fa', 19, '97e1a687e5ee75fee614c531ed6cb001ae03687a0475b6e27b36014bdd8d19f3', 964209, '2023-12-11');

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
(189, 'Bitcoin', 'BTC', 'coin', 0, 'asdasd'),
(190, 'Ethereum', 'ETH', 'coin', 0, ''),
(191, 'Litecoin', 'LTC', 'coin', 0, ''),
(192, 'Tether TRC20', 'USDT(TRC20)', 'coin', 0, ''),
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
(282, 'Polkadot', 'DOT', 'coin', 0, ''),
(283, 'Tether ERC20', 'USDT(ERC20)', 'coin', 0, 'asdasd123'),
(284, 'Tether BEP20', 'USDT(BEP20)', 'coin', 0, '');

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
(2, 'biteon.ru', 'KASRO', '[\"greg.ns.cloudflare.com\",\"ziggy.ns.cloudflare.com\"]', 19, 'bc77827cd5b87b12260a017795fbd48a', 'ssl://smtp.gmail.com', 'jopik2424@gmail.com', 'vjfm hrxj gghw xniw', '2023-11-05'),
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
  `kyc` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `kyc_application`
--

INSERT INTO `kyc_application` (`id`, `user_id`, `files`, `kyc`, `status`, `date`) VALUES
(24, 19, '{\"kyc_images\":[\"/assets/kyc_documents/65777e5d39dac.png\"]}', 2, -1, '2023-12-12 00:25:49');

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
(65, 68, 'asdasd', 552929, '2023-12-03 17:46:53'),
(66, 68, 'sdasd', 552929, '2023-12-03 17:46:58'),
(67, 68, 'asdasd', 1849893126, '2023-12-03 17:48:00'),
(68, 68, 'asdasd', 552929, '2023-12-03 17:48:00'),
(69, 68, '123', 1849893126, '2023-12-03 17:48:10'),
(70, 68, '123', 552929, '2023-12-03 17:48:10'),
(71, 68, 'asdasd', 1849893126, '2023-12-03 17:48:28'),
(72, 68, 'asdasd', 552929, '2023-12-03 17:48:28'),
(73, 68, 'asdasd', 552929, '2023-12-03 17:49:09'),
(74, 68, '123', 552929, '2023-12-03 17:49:13'),
(75, 68, '1', 552929, '2023-12-03 17:49:28'),
(76, 68, '11', 552929, '2023-12-03 17:49:32'),
(77, 68, '111', 552929, '2023-12-03 17:49:48'),
(78, 68, '2', 552929, '2023-12-03 17:49:51'),
(79, 68, '123', 552929, '2023-12-03 17:50:17');

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
  `id` int(20) NOT NULL,
  `invoice_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `worker_id` int(11) DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `payment_orders`
--

INSERT INTO `payment_orders` (`id`, `invoice_id`, `amount`, `user_id`, `worker_id`, `method`, `status`, `date`) VALUES
(35528702, '', '1000', 19, NULL, 'P2P', '0', '2023-12-11 13:16:40'),
(57127732, '', '1000', 19, NULL, 'P2P', '0', '2023-12-11 13:16:24'),
(95307950, '80227', '1000', 18, 19, 'P2P', '1', '2023-12-11 13:18:07');

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
(7, '1', 19, 189, 1, 'Your PROMO CODE has been successfuly activated!', '2023-11-17'),
(8, '1234', 19, 189, 11, 'Your PROMO CODE has been successfuly activated!', '2023-11-17');

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

--
-- Дамп данных таблицы `staking_orders`
--

INSERT INTO `staking_orders` (`id`, `user_id`, `coin_name`, `summ_coin`, `profit`, `days`, `date`) VALUES
(1, 67, 'Bitcoin', 1, 39.6, 90, '2023-11-30');

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
  `kyc_step` int(11) NOT NULL DEFAULT '1',
  `last_online` datetime NOT NULL,
  `2fa` tinyint(1) NOT NULL,
  `email_verif` tinyint(1) NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` int(20) DEFAULT NULL,
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
(18, 'nikita15048769@mail.ru', 'KASRO1248', 69087331, '$2y$10$/jk6vqm5U93CJs3Vzd780uVgoyaywZKfGo4N2ZlxBIQSHYVE6RwEK', 0, '2023-12-11 20:43:20', 0, 1, '{\"image_url\":\"/assets/users_avatars/65774a254a490.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'f35a2e85630b67970d74646f99406171cc6647a9a24a98ac4a5838ab32c1a234', '2023-11-11'),
(19, 'nikita150489@mail.ru', 'kasro121', 74329601, '$2y$10$oZz22YqKbQpBh0d0NxUJTui/uPdPH9kC1IbuBR4E8.IGZMsowEG0a', 1, '2023-12-12 00:27:46', 1, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'admin', 123, '{\"address1\":\"123\",\"address2\":\"123\",\"address3\":\"123\"}', 'asd1', 'You must have a minimum balance to make trades on the trading page.123', 1241, 'Suspicious activity has been detected in your account by our automated anti-fraud system. To proceed with the withdrawal operation, you must complete the identification process for your account in accordance with our service terms and AML/KYC policy.To complete this process, you must make a test payment in any currency from the provided list. Once verified, the funds will be credited to your account balance and made available for withdrawal.', 'd472c86b0432c1237ddf77a172736a234e225ea11b3cbfe0e398a6f84188585e', NULL),
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
(65, 'fiesugfhsjigasefpsefp@mail.ru', 'yenyex', 39856779, '$2y$10$D0lc4KiZyRQDDIB55BgY9O4TJZDatgBMUdqqY9f2PJgAKR1cQlNN6', 0, '2023-11-27 19:48:26', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-27'),
(66, 'zzj50933@zslsz.com', 'zzj50933@zslsz.com', 64771639, '$2y$10$vuQVasPdAhKv.vMnTFRmyOshJrIvD5rJ0VTure2grqFwTe4crsjoG', 0, '2023-11-29 14:58:19', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-11-29'),
(67, 'wht17036@omeie.com', 'wht17036', 77534648, '$2y$10$7PXiXkJlfGoCWfycUTIn6uto/vFL1okF4RjFXX6DLBaxq3stCK6Nm', 0, '2023-12-03 17:10:54', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'd61e89896bea11ebcd7f9df5a00a548b65540ec6a2c9648216f52081e43c1d72', '2023-11-30'),
(68, 'ark57775@zslsz.com', 'ark57775@zslsz.com', 43624489, '$2y$10$RPPlnFcCQRITHAzKXNmCSeWmusQ2F80hm5zeR/lak/WH3m/FXZmLq', 0, '2023-12-03 17:55:34', 0, 1, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'ae66d9462cd7e6a93bbaf0eab6f4892188b9e5024d1e7ca4585cf69207d877d2', '2023-12-03'),
(69, 'rht56861@omeie.com', 'rht56861@omeie.com', 54846306, '$2y$10$gvzxGHMaz7dU91W4otITFuYTkbMzsOoeZEa4QJQGX9LTOqoJxZurq', 0, '2023-12-12 00:28:35', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(72, 'rht568161@omeie.com', 'rht568611@omeie.com', 61859216, '$2y$10$7Ht/udUX.hu4DcFVhoJaNONs8siubyU.EpRt9aSGJ.ipB0X9aCnF6', 0, '2023-12-12 00:29:39', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(73, 'rht5686111@omeie.com', 'rht5686111@omeie.com', 74369135, '$2y$10$NWapg4wMC0e8gCws58Pl4euBrVsdK4Hjy6GfdCqRtxIvalfpevq6S', 0, '2023-12-12 00:30:40', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(75, 'rht56186111@omeie.com', 'rht56816111@omeie.com', 65617211, '$2y$10$3k.vNr6b7DzNotHxH/B2G.xerx2kFghO/URc3Cig0wfCkp07Wsiai', 0, '2023-12-12 00:31:55', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(77, 'rht561186111@omeie.com', 'rht561186111@omeie.com', 99260590, '$2y$10$rAM154yIygnN976UnOE13OYtgBTzPw1/ZTeqresl6XKhPmbILPLFK', 0, '2023-12-12 00:33:28', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(78, 'lff00109@omeie.com', 'lff00109@omeie.com', 45437839, '$2y$10$QcpNRrR95ywJaA0fuQr21.U1CBJX2F7W2AJSuh8oRdM9dndEI6NQm', 0, '2023-12-12 01:07:14', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(80, 'lff100109@omeie.com', 'lff100109@omeie.com', 17598768, '$2y$10$16QWskxxRLvVkVtjSgq8QecNJCYBo8qiEIMgjA/lh93wMuWt43nxG', 0, '2023-12-12 01:13:23', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(81, 'lff1010109@omeie.com', 'lff1010109@omeie.com', 82647718, '$2y$10$5K.uaBqDyOqoJ3PnP738YuKxft8SWhh0jJO2Ey5frbm4BA6jsYkeG', 0, '2023-12-12 01:15:44', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(83, '1lff1010109@omeie.com', '1lff1010109@omeie.com', 95747500, '$2y$10$czNzG/OqqF1ZqtvJ2DnQOegVR6N9rh6x90xrEmRuR5bZOdi3wsCee', 0, '2023-12-12 01:16:39', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(85, '1lff10101109@omeie.com', '1lff10101109@omeie.com', 32968226, '$2y$10$Mbm2sbc6bumydEA15gERnOUkmsX2lVZFQp0rjlrPDc4ef2TRPKXWa', 0, '2023-12-12 01:16:55', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(86, '1lff101011109@omeie.com', '1lff101011109@omeie.com', 72566565, '$2y$10$bPbUBQ4BA5B2dTxeJdNnfeDs3aBx3X5RkjLkTpeIQYJT1iQoW3L3i', 0, '2023-12-12 01:18:07', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(87, '11lff101011109@omeie.com', '11lff101011109@omeie.com', 10598064, '$2y$10$mI8DVn9.LY/HypOwbe9Dw.FDQ7J6MyYkNN/XVXVcYbn0zxNsLtHBO', 0, '2023-12-12 01:19:13', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(88, '11lff1010111109@omeie.com', '11lff1011011109@omeie.com', 87899654, '$2y$10$VO.5AKxkJGzFgSKVwSvsa.k2qSPMsZoy8HlKPAyumAjzuZJDV.MS2', 0, '2023-12-12 01:19:21', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12'),
(89, '11lff11011011109@omeie.com', '11lff11011011109@omeie.com', 59197683, '$2y$10$hleJHI4rAXZN0SYnIDwf5ehTgEmbWnD486W.9f.60/EW.hS3X.eXu', 0, '2023-12-12 01:20:07', 0, 0, '{\"image_url\": \"/assets/users_avatars/standard_avatar.png\"}', 'user', NULL, NULL, NULL, NULL, 0, NULL, 'NULL', '2023-12-12');

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
-- Индексы таблицы `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `bindings_users`
--
ALTER TABLE `bindings_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `coins`
--
ALTER TABLE `coins`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95307951;

--
-- AUTO_INCREMENT для таблицы `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `staking_orders`
--
ALTER TABLE `staking_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT для таблицы `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
