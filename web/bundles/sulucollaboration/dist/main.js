require.config({paths:{sulucollaboration:"../../sulucollaboration/dist"}}),define(["underscore","app-config"],function(a,b){"use strict";return{name:"SuluCollaborationBundle",initialize:function(c){c.components.addSource("sulucollaboration","/bundles/sulucollaboration/dist/components"),c.components.before("initialize",function(){var c;if(this.collaboration&&(c=this.collaboration())){var d=$('<div id="content-column-collaboration"/>'),e=a.defaults(c,{el:d,userId:b.getUser().id});this.$el.prepend(d),this.sandbox.start([{name:"collaboration@sulucollaboration",options:e}])}})}}});