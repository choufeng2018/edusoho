webpackJsonp(["app/js/activity-manage/text/index"],{0:function(t,e,n){"use strict";function a(t){return t&&t.__esModule?t:{default:t}}var i=n("1d0e3cb29c694c31b1b6"),r=a(i);new r.default},"1d0e3cb29c694c31b1b6":function(t,e,n){"use strict";function a(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var i=function(){function t(t,e){for(var n=0;n<e.length;n++){var a=e[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}return function(e,n,a){return n&&t(e.prototype,n),a&&t(e,a),e}}(),r=n("6ff75de42f89cafb6c75");n("9c4b140442602e4b111b");var o=function(){function t(e){a(this,t),this._init()}return i(t,[{key:"_init",value:function(){var t=this;this._inItStep2form(),this._inItStep3form(),this._lanuchAutoSave(),$(".js-continue-edit").on("click",function(e){var n=$(e.currentTarget),a=n.data("content");t.editor.setData(a),n.remove()})}},{key:"_inItStep2form",value:function(){var t=$("#step2-form"),e=t.data("validator");e=t.validate({rules:{title:{required:!0,maxlength:50,trim:!0,open_live_course_title:!0},content:{required:!0,trim:!0}}});var n=$('[name="content"]');this.editor=(0,r.initEditor)(n,e),this._contentCache=n.val()}},{key:"_lanuchAutoSave",value:function(){var t=this,e=$("#modal .modal-title",parent.document);this._originTitle=e.text(),setInterval(function(){t._saveDraft()},5e3)}},{key:"_saveDraft",value:function(){var t=this,e=this.editor.getData(),n=e!==this._contentCache;if(n){var a=$('[name="content"]');$.post(a.data("saveDraftUrl"),{content:e}).done(function(){var n=new Date,a=$("#modal .modal-title",parent.document),i=""+(n.getHours()+Translator.trans("时"))+(n.getMinutes()+Translator.trans("分"))+(n.getSeconds()+Translator.trans("秒"));a.text(t._originTitle+Translator.trans("(草稿已于%createdTime%保存)",{createdTime:i})),t._contentCache=e})}}},{key:"_inItStep3form",value:function(){var t=$("#step3-form"),e=t.data("validator");e=t.validate({rules:{finishDetail:{required:!0,positive_integer:!0,max:300}},messages:{finishDetail:{required:"请输入至少观看多少分钟"}}})}}]),t}();e.default=o}});