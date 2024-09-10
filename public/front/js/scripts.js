(function(n){"use strict";typeof wpcf7!="undefined"&&wpcf7!==null&&((wpcf7=n.extend({cached:0,inputs:[]},wpcf7)),n(function(){wpcf7.supportHtml5=(function(){var t={},i=document.createElement("input"),r;return((t.placeholder="placeholder" in i),(r=["email","url","tel","number","range","date"]),n.each(r,function(n,r){i.setAttribute("type",r);t[r]=i.type!=="text"}),t)})();n("div.wpcf7 > form").each(function(){var t=n(this);wpcf7.initForm(t);wpcf7.cached&&wpcf7.refill(t)})}),(wpcf7.getId=function(t){return parseInt(n('input[name="_wpcf7"]',t).val(),10)}),(wpcf7.initForm=function(t){var i=n(t);i.submit(function(t){wpcf7.supportHtml5.placeholder||n("[placeholder].placeheld",i).each(function(t,i){n(i).val("").removeClass("placeheld")});typeof FormData=="function"&&(wpcf7.submit(i),t.preventDefault())});n(".wpcf7-submit",i).after('<span class="ajax-loader"></span>');wpcf7.toggleSubmit(i);i.on("click",".wpcf7-acceptance",function(){wpcf7.toggleSubmit(i)});n(".wpcf7-exclusive-checkbox",i).on("click","input:checkbox",function(){var t=n(this).attr("name");i.find('input:checkbox[name="'+t+'"]').not(this).prop("checked",!1)});n(".wpcf7-list-item.has-free-text",i).each(function(){var t=n(":input.wpcf7-free-text",this),i=n(this).closest(".wpcf7-form-control");n(":checkbox, :radio",this).is(":checked")?t.prop("disabled",!1):t.prop("disabled",!0);i.on("change",":checkbox, :radio",function(){var r=n(".has-free-text",i).find(":checkbox, :radio");r.is(":checked")?t.prop("disabled",!1).focus():t.prop("disabled",!0)})});wpcf7.supportHtml5.placeholder||n("[placeholder]",i).each(function(){n(this).val(n(this).attr("placeholder"));n(this).addClass("placeheld");n(this).focus(function(){n(this).hasClass("placeheld")&&n(this).val("").removeClass("placeheld")});n(this).blur(function(){""===n(this).val()&&(n(this).val(n(this).attr("placeholder")),n(this).addClass("placeheld"))})});wpcf7.jqueryUi&&!wpcf7.supportHtml5.date&&i.find('input.wpcf7-date[type="date"]').each(function(){n(this).datepicker({dateFormat:"yy-mm-dd",minDate:new Date(n(this).attr("min")),maxDate:new Date(n(this).attr("max")),})});wpcf7.jqueryUi&&!wpcf7.supportHtml5.number&&i.find('input.wpcf7-number[type="number"]').each(function(){n(this).spinner({min:n(this).attr("min"),max:n(this).attr("max"),step:n(this).attr("step"),})});n(".wpcf7-character-count",i).each(function(){var t=n(this),e=t.attr("data-target-name"),o=t.hasClass("down"),s=parseInt(t.attr("data-starting-value"),10),r=parseInt(t.attr("data-maximum-value"),10),u=parseInt(t.attr("data-minimum-value"),10),f=function(i){var h=n(i),f=h.val().length,e=o?s-f:f;t.attr("data-current-value",e);t.text(e);r&&r<f?t.addClass("too-long"):t.removeClass("too-long");u&&f<u?t.addClass("too-short"):t.removeClass("too-short")};n(':input[name="'+e+'"]',i).each(function(){f(this);n(this).keyup(function(){f(this)})})});i.on("change",".wpcf7-validates-as-url",function(){var t=n.trim(n(this).val());t&&!t.match(/^[a-z][a-z0-9.+-]*:/i)&&-1!==t.indexOf(".")&&((t=t.replace(/^\/+/,"")),(t="http://"+t));n(this).val(t)})}),(wpcf7.submit=function(t){var r,u,i,f;typeof FormData=="function"&&((r=n(t)),n(".ajax-loader",r).addClass("is-active"),wpcf7.clearResponse(r),(u=new FormData(r.get(0))),(i={id:r.closest("div.wpcf7").attr("id"),status:"init",inputs:[],formData:u,}),n.each(r.serializeArray(),function(n,t){if("_wpcf7"==t.name)i.contactFormId=t.value;else if("_wpcf7_version"==t.name)
i.pluginVersion=t.value;else if("_wpcf7_locale"==t.name)
i.contactFormLocale=t.value;else if("_wpcf7_unit_tag"==t.name)i.unitTag=t.value;else if("_wpcf7_container_post"==t.name)
i.containerPostId=t.value;else if(t.name.match(/^_wpcf7_\w+_free_text_/)){var r=t.name.replace(/^_wpcf7_\w+_free_text_/,"");i.inputs.push({name:r+"-free-text",value:t.value,})}else t.name.match(/^_/)||i.inputs.push(t)}),wpcf7.triggerEvent(r.closest("div.wpcf7"),"beforesubmit",i),(f=function(t,r,u,f){var e,o;i.id=n(t.into).attr("id");i.status=t.status;i.apiResponse=t;e=n(".wpcf7-response-output",f);switch(t.status){case "validation_failed":n.each(t.invalidFields,function(t,i){n(i.into,f).each(function(){wpcf7.notValidTip(this,i.message);n(".wpcf7-form-control",this).addClass("wpcf7-not-valid");n("[aria-invalid]",this).attr("aria-invalid","true")})});e.addClass("wpcf7-validation-errors");f.addClass("invalid");wpcf7.triggerEvent(t.into,"invalid",i);break;case "acceptance_missing":e.addClass("wpcf7-acceptance-missing");f.addClass("unaccepted");wpcf7.triggerEvent(t.into,"unaccepted",i);break;case "spam":e.addClass("wpcf7-spam-blocked");f.addClass("spam");wpcf7.triggerEvent(t.into,"spam",i);break;case "aborted":e.addClass("wpcf7-aborted");f.addClass("aborted");wpcf7.triggerEvent(t.into,"aborted",i);break;case "mail_sent":e.addClass("wpcf7-mail-sent-ok");f.addClass("sent");wpcf7.triggerEvent(t.into,"mailsent",i);break;case "mail_failed":e.addClass("wpcf7-mail-sent-ng");f.addClass("failed");wpcf7.triggerEvent(t.into,"mailfailed",i);break;default:o="custom-"+t.status.replace(/[^0-9a-z]+/i,"-");e.addClass("wpcf7-"+o);f.addClass(o)}
wpcf7.refill(f,t);wpcf7.triggerEvent(t.into,"submit",i);"mail_sent"==t.status&&(f.each(function(){this.reset()}),wpcf7.toggleSubmit(f));wpcf7.supportHtml5.placeholder||f.find("[placeholder].placeheld").each(function(t,i){n(i).val(n(i).attr("placeholder"))});e.html("").append(t.message).slideDown("fast");e.attr("role","alert");n(".screen-reader-response",f.closest(".wpcf7")).each(function(){var i=n(this),r;i.html("").attr("role","").append(t.message);t.invalidFields&&((r=n("<ul></ul>")),n.each(t.invalidFields,function(t,i){var u;u=i.idref?n("<li></li>").append(n("<a></a>").attr("href","#"+i.idref).append(i.message)):n("<li></li>").append(i.message);r.append(u)}),i.append(r));i.attr("role","alert").focus()})}),n.ajax({type:"POST",url:wpcf7.apiSettings.getRoute("/contact-forms/"+wpcf7.getId(r)+"/feedback"),data:u,dataType:"json",processData:!1,contentType:!1,}).done(function(t,i,u){f(t,i,u,r);n(".ajax-loader",r).removeClass("is-active")}).fail(function(t,i,u){var f=n('<div class="ajax-error"></div>').text(u.message);r.after(f)}))}),(wpcf7.triggerEvent=function(t,i,r){var u=n(t),f=new CustomEvent("wpcf7"+i,{bubbles:!0,detail:r});u.get(0).dispatchEvent(f);u.trigger("wpcf7:"+i,r);u.trigger(i+".wpcf7",r)}),(wpcf7.toggleSubmit=function(t,i){var r=n(t),u=n("input:submit",r);if(typeof i!="undefined"){u.prop("disabled",!i);return}
r.hasClass("wpcf7-acceptance-as-validation")||(u.prop("disabled",!1),n(".wpcf7-acceptance",r).each(function(){var t=n(this),i=n("input:checkbox",t);if(!t.hasClass("optional")&&((t.hasClass("invert")&&i.is(":checked"))||(!t.hasClass("invert")&&!i.is(":checked"))))
return u.prop("disabled",!0),!1}))}),(wpcf7.notValidTip=function(t,i){var r=n(t),u;if((n(".wpcf7-not-valid-tip",r).remove(),n('<span role="alert" class="wpcf7-not-valid-tip"></span>').text(i).appendTo(r),r.is(".use-floating-validation-tip *"))){u=function(t){n(t).not(":hidden").animate({opacity:0},"fast",function(){n(this).css({"z-index":-100})})};r.on("mouseover",".wpcf7-not-valid-tip",function(){u(this)});r.on("focus",":input",function(){u(n(".wpcf7-not-valid-tip",r))})}}),(wpcf7.refill=function(t,i){var r=n(t),u=function(t,i){n.each(i,function(n,i){t.find(':input[name="'+n+'"]').val("");t.find("img.wpcf7-captcha-"+n).attr("src",i);var r=/([0-9]+)\.(png|gif|jpeg)$/.exec(i);t.find('input:hidden[name="_wpcf7_captcha_challenge_'+n+'"]').attr("value",r[1])})},f=function(t,i){n.each(i,function(n,i){t.find(':input[name="'+n+'"]').val("");t.find(':input[name="'+n+'"]').siblings("span.wpcf7-quiz-label").text(i[0]);t.find('input:hidden[name="_wpcf7_quiz_answer_'+n+'"]').attr("value",i[1])})};typeof i=="undefined"?n.ajax({type:"GET",url:wpcf7.apiSettings.getRoute("/contact-forms/"+wpcf7.getId(r)+"/refill"),beforeSend:function(n){var t=r.find(':input[name="_wpnonce"]').val();t&&n.setRequestHeader("X-WP-Nonce",t)},dataType:"json",}).done(function(n){n.captcha&&u(r,n.captcha);n.quiz&&f(r,n.quiz)}):(i.captcha&&u(r,i.captcha),i.quiz&&f(r,i.quiz))}),(wpcf7.clearResponse=function(t){var i=n(t);i.removeClass("invalid spam sent failed");i.siblings(".screen-reader-response").html("").attr("role","");n(".wpcf7-not-valid-tip",i).remove();n("[aria-invalid]",i).attr("aria-invalid","false");n(".wpcf7-form-control",i).removeClass("wpcf7-not-valid");n(".wpcf7-response-output",i).hide().empty().removeAttr("role").removeClass("wpcf7-mail-sent-ok wpcf7-mail-sent-ng wpcf7-validation-errors wpcf7-spam-blocked")}),(wpcf7.apiSettings.getRoute=function(n){var t=wpcf7.apiSettings.root;return t.replace(wpcf7.apiSettings.namespace,wpcf7.apiSettings.namespace+n)}))})(jQuery),(function(){function n(n,t){t=t||{bubbles:!1,cancelable:!1,detail:undefined};var i=document.createEvent("CustomEvent");return i.initCustomEvent(n,t.bubbles,t.cancelable,t.detail),i}
if(typeof window.CustomEvent=="function")return!1;n.prototype=window.Event.prototype;window.CustomEvent=n})()