jQuery.extend({highlight:function(e,t,i,n){if(3===e.nodeType){var h=e.data.match(t);if(h){var a=document.createElement(i||"span");a.className=n||"highlight";var l=e.splitText(h.index);l.splitText(h[0].length);var r=l.cloneNode(!0);return a.appendChild(r),l.parentNode.replaceChild(a,l),1}}else if(1===e.nodeType&&e.childNodes&&!/(script|style)/i.test(e.tagName)&&(e.tagName!==i.toUpperCase()||e.className!==n))for(var s=0;s<e.childNodes.length;s++)s+=jQuery.highlight(e.childNodes[s],t,i,n);return 0}}),jQuery.fn.unhighlight=function(e){var t={className:"highlight",element:"span"};return jQuery.extend(t,e),this.find(t.element+"."+t.className).each(function(){var e=this.parentNode;e.replaceChild(this.firstChild,this),e.normalize()}).end()},jQuery.fn.highlight=function(e,t){var i={className:"highlight",element:"span",caseSensitive:!1,wordsOnly:!1};if(jQuery.extend(i,t),e.constructor===String&&(e=[e]),e=jQuery.grep(e,function(e,t){return""!=e}),0==(e=jQuery.map(e,function(e,t){return e.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")})).length)return this;var n=i.caseSensitive?"":"i",h="("+e.join("|")+")";i.wordsOnly&&(h="\\b"+h+"\\b");var a=new RegExp(h,n);return this.each(function(){jQuery.highlight(this,a,i.element,i.className)})},function(e,t,i){function n(e,t){e.unhighlight(),t.rows({filter:"applied"}).data().length&&(t.columns().every(function(){this.nodes().flatten().to$().unhighlight({className:"column_highlight"}),this.nodes().flatten().to$().highlight(i.trim(this.search()).split(/\s+/),{className:"column_highlight"})}),e.highlight(i.trim(t.search()).split(/\s+/)))}i(t).on("init.dt.dth",function(e,t,h){if("dt"===e.namespace){var a=new i.fn.dataTable.Api(t),l=i(a.table().body());(i(a.table().node()).hasClass("searchHighlight")||t.oInit.searchHighlight||i.fn.dataTable.defaults.searchHighlight)&&(a.on("draw.dt.dth column-visibility.dt.dth column-reorder.dt.dth",function(){n(l,a)}).on("destroy",function(){a.off("draw.dt.dth column-visibility.dt.dth column-reorder.dt.dth")}),a.search()&&n(l,a))}})}(window,document,jQuery);
