CREATE TABLE `projects` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `project_name` VARCHAR(192) NOT NULL,
    `main_repository_address` VARCHAR(192),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;
