function addCommas(a){a+="",x=a.split(","),x1=x[0],x2=1<x.length?","+x[1]:"";for(var b=/(\d+)(\d{3})/;b.test(x1);)x1=x1.replace(b,"$1,$2");return x1+x2}function containsWord(a,b){return null!=a.match(new RegExp("\\b"+b+"\\b"))}function EnableChannel(){$("input[name=selchannel]").attr("disabled",!1),$("input[name=selchannel]").attr("checked",!1),$("label.labelchannel").removeClass("disable"),$("div.detail-channel .ket").css("display","table-cell"),$("span.disable").css("display","none"),$("span.disableDenom").css("display","none")}function DisableChannel(a){var b=parseInt(a);$("label[for=\""+b+"\"]").addClass("disable"),$("input[name=selchannel][value=\""+b+"\"]").attr("disabled",!0),$("input[name=selchannel][value=\""+b+"\"]").attr("disabled",!0),$("label[for=\""+b+"\"] div.ket").css("display","none"),$("label[for=\""+b+"\"] span.disable").css("display","table-cell"),$("label[for=\""+b+"\"] span.ket").css("display","none")}function hideCategory(a){$("#selcategory option[value="+a+"]").hide()}function showCategory(a){$("#selcategory option").show(),$("#selcategory option[data-games*=\""+a+"\"]:first").prop("selected",!0)}function hideDenom(a){$("input[name=selproduct][value="+a+"]").parent("li").hide()}function showDenom(){$(".currency").hide(),$("input[name=selproduct]").parent("li").show()}function hideMethod(a){$("input[name=selchannel][value="+a+"]").parent("li").hide()}function showMethod(){$(".currency").hide(),$("input[name=selchannel]").parent("li").show()}function alertMsg(a,b,c=2500){return $.notify({message:a},{spacing:5,newest_on_top:!0,delay:c,mouse_over:"pause",type:b,placement:{from:"top",align:"center"}})}function FilterDenom(a){let b=new RegExp("\\b\\w*"+a+"\\w*\\b");$("ul.listnominal li.nominal input").filter(function(){return attrPlatform=$(this).data("category"),$("ul.listnominal li.nominal input:not([data-category*=\""+a+"\"])").each(function(){hideDenom($(this).val())}),b.test(attrPlatform)})}function FilterDenomByRegion(a){let b=new RegExp("\\b\\w*"+a+"\\w*\\b");$("ul.listnominal li.nominal input").filter(function(){return attrRegion=$(this).data("region"),$("ul.listnominal li.nominal input:not([data-region*=\""+a+"\"])").each(function(){hideDenom($(this).val())}),b.test(attrRegion)})}function FilterMethod(a,b=1){let c=new RegExp("\\b\\w*"+a+"\\w*\\b");$("ul.listchannel li.channel input").filter(function(){return EnableChannel(),attrRegion=$(this).data("region"),$("ul.listchannel li.channel input:not([data-region*=\""+a+"\"])").each(function(){1==b?DisableChannel($(this).val()):hideMethod($(this).val())}),c.test(attrRegion)})}function AllDetailChannel(a,b,c){$("input[name=selchannel]").each(function(){let d=$(this).val(),e=b,f=$("#finalprice-"+a+"");$(".currency").show(),0==e?f.text(""):f.text(addCommas(e)),!1==containsWord(c.toString(),d)&&DisableChannel(d)})}var $selregion=$("form#topup-form input[name=selregion]"),$txtplayerid=$("form#topup-form input[name=txtplayerid]"),$selserver=$("form#topup-form select[name=selserver]"),$selproduct=$("form#topup-form input[name=selproduct]"),$selchannel=$("form#topup-form input[name=selchannel]");function parsleyAddMethod(){$selregion.attr({required:"","data-parsley-required-message":"Must be chosen","data-parsley-errors-container":"#typeErr_region"}),$selserver.attr({required:"","data-parsley-required-message":"Must be chosen"}),$txtplayerid.attr({required:"","data-parsley-required-message":"Must be filled"}),$selchannel.attr({required:"","data-parsley-required-message":"Must be chosen","data-parsley-errors-container":"#typeErr_channel"})}let selectorRegion="input[name=selregion]",selectorProduct="input[name=selproduct]",selectorChannel="input[name=selchannel]";$(document).on("click","input[name=selregion]",function(){showDenom(),showMethod(),$(selectorProduct).prop("checked",!1),$(selectorChannel).each(function(){$(this).prop("checked",!1),$("#finalprice-"+$(this).val()+"").text("")}),valRegion=$(this).val(),FilterMethod(valRegion,2),FilterDenomByRegion(valRegion)}),$(document).on("click","input[name=selproduct]",function(){if(!$(selectorRegion).is(":checked"))return alertMsg("Please select a region","warning"),!1;FilterMethod($("input[name=selregion]:checked").val()),Array.prototype.associate=function(a){var b={};return this.forEach(function(c,d){b[a[d]]=c}),b};let a=$(this).data("method"),b=$(this).data("price"),c=-1<a.toString().indexOf(",")?a.split(","):a,d=-1<b.toString().indexOf(",")?b.split(","):b;if(-1<a.toString().indexOf(",")||-1<b.toString().indexOf(",")){let b=d.associate(c);$.each(b,function(c){let d=b[c];AllDetailChannel(c,d,a)})}else AllDetailChannel(a,b,a)}),$(document).on("click","label.labelchannel",function(){return $(selectorRegion).is(":checked")?$(this).hasClass("disable")?(alertMsg("isn't available","danger"),!1):46==$(this).attr("for")||$(selectorProduct).is(":checked")?void 0:(alertMsg("Please select a denomination","warning"),!1):(alertMsg("Please select a region","warning"),!1)}),parsleyAddMethod(),$(document).on("click","#topup-form-btnSubmit",function(a){parsleyAddMethod();var b=$("form#topup-form");if(b.parsley().validate())if(!0===b.data("submitted"))a.preventDefault();else{b.data("submitted",!0);var c=$(this);c.button("loading"),setTimeout(function(){c.button("reset")},5e3),b.parsley().isValid()?c.submit():b.data("submitted",!1)}});