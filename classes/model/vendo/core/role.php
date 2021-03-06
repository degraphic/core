<?php

/**
 * Role model
 *
 * @package   Vendo
 * @author    Jeremy Bush <contractfrombelow@gmail.com>
 * @copyright (c) 2010-2011 Jeremy Bush
 * @license   ISC License http://github.com/zombor/Vendo/raw/master/LICENSE
 */
class Model_Vendo_Core_Role extends AutoModeler_ORM
{
	const LOGIN = 1;
	const ADMIN = 2;

	protected $_table_name = 'roles';

	protected $_data = array(
		'id' => '',
		'name' => '',
	);

	protected $_rules = array(
		'name' => array(
			array('not_empty'),
		),
	);

	protected $_belongs_to = array(
		'vendo_users',
	);
}