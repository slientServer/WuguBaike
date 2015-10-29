function backToHomePage(){
    var username= $('#current_user_name')[0].value;
    window.location.href= '/WuguBaike/index.php/admin/AdminHomePage/index/'+username;

}


function deleteItem(){

    var result= confirm('确认删除该条记录?');
    if(result){
        window.location.href= '/WuguBaike/index.php/admin/AdminHomePage/delete/wugu1/bhao';
    }

}