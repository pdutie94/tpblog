function responsive_filemanager_callback(field_id){
    var url=jQuery('#'+field_id).val();
    jQuery('#'+field_id).attr('value', url);
    var imgHtml = '<img src="'+url.replace('/source/', '/thumbs/')+'" alt="'+url.replace('/source/', '/thumbs/')+'" />';
    $('.post-preview-img').attr('data-content',imgHtml);
}
function open_popup(url)  //function này hiển thị popup file chọn
{
    var w = 880;
    var h = 500;
    var l = Math.floor((screen.width-w)/2);
    var t = Math.floor((screen.height-h)/2);
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}
$(function () {
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        placement: 'bottom',
        html: true
    });
    $(".chosen-select").chosen();
})