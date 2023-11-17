-- TODO get table name from config.yml

PRAGMA journal_mode = MEMORY;
PRAGMA synchronous = OFF;
PRAGMA foreign_keys = OFF;
PRAGMA ignore_check_constraints = OFF;
PRAGMA auto_vacuum = NONE;
PRAGMA secure_delete = OFF;
BEGIN TRANSACTION;

CREATE TABLE IF NOT EXISTS `emp_login` (
    `empid` int(100) NOT NULL,
    `Emp_Email` varchar(50) NOT NULL,
    `Emp_Password` varchar(50) NOT NULL,
    PRIMARY KEY (`empid`)
);
CREATE TABLE IF NOT EXISTS `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `uuid` varchar(191) NOT NULL,
    `connection` text NOT NULL,
    `queue` text NOT NULL,
    `payload` longtext NOT NULL,
    `exception` longtext NOT NULL,
    `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
);
CREATE TABLE IF NOT EXISTS `migrations` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `migration` varchar(191) NOT NULL,
    `batch` int(11) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `password_resets` (
    `email` varchar(191) NOT NULL,
    `token` varchar(191) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    KEY `password_resets_email_index` (`email`)
);
CREATE TABLE IF NOT EXISTS `payment` (
    `id` int(30) NOT NULL,
    `Name` varchar(30) NOT NULL,
    `Email` varchar(30) NOT NULL,
    `RoomType` varchar(30) NOT NULL,
    `Bed` varchar(30) NOT NULL,
    `NoofRoom` int(30) NOT NULL,
    `cin` date NOT NULL,
    `cout` date NOT NULL,
    `noofdays` int(30) NOT NULL,
    `roomtotal` double(8, 2) NOT NULL,
    `bedtotal` double(8, 2) NOT NULL,
    `meal` varchar(30) NOT NULL,
    `mealtotal` double(8, 2) NOT NULL,
    `finaltotal` double(8, 2) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `tokenable_type` varchar(191) NOT NULL,
    `tokenable_id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(191) NOT NULL,
    `token` varchar(64) NOT NULL,
    `abilities` text DEFAULT NULL,
    `last_used_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
    KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`)
);
CREATE TABLE IF NOT EXISTS `room` (
    `id` int(30) NOT NULL,
    `type` varchar(50) NOT NULL,
    `bedding` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `roombook` (
    `id` int(10) NOT NULL,
    `Name` varchar(50) NOT NULL,
    `Email` varchar(50) NOT NULL,
    `Country` varchar(30) NOT NULL,
    `Phone` varchar(30) NOT NULL,
    `RoomType` varchar(30) NOT NULL,
    `Bed` varchar(30) NOT NULL,
    `Meal` varchar(30) NOT NULL,
    `NoofRoom` varchar(30) NOT NULL,
    `cin` date NOT NULL,
    `cout` date NOT NULL,
    `nodays` int(50) NOT NULL,
    `stat` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `signup` (
    `UserID` int(100) NOT NULL,
    `Username` varchar(50) NOT NULL,
    `Email` varchar(50) NOT NULL,
    `Password` varchar(50) NOT NULL,
    PRIMARY KEY (`UserID`)
);
CREATE TABLE IF NOT EXISTS `staff` (
    `id` int(30) NOT NULL,
    `name` varchar(30) NOT NULL,
    `work` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
);
COMMIT;


COMMIT;
PRAGMA ignore_check_constraints = ON;
PRAGMA foreign_keys = OFF;
PRAGMA journal_mode = WAL;
PRAGMA synchronous = NORMAL;
