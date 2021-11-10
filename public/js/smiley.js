var c = document.body.className;
c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
document.body.className = c;

( 'fetch' in window ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );
( document.contains ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );
( window.DOMRect ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );
( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );
( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );
( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
( 'objectFit' in document.documentElement.style ) || document.write( '<script src="https://demo.athemes.com/leto/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>' );

wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );

window.lodash = _.noConflict();

( function( domain, translations ) {
    var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
    localeData[""].domain = domain;
    wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );

wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "https://demo.athemes.com/leto/wp-json/" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "2f0fb2bb70" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "https://demo.athemes.com/leto/wp-admin/admin-ajax.php?action=rest-nonce";

document.body.className = document.body.className.replace("siteorigin-panels-before-js","");

window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"ae0508e4dc","applicationID":"500075786","transactionName":"NVBRYUBVChVYWxFcXQwaclZGXQsIFkwAWEIOVEdQbUQFAVwVB0BbDlFWRw==","queueTime":0,"applicationTime":211,"atts":"GRdSFwhPGRs=","errorBeacon":"bam.nr-data.net","agent":""}

/* <![CDATA[ */
var wpcf7 = {"cached":"1"};
/* ]]> */

/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/leto\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/leto\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/demo.athemes.com\/leto\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */

/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/leto\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/leto\/?wc-ajax=%%endpoint%%"};
/* ]]> */

/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/leto\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/leto\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_6e6eef86053a4d37f76eaf71707d0fdf","fragment_name":"wc_fragments_6e6eef86053a4d37f76eaf71707d0fdf","request_timeout":"5000"};
/* ]]> */

/* <![CDATA[ */
var panelsStyles = {"fullContainer":"body"};
/* ]]> */