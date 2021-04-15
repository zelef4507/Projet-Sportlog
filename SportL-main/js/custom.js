$(document).ready(function(){

    $("#filter-section").click(function(e){
        e.stopPropagation();
    });

    $("#reinitialize").click(function (e){
        e.stopPropagation();
        $("#filter-section :input").each(function () {
            this.checked = false;
        });


    });
});