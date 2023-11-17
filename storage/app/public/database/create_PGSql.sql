-- SQLINES DEMO *** me from config.yml

PRAGMA journal_mode = MEMORY;
PRAGMA synchronous = OFF;
PRAGMA foreign_keys = OFF;
PRAGMA ignore_check_constraints = OFF;
PRAGMA auto_vacuum = NONE;
PRAGMA secure_delete = OFF;
BEGIN TRANSACTION;

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `emp_login` (
    `empid` int NOT NULL,
    `Emp_Email` varchar(50) NOT NULL,
    `Emp_Password` varchar(50) NOT NULL,
    PRIMARY KEY (`empid`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `failed_jobs` (
    `id` bigint CHECK (`id` > 0) NOT NULL GENERATED ALWAYS AS IDENTITY,
    `uuid` varchar(191) NOT NULL,
    `connection` text NOT NULL,
    `queue` text NOT NULL,
    `payload` text NOT NULL,
    `exception` text NOT NULL,
    `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    CONSTRAINT `failed_jobs_uuid_unique` UNIQUE (`uuid`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `migrations` (
    `id` int CHECK (`id` > 0) NOT NULL GENERATED ALWAYS AS IDENTITY,
    `migration` varchar(191) NOT NULL,
    `batch` int NOT NULL,
    PRIMARY KEY (`id`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `password_resets` (
    `email` varchar(191) NOT NULL,
    `token` varchar(191) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
    CREATE INDEX `password_resets_email_index` ON `password_resets` (`email`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `payment` (
    `id` int NOT NULL,
    `Name` varchar(30) NOT NULL,
    `Email` varchar(30) NOT NULL,
    `RoomType` varchar(30) NOT NULL,
    `Bed` varchar(30) NOT NULL,
    `NoofRoom` int NOT NULL,
    `cin` date NOT NULL,
    `cout` date NOT NULL,
    `noofdays` int NOT NULL,
    `roomtotal` double precision NOT NULL,
    `bedtotal` double precision NOT NULL,
    `meal` varchar(30) NOT NULL,
    `mealtotal` double precision NOT NULL,
    `finaltotal` double precision NOT NULL,
    PRIMARY KEY (`id`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
    `id` bigint CHECK (`id` > 0) NOT NULL GENERATED ALWAYS AS IDENTITY,
    `tokenable_type` varchar(191) NOT NULL,
    `tokenable_id` bigint CHECK (`tokenable_id` > 0) NOT NULL,
    `name` varchar(191) NOT NULL,
    `token` varchar(64) NOT NULL,
    `abilities` text DEFAULT NULL,
    `last_used_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `personal_access_tokens_token_unique` UNIQUE  (`token`)
    CREATE INDEX `personal_access_tokens_tokenable_type_tokenable_id_index` ON `personal_access_tokens` (`tokenable_type`, `tokenable_id`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `room` (
    `id` int NOT NULL,
    `type` varchar(50) NOT NULL,
    `bedding` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `roombook` (
    `id` int NOT NULL,
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
    `nodays` int NOT NULL,
    `stat` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `signup` (
    `UserID` int NOT NULL,
    `Username` varchar(50) NOT NULL,
    `Email` varchar(50) NOT NULL,
    `Password` varchar(50) NOT NULL,
    PRIMARY KEY (`UserID`)
);
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE IF NOT EXISTS `staff` (
    `id` int NOT NULL,
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
