<?php
/**
 * @package    gj_contact_phones
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
?>
<div class="header-phones">
    <svg aria-hidden="true" class="header-phones__icon" height="12" width="12">
        <use xlink:href="#icon-phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
    </svg>
    <!---->
    <button class="header-phones__button" type="button">
        <span class="link-dashed">(044) 537-02-22</span>
        <svg aria-hidden="true" class="header-phones__button-icon" height="7" width="13">
            <use xlink:href="#icon-chevron-down" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
    </button>
    <!---->
</div>
<a href="<?php echo $domain; ?>">
	<?php echo 'gj_contact_phones'; ?>
</a>