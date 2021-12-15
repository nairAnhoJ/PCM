function navsel() {
    document.getElementById('act').className = 'active';
}

// ==================================================== IN ====================================================
// ==================================================================== BRAND CHANGE ====================================================================
function brandChange(){
    var blist = document.getElementById("brand-list");
    var tlist = document.getElementById("type-list");
    var clist = document.getElementById("code-list");

    var bval = $('#brand-list').val();
    var tval = $('#type-list').val();

    var fval = $('#brand-list option:first-child').val();

    if (fval == "- - -"){
        blist.remove(blist.firstChild);
    }

    $('#code-list option').remove();
    $('#type-list option').remove();

    document.getElementById("btn-sub-in").disabled = true;
    $('#btn-sub-in').css("background-color", "#808080");

    if(bval == "Fujifilm"){
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Toner Cartridge"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Drum Cartridge"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Cleaning Cartridge"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Waste Container"));
        tlist.appendChild(newOption);

        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        clist.appendChild(newOption);
    }
    
    if(bval == "Ricoh"){
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Toner Cartridge"));
        tlist.appendChild(newOption);

        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        clist.appendChild(newOption);
    }
}

// ===== ITEM TYPE CHANGE =====
function typeChange(){
    var blist = document.getElementById("brand-list");
    var tlist = document.getElementById("type-list");
    var clist = document.getElementById("code-list");

    var bval = $('#brand-list').val();
    var tval = $('#type-list').val();

    var fval = $('#type-list option:first-child').val();

    if (fval == "- - -"){
        tlist.remove(tlist.firstChild);
    }

    $('#code-list option').remove();

    document.getElementById("btn-sub-in").disabled = false;
    $('#btn-sub-in').css("background-color", "#4f5ccf");
    $('#btn-sub-in:hover').css("background-color", "#ffffff");

    if(bval == "Fujifilm"){

        if(tval == "Toner Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202384"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202508"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202634"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202635"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202636"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202637"));
            clist.appendChild(newOption);
        }

        if(tval == "Drum Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT351105"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT351089"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT201734"));
            clist.appendChild(newOption);
        }

        if(tval == "Cleaning Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("- - -"));
            clist.appendChild(newOption);
        }

        if(tval == "Waste Container"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CWAA0901"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CWAA1024"));
            clist.appendChild(newOption);
        }
    }

    
    if(bval == "Ricoh"){
        if(tval == "Toner Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("MP 3554S"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("MP 6054S"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("IM C2500"));
            clist.appendChild(newOption);
        }
    }
}

// ===== OPEN IN MODAL =====
$(document).on('click', '#open-btn-in', function(){
    $(".modal-bg").css("visibility", "visible");
})


// ===== CLOSE IN MODAL =====
$(document).on('click', '#close-btn-in', function(){
    var blist = document.getElementById("brand-list");
    var tlist = document.getElementById("type-list");
    var clist = document.getElementById("code-list");

    $('#code-list option').remove();
    $('#type-list option').remove();
    $('#brand-list option').remove();

    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("- - -"));
    tlist.appendChild(newOption);

    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("- - -"));
    clist.appendChild(newOption);

    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("- - -"));
    blist.appendChild(newOption);
    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("Fujifilm"));
    blist.appendChild(newOption);
    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("Ricoh"));
    blist.appendChild(newOption);

    $(".modal-bg").css("visibility", "hidden");
})





// ==================================================================== OUT ======================================================================

// ===== OPEN OUT MODAL =====
$(document).on('click', '#open-btn-out', function(){
    $(".modal-bg-out").css("visibility", "visible");
})

// ===== CLOSE IN MODAL =====
$(document).on('click', '#close-btn-out', function(){
    var blist = document.getElementById("brand-list-out");
    var tlist = document.getElementById("type-list-out");
    var clist = document.getElementById("code-list-out");

    $('#code-list-out option').remove();
    $('#type-list-out option').remove();
    $('#brand-list-out option').remove();

    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("- - -"));
    tlist.appendChild(newOption);

    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("- - -"));
    clist.appendChild(newOption);

    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("- - -"));
    blist.appendChild(newOption);
    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("Fujifilm"));
    blist.appendChild(newOption);
    var newOption = document.createElement("option");
    newOption.appendChild(document.createTextNode("Ricoh"));
    blist.appendChild(newOption);

    document.getElementById("btn-sub-out").disabled = true;
    $('#btn-sub-out').css("background-color", "#808080");

    $("#location-out").val($("#location-out option:first").val());

    $(".modal-bg-out").css("visibility", "hidden");
})

// ===== BRAND CHANGE =====
function brandChangeOut(){
    var blist = document.getElementById("brand-list-out");
    var tlist = document.getElementById("type-list-out");
    var clist = document.getElementById("code-list-out");

    var bval = $('#brand-list-out').val();
    var tval = $('#type-list-out').val();

    var fval = $('#brand-list-out option:first-child').val();

    if (fval == "- - -"){
        blist.remove(blist.firstChild);
    }

    $('#code-list-out option').remove();
    $('#type-list-out option').remove();

    if(bval == "Fujifilm"){
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Toner Cartridge"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Drum Cartridge"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Cleaning Cartridge"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Waste Container"));
        tlist.appendChild(newOption);

        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        clist.appendChild(newOption);
    }
    
    if(bval == "Ricoh"){
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        tlist.appendChild(newOption);
        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("Toner Cartridge"));
        tlist.appendChild(newOption);

        var newOption = document.createElement("option");
        newOption.appendChild(document.createTextNode("- - -"));
        clist.appendChild(newOption);
    }

    checkButton();
}

// ===== ITEM TYPE CHANGE =====
function typeChangeOut(){
    var blist = document.getElementById("brand-list-out");
    var tlist = document.getElementById("type-list-out");
    var clist = document.getElementById("code-list-out");

    var bval = $('#brand-list-out').val();
    var tval = $('#type-list-out').val();

    var fval = $('#type-list-out option:first-child').val();

    if (fval == "- - -"){
        tlist.remove(tlist.firstChild);
    }

    $('#code-list-out option').remove();

    if(bval == "Fujifilm"){

        if(tval == "Toner Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202384"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202508"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202634"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202635"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202636"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT202637"));
            clist.appendChild(newOption);
        }

        if(tval == "Drum Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT351105"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT351089"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CT201734"));
            clist.appendChild(newOption);
        }

        if(tval == "Cleaning Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("- - -"));
            clist.appendChild(newOption);
        }

        if(tval == "Waste Container"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CWAA0901"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("CWAA1024"));
            clist.appendChild(newOption);
        }
    }

    
    if(bval == "Ricoh"){
        if(tval == "Toner Cartridge"){
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("MP 3554S"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("MP 6054S"));
            clist.appendChild(newOption);
            var newOption = document.createElement("option");
            newOption.appendChild(document.createTextNode("IM C2500"));
            clist.appendChild(newOption);
        }
    }
    
    checkButton();
}

// ===== LOCATION CHANGE =====

function locChange(){
    checkButton();
}

// ===== ENABLE / DISABLE SUBMIT BUTTON =====
function checkButton(){
    var bloVal = $('#brand-list-out').val();
    var tloVal = $('#type-list-out').val();
    var cloVal = $('#code-list-out').val();
    var loVal = $('#location-out').val();

    if((bloVal == "- - -") || (tloVal == "- - -") || (cloVal == "- - -") || (loVal == "- - -")){
        document.getElementById("btn-sub-out").disabled = true;
        $('#btn-sub-out').css("background-color", "#808080");
    }else{
        document.getElementById("btn-sub-out").disabled = false;
        $('#btn-sub-out').css("background-color", "#4f5ccf");
    }
}


// ================================== OTHERS ====================================

// ===== SUBMIT BUTTON HOVER =====
$(document).ready(function(){
	$(".btn-submit").hover(function(){
        $(this).css("background-color", "#fff");
	}, function(){
        $(this).css("background-color", "#4F5CCF");
	});
});

// ===== QUANTITY VALUE MIN/MAX=====
function qChange(){
    var qval = $('.quantity').val();

    if (qval < 1){
        $('.quantity').val('1');
    }else if (qval > 10){
        $('.quantity').val('10');
    }
}

function qChangeOut(){
    var qval = $('.quantity').val();

    if (qval < 1){
        $('.quantity').val('1');
    }else if (qval > 10){
        $('.quantity').val('10');
    }
}