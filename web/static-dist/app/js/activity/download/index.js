webpackJsonp(["app/js/activity/download/index"],[function(t,a,i){"use strict";function d(t){return t&&t.__esModule?t:{default:t}}var e=i("da32dea28c2b82c7aab1"),c=d(e),l=new c.default;$(".download-activity-list").on("click","a",function(){$(this).attr("href",$(this).data("url")),l.emit("finish",{fileId:$(this).data("fileId")})}),$("#download-activity").perfectScrollbar(),$("#download-activity").perfectScrollbar("update")}]);