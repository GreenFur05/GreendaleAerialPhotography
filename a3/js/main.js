var optionSelected = 0;

function up() {
    if (document.getElementById("quantity").value < parseInt(0) || isNaN(document.getElementById("quantity").value)) {
        document.getElementById("quantity").value = 0;
    }
    else {
        document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + 1;
        updatePrice();
    }
}

function down() {
    if (document.getElementById("quantity").value <= parseInt(0) || isNaN(document.getElementById("quantity").value)) {
        document.getElementById("quantity").value = 0;
        
    }
    else {
        document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) - 1;
        updatePrice();
    }

}

function validation() {
    var x = document.forms["service"]["options"].value;
    if ((x == "") || (document.getElementById("quantity").value <= parseInt(0))) {
        alert("Please select a valid option");
        return false;
    }
}

function optionsChanged() {
    optionSelected = document.getElementById("options").selectedIndex;
    if (optionSelected == 1 && document.getElementById("quantity").value > parseInt(0)) {
        document.getElementById("submitService").disabled = false;
        updatePrice();
    }
    else if (optionSelected == 2 && document.getElementById("quantity").value > parseInt(0)) {
        document.getElementById("submitService").disabled = false;
        updatePrice();
    }
    else {
        document.getElementById("submitService").disabled = true;
    }
}

function updatePrice() {
    document.getElementById("price").innerHTML = "$" + parseInt(document.getElementById("quantity").value)*parseInt(details[id][optionSelected == 2 ? 'B' : 'A']['Price']) + ".00";
    if (document.getElementById("quantity").value == 0) {
        document.getElementById("submitService").disabled = true;
    }
    else if (optionSelected != 0) {
        document.getElementById("submitService").disabled = false;
    }
}

function checkVisa() {
    var card = document.getElementById("creditCard").value;
    var pattern = /^4\s*(?:[0-9]\s*){11,14}$/;
    if (pattern.test(card)) {
        document.getElementById("visa").style.display = "inline";
    }
    else {
        document.getElementById("visa").style.display = "none";
    }
}