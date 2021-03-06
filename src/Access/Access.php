<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace srag\Plugins\SrDclTableView\Access;

use ilSrDclTableViewPlugin;
use srag\DIC\SrDclTableView\DICTrait;
use srag\Plugins\SrDclTableView\Utils\SrDclTableViewTrait;

/**
 * Class Access
 *
 * Generated by srag\PluginGenerator v0.9.9
 *
 * @package srag\Plugins\SrDclTableView\Access
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  studer + raimann ag - Team Custom 1 <ms@studer-raimann.ch>
 */
final class Access {

	use DICTrait;
	use SrDclTableViewTrait;
	const PLUGIN_CLASS_NAME = ilSrDclTableViewPlugin::class;
	/**
	 * @var self
	 */
	protected static $instance = NULL;


	/**
	 * @return self
	 */
	public static function getInstance(): self {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * Access constructor
	 */
	private function __construct() {

	}


	/**
	 * @param int $ref_id
	 *
	 * @return bool
	 */
	public function hasWriteAccess(int $ref_id): bool {
		return self::dic()->access()->checkAccess("write", "", $ref_id);
	}
}
