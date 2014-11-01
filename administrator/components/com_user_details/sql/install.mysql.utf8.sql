CREATE TABLE IF NOT EXISTS `#__user_details_` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`first_name` VARCHAR(255)  NOT NULL ,
`last_name` VARCHAR(255)  NOT NULL ,
`telephone` VARCHAR(255)  NOT NULL ,
`fax` VARCHAR(255)  NOT NULL ,
`company` VARCHAR(255)  NOT NULL ,
`comapny_id` VARCHAR(255)  NOT NULL ,
`address1` VARCHAR(255)  NOT NULL ,
`address2` VARCHAR(255)  NOT NULL ,
`city` VARCHAR(255)  NOT NULL ,
`post_code` VARCHAR(255)  NOT NULL ,
`country` VARCHAR(255)  NOT NULL ,
`region_state` VARCHAR(255)  NOT NULL ,
`password` VARCHAR(255)  NOT NULL ,
`password_confirm` VARCHAR(255)  NOT NULL ,
`subscribe` VARCHAR(255)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

