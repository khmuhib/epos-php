function getURLVar(t){var e=[],a=String(document.location).split("?");if(a[1]){var o=a[1].split("&");for(i=0;i<o.length;i++){var n=o[i].split("=");n[0]&&n[1]&&(e[n[0]]=n[1])}return e[t]||""}}$(document).ready(function(){$(".text-danger").each(function(){var t=$(this).parent().parent();t.hasClass("form-group")&&t.addClass("has-error")}),$("#form-currency .currency-select").on("click",function(t){t.preventDefault(),$("#form-currency input[name='code']").val($(this).attr("name")),$("#form-currency").submit()}),$("#form-language .language-select").on("click",function(t){t.preventDefault(),$("#form-language input[name='code']").val($(this).attr("name")),$("#form-language").submit()}),$("#search input[name='search']").parent().find("button").on("click",function(){var t=$("base").attr("href")+"index.php?route=product/search",e=$("header input[name='search']").val();e&&(t+="&search="+encodeURIComponent(e)),location=t}),$("#search input[name='search']").on("keydown",function(t){13==t.keyCode&&$("header input[name='search']").parent().find("button").trigger("click")}),$("#menu .dropdown-menu").each(function(){var t=$("#menu").offset(),t=$(this).parent().offset().left+$(this).outerWidth()-(t.left+$("#menu").outerWidth());0<t&&$(this).css("margin-left","-"+(10+t)+"px")}),$("#list-view").click(function(){$("#content .product-grid > .clearfix").remove(),$("#content .row > .product-grid").attr("class","product-layout product-list col-xs-12"),$("#grid-view").removeClass("active"),$("#list-view").addClass("active"),localStorage.setItem("display","list")}),$("#grid-view").click(function(){var t=$("#column-right, #column-left").length;2==t?$("#content .product-list").attr("class","product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12"):1==t?$("#content .product-list").attr("class","product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-6"):$("#content .product-list").attr("class","product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-6"),$("#list-view").removeClass("active"),$("#grid-view").addClass("active"),localStorage.setItem("display","grid")}),"list"==localStorage.getItem("display")?$("#list-view").addClass("active"):($("#grid-view").trigger("click"),$("#grid-view").addClass("active")),$(document).on("keydown","#collapse-checkout-option input[name='email'], #collapse-checkout-option input[name='password']",function(t){13==t.keyCode&&$("#collapse-checkout-option #button-login").trigger("click")}),$("[data-toggle='tooltip']").tooltip({container:"body"}),$(document).ajaxStop(function(){$("[data-toggle='tooltip']").tooltip({container:"body"})})});var cart={add:function(t,e){$.ajax({url:"index.php?route=checkout/cart/add",type:"post",data:"product_id="+t+"&quantity="+(void 0!==e?e:1),dataType:"json",success:function(t){t.redirect&&(location=t.redirect),t.success&&($.notify({message:t.success,target:"_blank"},{element:"body",position:null,type:"info",allow_dismiss:!0,newest_on_top:!1,placement:{from:"top",align:"center"},offset:0,spacing:10,z_index:9999999,delay:5e3,timer:1e3,url_target:"_blank",mouse_over:null,animate:{enter:"animated fadeInDown"},onShow:null,onShown:null,onClose:null,onClosed:null,icon_type:"class",template:'<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button><span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'}),$("#cart > ul").load("index.php?route=common/cart/info ul li"),$("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+t.total+"</span>"))}})},update:function(t,e){$.ajax({url:"index.php?route=checkout/cart/edit",type:"post",data:"key="+t+"&quantity="+(void 0!==e?e:1),dataType:"json",beforeSend:function(){$("#cart > button").button("loading")},complete:function(){$("#cart > button").button("reset")},success:function(t){setTimeout(function(){$("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+t.total+"</span>")},100),"checkout/cart"==getURLVar("route")||"checkout/checkout"==getURLVar("route")?location="index.php?route=checkout/cart":$("#cart > ul").load("index.php?route=common/cart/info ul li")},error:function(t,e,a){alert(a+"\r\n"+t.statusText+"\r\n"+t.responseText)}})},remove:function(t){$.ajax({url:"index.php?route=checkout/cart/remove",type:"post",data:"key="+t,dataType:"json",beforeSend:function(){$("#cart > button").button("loading")},complete:function(){$("#cart > button").button("reset")},success:function(t){setTimeout(function(){$("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+t.total+"</span>")},100),"checkout/cart"==getURLVar("route")||"checkout/checkout"==getURLVar("route")?location="index.php?route=checkout/cart":$("#cart > ul").load("index.php?route=common/cart/info ul li")},error:function(t,e,a){alert(a+"\r\n"+t.statusText+"\r\n"+t.responseText)}})}},voucher={add:function(){},remove:function(t){$.ajax({url:"index.php?route=checkout/cart/remove",type:"post",data:"key="+t,dataType:"json",beforeSend:function(){$("#cart > button").button("loading")},complete:function(){$("#cart > button").button("reset")},success:function(t){setTimeout(function(){$("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> '+t.total+"</span>")},100),"checkout/cart"==getURLVar("route")||"checkout/checkout"==getURLVar("route")?location="index.php?route=checkout/cart":$("#cart > ul").load("index.php?route=common/cart/info ul li")},error:function(t,e,a){alert(a+"\r\n"+t.statusText+"\r\n"+t.responseText)}})}},wishlist={add:function(t){$.ajax({url:"index.php?route=account/wishlist/add",type:"post",data:"product_id="+t,dataType:"json",success:function(t){t.success&&$.notify({message:t.success,target:"_blank"},{element:"body",position:null,type:"info",allow_dismiss:!0,newest_on_top:!1,placement:{from:"top",align:"center"},offset:0,spacing:10,z_index:9999999,delay:5e3,timer:1e3,url_target:"_blank",mouse_over:null,animate:{enter:"animated fadeInDown",exit:"animated fadeOutUp"},onShow:null,onShown:null,onClose:null,onClosed:null,icon_type:"class",template:'<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button><span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'}),t.info&&$.notify({message:t.info,target:"_blank"},{element:"body",position:null,type:"info",allow_dismiss:!0,newest_on_top:!1,placement:{from:"top",align:"center"},offset:0,spacing:10,z_index:9999999,delay:9e3,timer:1e3,url_target:"_blank",mouse_over:null,animate:{enter:"animated fadeInDown",exit:"animated fadeOutUp"},onShow:null,onShown:null,onClose:null,onClosed:null,icon_type:"class",template:'<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-info" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button><span data-notify="message"><i class="fa fa-info"></i>&nbsp; {2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'}),$("#wishlist-total span").html(t.total),$("#wishlist-total").attr("title",t.total)}})},remove:function(){}},compare={add:function(t){$.ajax({url:"index.php?route=product/compare/add",type:"post",data:"product_id="+t,dataType:"json",success:function(t){t.success&&($.notify({message:t.success,target:"_blank"},{element:"body",position:null,type:"info",allow_dismiss:!0,newest_on_top:!1,placement:{from:"top",align:"center"},offset:0,spacing:10,z_index:9999999,delay:5e3,timer:1e3,url_target:"_blank",mouse_over:null,animate:{enter:"animated fadeInDown",exit:"animated fadeOutUp"},onShow:null,onShown:null,onClose:null,onClosed:null,icon_type:"class",template:'<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button><span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'}),$("#compare-total").html(t.total))}})},remove:function(){}};$(document).delegate(".agree","click",function(t){t.preventDefault(),$("#modal-agree").remove();var e=this;$.ajax({url:$(e).attr("href"),type:"get",dataType:"html",success:function(t){html='<div id="modal-agree" class="modal">',html+='  <div class="modal-dialog">',html+='    <div class="modal-content">',html+='      <div class="modal-header">',html+='        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>',html+='        <h4 class="modal-title">'+$(e).text()+"</h4>",html+="      </div>",html+='      <div class="modal-body">'+t+"</div>",html+="    </div",html+="  </div>",html+="</div>",$("body").append(html),$("#modal-agree").modal("show")}})}),function(a){a.fn.autocomplete=function(t){return this.each(function(){this.timer=null,this.items=new Array,a.extend(this,t),a(this).attr("autocomplete","off"),a(this).on("focus",function(){this.request()}),a(this).on("blur",function(){setTimeout(function(t){t.hide()},200,this)}),a(this).on("keydown",function(t){27===t.keyCode?this.hide():this.request()}),this.click=function(t){t.preventDefault(),value=a(t.target).parent().attr("data-value"),value&&this.items[value]&&this.select(this.items[value])},this.show=function(){var t=a(this).position();a(this).siblings("ul.dropdown-menu").css({top:t.top+a(this).outerHeight(),left:t.left}),a(this).siblings("ul.dropdown-menu").show()},this.hide=function(){a(this).siblings("ul.dropdown-menu").hide()},this.request=function(){clearTimeout(this.timer),this.timer=setTimeout(function(t){t.source(a(t).val(),a.proxy(t.response,t))},200,this)},this.response=function(t){if(html="",t.length){for(i=0;i<t.length;i++)this.items[t[i].value]=t[i];for(i=0;i<t.length;i++)t[i].category||(html+='<li data-value="'+t[i].value+'"><a href="#">'+t[i].label+"</a></li>");var e=new Array;for(i=0;i<t.length;i++)t[i].category&&(e[t[i].category]||(e[t[i].category]=new Array,e[t[i].category].name=t[i].category,e[t[i].category].item=new Array),e[t[i].category].item.push(t[i]));for(i in e)for(html+='<li class="dropdown-header">'+e[i].name+"</li>",j=0;j<e[i].item.length;j++)html+='<li data-value="'+e[i].item[j].value+'"><a href="#">&nbsp;&nbsp;&nbsp;'+e[i].item[j].label+"</a></li>"}html?this.show():this.hide(),a(this).siblings("ul.dropdown-menu").html(html)},a(this).after('<ul class="dropdown-menu"></ul>'),a(this).siblings("ul.dropdown-menu").delegate("a","click",a.proxy(this.click,this))})}}(window.jQuery);