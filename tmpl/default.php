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

if (!$onClickScript)
{
	die(__FILE__ . ' ' . __LINE__);
}#END IF

?>
<div class="header-phones">
    <svg aria-hidden="true" class="header-phones__icon" height="12" width="12">
        <use xlink:href="#icon-phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
    </svg>

    <button class="header-phones__button" type="button" onclick="<?= $onClickScript; ?>">
        <span class="link-dashed">(044) 537-02-22</span>
        <svg aria-hidden="true" class="header-phones__button-icon" height="7" width="13">
            <use xlink:href="#icon-chevron-down" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
    </button>

</div>

<!--<div class="modal__holder modal__holder_show_animation modal__holder_size_small">
    <div class="modal__header">
        <h3 _ngcontent-c38="" class="modal__heading"> Контактные телефоны </h3>
        <button _ngcontent-c38="" class="modal__close" type="button" aria-label="Закрыть модальное окно">
            <svg _ngcontent-c38="" height="16" pointer-events="none" width="16">
                <use _ngcontent-c38="" xlink:href="#icon-close-modal" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </button>
    </div>
    <div class="modal__content">
        <div _ngcontent-c38=""></div>
        <contact-info>
            <div class="modal-contacts__row">
                <p class="modal-contacts__label">Консультации и заказ по телефонам </p>
                <a class="modal-contacts__phone-link" href="tel:+38 (044) 537-02-22"> +38 044 537-02-22 </a>
                <a class="modal-contacts__phone-link" href="tel:+38 (044) 503-80-80"> +38 044 503-80-80 </a>
                <p class="modal-contacts__label"> Другие продавцы: </p>
                <a class="modal-contacts__phone-link" href="tel:+38 044 502-10-79"> +38 044 502-10-79 </a>
            </div>
            <div class="modal-contacts__row">
                <p class="modal-contacts__label"> График работы call-центра: </p>
                <dl class="modal-contacts__schedule">
                    <dt class="modal-contacts__schedule-day">В будние:</dt>
                    <dd class="modal-contacts__schedule-time">с 8:00 до 21:00</dd>
                    <dt class="modal-contacts__schedule-day">Суббота:</dt>
                    <dd class="modal-contacts__schedule-time">с 9:00 до 20:00</dd>
                    <dt class="modal-contacts__schedule-day">Воскресенье:</dt>
                    <dd class="modal-contacts__schedule-time">c 10:00 до 19:00</dd>
                </dl>
            </div>
        </contact-info>
    </div>
</div>-->