function calcSelectArrowDimensions(e){var n=".avada-select-parent .select-arrow, .gravity-select-parent .select-arrow, .wpcf7-select-parent .select-arrow";(void 0!==e?jQuery(e).find(n):jQuery(n)).filter(":visible").each(function(){0<jQuery(this).prev().innerHeight()&&jQuery(this).css({height:jQuery(this).prev().innerHeight(),width:jQuery(this).prev().innerHeight(),"line-height":jQuery(this).prev().innerHeight()+"px"})})}jQuery(window).on("load fusion-element-render-fusion_tb_woo_cart",function(){calcSelectArrowDimensions(),setTimeout(function(){calcSelectArrowDimensions()},100)}),jQuery(window).on("fusion-dynamic-content-render",function(e,n){calcSelectArrowDimensions(n)});