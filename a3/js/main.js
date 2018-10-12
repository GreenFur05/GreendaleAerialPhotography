var optionSelected = 1;

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
        alert("Please select valid option");
        return false;
    }
}

function optionsChanged() {
    optionSelected = document.getElementById("options").selectedIndex;
    if (optionSelected == 1) {
        document.getElementById("submitService").disabled = false;
        updatePrice();
    }
    else if (optionSelected == 2) {
        document.getElementById("submitService").disabled = false;
        updatePrice();
    }
    else {
        document.getElementById("submitService").disabled = true;
    }
}

function updatePrice() {
    document.getElementById("price").innerHTML = "$" + parseInt(document.getElementById("quantity").value)*parseInt(details[id][optionSelected == 2 ? 'B' : 'A']['Price']) + ".00";
}