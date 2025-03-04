document.addEventListener("DOMContentLoaded", function () {
    const loginRadio = document.getElementById("login");
    const signupRadio = document.getElementById("signup");
    const formInner = document.querySelector(".form-inner");

    loginRadio.addEventListener("change", function () {
        formInner.classList.remove("active-signup");
        formInner.classList.add("active-login");
    });

    signupRadio.addEventListener("change", function () {
        formInner.classList.remove("active-login");
        formInner.classList.add("active-signup");
    });
});