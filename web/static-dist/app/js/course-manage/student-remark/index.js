webpackJsonp(["app/js/course-manage/student-remark/index"],{0:function(e,r){e.exports=jQuery},"4e7105ae891c998fcdfd":function(e,r,a){"use strict";var t=a("b334fd7e4c5a19234db2"),n=function(e){return e&&e.__esModule?e:{default:e}}(t),s=$("#student-remark-form").parents(".modal"),u=$("#student-remark-form"),d=u.validate({rules:{remark:{required:!1,maxlength:80}},messages:{remark:{maxlength:Translator.trans("course_manage.student_remark_validate_error_hint")}}});$(".js-student-remark-save-btn").click(function(e){d.form()&&($(e.currentTarget).button("loadding"),$.post(u.attr("action"),u.serialize(),function(e){var r=$(e);$("#"+r.attr("id")).replaceWith(r),s.modal("hide");var a=u.data("user");(0,n.default)("success",Translator.trans("course_manage.student_remark_success_hint",{username:a}))}).error(function(){var e=u.data("user");(0,n.default)("danger",Translator.trans("course_manage.student_remark_failed_hint",{username:e}))}))})}},["4e7105ae891c998fcdfd"]);