var languageObj = {
    set:function(obj){
        var v = obj.val();
        if(v !== ''){
            jQuery.cookie('language',v,{expires : 365, path : '/'});
            location.reload();
        }        
    }   
    
}// languageObj