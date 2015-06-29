/*
 * blueimp Gallery Demo JS 2.12.1
 * https://github.com/blueimp/Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global blueimp, $ */

$(function () {
      'use strict';
    $.post("php/get_photo.php", function(response) {
        var result = $.parseJSON(response);
        result = result["photos"]["photo"];
        var str = "";
        //<a href="https://farm1.static.flickr.com/420/18502802124_605a16dce6_b.jpg" title="Le Croisic at dusk" data-gallery=""><img src="https://farm1.static.flickr.com/420/18502802124_605a16dce6_s.jpg"></a>
        for(var result_count=0;result_count<result.length;result_count++) {
                if(result_count % 2 == 0)
                    continue;
                var temp = "https://farm"+result[result_count]["farm"]+".static.flickr.com/"+result[result_count]["server"]+"/"+result[result_count]["id"]+"_"+result[result_count]["secret"]+"_b.jpg";
                str += '<a href="'+(temp)+'"'+' title="'+result[result_count]["title"]+'" data-gallery data-original="'+temp+'">';
                temp = "https://farm"+result[result_count]["farm"]+".static.flickr.com/"+result[result_count]["server"]+"/"+result[result_count]["id"]+"_"+result[result_count]["secret"]+"_s.jpg";
                str += '<img src="'+temp+'" data-original="'+temp+'">';
                str += '</a>';
        }

        $("#links").append(str);

    });
    $("img").unveil();
});