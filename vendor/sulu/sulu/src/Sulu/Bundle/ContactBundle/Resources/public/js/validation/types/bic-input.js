/*
 * This file is part of the Sulu CMF.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 */
define([
    'type/default'
], function(Default) {

    'use strict';

    return function($el, options) {
        var defaults = {
                id: 'id',
                label: 'value',
                required: false
            },

            typeInterface = {
                setValue: function(data) {
                    this.$el.data({
                        value: data
                    }).trigger('data-changed');
                },

                getValue: function() {
                    return this.$el.find('input').val();
                },

                needsValidation: function() {
                    return this.getValue() !== '';
                },

                validate: function() {
                    var regex = /^([a-zA-Z]){4}([a-zA-Z]){2}([0-9a-zA-Z]){2}([0-9a-zA-Z]{3})?$/;
                    return regex.test(this.getValue());
                }
            };

        return new Default($el, defaults, options, 'bic-input', typeInterface);
    };
});
