document.addEventListener("DOMContentLoaded", () => {
    const passwordField = document.getElementById("passwordField");
    const togglePassword = document.getElementById("togglePassword");
    const googleBtn = document.querySelector(".google-btn");
    const popup = document.getElementById("googlePopup");
    const overlay = document.querySelector(".dark-overlay");

    togglePassword?.addEventListener("click", () => {
        const isHidden = passwordField.type === "password";
        passwordField.type = isHidden ? "text" : "password";
        togglePassword.src = isHidden ? "/asset/eye-open.svg" : "/asset/eye-close.svg";
    });

    googleBtn?.addEventListener("click", e => {
        e.preventDefault();
        popup.classList.add("active");
        overlay.classList.add("active");
    });

    overlay?.addEventListener("click", () => {
        popup.classList.remove("active");
        overlay.classList.remove("active");
    });
});
