/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'Magento_Checkout/js/view/payment/default'
    ],
    function (Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Smartceo_YandexMoney/payment/yandexmoney'
            },

            /** Returns send check to info */
            getMailingAddress: function() {
                return window.checkoutConfig.payment.checkmo.mailingAddress;
            },

                /**
                 * Returns payment method instructions.
                 *
                 * @return {*}
                 */
                getInstructions: function () {
                    return window.checkoutConfig.payment.instructions[this.item.method];
                }
	    
        });
    }
);
