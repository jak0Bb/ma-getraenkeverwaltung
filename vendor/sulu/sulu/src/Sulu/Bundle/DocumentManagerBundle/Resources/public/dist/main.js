require.config({paths:{suludocumentmanager:"../../suludocumentmanager/dist"}}),define(["suludocumentmanager/extensions/sulu-buttons"],function(a){"use strict";return{name:"Sulu Document Manager Bundle",initialize:function(b){b.sandbox.sulu.buttons.push(a.getButtons(b)),b.sandbox.sulu.buttons.dropdownItems.push(a.getDropdownItems(b))}}});