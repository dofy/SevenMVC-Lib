/**
 * Javascript Document
 * Author: Seven Yu
 *
 */

window.UEDITOR_HOME_URL = '/slib/ueditor/';

var uConfig = {
    toolbars: [
        ['fullscreen', 'source', 'preview', '|', 'undo', 'redo', '|',
        'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', '|',
        'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|',
        'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
        'rowspacingtop', 'rowspacingbottom', 'lineheight', '|'],
        ['customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
        'directionalityltr', 'directionalityrtl', 'indent', '|',
        'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
        'touppercase', 'tolowercase', '|', 'link', 'unlink', 'anchor', '|',
        'imagenone', 'imageleft', 'imageright', 'imagecenter', '|'],
        ['simpleupload', 'insertimage', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'pagebreak', 'template', 'background', '|',
        'horizontal', 'date', 'time', 'spechars', '|',
        'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', '|']
    ],
    zIndex: 900,
    initialFrameWidth: 1000,
    initialFrameHeight: 350
};