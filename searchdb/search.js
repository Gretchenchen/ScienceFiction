

let category = document.getElementById('category11');

let type = document.getElementById('type');

// assign the value of the select tag to category input
function newcategory(option) {
    let abc = option.value.toString();
    category.value = abc;


}

// assign the value of the select tag to type input
function newtype(option) {
    let abc = option.value;
    type.value = abc;

}

