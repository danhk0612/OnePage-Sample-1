const defaultUrl = "http://webdev.mydepot.kr";

/*
let defaultUrl = "http://webdev.mydepot.kr";
defaultUrl = "http://naver.com";
*/

$(document).ready(function(){
    $("#skill-desc").children(".card-text").toggle();
    $("#project-desc").children(".card-text").toggle();
    for(let i=1;i<8;i++){
        $("#project-"+i+"-desc").load("project-"+i+"-desc.php", function(){});
    }    
});

$(".skill-icon").click(function() {
    let name_by_id = $(this).attr("id");
    let sel_desc = $("#"+name_by_id+"-desc");
    $(this).toggleClass("on");
    $(this).parent().siblings().children(".skill-icon").removeClass("on");
    let bar_width = sel_desc.children(".progress").children(".progress-bar").attr("aria-valuenow")+"%";
    sel_desc.children(".progress").children(".progress-bar").animate({
        width:bar_width
    },200);
    sel_desc.siblings().children(".progress").children(".progress-bar").width(0);
    sel_desc.toggle().siblings().hide();
    //$("#skill-desc .card-title").text(name_by_id);
});

$(".project-banner").click(function() {
    var name_by_id = $(this).attr("id");
    let sel_desc = $("#"+name_by_id+"-desc");
    $(this).toggleClass("on");
    $(this).parent().siblings().children(".project-banner").removeClass("on");
    sel_desc.toggle().siblings().hide();
    //$("#skill-desc .card-title").text(name_by_id);
});

$("#navbarSupportedContent ul li.nav-item").click(function() {
    var scrollPosition = $($(this).attr("data-target")).offset().top;
    $("html").animate({
        scrollTop: scrollPosition
    }, 500);
});

$("#logo").click(function() {
    $("html").animate({
        scrollTop: 0
    }, 500);
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