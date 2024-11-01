<?php
/*
    Plugin Name: WP-ASC
    Plugin URI: https://fe-nix.ru/
    Description: WordPress - Anti Steal Content
    Author: Anton A Belogorodtstev
    Version: 2.0.2
    Author URI: https://fe-nix.ru/
*/

if (!defined('ABSPATH')) die('Go Away!');

function add_footer_wp_asc() {
    echo '<script>!function(){var e={p:"Source: ",m:100},n=document.createElement("span");n.style.fontSize="0",n.style.display="inline-block",n.style.lineHeight="0",n.style.width="0",n.style.height="0",n.style.verticalAlign="top",n.innerHTML=" <br><br>"+e.p+window.location.href,document.addEventListener("mousedown",function(){n.parentNode&&n.parentNode.removeChild(n)}),document.addEventListener("mouseup",function(){var t=window.getSelection(),i=t.toString();if(i&&!(i.length<e.m)){var o=t.getRangeAt(0);i=o.cloneRange(),i.collapse(!1),i.insertNode(n),o.setEndAfter(n),t.removeAllRanges(),t.addRange(o)}})}();</script>';
}
add_action('wp_footer', 'add_footer_wp_asc');