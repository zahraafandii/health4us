document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".auth-toggle-password").forEach(icon => {
        icon.addEventListener("click", function () {
            const input = this.previousElementSibling;

            if (!input) return;

            const isPassword = input.type === "password";
            input.type = isPassword ? "text" : "password";
            this.src = isPassword
                ? "/asset/eye-open.svg"
                : "/asset/eye-close.svg";
        });
    });
});