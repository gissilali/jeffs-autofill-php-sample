function fetchUser() {
    var admissionNumberInput = document.querySelector('#admission_number');
    var nameInput = document.querySelector('#name');
    var emailInput = document.querySelector('#email');
    axios.get("user.php?admission_number=" + admissionNumberInput.value)
        .then(function (response) {
            console.log(response.data);
            emailInput.value = response.data.email;
            nameInput.value = response.data.name;
        });
}
