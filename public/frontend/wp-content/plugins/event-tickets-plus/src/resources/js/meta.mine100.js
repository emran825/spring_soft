var tribe_event_tickets_plus=tribe_event_tickets_plus||{};tribe_event_tickets_plus.meta=tribe_event_tickets_plus.meta||{},tribe_event_tickets_plus.meta.event=tribe_event_tickets_plus.meta.event||{},function(t,e,i,n){"use strict";n.init=function(){i(".tribe-list").on("click",".attendee-meta.toggle",function(){i(this).toggleClass("on").siblings(".attendee-meta-row").slideToggle()}),this.$ticket_form=i(".tribe-events-tickets").closest(".cart"),this.$ticket_form.on("change",".quantity input, .quantity select",this.event.quantity_changed).on("keyup",".quantity input",this.event.quantity_changed).on("submit",this.event.handle_submission),this.$ticket_form.find('.quantity input:not([type="hidden"]), .quantity select').each(function(){n.set_quantity(i(this))}),i(".tribe-event-tickets-plus-meta-fields").on("keydown",".tribe-tickets-meta-number input",this.event.limit_number_field_typing)},n.render_fields=function(t,e){var s=i(".tribe-event-tickets-plus-meta").filter('[data-ticket-id="'+t+'"]'),a=s.find(".tribe-event-tickets-plus-meta-fields-tpl"),r=s.find(".tribe-event-tickets-plus-meta-fields"),l=a.html();if(n.has_meta_fields(t)){var c=r.find(".tribe-event-tickets-plus-meta-attendee").length,d=0;if(c>e)return d=c-e,void r.find(".tribe-event-tickets-plus-meta-attendee:nth-last-child(-n+"+d+")").remove();d=e-c;for(var u=0;u<d;u++){var o=l;o=l.replace(/tribe-tickets-meta\[\]/g,"tribe-tickets-meta["+t+"]["+(c+u+1)+"]"),o=o.replace(/tribe-tickets-meta_([a-z0-9\-]+)_/g,"tribe-tickets-meta_$1_"+(c+u+1)+"_"),r.append(o)}}},n.set_quantity=function(t){var s=parseInt(t.val(),10),a=parseInt(t.closest("td").data("product-id"),10);i(e.getElementById("tribe-event-tickets-plus-meta-fields-tpl-"+a)).html();s&&n.has_meta_fields(a)?t.closest("table").find('.tribe-event-tickets-plus-meta[data-ticket-id="'+a+'"]').show():t.closest("table").find('.tribe-event-tickets-plus-meta[data-ticket-id="'+a+'"]').hide(),n.render_fields(a,s)},n.has_meta_fields=function(t){var n=i(e.getElementById("tribe-event-tickets-plus-meta-fields-tpl-"+t)).html();return!!i(n).find(".tribe-tickets-meta").length},n.validate_submission=function(){var t=!0,e=i(".tribe-tickets-meta-required");return e.each(function(){var e=i(this),n="";n=e.is(".tribe-tickets-meta-radio")||e.is(".tribe-tickets-meta-checkbox")?e.find("input:checked").length?"checked":"":e.find("input, select, textarea").val(),0===n.length&&(t=!1)}),t},n.event.quantity_changed=function(){n.set_quantity(i(this))},n.event.limit_number_field_typing=function(t){i.inArray(t.keyCode,[46,8,9,27,13,110])!==-1||65===t.keyCode&&(t.ctrlKey===!0||t.metaKey===!0)||67===t.keyCode&&t.ctrlKey===!0||86===t.keyCode&&t.ctrlKey===!0||88===t.keyCode&&t.ctrlKey===!0||t.keyCode>=35&&t.keyCode<=40||(t.shiftKey||t.keyCode<48||t.keyCode>57)&&(t.keyCode<96||t.keyCode>105)&&t.preventDefault()},n.event.handle_submission=function(t){if(!n.validate_submission()){t.preventDefault();var e=i(this).closest("form");return e.addClass("tribe-event-tickets-plus-meta-missing-required"),void i("html, body").animate({scrollTop:e.offset().top},300)}},i(function(){n.init()})}(window,document,jQuery,tribe_event_tickets_plus.meta);