/**
 *
 */
window.ModGjContactPhones = window.ModGjContactPhones || {} ;
/**
 * Проверка наличия библиотеки GNZ11
 * @returns {boolean}
 */
ModGjContactPhones.ch_wgnz11 = function () {return typeof wgnz11 === 'object';};
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
            if ( ModGjContactPhones.ch_wgnz11 ){
                ModGjContactPhones.renrderModal(response);
            }else{
                ModGjContactPhones.renrderMessages( response ) ;
            }

        }
    })
};
ModGjContactPhones.renrderMessages = function ( html ) {
    var $ = jQuery ;
    Joomla.Text.load({success:'Сообщение'});
    Joomla.renderMessages({"success":[html]});
    $('#system-message-container').on('click' , '.close' , Joomla.removeMessages ) ;
};
ModGjContactPhones.renrderModal = function (html) {
    wgnz11.__loadModul.Fancybox().then(function (a) {
        a.open( html ,{
            baseClass: "gjContactPhones",
            afterShow   : function(instance, current)   {},
            afterClose  : function () {
                // jQuery(OneClick.OpenKey).removeClass("disabled")
            },

        } );
    })
};


(function () {
    var $ = jQuery ;
    if ( ModGjContactPhones.ch_wgnz11 ){
        ModGjContactPhones.getData() ;
        $('.header-phones__button').off().on('click' , ModGjContactPhones.getData )
    }
})();



