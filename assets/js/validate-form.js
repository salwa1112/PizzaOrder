function processOrden(form) {

    //Getting value for full name field and Validate
    var fullName = document.getElementById("full_name").value
    if (fullName == null || fullName.length == 0 || fullName == "") {
        showErrorMessage("Field full name is required")
        return false
    }

    //Getting value for email field and Validate
    var email = document.getElementById("email").value
    if (email == null || email.length == 0 || email == "") {
        showErrorMessage("Field email is required")
        return false
    }

    //Getting value for phone field and Validate
    var phone = document.getElementById("phone").value
    if (phone == null || phone.length == 0 || phone == "") {
        showErrorMessage("Field phone is required")
        return false
    }
    
    //Getting value for address field and Validate
    var address = document.getElementById("address").value
    if (address == null || address.length == 0 || address == "") {
        showErrorMessage("Field address is required")
        return false
    }

    //Getting value for pizza size field and Validate
    var pizzaSize = document.getElementsByName("pizza_size")
    var isPizzaSizeChecked = false
    for (var it = 0; it < pizzaSize.length; it++) {
        if (pizzaSize[it].checked) {
            isPizzaSizeChecked = true
            break
        }
    }
    if (!isPizzaSizeChecked) {
        return false
    }

    //Getting value for pizza type field and Validate
    var pizzaType = document.getElementById("pizza_type").selectedIndex
    if (pizzaType == null || pizzaType == 0) {
        showErrorMessage("You must select at least one pizza type ")
        return false
    }

    return true

}

function showErrorMessage(errorMessage) {
    alert(errorMessage)
}