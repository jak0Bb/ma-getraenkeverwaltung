define(["type/default"],function(a){"use strict";return function(b,c){var d={},e={setValue:function(a){void 0!==a&&""!==a&&null!==a&&this.$el.data({conditionSelection:a}).trigger("data-changed")},getValue:function(){return this.$el.data("conditionSelection")},needsValidation:function(){return!1},validate:function(){return!0}};return new a(b,d,c,"condition-selection",e)}});