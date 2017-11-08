ALTER TABLE `oc_customer`
ADD `type` CHAR(2) NOT NULL AFTER `language_id`,
ADD `document` VARCHAR(14) NOT NULL AFTER `type`,
ADD `regional_document` VARCHAR(20) NOT NULL AFTER `document`;