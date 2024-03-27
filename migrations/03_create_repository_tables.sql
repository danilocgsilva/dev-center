CREATE TABLE `repositories` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `address` VARCHAR(192) NOT NULL,
    `project_id` UNSIGNED INT NOT NULL
) ENGINE=InnoDB;

ALTER TABLE `repositories` ADD CONSTRAINT `project_pository_constraint` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);