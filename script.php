<script>
    function enableSubmit() {
        let inputs = document.querySelectorAll("input"); // Enter your class name for a required field, this should also be reflected within your form fields.
        let btn = document.querySelector('button[type="submit"]');
        let isValid = true;
        for (let i = 0; i < inputs.length; i++) {
            let changedInput = inputs[i];
            if (changedInput.value.trim() === "" || changedInput.value === null) {
                isValid = false;
                break;
            }
        }
        btn.disabled = !isValid;
    }
</script>