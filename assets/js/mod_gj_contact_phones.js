/**
 *
 */
window.ModGjContactPhones = window.ModGjContactPhones || {} ;
ModGjContactPhones.getData = function () {
    var $ = jQuery ;
    request = {
        'option' : 'com_ajax',
        'module' : 'gj_contact_phones',
        // 'cmd'    : action,
        // 'data'   : value,
        'format' : 'raw'
    };
    $.ajax({
        type: 'POST',
        data: request,
        success: function (response) {
            ModGjContactPhones.renrderData( response ) ;
        }
    })
};
ModGjContactPhones.renrderData = function ( html ) {
    var $ = jQuery ;
    Joomla.Text.load({success:'Сообщение'});
    Joomla.renderMessages({"success":[html]});
    $('#system-message-container').on('click' , '.close' , Joomla.removeMessages ) ;
};
/**
 * Проверка наличия библиотеки GNZ11
 * @returns {boolean}
 */
ModGjContactPhones.ch_wgnz11 = function () {
    return typeof wgnz11 === 'object';
};
(function () {
    var $ = jQuery ;
    if ( ModGjContactPhones.ch_wgnz11 ){
        ModGjContactPhones.getData() ;
    }
})();



