(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6c7b3984"],{"0a49":function(t,e,n){var o=n("9b43"),i=n("626a"),r=n("4bf8"),c=n("9def"),a=n("cd1c");t.exports=function(t,e){var n=1==t,s=2==t,l=3==t,u=4==t,d=6==t,f=5==t||d,v=e||a;return function(e,a,p){for(var h,m,b=r(e),N=i(b),_=o(a,p,3),g=c(N.length),y=0,w=n?v(e,g):s?v(e,0):void 0;g>y;y++)if((f||y in N)&&(h=N[y],m=_(h,y,b),t))if(n)w[y]=m;else if(m)switch(t){case 3:return!0;case 5:return h;case 6:return y;case 2:w.push(h)}else if(u)return!1;return d?-1:l||u?u:w}}},"0acf":function(t,e,n){"use strict";n("b1ca")},1169:function(t,e,n){var o=n("2d95");t.exports=Array.isArray||function(t){return"Array"==o(t)}},2263:function(t,e,n){"use strict";n("6fcb")},2683:function(t,e,n){"use strict";n.r(e);var o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"wor"}},[n("div",{staticClass:"page-title"},[n("h3",[t._v(t._s(t._f("localize")("Worker")))])]),n("div",{staticStyle:{color:"blue"}}),n("div",{staticClass:"row"},[n("div",[n("NotesList",{attrs:{notes:t.notes,activeNote:t.index},on:{"app-addNote":t.addNote,"app-changeNote":t.changeNote}})],1),n("div",[n("Note",{attrs:{note:t.notes[t.index]},on:{"app-saveNote":t.saveNote,"app-removeNote":t.removeNote}})],1)])])},i=[],r=(n("8e6e"),n("456d"),n("7514"),n("bd86")),c=(n("ac6a"),function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"list"},[n("h4",[t._v(t._s(t._f("localize")("myWorker")))]),n("ul",{staticClass:"list-group"},t._l(t.notes,(function(e,o){return n("li",{key:e.index,staticClass:"list-group-item",class:{active:o===t.activeNote},on:{click:function(e){return t.changeNote(o)}}},[n("div",[t._v(t._s(e.title))])])})),0),n("button",{staticClass:"btn btn-info",on:{click:function(e){return t.addNote()}}},[t._v(t._s(t._f("localize")("add")))])])}),a=[],s={name:"NoteList",props:["notes","activeNote"],methods:{changeNote:function(t){this.$emit("app-changeNote",t)},addNote:function(){this.$emit("app-addNote")}}},l=s,u=(n("4f84"),n("2877")),d=Object(u["a"])(l,c,a,!1,null,null,null),f=d.exports,v=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"note"},[t.note?n("div",[n("h4",[t._v(t._s(t._f("localize")("info_worker")))]),n("div",{staticClass:"form-group"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.note.title,expression:"note.title"}],staticClass:"form-control tet",attrs:{type:"text",placeholder:"Имя"},domProps:{value:t.note.title},on:{input:function(e){e.target.composing||t.$set(t.note,"title",e.target.value)}}})]),n("div",{staticClass:"form-group"},[n("textarea",{directives:[{name:"model",rawName:"v-model",value:t.note.content,expression:"note.content"}],staticClass:"form-control tet",attrs:{placeholder:"Описание"},domProps:{value:t.note.content},on:{input:function(e){e.target.composing||t.$set(t.note,"content",e.target.value)}}})]),n("button",{staticClass:"btn btn-danger",on:{click:function(e){return t.removeNote()}}},[t._v(t._s(t._f("localize")("Remove")))]),n("button",{staticClass:"btn btn-success",on:{click:function(e){return t.saveNote()}}},[t._v(t._s(t._f("localize")("Save")))])]):n("div",[n("h5",[t._v(t._s(t._f("localize")("createWorker")))])])])},p=[],h={name:"Note",data:{power:"test"},props:["note"],methods:{saveNote:function(){this.$emit("app-saveNote")},removeNote:function(){this.$emit("app-removeNote")}}},m=h,b=(n("2263"),Object(u["a"])(m,v,p,!1,null,null,null)),N=b.exports,_=n("59ca"),g=n.n(_);n("66ce");function y(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(t);e&&(o=o.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,o)}return n}function w(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?y(Object(n),!0).forEach((function(e){Object(r["a"])(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):y(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}var x=g.a.database(),O=x.ref("users"),k={name:"worker",metaInfo:function(){return{title:this.$title("Worker")}},components:{NotesList:f,Note:N},data:function(){return{notes:[],index:0}},methods:{addNote:function(){this.notes.push({title:"",content:""}),this.index=this.notes.length-1},changeNote:function(t){this.index=t},saveNote:function(){var t=this.notes[this.index];t.id?this.updateNote(t):this.createNote(t)},updateNote:function(t){O.child(t.id).update({title:t.title,content:t.content})},createNote:function(t){t.id=O.push(t).key},removeNote:function(){var t=this.notes[this.index].id;O.child(t).remove()}},created:function(){var t=this;O.once("value",(function(e){e.forEach((function(e){t.notes.push({id:e.ref.key,title:e.child("title").val(),content:e.child("content").val()})}))})),O.on("child_added",(function(t){console.log("note was added: ",w(w({},t.val()),{},{id:t.key}))})),O.on("child_removed",(function(e){var n=t.notes.find((function(t){return t.id===e.key}));console.log("note was removed: ",n);var o=t.notes.indexOf(n);t.notes.splice(o,1),t.index=0===t.index?0:o-1})),O.on("child_changed",(function(e){var n=t.notes.find((function(t){return t.id===e.key}));n.title=e.val().title,n.content=e.val().content,console.log("note was updated: ",n)}))}},j=k,C=(n("0acf"),Object(u["a"])(j,o,i,!1,null,null,null));e["default"]=C.exports},"4f84":function(t,e,n){"use strict";n("fc30")},"6fcb":function(t,e,n){},7514:function(t,e,n){"use strict";var o=n("5ca1"),i=n("0a49")(5),r="find",c=!0;r in[]&&Array(1)[r]((function(){c=!1})),o(o.P+o.F*c,"Array",{find:function(t){return i(this,t,arguments.length>1?arguments[1]:void 0)}}),n("9c6c")(r)},b1ca:function(t,e,n){},cd1c:function(t,e,n){var o=n("e853");t.exports=function(t,e){return new(o(t))(e)}},e853:function(t,e,n){var o=n("d3f4"),i=n("1169"),r=n("2b4c")("species");t.exports=function(t){var e;return i(t)&&(e=t.constructor,"function"!=typeof e||e!==Array&&!i(e.prototype)||(e=void 0),o(e)&&(e=e[r],null===e&&(e=void 0))),void 0===e?Array:e}},fc30:function(t,e,n){}}]);
//# sourceMappingURL=chunk-6c7b3984.963d3b32.js.map