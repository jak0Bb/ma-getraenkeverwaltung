define(["services/husky/mediator"],function(a){"use strict";function b(){}var c=null;return b.prototype={toEdit:function(b){a.emit("sulu.router.navigate","contacts/contacts/edit:"+b+"/details")},toAdd:function(){a.emit("sulu.router.navigate","contacts/contacts/add",!0,!0)},toList:function(){a.emit("sulu.router.navigate","contacts/contacts")}},b.getInstance=function(){return null==c&&(c=new b),c},b.getInstance()});