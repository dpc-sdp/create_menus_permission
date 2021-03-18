<?php

namespace Drupal\create_menus_permission;

use Drupal\system\Entity\Menu;

class CreateMenusPermission {

	/**
	 * Returns an array of menu permissions.
	 *
	 * @return array
	 *   The menu permissions.
	 */
	public function CreateMenusPermission() {
		$perms = [];

		// Add the permission to create new menus.
		$perms['create new menu'] = [
			'title' => t('Create new menu'),
		];

		return $perms;
	}
}
