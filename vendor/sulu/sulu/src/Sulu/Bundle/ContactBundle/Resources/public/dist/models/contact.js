define(["mvc/relationalmodel","mvc/hasmany","mvc/hasone","sulucontact/models/account","sulucontact/models/email","sulucontact/models/phone","sulucontact/models/address","sulucontact/models/socialMediaProfile","sulucontact/models/note","sulucontact/models/accountContact","sulucontact/models/contactMedia","sulucontact/models/bankAccount","sulucategory/model/category"],function(a,b,c,d,e,f,g,h,i,j,k,l,m){"use strict";return a({urlRoot:"/admin/api/contacts",defaults:function(){return{id:null,firstName:"",middleName:"",lastName:"",birthday:"",title:"",position:"",account:null,emails:[],accountContacts:[],phones:[],socialMediaProfiles:[],notes:[],addresses:[],formOfAddress:"",salutation:"",medias:[],bankAccount:[],categories:[]}},relations:[{type:c,key:"account",relatedModel:d},{type:b,key:"emails",relatedModel:e},{type:b,key:"phones",relatedModel:f},{type:b,key:"addresses",relatedModel:g},{type:b,key:"accountContacts",relatedModel:j},{type:b,key:"socialMediaProfiles",relatedModel:h},{type:b,key:"notes",relatedModel:i},{type:b,key:"medias",relatedModel:k},{type:b,key:"bankAccounts",relatedModel:l},{type:b,key:"categories",relatedModel:m}]})});