function WuguBackToHomePage(){
    var username= $('#current_user_name')[0].value;
    var list_tab_id= $('#wugu_list_tab_id')[0].value;
    window.location.href= '/wugubaike/index.php/admin/AdminHomePage/index/'+username+'/NaN/'+list_tab_id;

}

function XiaofangBackToHomePage(){
    var username= $('#current_user_name')[0].value;
    var list_tab_id= $('#xiaofang_list_tab_id')[0].value;
    window.location.href= '/wugubaike/index.php/admin/AdminHomePage/index/'+username+'/NaN/'+list_tab_id;

}

function BaojianpinBackToHomePage(){
    var username= $('#current_user_name')[0].value;
    var list_tab_id= $('#baojianpin_list_tab_id')[0].value;
    window.location.href= '/wugubaike/index.php/admin/AdminHomePage/index/'+username+'/NaN/'+list_tab_id;

}

function deleteItem(){

    var result= confirm('确认删除该条记录?');
    if(result){
        window.location.href= '/wugubaike/index.php/admin/AdminHomePage/delete/wugu1/bhao';
    }

}

