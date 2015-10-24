function getFilePath(filePathId){
    //判断浏览器类型
    var isIE = (document.all) ? true : false;
    var isIE7 = isIE && (navigator.userAgent.indexOf('MSIE 7.0') != -1);
    var isIE8 = isIE && (navigator.userAgent.indexOf('MSIE 8.0') != -1);	
    var path = '';
    if(isIE7 || isIE8)
    {
        var file = document.getElementById(filePathId);
        file.select();
        path = document.selection.createRange().text;
        document.selection.empty();
    }else{
        try {
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
        }catch (e) {
            alert('在地址栏输入about:config，然后修改signed.applets.codebase_principal_support的键值，将值修改为true');
            return;
        }
        
        var fname = document.getElementById(filePathId).value;
        var file = Components.classes["@mozilla.org/file/local;1"].createInstance(Components.interfaces.nsILocalFile);
        try {
            // Back slashes for windows
            file.initWithPath( fname.replace(/\//g, "\\\\") );
        }catch(e) {
            if (e.result!=Components.results.NS_ERROR_FILE_UNRECOGNIZED_PATH) throw e;
            alert('无法加载文件');
            return;
        }
        path = file.path;
    }
    return path;
}

function setImgDir(){
	var path = getFilePath('wugu_img');
    $('#img_path').value = path;
}

function wugu_edit(wu_id){
    var wuguId= wu_id;
    $.ajax({
        type: 'POST',
        url: '../../../admin/wugu_ajax',
        data:{'wuguId': wuguId},
        cache: false,
        success: function(data){
            alert(data);
        },
        error: function(err){
            alert('删除失败！'+err.toString());
        }
    });
}
