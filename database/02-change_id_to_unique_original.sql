/*
	2016-05-11
*/
ALTER TABLE `group` MODIFY COLUMN `id` varchar(255);
ALTER TABLE `user` MODIFY COLUMN `id` varchar(255);
ALTER TABLE `user` MODIFY COLUMN `group_id` varchar(255);
ALTER TABLE `menu` MODIFY COLUMN `id` varchar(255);
ALTER TABLE `menu` MODIFY COLUMN `parent` varchar(255);
ALTER TABLE `menugroup` MODIFY COLUMN `group_id` varchar(255);
ALTER TABLE `menugroup` MODIFY COLUMN `menu_id` varchar(255);

UPDATE `group` SET `id`='67544603076af2daf15675402647dcbe85c629ec' WHERE (`id`='1');
UPDATE `group` SET `id`='54345880d047bf8496e0df28c4a3db5359083240' WHERE (`id`='2');
UPDATE `group` SET `id`='da51c984897cd84a051074fe171d5a2a74757e45' WHERE (`id`='3');

UPDATE `menu` SET `id`='ec55fc1a3ef2ed87f37dc222ab5a49f29b47262d' WHERE (`id`='1');
UPDATE `menu` SET `id`='e0fdbf7f46ee7595818fc4f42a8c91f86c455d69' WHERE (`id`='54');
UPDATE `menu` SET `id`='44413d5ea0d9d0d5220be1591110373b3ca72651' WHERE (`id`='24');
UPDATE `menu` SET `parent`='e0fdbf7f46ee7595818fc4f42a8c91f86c455d69' WHERE (`id`='23');
UPDATE `menu` SET `parent`='e0fdbf7f46ee7595818fc4f42a8c91f86c455d69' WHERE (`id`='11');
UPDATE `menu` SET `id`='ec43ea6c5b44b24687a3801c69aa91d563730174' WHERE (`id`='11');
UPDATE `menu` SET `id`='acf9b498cbaa8de7ae8df387458ebe3a91c27c94' WHERE (`id`='23');

UPDATE `user` SET `group_id`='67544603076af2daf15675402647dcbe85c629ec' WHERE (`id`='2');
UPDATE `user` SET `group_id`='54345880d047bf8496e0df28c4a3db5359083240' WHERE (`id`='1');

UPDATE `menugroup` SET `group_id`='67544603076af2daf15675402647dcbe85c629ec' WHERE (`group_id`='1');
UPDATE `menugroup` SET `menu_id`='ec55fc1a3ef2ed87f37dc222ab5a49f29b47262d' WHERE (`menu_id`='1');
UPDATE `menugroup` SET `menu_id`='e0fdbf7f46ee7595818fc4f42a8c91f86c455d69' WHERE (`menu_id`='54');
UPDATE `menugroup` SET `menu_id`='44413d5ea0d9d0d5220be1591110373b3ca72651' WHERE (`menu_id`='24');
UPDATE `menugroup` SET `menu_id`='ec43ea6c5b44b24687a3801c69aa91d563730174' WHERE (`menu_id`='11');
UPDATE `menugroup` SET `menu_id`='acf9b498cbaa8de7ae8df387458ebe3a91c27c94' WHERE (`menu_id`='23');

UPDATE `user` SET `id`='5dab4804c4f05f11d7e2ac6379a55ed9b3d24fda' WHERE (`id`='1');
UPDATE `user` SET `id`='c4cab7526d9d124d79b30c818d2fcc37a1f63c73' WHERE (`id`='2');

ALTER TABLE `group` MODIFY COLUMN `update_by` varchar(255);
ALTER TABLE `menu` MODIFY COLUMN `update_by` varchar(255);
ALTER TABLE `setting` MODIFY COLUMN `update_by` varchar(255);
ALTER TABLE `user` MODIFY COLUMN `update_by` varchar(255);

UPDATE `group` SET `update_by`='5dab4804c4f05f11d7e2ac6379a55ed9b3d24fda' WHERE (`update_by`='1');
UPDATE `group` SET `update_by`='c4cab7526d9d124d79b30c818d2fcc37a1f63c73' WHERE (`update_by`='2');
UPDATE `menu` SET `update_by`='5dab4804c4f05f11d7e2ac6379a55ed9b3d24fda' WHERE (`update_by`='1');
UPDATE `menu` SET `update_by`='c4cab7526d9d124d79b30c818d2fcc37a1f63c73' WHERE (`update_by`='2');
UPDATE `setting` SET `update_by`='5dab4804c4f05f11d7e2ac6379a55ed9b3d24fda' WHERE (`update_by`='1');
UPDATE `setting` SET `update_by`='c4cab7526d9d124d79b30c818d2fcc37a1f63c73' WHERE (`update_by`='2');
UPDATE `user` SET `update_by`='5dab4804c4f05f11d7e2ac6379a55ed9b3d24fda' WHERE (`update_by`='1');
UPDATE `user` SET `update_by`='c4cab7526d9d124d79b30c818d2fcc37a1f63c73' WHERE (`update_by`='2');
