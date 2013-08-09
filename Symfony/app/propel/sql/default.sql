
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(25) NOT NULL,
    `lname` VARCHAR(25) NOT NULL,
    `password` VARCHAR(40) NOT NULL,
    `salt` VARCHAR(32) NOT NULL,
    `email` VARCHAR(60) NOT NULL,
    `is_active` INTEGER DEFAULT 1 NOT NULL,
    `role_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `users_FI_1` (`role_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- roles
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(30),
    `role` VARCHAR(20),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
