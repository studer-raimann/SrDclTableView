<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace srag\Plugins\SrDclTableView\Utils;

use srag\Plugins\SrDclTableView\Access\Access;
use srag\Plugins\SrDclTableView\Access\Ilias;
use srag\Plugins\SrDclTableView\Config\Configs;

/**
 * Trait SrDclTableViewTrait
 *
 * Generated by srag\PluginGenerator v0.9.9
 *
 * @package srag\Plugins\SrDclTableView\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  studer + raimann ag - Team Custom 1 <ms@studer-raimann.ch>
 */
trait SrDclTableViewTrait {

	/**
	 * @return Access
	 */
	protected static function access(): Access {
		return Access::getInstance();
	}


	/**
	 * @return Ilias
	 */
	protected static function ilias(): Ilias {
		return Ilias::getInstance();
	}


	/**
	 * @return Configs
	 */
	protected static function configs(): Configs {
		return Configs::getInstance();
	}
}
