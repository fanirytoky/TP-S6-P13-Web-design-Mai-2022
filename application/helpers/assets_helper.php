<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if ( ! function_exists('css_url_back')){
        function css_url_back($lien){
            return site_url("assets_Back/css/".$lien);
        }
    }if ( ! function_exists('js_url_back')){
        function js_url_back($lien){
            return site_url("assets_Back/js/".$lien);
        }
    }if ( ! function_exists('img_url_back')){
        function images_url_back($lien){
            return site_url("assets_Back/images/".$lien);
        }
    }if ( ! function_exists('scss_url_back')){
        function scss_url_back($lien){
            return site_url("assets_Back/scss/".$lien);
        }
    }if ( ! function_exists('vendor_url_back')){
        function vendors_url_back($lien){
            return site_url("assets_Back/vendors/".$lien);
        }
    }if ( ! function_exists('fonts_url_back')){
        function fonts_url_back($lien){
            return site_url("assets_Back/fonts/".$lien);
        }
    }

    // Front

    if ( ! function_exists('css_url_front')){
        function css_url_front($lien){
            return site_url("assets_Front/css/".$lien);
        }
    }if ( ! function_exists('js_url_front')){
        function js_url_front($lien){
            return site_url("assets_Front/js/".$lien);
        }
    }if ( ! function_exists('img_url_front')){
        function images_url_front($lien){
            return site_url("assets_Front/img/".$lien);
        }
    }if ( ! function_exists('scss_url_front')){
        function scss_url_front($lien){
            return site_url("assets_Front/scss/".$lien);
        }
    }if ( ! function_exists('vendor_url_front')){
        function vendors_url_front($lien){
            return site_url("assets_Front/vendors/".$lien);
        }
    }if ( ! function_exists('fonts_url_front')){
        function fonts_url_front($lien){
            return site_url("assets_Front/fonts/".$lien);
        }
    }


?>
