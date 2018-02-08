const defaultUrl = "http://webdev.mydepot.kr";

/*
let defaultUrl = "http://webdev.mydepot.kr";
defaultUrl = "http://naver.com";
*/

$(document).ready(function(){
    $("#skill-desc").children().not(".card-title").toggle();
    $("#project-desc").children().not(".card-title").toggle();
});

$(".skill-icon").click(function() {
    var name_by_id = $(this).attr("id");
    $(this).toggleClass("on");
    $(this).parent().siblings().children(".skill-icon").removeClass("on");
    $("#skill-desc").children("#"+name_by_id+"-desc").toggle();
    $("#skill-desc").children("#"+name_by_id+"-desc").siblings().hide();
    //$("#skill-desc .card-title").text(name_by_id);
});

$(".project-banner").click(function() {
    var name_by_id = $(this).attr("id");
    $(this).toggleClass("on");
    $(this).parent().siblings().children(".project-banner").removeClass("on");
    $("#project-desc").children("#"+name_by_id+"-desc").toggle();
    $("#project-desc").children("#"+name_by_id+"-desc").siblings().hide();
    //$("#skill-desc .card-title").text(name_by_id);
});

/*
var linkArr= [
     {title : '.practice', url : 'http://webdev.mydepot.kr/board/bbs/board.php?bo_table=pm_prac'}, 
     {title : '.memo', url : 'http://webdev.mydepot.kr/board/bbs/board.php?bo_table=study'},
     {title : '.community', url : '../html/disqus.html'},
     {title : '.favorite', url : 'http://webdev.mydepot.kr/board/bbs/board.php?bo_table=link'}
];

$.each(linkArr, function (index, item) {
    $(index.title).attr("attr", index.url);
})
*/

const linkObj = {
    '.practice': defaultUrl+'/board/bbs/board.php?bo_table=pm_prac',
    '.memo': defaultUrl+'/board/bbs/board.php?bo_table=study',
    '.community': '../html/disqus.html',
    '.favorite': defaultUrl+'/board/bbs/board.php?bo_table=link'
};

$.each(linkObj, function (index, url) {
    $(index).attr("href", url);
})