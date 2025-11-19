-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2025 г., 12:59
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parasatcenter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `name`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Проектная деятельность', '<p>wretetwetwe</p>', 'BTFHexFj0YFBoRwOIG3ghuQFDLaMvNxa.png', '2025-11-19 05:40:40', '2025-11-19 05:40:40');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `firms`
--

CREATE TABLE `firms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `firms`
--

INSERT INTO `firms` (`id`, `name`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Орталық Азия инновациялық университеті / Центрально-Азиатский инновационный университет', '137 Buckridge Forge\nCelestinomouth, SC 28421-5439', '2024-01-12 18:30:25', '2024-03-29 02:14:53', '2024-03-29 02:14:53'),
(2, 'Padberg-Update', '11617 Reinger Branch\nNorth Payton, NC 98463', '2024-01-15 13:19:02', '2024-03-28 03:24:25', '2024-03-28 03:24:25'),
(3, 'Prosacco, Smitham and KihnCompany_3', '4131 Maurice Drive Apt. 427\nChristiansenberg, NJ 36110', '2024-01-20 14:37:17', '2024-03-28 03:24:34', '2024-03-28 03:24:34'),
(4, 'Marks-SchillerCompany_4', '78350 Rutherford Square Suite 133\nEmmaleeport, TX 29980', '2024-01-19 11:13:41', '2024-04-01 22:58:06', '2024-04-01 22:58:06'),
(5, 'Turner-CronaCompany_5', '953 Opal Orchard\nSouth Camilaland, WY 37236', '2024-01-13 04:59:29', '2024-04-01 22:58:04', '2024-04-01 22:58:04'),
(6, 'Keebler IncCompany_6', '2334 Cummings Island\nNew Dean, DC 63176', '2024-01-19 15:27:32', '2024-04-01 22:58:03', '2024-04-01 22:58:03'),
(7, 'Nikolaus, Wiegand and HermistonCompany_7', '428 Ayana Valleys Apt. 524\nRaynorbury, AZ 91029', '2024-01-22 07:04:09', '2024-04-01 22:58:01', '2024-04-01 22:58:01'),
(8, 'Bauch IncCompany_8', '43575 Jennings Glen\nSouth Easter, ID 32192-8448', '2024-01-11 13:46:55', '2024-04-01 22:57:59', '2024-04-01 22:57:59'),
(9, 'Rolfson, Walker and DoyleCompany_9', '610 Layla Freeway\nWest Hortense, ME 89361-8608', '2024-01-13 19:23:55', '2024-04-01 22:57:56', '2024-04-01 22:57:56'),
(10, 'Оқу Орталығы \"Айзере\"', 'Қызылорда облысы, Қармақшы ауданы Қармақшы 31', '2024-02-12 23:13:47', '2024-02-12 23:13:47', NULL),
(11, 'Шымкент университет', NULL, '2024-03-28 03:24:06', '2024-03-28 03:24:06', NULL),
(12, 'Центрально-Азиатский Инновационный Университет', NULL, '2024-04-01 22:57:47', '2024-04-01 22:57:47', NULL),
(13, 'ТОО \"Tamos space school\"', NULL, '2024-07-18 05:14:27', '2024-07-18 05:14:27', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_11_17_153002_create_courses_table', 1),
(6, '2025_11_17_153135_create_firms_table', 1),
(7, '2025_11_17_153239_create_services_table', 1),
(10, '2025_11_17_153301_create_students_table', 2),
(12, '2025_11_17_183658_add_deleted_at_to_users_table', 3),
(13, '2025_11_18_073416_add_deleted_at_to_services_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `desc`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Проектная деятельность', '<p>sgasgdgfagag</p>', '5HN9mC2kRsc8IKpLm6k3Al3ViJrwxYsz.webp', '2025-11-18 11:57:58', '2025-11-19 02:13:35', '2025-11-19 02:13:35'),
(2, 'Аудит в области пожарной безопасности', '<p>&lt;p&gt;<span style=\"color: black; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; text-align: justify;\">Прежде\r\nвсего, аудит в области пожарной безопасности – это забота о жизни и здоровье\r\nлюдей. Поэтому главной целью его проведения является повышение уровня\r\nбезопасности и защищенности населения, предотвращение повреждений или потери\r\nсобственности.&nbsp;</span><span style=\"font-size: 12pt; text-align: justify; font-family: &quot;Times New Roman&quot;, serif; color: black;\">Аудит\r\nпожарной безопасности — это комплекс мероприятий, направленный на приведение\r\nобъекта в соответствие с требованиями пожарной безопасности.</span><span lang=\"KZ\" style=\"font-size: 12pt; text-align: justify; font-family: &quot;Times New Roman&quot;, serif; color: black;\">&nbsp;</span><span style=\"font-size: 12pt; text-align: justify; font-family: &quot;Times New Roman&quot;, serif; color: black;\">Проводится\r\nон третьей стороной, независимой от организации. Осуществлять аудит имеет право\r\nкак должностное лицо, осуществляющий государственный контроль в области\r\nпожарной безопасности, так и независимый центр в области пожарной безопасности.</span><span style=\"font-size: 1rem;\">&lt;/p&gt;</span></p>', 'psWdjoXjWH0JHDQl6kidxC0mF6SoGmL4.jpg', '2025-11-19 06:18:31', '2025-11-19 06:18:31', NULL),
(3, 'Проведение экспертизы промышленной безопасности', '<p>&lt;p&gt;<span style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; text-align: justify;\">Для любой\r\nорганизации, компании и предприятия, осуществляющей свою деятельность в сфере\r\nопасного промышленного производства, главным из приоритетов является\r\nобеспечение промышленной безопасности, то есть защита промышленных объектов,\r\nработников, людей и прилегающей инфраструктуры от возможных аварий и их\r\nпоследствий. Все они обязаны свести к минимуму потенциальную угрозу для\r\nжизнедеятельности как промышленных объектов, так и человека. В этом случае\r\nобязательным является обеспечение рабочего состояние всевозможного технического\r\nоборудования на промышленных объектах. Экспертиза промышленной безопасности\r\nустанавливает уровень соответствия техническим нормативам технических\r\nустройств.</span></p>\r\n\r\n<p><span style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; text-align: justify;\">Еще одним из\r\nнаправлений экспертизы промышленной безопасности для опасных промышленных\r\nобъектов, является обследование, диагностирование технического оборудования.</span>&lt;/p&gt;</p>', '63lu3o3BDLTNpLFCiU1wdUEMDS6Lqtfi.png', '2025-11-19 06:43:39', '2025-11-19 06:43:39', NULL),
(4, 'Проведение энергетической экспертизы', '<p>&lt;p&gt;<b style=\"font-size: 1rem;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:\r\nRU\">Энергетическая экспертиза</span></b><span style=\"font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif;\"> – экспертиза,\r\nпроводимая в областях электроэнергетики и теплоэнергетики на соответствие\r\nнормативным правовым актам Республики Казахстан по действующим объектам,\r\nпроектам реконструируемых, модернизируемых и вновь строящихся объектов в\r\nобластях электроэнергетики и теплоэнергетики, а также при расследовании\r\nтехнологических нарушений и производственного травматизма на них в соответствии\r\nс правилами, утвержденными уполномоченным органом.</span></p><p class=\"MsoNoSpacing\"><span style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:RU\"><o:p></o:p></span></p><p>&lt;/p&gt;</p>', '4kqOTuW34CAWc3ycIxrjsTSq93hVFDXF.jpg', '2025-11-19 06:46:48', '2025-11-19 06:46:48', NULL),
(5, 'Проектная деятельность', '<p>&lt;p&gt;<span style=\"color: rgb(10, 10, 10); font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;\">Проектная\r\nдеятельность — это&nbsp;целенаправленная, самостоятельная работа, направленная\r\nна решение конкретной проблемы в ограниченные сроки и с использованием\r\nимеющихся ресурсов.&nbsp;Она предполагает создание конкретного, практического\r\nрезультата (продукта) и включает в себя разработку идеи, планирование,\r\nисследование и реализацию.&nbsp;В образовании этот метод помогает развивать\r\nтворческое мышление, самостоятельность, навыки работы в команде и решения\r\nпроблем.&nbsp;</span></p><p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0A0A0A;mso-ansi-language:RU;mso-fareast-language:RU\"><o:p></o:p></span></p><p>&lt;/p&gt;</p>', 'VhU43JjQ4uU40CP3Arhx8T6J3wEoaciO.jpg', '2025-11-19 06:49:23', '2025-11-19 06:49:23', NULL),
(6, 'Услуги в области охраны окружающей среды', '<p class=\"MsoNoSpacing\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ansi-language:RU\">Природоохранное проектирование<o:p></o:p></span></p><p class=\"MsoNoSpacing\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ansi-language:RU\">Экологический контроль<o:p></o:p></span></p><p class=\"MsoNoSpacing\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ansi-language:RU\">Экомониторинг <o:p></o:p></span></p><p class=\"MsoNoSpacing\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ansi-language:RU\">Производственный мониторинг<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNoSpacing\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ansi-language:RU\">Инвентаризация выбросов парниковых газов и\r\nозоноразрушающих веществ<o:p></o:p></span></p>', 'frVd3ROgKLeig19LJivoETdKUuiCGqxE.jpg', '2025-11-19 06:50:30', '2025-11-19 06:50:30', NULL),
(7, 'Экспертные работы по техническому обследованию надежности и устойчивости зданий и сооружений на технически и технологически сложных объектах первого и второго уровней ответственности', '<p class=\"MsoNoSpacing\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\ncolor:black;mso-themecolor:text1;mso-ansi-language:RU\">Обследование и оценка\r\nтехнического состояния зданий и сооружений</span><span style=\"font-size:14.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-ansi-language:RU\"><o:p></o:p></span></p>', 'l8XLGT4lCtNN44hR0a5vskAHDFuugmAK.jpg', '2025-11-19 06:55:52', '2025-11-19 06:55:52', NULL),
(8, 'Энергоаудит и переподготовка', '<p><b><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCambria;mso-ansi-language:RU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Энергоаудит</span></b><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\nCambria;mso-ansi-language:RU;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">\r\n— это сбор и анализ данных для выявления потенциала энергосбережения ресурсов\r\nэнергопотребления и повышения энергоэффективности деятельности предприятия\r\n(комплекс мер по сокращению затрат на воду, отопление, электроэнергию и другие\r\nтопливно-энергетические ресурсы (ТЭР). Воспользоваться данной услугой могут как\r\nюридические, так и физические лица. Таким образом можно выявить утечки тепла и\r\nпотери электроэнергии.<span style=\"color: black; letter-spacing: 0.1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> </span>Энергоаудит проводится в целях\r\nоценки возможности и потенциала энергосбережения, определения возможностей\r\nповышения энергоэффективности, оценки затрат на реализацию мероприятий по\r\nэнергосбережению и повышению энергоэффективности, подготовки заключения по\r\nэнергосбережению и повышению энергоэффективности или технического отчета по\r\nэнергосбережению и повышению энергоэффективности. </span><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-ansi-language:RU;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA\">Энергоаудит можно сравнить с определением КПД предприятия как системы,\r\nполучающей и использующей энергию с определенным набором неизбежных и\r\nустранимых потерь. На последнем этапе энергоаудита формируются рекомендации для\r\nпрограммы (стратегии и тактики) повышения энергоэффективности как комплекса мер\r\nпо снижению потерь, устранению условий для неизбежных потерь, обращению\r\nмаксимальной доли энергии в полезный оборот с положительными экономическими\r\nпоследствиями</span></p>', 'lo5HiOUjoi7MqQ1H7KQTZNXw8KOXPvlD.jpg', '2025-11-19 06:57:41', '2025-11-19 06:57:41', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `iin` varchar(12) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `firm_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `lastname`, `iin`, `course_id`, `firm_id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Жезтай', '990722400751', 1, 1, 'oiXCSuXEgDNTDtKfQD1Hh7kAIC2fecZt.PDF', '2024-01-21 16:01:26', '2024-02-26 03:53:44', NULL),
(3, 'Молдахметова', '880708402441', 1, 1, '7dBrt4rjBFQpUH0zWF2a5QOexDt5EjEw.PDF', '2024-01-21 19:49:08', '2024-02-26 03:58:56', NULL),
(4, 'Юнусова', '790723401404', 1, 1, '2KSdIfpEIVN1uqiZn2SCTItEcpUVLl7x.PDF', '2024-01-18 16:55:48', '2024-02-26 04:00:56', NULL),
(5, 'Мәлік', '800802400886', 1, 1, 'AhYSTwGvYM8v3feRLt1SlYkLe9hxFF9q.PDF', '2024-01-22 10:24:38', '2024-02-26 04:02:49', NULL),
(6, 'Оспанова', '432331832675', 3, 2, 'oMn0FPcno9i7doRQIDRmQ3iq7wO3c7uW.PDF', '2024-01-22 18:43:58', '2024-02-09 03:04:14', NULL),
(7, 'Ахтаев', '660214300901', 9, 1, 'e4he3Vi6Y8gcEsgeLs0J77p4yRXb4WiV.PDF', '2024-01-12 21:19:59', '2024-02-26 04:04:03', NULL),
(8, 'Кошкарова', '830524400701', 1, 1, 'p346HgGcN8Odd1p9byhdQfFJzXETT3Y5.pdf', '2024-01-24 18:05:31', '2024-02-26 04:05:31', NULL),
(9, 'Нурмахамбетова', '810826400125', 1, 1, 'ZqiLOB1UKYFEwrqBGeVRVZZNrNT1q2lb.pdf', '2024-01-23 13:01:24', '2024-02-26 23:07:32', NULL),
(10, 'Оспанова', '550606401171', 1, 12, '2srgHCG8rYK9spun5c01GXo57VAoaQfT.pdf', '2024-01-20 03:33:34', '2024-04-01 23:00:41', NULL),
(11, 'Оспанов', '530208301049', 1, 12, 'sUXDk977JiJcnd3JtkV3o2keuGOxiTjZ.pdf', '2024-01-22 02:06:30', '2024-04-01 23:20:28', NULL),
(12, 'Арапбаева', '781106400472', 1, 11, '3EWA7EzFHA923n2wMnuJim1bzja2gDkx.pdf', '2024-01-23 16:27:25', '2024-04-10 00:43:57', NULL),
(13, 'Асилбеков', '750314300934', 1, 11, '54crLO7USXi7LePDcx1RYyF0xU2ezwoh.pdf', '2024-01-21 22:33:17', '2024-04-10 00:45:44', NULL),
(14, 'Байдаулетова Гульнур  Омаровна', '820604400417', 1, 11, 'SIqxgtZ7MGxjoJTTi75nZmrSmn8FXaYN.pdf', '2024-01-11 11:30:01', '2024-04-10 00:48:10', NULL),
(15, 'Байтугелов Омар Байтугелович', '481225300420', 1, 11, 'cfmpMN0WeSuDok39uo3iFNMtTfALUBNO.pdf', '2024-01-22 10:58:22', '2024-04-10 00:49:25', NULL),
(16, 'Әбілқасым Айнұр Бұғыбайқызы', '770928401534', 1, 11, 'YC5ZbEdwjrwsXFoKUkYIXhzIBx6U0Dqe.pdf', '2024-01-11 20:11:05', '2024-04-10 00:50:42', NULL),
(17, 'Жадигерова Гулшат Абдимуталиповна', '741025401808', 1, 11, 'qVqH1BJNJA1Bgm2gexG2PauhbqrVUCLk.pdf', '2024-01-21 11:17:46', '2024-04-10 00:52:05', NULL),
(18, 'Иманбаев Алий Асанович', '780224399028', 1, 11, 'b41N93KVEl9Omoi2h84t3z6Oxj9uL9p0.pdf', '2024-01-12 17:27:51', '2024-04-10 00:53:30', NULL),
(19, 'Иманова Гульнар  Акимова', '640717400423', 1, 11, 'WYghknYNUA7zUWehrmBnkjHAbCroY8Fx.pdf', '2024-01-24 05:35:50', '2024-04-10 00:59:38', NULL),
(20, 'Куашбай Саттар', '550524300371', 1, 11, 'hwDZLKzqV1vbLkEYYNsy5vt0pBpK7lrM.pdf', '2024-01-20 05:17:55', '2024-04-10 01:00:49', NULL),
(21, 'Сарыпбекова Нургуль Азимбековна', '820107402253', 1, 11, 'bChqEdMuLO1RlyKx2ATC3aCCwMLgRwMr.pdf', '2024-01-11 21:13:42', '2024-04-10 01:02:17', NULL),
(22, 'Кудайбергенова Дина Манаповна', '730521402760', 1, 11, 'hb8Ks7hXO1k34M8Su5KZxuWGkvY2pvn4.pdf', '2024-01-22 06:39:34', '2024-04-10 01:03:38', NULL),
(23, 'Қалықұлов Қуатбек Мухтарбекович', '650205300396', 1, 11, 'leMvyaD1jFlPaEGT0SL7ymU48IMBu09j.pdf', '2024-01-14 10:16:00', '2024-04-10 01:04:37', NULL),
(24, 'Рысбаева Саттигуль Клышбековна', '640106402795', 1, 11, 'pIG5nCcCDQkx5ppbiXI5EhguAQ7lRsyy.pdf', '2024-01-18 15:56:06', '2024-04-10 01:05:33', NULL),
(25, 'Сабдалина Анар Кияловна', '680923450635', 3, 11, 'kYHf1yZeFh1NXBmkm2pcq9msU4jPwfBs.pdf', '2024-01-13 20:09:03', '2024-04-10 01:06:33', NULL),
(26, 'Садыкбекова Айжаркын Абдразаковна', '690623400510', 1, 11, 'aNSbnkKxRvyaPBT8arW7OGBSJ0jFazl8.pdf', '2024-01-24 20:02:04', '2024-04-10 01:07:24', NULL),
(27, 'Сапарбаева Сауле Абтихаимовна', '781110400226', 1, 11, 'nzpoFrgdqJQQ5gdeL5wxfvxr5pMP5Gtb.pdf', '2024-01-23 10:33:26', '2024-04-10 01:09:29', NULL),
(28, 'Сергазиева Мадина Расылхановна', '791119402749', 1, 11, 'QbEDAAUiTd5XO2mtjToU5RAb5XnFvXJI.pdf', '2024-01-25 00:59:57', '2024-04-10 02:06:02', NULL),
(29, 'Танабаева Гульназ Тулебаевна', '810429400058', 1, 11, 'bLcEOUFalU9MzkhtIZ6rMvXDGBAv5Evs.pdf', '2024-01-19 12:38:40', '2024-04-10 02:22:51', NULL),
(30, 'Умбеталиев Нурдаулет  Алтынсарыевич', '840927300534', 1, 11, 'mTYjHtbvJirnbfJKOBax3DXQBfv1vyhl.pdf', '2024-01-21 10:26:12', '2024-04-10 02:23:55', NULL),
(31, 'Алтынбаева', '790125402729', 1, 1, 'Tsvy1wjgNc41DeCPvLmWiEIwFE2Elcma.pdf', '2024-02-12 23:17:09', '2024-02-12 23:17:09', NULL),
(32, 'Ускенов  Махалбай', '530717399017', 1, 11, 'i8Ua9VaxtjEUpQrHILxEC5BWswinck5Q.pdf', '2024-04-10 02:34:34', '2024-04-10 02:34:34', NULL),
(33, 'Шабанбаева Хашифа Нургалиевна', '311220401305', 1, 11, 'WHvdpXbDaiSrl98jzgefq11ikDxGv3Ya.pdf', '2024-04-10 02:43:18', '2024-04-10 02:43:18', NULL),
(34, 'Шуланбеков Жандос Беркинбаевич', '761011300486', 1, 11, 'sXPcI6bgKdfBpYS08iDk174tLuJmo686.pdf', '2024-04-10 04:58:00', '2024-04-10 04:58:00', NULL),
(35, 'Утемалиева Ғалиябану Скакқызы', '910326401295', 1, 11, 'wISww1fH4oZ72QVcD9qhD5e2wdAAwTrk.pdf', '2024-04-10 05:00:12', '2024-04-10 05:00:12', NULL),
(36, 'Бименов Жумагали Аязович', '600115303233', 1, 11, 'fxYYtkGRozTzIDIc9kX7SJbWKJHyPsPu.pdf', '2024-04-10 05:01:18', '2024-04-10 05:01:18', NULL),
(37, 'Утебаева Шолпан Керимбаевна', '570217400826', 1, 11, 'JOcpQgYBouHcHybQHpYgApUJJRIZb1qY.pdf', '2024-04-10 05:02:16', '2024-04-10 05:02:16', NULL),
(38, 'Тұрлыбай Гүлсінай Сегізбайқызы', '930517402215', 1, 11, 'A3Eo3kCiJ0jyh44M5ErRxVhjki6H2o2v.pdf', '2024-04-10 05:04:55', '2024-04-10 05:04:55', NULL),
(39, 'Тургинбаева Кулжанат Абдраимовна', '700803401908', 1, 11, 'Sg4QwtqQDPwpBcsJsqadZUsM8uUbWyfp.pdf', '2024-04-10 05:06:23', '2024-04-10 05:06:23', NULL),
(40, 'Турарова Жумагуль Сатыбалдиевна', '600827401764', 1, 11, 'Qc4w6MW72AkBaF38Rk0IKeoMD7Pg0yBB.pdf', '2024-04-10 05:07:32', '2024-04-10 05:07:32', NULL),
(41, 'Тлеубергенов Марат Идрисович', '520101311042', 1, 11, 'VQ3S7FHxBJ8htWmKGWy2z76S9UN2PKmz.pdf', '2024-04-10 05:11:36', '2024-04-10 05:11:36', NULL),
(42, 'Таджиханова Камила Ибрагимқызы', '970303401111', 1, 11, 'czNearCxLHewEN7h5A6gDRILZSLhYF4K.pdf', '2024-04-10 05:13:22', '2024-04-10 05:13:22', NULL),
(43, 'Тагаев Нурлыбек Сайдуллаевич', '550528301855', 1, 11, 'dI2v6M6TuVX5CzydJgK6W7q14CO0HnD1.pdf', '2024-04-10 05:14:33', '2024-04-10 05:14:33', NULL),
(44, 'Симова Бибажар Иманбековна', '500501402536', 1, 11, 'neRQExXRF61CB2Vrp1661xV2OtznLSw8.pdf', '2024-04-10 05:16:36', '2024-04-10 05:16:36', NULL),
(45, 'Сартбай Тұрған', '350509301384', 1, 11, 'QZm8f4hBe0dOnEfNIq4Hw0saultEY1SD.pdf', '2024-04-10 05:19:19', '2024-04-10 05:19:19', NULL),
(46, 'Сарсенбаев Нұрбол Дүисенұлы', '950730300680', 1, 11, 'vFfwH7xLWuCJWUGpSR8cyL1nWXcwKUhy.pdf', '2024-04-10 05:20:10', '2024-04-10 05:20:10', NULL),
(47, 'Өмірзақ Сабира Әмірбекқызы', '890620400893', 1, 11, 'VbcO4CbPwKBbutlDgz8EJuMBH67MY6Os.pdf', '2024-04-10 05:21:00', '2024-04-10 05:21:00', NULL),
(48, 'Ортаева Камила Ашимовна', '680229400735', 1, 11, '4bVEjAjhfIU7E36mS7HkUxlYrLJxXPZ1.pdf', '2024-04-10 05:21:59', '2024-04-10 05:21:59', NULL),
(49, 'Омаров Бегжан Еркебайұлы', '581225301717', 1, 11, 'lEdVTnJ2Es1kE5uIZrTtPnnQZOSnFIQn.pdf', '2024-04-10 05:22:51', '2024-04-10 05:22:51', NULL),
(51, 'Молдакулова Нургайша Абдикаримовна', '841226401942', 1, 11, 'rZRW9fO8aKptGRNhia8IfK4Dqr0YJCPq.pdf', '2024-04-10 06:21:23', '2024-04-10 06:21:23', NULL),
(52, 'Мусакулов Кусан Толендиевич', '650304301685', 1, 11, 'vNB8Rw3pfBd9R3uWAj8FRuwfCNZosE3x.pdf', '2024-04-10 06:26:32', '2024-04-10 06:26:32', NULL),
(53, 'Медетбекова Рыскуль Ашималиевна', '541203401191', 1, 11, 'darxLJxNGElcHiYn2FJmgLnoCqGAWCq6.pdf', '2024-04-10 06:27:29', '2024-04-10 06:27:29', NULL),
(54, 'Медетбеков Муратбек Мухалбекович', '540426301708', 1, 11, '38VipQn7EtOfCwfAXCBT0TrB37SqhPam.pdf', '2024-04-10 06:28:44', '2024-04-10 06:28:44', NULL),
(55, 'Кунапьянова Роза Нурсапановна', '581120401495', 1, 11, 'ioRc8x1ROQLeTD6qtLy0XW2Iu7sScAa2.pdf', '2024-04-10 06:30:00', '2024-04-10 06:30:00', NULL),
(56, 'Кобеева Загира Сапарбековна', '820115401010', 1, 11, 'eKMtqyocubXOVhmpRUPTeYGxXXEeT4dJ.pdf', '2024-04-10 06:32:07', '2024-04-10 06:32:07', NULL),
(57, 'Калымбетова Гулмира Примжановна', '690620400732', 1, 11, 'yvxfOsqx2heCle81bwwnWrJ6DQLv1zN9.pdf', '2024-04-10 06:33:09', '2024-04-10 06:33:09', NULL),
(58, 'Жолбарыс Ергали Нурлыбаевич', '800807301240', 1, 11, 'pHKT79KTbtyc5k3bEZkdIde7F2eigvPI.pdf', '2024-04-10 06:34:37', '2024-04-10 06:34:37', NULL),
(59, 'Жантуреева Меруерт Жумахановна', '800219401548', 1, 11, 'fSAqcDqQeQEjZDdyE9xFYUG88geJrDg5.pdf', '2024-04-10 06:35:52', '2024-04-10 06:35:52', NULL),
(60, 'Әбдімәлік Үміт Нұрғисақызы', '981017400173', 1, 11, 'F62CF4OuuwQHiqPE8HF4T08DQvJiKBGe.pdf', '2024-04-11 01:07:30', '2024-04-11 01:07:30', NULL),
(61, 'Досанова Балхия Андасовна', '650818401561', 1, 11, 'nFpQAqkxX0AMdrHWLWxp9XhmZWigRJBN.pdf', '2024-04-11 01:09:55', '2024-04-11 01:09:55', NULL),
(62, 'Джанабаев Даурен Жумагалиевич', '890519300035', 1, 11, 'TOGIKWtzd1YUEXWSU9jNvGDSWob1WGaX.pdf', '2024-04-11 01:11:37', '2024-04-11 01:11:37', NULL),
(63, 'Буркитбаев Талгат Сагиндыкович', '620208302353', 1, 11, '7gCIhhfV5YWX95y3SFEWIMax7T5q3X6A.pdf', '2024-04-11 01:12:38', '2024-04-11 01:12:38', NULL),
(64, 'Бимуратов Серик Шадимуратович', '650309300084', 1, 11, 'cYO0lD1PKSYEVG308xYR632xnusrOVxu.pdf', '2024-04-11 01:13:34', '2024-04-11 01:13:34', NULL),
(65, 'Бименова Забира Аязкызы', '690214401337', 1, 11, 'xYqSw7HnBb0o3JD2NoFV85EDw3Pj1Py7.pdf', '2024-04-11 01:14:17', '2024-04-11 01:14:17', NULL),
(66, 'Асанова Анар Тұрмағанбетқызы', '670817400303', 1, 11, 'T9QyeXZx9RWKhJuq2vbDkceDrdJxQo8A.pdf', '2024-04-11 01:15:10', '2024-04-11 01:15:10', NULL),
(68, 'Адилбеков Ермек Нурсагатович', '671123300961', 1, 11, 'w5L0DXSaEtbpMZrdZFI8xuwHvDC97IsM.pdf', '2024-04-11 01:16:51', '2024-04-11 01:16:51', NULL),
(69, 'Шимелкова Роза Жумакылыш кызы', '830923401273', 1, 11, '3lMAc3ZkkaUDrx5TJ0wvpo8wsXi7o71g.pdf', '2024-04-11 01:21:53', '2024-04-11 01:21:53', NULL),
(70, 'Тлегенова Кулайша Бейсенбаевна', '740117401272', 1, 11, 'vz9ZUYqnS2YshX2onGpVUBzBu2wutytM.pdf', '2024-04-11 01:22:45', '2024-04-11 01:22:45', NULL),
(71, 'Сыпабеков Нурбол Сагындыкович', '760824300205', 1, 11, '6affTgUwp11Zj9eW89vqJgtUg7QWP0RN.pdf', '2024-04-11 01:23:52', '2024-04-11 01:23:52', NULL),
(72, 'Султанова Шолпанай Жумаликизи', '950126401304', 1, 11, 'JwNiuaJFKXJyZkH3H5SKOWjfQVFw0JMG.pdf', '2024-04-11 01:24:55', '2024-04-11 01:24:55', NULL),
(73, 'Самихова Мадина Рахматуллаевна', '881115401936', 1, 11, 'pnOF77EPRqdXQUtLMmJcjrM2rcoyePUX.pdf', '2024-04-11 01:25:46', '2024-04-11 01:25:46', NULL),
(74, 'Паташова Ақерке Нұрыбекқызы', '941130400399', 1, 11, '4dr7ZtctA6hOm0pC64ZR2H68CNZRUUbt.pdf', '2024-04-11 01:26:36', '2024-04-11 01:26:36', NULL),
(75, 'Мырзалиева Гульзада Баранбаевна', '851128402926', 1, 11, 'xU4dhzzP3xfIMJok2spjFkbVhFPy8cBZ.pdf', '2024-04-11 01:27:29', '2024-04-11 01:27:29', NULL),
(76, 'Муталиев Алимжан Муталиевич', '520309300701', 1, 11, 'z5QsqUrFWklrSxog6BVuX5BPAbcw8rU1.pdf', '2024-04-11 01:28:33', '2024-04-11 01:28:33', NULL),
(77, 'Мамбетова Лаззат  Маратовна', '780523402582', 1, 11, 'x2VaNF6UPKXbidqromCAjSBKsTI44SAt.pdf', '2024-04-11 01:29:50', '2024-04-11 01:29:50', NULL),
(78, 'Кыдырбаева Айгуль Елемесовна', '700428401117', 1, 11, 'ZeUHWjKjypi2Lhgw4pX4u1tfllQwYXq6.pdf', '2024-04-11 01:30:47', '2024-04-11 01:30:47', NULL),
(79, 'Кобланова Онгаркул Нурмахамбетқызы', '520102400178', 1, 11, 'GLpj5bLo6gp9YZxLXCYnmhSCbsUqPYeX.pdf', '2024-04-11 01:31:50', '2024-04-11 01:31:50', NULL),
(80, 'Кистаубаев Ермахан Ибадуллаевич', '710316301689', 1, 11, 'v47wXNLRRuPlfLvCB3bDK5yDLRvvTyac.pdf', '2024-04-11 01:32:27', '2024-04-11 01:32:27', NULL),
(81, 'Кенесова Акмарал Пердебаевна', '880812401992', 1, 11, 'ralVjAwOIhikN6Qw2jnNSBQZhqm8xutA.pdf', '2024-04-11 01:33:31', '2024-04-11 01:33:31', NULL),
(82, 'Исаева Ақмарал Умирбековна', '640827402369', 1, 11, '41mcNGsqZSJrhdBjpklOlJAA05fAxZy1.pdf', '2024-04-11 01:34:25', '2024-04-11 01:34:25', NULL),
(83, 'Жумадулаева Алиса Исаевна', '580914402209', 1, 11, 'fwgSZ0FxHFoojf4cajgAdEbAMpu5J9fL.pdf', '2024-04-11 01:35:08', '2024-04-11 01:35:08', NULL),
(84, 'Жантеева Айна Турехановна', '680501404141', 1, 11, '7SYjeM3vrCIBzZEDugTjzJJaMnk2spNc.pdf', '2024-04-11 01:35:48', '2024-04-11 01:35:48', NULL),
(85, 'Джамалова Гульчехра Тагаевна', '590716401068', 1, 11, '0UKHABanIQiLnDorOW48g6iPwrqREmx5.pdf', '2024-04-11 01:36:46', '2024-04-11 01:36:46', NULL),
(86, 'Боранбаева Лаура Рахмановна', '840709402021', 1, 11, '3oVIsXrt4M0nICi11taXM5OBrICoPBH7.pdf', '2024-04-11 01:38:02', '2024-04-11 01:38:02', NULL),
(87, 'Аширбаева  Салтанат   Бибатровна', '850412400346', 1, 11, 'gTrnF1BOpO1SIxRf6oXP1iaYT8iZTknl.pdf', '2024-04-11 01:38:44', '2024-04-11 01:38:44', NULL),
(88, 'Ахынова Улбике Саулебековна', '871225401843', 1, 11, 'lwW36A0DdnDkkbAPsdD2n6jFTnh9txKg.pdf', '2024-04-11 01:39:22', '2024-04-11 01:39:22', NULL),
(89, 'Исмайл Бағдат Кеңесары', '810304301604', 1, 11, '27m798x0XKBfyOKS1zyDW2oRf75CkdOd.pdf', '2024-04-11 04:13:52', '2024-04-11 04:13:52', NULL),
(90, 'Баетов Биназар Көпжасарович', '860616302360', 1, 11, 'No76kd4vj6VmDG0NJSSPmza8SzDz2w8H.pdf', '2024-04-11 04:14:55', '2024-04-11 04:14:55', NULL),
(91, 'Ақылбек Жанар Набиевна', '810320401688', 1, 11, 'K1sP4LSllvNdn3eGDxL8S4oDD6U8508O.pdf', '2024-04-11 04:15:49', '2024-04-11 04:15:49', NULL),
(92, 'Айсагалиев Бауыржан Тасболатович', '670314301995', 1, 11, 'Oa1rbGKMbiIyvDB8UVgA3OM1XAcVAQKC.pdf', '2024-04-11 04:16:52', '2024-04-11 04:16:52', NULL),
(93, 'Кобланов Жанпеис Нурмаханбетович', '590211300018', 1, 11, 'qRRLeHxDHKGrdzhB7mRNOlIUa0JQCEfz.pdf', '2024-04-11 04:17:42', '2024-04-11 04:17:42', NULL),
(94, 'Рахымбаев  Белай Оспанович', '650923301427', 1, 11, 'RXhKmMBtpaup4qDfmv91xlVuRqwkJay3.pdf', '2024-04-11 04:18:34', '2024-04-11 04:18:34', NULL),
(95, 'Сулейменов Макулбек Маметаевич', '600427301699', 1, 11, 'Sngt4PShDzoS4GlG4uDCuUSUhdppI9Xf.pdf', '2024-04-11 04:19:28', '2024-04-11 04:19:28', NULL),
(96, 'Тоқберген Нұрлан Салқынбекұлы', '650518301455', 1, 11, 'fCliJtdhLqnNxkeEidlZSGiYweNpYuNL.pdf', '2024-04-11 04:20:21', '2024-04-11 04:20:21', NULL),
(97, 'Менликулова Адеми Бақытовна', '881027400365', 1, 11, '85c3yskYD7lATw3k5jSB6zqwUIm7hpCq.pdf', '2024-04-11 05:06:58', '2024-04-11 05:06:58', NULL),
(99, 'Алпейсова Назгуль Ашмалиевна', '681030402346', 1, 11, 'EYGV1EkkfVoJtctXUCsQhNzJrKpYM9C4.pdf', '2024-04-12 01:13:03', '2024-04-12 01:13:03', NULL),
(100, 'Әбдікерім Тазагүл Мұқашқызы', '420224400765', 1, 11, 'EqAvqEEmMZpEwJRBwtXNmwKtLPBSeTXc.pdf', '2024-04-12 01:14:24', '2024-04-12 01:14:24', NULL),
(101, 'Жақсылық Роза Керімқұлқызы', '870420401503', 1, 11, '3CBy6DIsd4SjAVSMuSkmADAy8MWEzjTR.pdf', '2024-04-12 01:15:05', '2024-04-12 01:15:05', NULL),
(102, 'Жалбиров Марат Иманбаевич', '620213300433', 1, 11, 'mzEO5YV4uqYLpxzjuswF04M34kpv5YSD.pdf', '2024-04-12 01:15:54', '2024-04-12 01:15:54', NULL),
(103, 'Бирибаева Нурбану', '481210401097', 1, 11, 'uwzkfkaKIE9YacxAMlGfHDjbb4MSiw1r.pdf', '2024-04-12 01:16:55', '2024-04-12 01:16:55', NULL),
(104, 'Жақып Құттыбек Тынысбекұлы', '611001301668', 1, 11, 'lkZDSoReMm7GhKN6ds9GQSYpBuICqQg3.pdf', '2024-04-12 01:17:59', '2024-04-12 01:17:59', NULL),
(105, 'Касабекова Гаухар Нурайдаровна', '400915400331', 1, 11, 'bceCIC0Cib0T6EAfok2asHGlzmys0cSo.pdf', '2024-04-12 01:18:50', '2024-04-12 01:18:50', NULL),
(107, 'Кульбаева Феруза Тасболатовна', '481220400737', 1, 11, '5yRoeIBzGsk2IypDBApDj7iQvBaMAZ5S.pdf', '2024-04-12 01:21:37', '2024-04-12 01:21:37', NULL),
(108, 'Нургалиев Ыклас', '580602300547', 1, 11, 'yvL1fmH02jEXK93hy8KgLBEcU9UleH87.pdf', '2024-04-12 01:24:21', '2024-04-12 01:24:21', NULL),
(109, 'Махадиева Асем Каратаевна', '890421401868', 1, 11, 'uwDNHw5TnTYN1s3i6SXp8QeEIhbxpm4r.pdf', '2024-04-12 01:25:22', '2024-04-12 01:25:22', NULL),
(110, 'Пирматова Перизат Шаруаевна', '611205400554', 1, 11, 'O6JFMKNvQpfFFZE5ZaRLC62BBsJsJpzQ.pdf', '2024-04-12 01:26:20', '2024-04-12 01:26:20', NULL),
(111, 'Сарсенбай Ұлмекен Нұрлыбекқызы', '970102400993', 1, 11, 'jq7nB940l32OU0wFvk9Fw8ecpUTPF2Ww.pdf', '2024-04-12 01:27:50', '2024-04-12 01:27:50', NULL),
(112, 'Тилегенов Багдат Беспаевич', '630328300460', 1, 11, '1r8fIwqVlE4e0cqOIcrQJHU3g7FXc0dz.pdf', '2024-04-12 01:28:37', '2024-04-12 01:28:37', NULL),
(113, 'Сергазиева Жанат Егембердиевна', '760324400322', 1, 11, 'Rfd1oVzg626OWbC6yUafLWCRnItrYnS9.pdf', '2024-04-12 01:29:43', '2024-04-12 01:29:43', NULL),
(114, 'Шардарбеков Дуйсенби', '480716401015', 1, 10, 'ft9QqhJHvIEa1xkpOK5wPrpWBvP6Q6WX.pdf', '2024-04-12 01:30:29', '2024-04-12 01:30:29', NULL),
(115, 'Шилибаев Нурлан', '520329300552', 1, 11, 'K2s4RtSgMB0hyjEvbFBjH8qNmJyBDGTn.pdf', '2024-04-12 01:31:13', '2024-04-12 01:31:13', NULL),
(116, 'Тогусова Гаухар Акиновна', '720308401445', 1, 11, 'TuIoEtIGBIeh2Ve9NScRPqUf1YV0KYlz.pdf', '2024-04-12 01:32:05', '2024-04-12 01:32:05', NULL),
(117, 'Токсанбаева Жанар Оразкелдиевна', '910101403793', 1, 11, 'XoYggv5fvUuw0e5pceod8NZ6zT4ZzvrP.pdf', '2024-04-12 02:08:17', '2024-04-12 02:08:17', NULL),
(118, 'Акказина Алмагуль Садыбековна', '670117401188', 1, 13, 'lMK8ozU7rSqFHUtbxPYclcqw1LoRCfHh.pdf', '2024-07-18 05:15:44', '2024-07-18 05:15:44', NULL),
(119, 'Бердалиева Тилла Досыбековна', '530926401495', 3, 11, 'TAChABSuI4isAKRxNOetvN8du9NvJe1V.pdf', '2025-06-10 05:53:56', '2025-06-10 05:53:56', NULL),
(120, 'Досмаканбетова Айбарша Абилкасымовна', '700930401502', 1, 11, 'NI2oYyONRaJl7WIr55ES0DJ6HMeF9WB2.pdf', '2025-06-16 04:10:00', '2025-06-16 04:10:00', NULL),
(121, 'Байысбай Омирбек Пернебайулы', '780217301584', 1, 11, 'tnUElQ3LOQWFdxZrVK5GQHwAX2UUqBl5.pdf', '2025-06-16 04:11:47', '2025-06-16 04:11:47', NULL),
(122, 'Сабырханов Марат Дарханович', '760126301794', 1, 11, 'qqn5bn5OngN1bM1hbqviHHYOUtGxnI2Z.pdf', '2025-06-16 04:13:26', '2025-06-16 04:13:26', NULL),
(123, 'Сейткасимова Лаззат Асановна', '760115401047', 1, 11, 'S8QgQqAHxspT6pM8SVnjhgAHSQPfsg5c.pdf', '2025-06-16 04:13:57', '2025-06-16 04:13:57', NULL),
(124, 'Пазилова Гульжан Джолдасбековна', '760217401824', 1, 11, 'pfSgYPoDz38YN5Zcj9SDfiW226NtTbii.pdf', '2025-06-16 04:15:06', '2025-06-16 04:15:06', NULL),
(125, 'Кенжебеков Досхан Мухитжанулы', '911012300622', 1, 11, 'DJ2k9wMqoeKJZXEtzcMhE3nmcVwb8umw.pdf', '2025-06-16 04:16:41', '2025-06-16 04:16:41', NULL),
(126, 'Жолдасов Сазахан Аманович', '630110303846', 1, 11, '6CBQmXKnpTvwEY7B27PxDArO3vJzM6IY.pdf', '2025-07-10 04:54:13', '2025-07-10 04:54:13', NULL),
(127, 'Темирбеков Бейбит Жанабаевич', '860516302456', 1, 11, 'sSkJIvW65NK5mRfQnjHaVPOSXUJ75S1l.pdf', '2025-07-10 04:56:39', '2025-07-10 04:56:39', NULL),
(128, 'Мамадәлі Жанерке Тоқмағанбетқызы', '971224400751', 1, 11, 'NZEqE6cD5FoIy6f8dCQUhfZpQquSzrvf.pdf', '2025-07-10 04:57:57', '2025-07-10 04:57:57', NULL),
(129, 'Лес Ақерке Берікқызы', '001019600520', 1, 11, 'NfIY4rzuXrcdlt0vqS6w5YHBCMWdT0ey.pdf', '2025-07-10 05:01:19', '2025-07-10 05:01:19', NULL),
(130, 'Ибрагим Қайрат Әменұлы', '791001301653', 1, 11, 'Jc5gbsurt1pFSAWSvLR8eyeJ6Eellda4.pdf', '2025-07-16 02:04:33', '2025-07-16 02:04:33', NULL),
(131, 'Кошкинбаева Мадина Жолдыкараевна', '790606400876', 23, 11, 'R7RuW6FYmPWVH4e15BI3ucrXrIThuvef.pdf', '2025-09-15 02:04:54', '2025-09-15 02:04:54', NULL),
(132, 'Бименов Мырзагали Аязович', '630828301734', 23, 11, 'zVkWMtdMKUTHCGRZUCktN4rbuKDq2OUu.pdf', '2025-09-15 02:05:36', '2025-09-15 02:05:36', NULL),
(136, 'Иманқұл Нұржан Бауыржанұлы', '940211301368', 23, 11, '4jyMHeppvR0qhS72a2Z9FBV49c1MpXo5.pdf', '2025-09-15 02:11:30', '2025-09-15 02:11:30', NULL),
(138, 'Абишова Гулчехра Бархатовна', '820111401633', 23, 11, 'VfEX7IgGZPib4Rbg8itShlD7OnUihd7H.pdf', '2025-09-15 02:12:46', '2025-09-15 02:12:46', NULL),
(139, 'Ешмағамбетова Сандуғаш Мирамбекқызы', '960219401143', 23, 11, 'BfxFZ9vDdOc2g2uZ6LjEXWPd93K7gr6F.pdf', '2025-09-15 02:13:12', '2025-09-15 02:13:12', NULL),
(140, 'Балгимбекова Улдар Байтемировна', '580320401846', 23, 11, 'XWa7le940ouLOFboJq8yIeA8K6yttNq0.pdf', '2025-09-15 02:13:41', '2025-09-15 02:13:41', NULL),
(141, 'Төребай Нұрсәуле Дүйсенбайқызы', '830118401504', 23, 11, 'pQxJq1o6tpyH1hDaH8rZ9plZALaL7RQj.pdf', '2025-09-15 02:14:52', '2025-09-15 02:14:52', NULL),
(142, 'Эрманова Дина Рустамовна', '840530403334', 23, 11, 'TorJE4qoRc4I43RToU9w868sHSBNWbIU.pdf', '2025-09-15 02:17:34', '2025-09-15 02:17:34', NULL),
(144, 'Камбарова Онлакуль Батыровна', '510525402271', 23, 11, 'I9B6ozo7ayNySOsHR3UmFKR2bCCNHYpn.pdf', '2025-09-15 02:18:46', '2025-09-15 02:18:46', NULL),
(145, 'Сынабай Абылай Жақыпұлы', '960204301452', 23, 11, 'LMua0t515uLv9FRwrGnErawdTqEmgjDa.pdf', '2025-09-15 02:19:10', '2025-09-15 02:19:10', NULL),
(146, 'Мусин Серик Уалиоллаевич', '851129301138', 23, 11, 'cvnDFMWid7E3bvtAilpNRkkz4bkE3zGE.pdf', '2025-09-15 02:19:45', '2025-09-15 02:19:45', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'almuko.m@gmail.com', 'admin', NULL, '$2y$12$3QM946bELQlG5FKppR7HzuwH5Z.NKYri8drRZHvRqwTzUmhbbnEya', NULL, '2025-11-17 13:29:13', '2025-11-17 13:29:13', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `firms`
--
ALTER TABLE `firms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_iin_unique` (`iin`),
  ADD KEY `students_course_id_foreign` (`course_id`),
  ADD KEY `students_firm_id_foreign` (`firm_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `firms`
--
ALTER TABLE `firms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
