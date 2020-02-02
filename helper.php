<?php


/**
 * @package     mod_gj_contact_phones
 *
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

defined('_JEXEC') or die;

class ModGjContactPhonesHelper
{
	public static function getAjax() {
		$params = new JRegistry();
		$module = JModuleHelper::getModule('gj_contact_phones');
		$params->loadString($module->params);
		return $params->get('html_text') ;
	}
}