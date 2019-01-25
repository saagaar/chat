CREATE TABLE `job_title` (
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_desciption` varchar(255) NOT NULL,
  `job_in` varchar(255) NOT NULL,
  `job_date` date NOT NULL,
  `job_workstart` varchar(255) NOT NULL,
  `job_payment` varchar(255) NOT NULL,
  `job_worktype` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user_fav_services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `job_title` ADD PRIMARY KEY (`job_id`);

ALTER TABLE `user_fav_services` ADD PRIMARY KEY (`id`);

ALTER TABLE `job_title` MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `user_fav_services` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `company` ADD `last_login` INT NOT NULL AFTER `is_deleted`;

ALTER TABLE `employee` CHANGE `active` `status` TINYINT(1) NOT NULL;

ALTER TABLE `company` ADD `phone` VARCHAR(100) NOT NULL AFTER `fax`;

ALTER TABLE `employee` CHANGE `company` `company_id` BIGINT NOT NULL;

ALTER TABLE `employee` CHANGE `country` `country_id` INT(11) NOT NULL;

ALTER TABLE `company` CHANGE `country` `country_id` INT(11) NOT NULL;

ALTER TABLE `company` ADD `about_us` TEXT NULL DEFAULT NULL AFTER `name`;

ALTER TABLE `employee_company` CHANGE `user_id` `employee_id` BIGINT(20) NOT NULL;

ALTER TABLE `employee` CHANGE `country` `country` INT NOT NULL;

ALTER TABLE `user` CHANGE `city` `city` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `employee` ADD `gender` TINYINT(1) NULL DEFAULT NULL AFTER `country`;

ALTER TABLE `employee` ADD `street_no` VARCHAR(99) NOT NULL AFTER `address`, ADD `post_code` VARCHAR(99) NOT NULL AFTER `street_no`;

ALTER TABLE `employee` ADD `profile_picture` VARCHAR(255) NOT NULL AFTER `post_code`, ADD `cover_picture` VARCHAR(255) NOT NULL AFTER `profile_picture`;

ALTER TABLE `employee` DROP `photo`;

ALTER TABLE `employee` ADD `dob` INT NOT NULL DEFAULT '0' AFTER `gender`;

ALTER TABLE `employee` ADD `last_login` INT NOT NULL DEFAULT '0' AFTER `earned`;

ALTER TABLE `services` ADD `start_date` DATE NOT NULL AFTER `rate`, ADD `end_date` DATE NOT NULL AFTER `start_date`;

ALTER TABLE `services` ADD `appointment` TINYINT(1) NOT NULL DEFAULT '0' AFTER `end_date`;  

ALTER TABLE `services` ADD `sale_amount` INT NOT NULL DEFAULT '0' AFTER `appointment`;

ALTER TABLE `services` CHANGE `count_sales` `sale_count` INT(11) NOT NULL;

CREATE TABLE `service_images` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `service_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

  ALTER TABLE `services` ADD `work_days` VARCHAR(25) NOT NULL AFTER `sale_amount`, ADD `work_time` VARCHAR(25) NOT NULL AFTER `work_days`, ADD `validity` INT NOT NULL AFTER `work_time`, ADD `payment_methods` VARCHAR(255) NOT NULL AFTER `validity`;

  ALTER TABLE `services` CHANGE `start_date` `start_date` INT NOT NULL, CHANGE `end_date` `end_date` INT NOT NULL;

  ALTER TABLE `services` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `payment_methods`;

  ALTER TABLE `sales` ADD `rating` TINYINT(1) NOT NULL DEFAULT '0' AFTER `feedback_datetime`;

  ALTER TABLE `sales` ADD `payment_method` INT NOT NULL DEFAULT '0' AFTER `rating`;