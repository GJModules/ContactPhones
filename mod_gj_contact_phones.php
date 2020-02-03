<?php defined('_JEXEC') or die;

/**
 * @package    gj_contact_phones
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */


use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Factory;

$doc = JFactory::getDocument();

JLoader::registerNamespace('GNZ11', JPATH_LIBRARIES . '/GNZ11', $reset = false, $prepend = false, $type = 'psr4');

$url = '/modules/mod_gj_contact_phones/assets/js/mod_gj_contact_phones.js' ;


$onClickScript = null ;
if (class_exists('\GNZ11\Document\Dom'))
{
	try
	{
		$onClickScript = \GNZ11\Core\Js::getLoadJs($url);
		$urlStyleSheet = '/modules/mod_gj_contact_phones/assets/css/gj_contact_phones.modal.css' ;
		$doc->addStyleSheet($urlStyleSheet /*, $options = ['version'=>'auto'], $attribs = ['id'=>'stylesheet']*/);

	}
	catch (Exception $e)
	{
		echo'<pre>';print_r( $e );echo'</pre>'.__FILE__.' '.__LINE__;
		die(__FILE__ .' '. __LINE__ );
	}

}else{
	$doc = Factory::getDocument();
	JHtml::_('script', 'system/core.js', false, true);
	$doc->addScript($url, $options = ['version' => 'auto'], $attribs = ['async' => 'async' , 'defer'=>'defer'] );
	$onClickScript = 'ModGjContactPhones.getData()' ;
}#END IF




$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_gj_contact_phones', $params->get('layout', 'default'));
//require ModuleHelper::getLayoutPath('mod_gj_contact_phones', $params->get('layout', 'modal'));
