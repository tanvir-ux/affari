/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    var url = window.location.href;

    $('.nav a').each(function(){
        if(this.href === url) {
            $(this).parent().addClass('active');
            var a = $(this).parent().parent().parent();
            if(a[0].nodeName === 'LI') {
                a.addClass('active');
            }
        }
    });
});