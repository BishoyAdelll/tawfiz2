/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `governorates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governorate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Years_of_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_visit` datetime NOT NULL,
  `mode_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` date NOT NULL,
  `carrying_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_floors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_statement` tinyint NOT NULL DEFAULT '0',
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `includes_women` tinyint NOT NULL DEFAULT '0',
  `training_courses_support` tinyint NOT NULL DEFAULT '0',
  `training_courses` tinyint NOT NULL DEFAULT '0',
  `course_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `committees` tinyint NOT NULL DEFAULT '0',
  `committee_report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `committee_active` tinyint NOT NULL DEFAULT '0',
  `center_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_needs` tinyint NOT NULL DEFAULT '0',
  `center_study` tinyint NOT NULL DEFAULT '0',
  `rate_study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_plane` tinyint NOT NULL DEFAULT '0',
  `center_active` tinyint NOT NULL DEFAULT '0',
  `activity_report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difference_cooperate` tinyint NOT NULL DEFAULT '0',
  `root_help` tinyint NOT NULL DEFAULT '0',
  `root_is_fare` tinyint NOT NULL DEFAULT '0',
  `root_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `many_help` tinyint NOT NULL DEFAULT '0',
  `help_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works_to_maximize` tinyint NOT NULL DEFAULT '0',
  `center_tools` tinyint NOT NULL DEFAULT '0',
  `alternative_plans` tinyint NOT NULL DEFAULT '0',
  `rate_center_tools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_team` tinyint NOT NULL DEFAULT '0',
  `center_benefit` tinyint NOT NULL DEFAULT '0',
  `center_coordinate` tinyint NOT NULL DEFAULT '0',
  `coordinate_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `good_equipment` tinyint NOT NULL DEFAULT '0',
  `good_team_data` tinyint NOT NULL DEFAULT '0',
  `training_course` tinyint NOT NULL DEFAULT '0',
  `adopting_controlled` tinyint NOT NULL DEFAULT '0',
  `adopting_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistance_provided` tinyint NOT NULL DEFAULT '0',
  `center_tech` tinyint NOT NULL DEFAULT '0',
  `follow_up` tinyint NOT NULL DEFAULT '0',
  `evaluation_system` tinyint NOT NULL DEFAULT '0',
  `center_vision` tinyint NOT NULL DEFAULT '0',
  `difficult_challenges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_expertise` tinyint NOT NULL DEFAULT '0',
  `center_partners` tinyint NOT NULL DEFAULT '0',
  `rate_support` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_ability` tinyint NOT NULL DEFAULT '0',
  `center_technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_speed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `governorates` (`id`, `name`, `name_en`, `code`, `color`, `created_at`, `updated_at`) VALUES
(1, 'الغربية', 'Al Gharbiyah', 'EGY1530', '#9D2933\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06');
INSERT INTO `governorates` (`id`, `name`, `name_en`, `code`, `color`, `created_at`, `updated_at`) VALUES
(2, 'الاسماعيلية', 'Al Isma`iliyah', 'EGY1531', '#C93756\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06');
INSERT INTO `governorates` (`id`, `name`, `name_en`, `code`, `color`, `created_at`, `updated_at`) VALUES
(3, 'المنوفية', 'Al Minufiyah', 'EGY1532', '#763568\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06');
INSERT INTO `governorates` (`id`, `name`, `name_en`, `code`, `color`, `created_at`, `updated_at`) VALUES
(4, 'القاهرة', 'Al Qahirah', 'EGY1533', '#8E44AD\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(5, 'القليوبية', 'Al Qalyubiyah', 'EGY1534', '#F3C13A\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(6, 'الشرقية', 'Ash Sharqiyah', 'EGY1535', '#48929B\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(7, 'السويس', 'As Suways', 'EGY1536', '#89C4F4\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(8, 'الدقهلية', 'Ad Daqahliyah', 'EGY1537', '#1F4788\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(9, 'بورسعيد', 'Bur Sa`id', 'EGY1538', '#264348\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(10, 'دمياط', 'Dumyat', 'EGY1539', '#8DB255\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(11, 'مطروح', 'Matruh', 'EGY1540', '#F9B32F', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(12, 'البحيرة', 'Al Buhayrah', 'EGY1541', '#87D37C\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(13, 'الفيوم', 'Al Fayyum', 'EGY1542', '#26C281\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(14, 'الاسكندرية', 'Al Iskandariyah', 'EGY1543', '#2ABB9B\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(15, 'الجيزة', 'Al Jizah', 'EGY1544', '#36D7B7\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(16, 'المنيا', 'Al Minya', 'EGY1545', '#19B5FE', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(17, 'بني سويف', 'Bani Suwayf', 'EGY1546', '#FFA400\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(18, 'كفر الشيخ', 'Kafr ash Shaykh', 'EGY1547', '#A17917\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(19, 'اسوان', 'Aswan', 'EGY1548', '#2980B9', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(20, 'اسيوط', 'Asyut', 'EGY1549', '#757D75\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(21, 'الوادي الجديد', 'Al Wadi at Jadid', 'EGY1550', '#FFB61E\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(22, 'قنا', 'Qina', 'EGY1551', '#95A5A6\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(23, 'سوهاج', 'Suhaj', 'EGY1552', '#3498DB', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(24, 'البحر الاحمر', 'Al Bahr al Ahmar', 'EGY1556', '#F1C40F', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(25, 'جنوب سينا', 'Janub Sina\'', 'EGY1557', '#FFCF4B', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(26, 'شمال سينا', 'Shamal Sina\'', 'EGY1558', '#FDE3A7', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(27, 'الاقصر', 'Luxor', 'EGY5494', '#9B59B6\n', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(28, '6اكتوبر', '6 October', 'undefined', '#9B59B7', '2022-06-05 09:17:06', '2022-06-05 09:17:06'),
(29, 'غير محدد', 'undefined', 'undefined', 'undefined', NULL, NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_11_29_144645_create_questions_table', 2);







INSERT INTO `questions` (`id`, `name`, `job`, `governorate`, `residence`, `Years_of_experience`, `gender`, `graduation`, `date_of_visit`, `mode_by`, `center_name`, `address`, `code`, `phone`, `email`, `published_at`, `carrying_capacity`, `number_of_floors`, `center_statement`, `rate`, `includes_women`, `training_courses_support`, `training_courses`, `course_rate`, `committees`, `committee_report`, `committee_active`, `center_duration`, `center_needs`, `center_study`, `rate_study`, `team_plane`, `center_active`, `activity_report`, `difference_cooperate`, `root_help`, `root_is_fare`, `root_rate`, `many_help`, `help_rate`, `works_to_maximize`, `center_tools`, `alternative_plans`, `rate_center_tools`, `center_team`, `center_benefit`, `center_coordinate`, `coordinate_rate`, `good_equipment`, `good_team_data`, `training_course`, `adopting_controlled`, `adopting_rate`, `assistance_provided`, `center_tech`, `follow_up`, `evaluation_system`, `center_vision`, `difficult_challenges`, `previous_expertise`, `center_partners`, `rate_support`, `center_ability`, `center_technology`, `center_speed`, `universe`, `created_at`, `updated_at`) VALUES
(1, 'Judah Cortez', 'Fugit dicta magni cillum commodo nulla repudiandae magni commodi deserunt impedit', '1', 'ريف', '1985', 'Perspiciatis provident animi anim alias excepteur officia porro neque in dolores ea similique officia dolor', 'Dignissimos dolor iusto repellendus Enim dolor dicta omnis autem et nihil consequatur Molestiae quo quis', '2009-08-11 04:43:00', 'Rem dicta laborum non aut', 'India Mathis', 'Elit officia cum exercitation dolor molestiae maiores et sunt ex ex minima ut', 'Magnam quas voluptas sed tempor praesentium dolore mollit debitis beatae aspernatur quis', '456788', 'nomyp@mailinator.com', '2017-07-08', 'Quia accusamus temporibus deserunt eos non ut autem accusantium autem omnis sint dolore impedit adipisicing ea maiores suscipit', '204', 0, 'Dicta doloremque eveniet doloribus a sint numquam', 0, 0, 0, 'Aut laborum Corporis sit laborum Laboriosam minima placeat obcaecati est quae', 0, 'Dolore at exercitationem obcaecati quia reiciendis pariatur', 0, 'Doloribus maiores cum quibusdam eu quis provident pariatur', 0, 0, 'Dolorem qui lorem dolore adipisicing laborum Adipisicing ut cum accusantium adipisicing non totam sed', 0, 0, 'Sit iusto velit voluptatibus ut sit', 0, 0, 0, 'Provident cumque est quis quia laudantium nisi qui', 0, 'Aute irure dicta soluta dolor dolor ullam nihil ad quo debitis eum qui dolorem enim sapiente est', 0, 0, 0, 'Laborum laboriosam cumque dolor proident necessitatibus omnis enim cumque eos aut sequi', 0, 0, 0, 'Fugit aute ipsum non et quia eu illo laborum non saepe aliquam ratione aliqua Laudantium voluptates sit cumque elit', 0, 0, 0, 0, 'Quaerat duis tempor sint velit quia velit voluptate in voluptas esse vero dignissimos voluptatem velit quas veniam', 0, 0, 0, 0, 0, 'Aliquam aut sunt molestias consequatur et', 0, 0, 'Aut ea quidem magni voluptatem consequatur Aliquip at omnis cumque', 0, 'Dolores sint est est voluptas aspernatur consequatur ut', 'Numquam earum sunt sit molestias velit inventore nihil non consequatur praesentium non aut error qui voluptas laudantium sunt', 'Expedita perferendis consequatur ullamco voluptatem amet et et blanditiis id ut est ex doloribus corrupti', '2023-12-02 17:14:14', '2023-12-02 17:42:09');
INSERT INTO `questions` (`id`, `name`, `job`, `governorate`, `residence`, `Years_of_experience`, `gender`, `graduation`, `date_of_visit`, `mode_by`, `center_name`, `address`, `code`, `phone`, `email`, `published_at`, `carrying_capacity`, `number_of_floors`, `center_statement`, `rate`, `includes_women`, `training_courses_support`, `training_courses`, `course_rate`, `committees`, `committee_report`, `committee_active`, `center_duration`, `center_needs`, `center_study`, `rate_study`, `team_plane`, `center_active`, `activity_report`, `difference_cooperate`, `root_help`, `root_is_fare`, `root_rate`, `many_help`, `help_rate`, `works_to_maximize`, `center_tools`, `alternative_plans`, `rate_center_tools`, `center_team`, `center_benefit`, `center_coordinate`, `coordinate_rate`, `good_equipment`, `good_team_data`, `training_course`, `adopting_controlled`, `adopting_rate`, `assistance_provided`, `center_tech`, `follow_up`, `evaluation_system`, `center_vision`, `difficult_challenges`, `previous_expertise`, `center_partners`, `rate_support`, `center_ability`, `center_technology`, `center_speed`, `universe`, `created_at`, `updated_at`) VALUES
(2, 'Flavia', 'مستوى مركزي بوزارة التضامن الاجتماعي', '1', 'حضر', '1986', '1', 'أعلى من الجامعى', '2016-08-03 04:04:00', 'Perferendis praesent', 'Minima dolor sunt el', 'Unde qui est ea num', 'Hic assumenda autem ', '77', 'dyzenon@mailinator.com', '2017-06-12', 'Do sed nemo ratione ', '76', 1, 'سيء', 1, 1, 1, 'لا استطيع التحديد', 1, 'سيء جدا', 1, 'سنوية', 1, 1, 'سيء', 1, 1, 'جيد', 1, 1, 1, 'لا استطيع التحديد', 1, 'سيء جدا', 1, 1, 1, 'لا استطيع التحديد', 1, 1, 1, 'جيد', 1, 1, 1, 1, 'جيد', 1, 1, 1, 1, 1, 'عادية', 1, 1, 'سيء جدا', 1, 'سيء', 'قلة الإمكانيات المتاحة', 'Anim laborum Eius a', '2023-11-30 15:52:42', '2023-12-02 17:19:29');
INSERT INTO `questions` (`id`, `name`, `job`, `governorate`, `residence`, `Years_of_experience`, `gender`, `graduation`, `date_of_visit`, `mode_by`, `center_name`, `address`, `code`, `phone`, `email`, `published_at`, `carrying_capacity`, `number_of_floors`, `center_statement`, `rate`, `includes_women`, `training_courses_support`, `training_courses`, `course_rate`, `committees`, `committee_report`, `committee_active`, `center_duration`, `center_needs`, `center_study`, `rate_study`, `team_plane`, `center_active`, `activity_report`, `difference_cooperate`, `root_help`, `root_is_fare`, `root_rate`, `many_help`, `help_rate`, `works_to_maximize`, `center_tools`, `alternative_plans`, `rate_center_tools`, `center_team`, `center_benefit`, `center_coordinate`, `coordinate_rate`, `good_equipment`, `good_team_data`, `training_course`, `adopting_controlled`, `adopting_rate`, `assistance_provided`, `center_tech`, `follow_up`, `evaluation_system`, `center_vision`, `difficult_challenges`, `previous_expertise`, `center_partners`, `rate_support`, `center_ability`, `center_technology`, `center_speed`, `universe`, `created_at`, `updated_at`) VALUES
(3, 'Flavia', 'وكيل مديرية', '28', 'حضر', '1986', '1', 'أعلى من الجامعى', '2016-08-03 04:04:00', 'Perferendis praesent', 'Minima dolor sunt el', 'Unde qui est ea num', 'Hic assumenda autem ', '77', 'dyzenon@mailinator.com', '2017-06-12', 'Do sed nemo ratione ', '76', 1, 'سيء', 1, 1, 1, 'لا استطيع التحديد', 1, 'سيء جدا', 1, 'سنوية', 1, 1, 'سيء', 1, 1, 'جيد', 1, 1, 1, 'لا استطيع التحديد', 1, 'سيء جدا', 1, 1, 1, 'لا استطيع التحديد', 1, 1, 1, 'جيد', 1, 1, 1, 1, 'جيد', 1, 1, 1, 1, 1, 'عادية', 1, 1, 'سيء جدا', 1, 'سيء', 'قلة الإمكانيات المتاحة', 'Anim laborum Eius a', '2023-11-30 15:52:42', '2023-11-30 15:52:42');
INSERT INTO `questions` (`id`, `name`, `job`, `governorate`, `residence`, `Years_of_experience`, `gender`, `graduation`, `date_of_visit`, `mode_by`, `center_name`, `address`, `code`, `phone`, `email`, `published_at`, `carrying_capacity`, `number_of_floors`, `center_statement`, `rate`, `includes_women`, `training_courses_support`, `training_courses`, `course_rate`, `committees`, `committee_report`, `committee_active`, `center_duration`, `center_needs`, `center_study`, `rate_study`, `team_plane`, `center_active`, `activity_report`, `difference_cooperate`, `root_help`, `root_is_fare`, `root_rate`, `many_help`, `help_rate`, `works_to_maximize`, `center_tools`, `alternative_plans`, `rate_center_tools`, `center_team`, `center_benefit`, `center_coordinate`, `coordinate_rate`, `good_equipment`, `good_team_data`, `training_course`, `adopting_controlled`, `adopting_rate`, `assistance_provided`, `center_tech`, `follow_up`, `evaluation_system`, `center_vision`, `difficult_challenges`, `previous_expertise`, `center_partners`, `rate_support`, `center_ability`, `center_technology`, `center_speed`, `universe`, `created_at`, `updated_at`) VALUES
(4, 'Jada', 'مدير مديرية', '4', 'حضر', '1979', '0', 'أعلى من الجامعى', '2015-07-17 13:00:00', 'Nostrum quibusdam id', 'In voluptas vitae do', 'Id quia ullam reici', 'Aut ipsam et soluta ', '90', 'niconez@mailinator.com', '1975-09-10', 'Mollit quasi rem qui', '37', 1, 'جيد', 1, 1, 0, 'جيد جدا', 1, 'لا استطيع التحديد', 1, 'ربع سنوية', 1, 1, 'سيء جدا', 1, 1, 'جيد', 1, 1, 1, 'سيء', 1, 'جيد', 1, 1, 1, 'جيد', 1, 0, 0, 'لا استطيع التحديد', 1, 0, 0, 0, 'جيد جدا', 1, 1, 1, 1, 1, 'صعبة جدا', 1, 1, 'جيد جدا', 1, 'سيء', 'عدم توفر وسائل الاتصال المناسبة', 'Aliquid aliquam mini', '2023-11-30 15:23:35', '2023-11-30 15:23:35');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$12$Ilw9HXvuPTtEXcvgW9FNu.ijv8/8cviZyoB1/x9AD0g1bBzZlIVr6', NULL, '2023-11-30 01:15:24', '2023-11-30 01:15:24');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;