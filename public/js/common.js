//common

function zasekiAdd() {
    for(let i = 1; i<120; i++){
        let tag = '<label> '+
            '<input type="checkbox" name="zaseki[]" value="'+i+'" class="zaseki" >'+
            '<span class="zaseki"></span>'+
            '</label>'
        $("#zaseki").append(tag);
    }
}

$(function () { zasekiAdd(); });
