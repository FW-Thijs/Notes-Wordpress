(() => {
    document.querySelectorAll("#menu-button").forEach((el) => el.addEventListener("click", (ev) => {
        ev.preventDefault();
        document.querySelector("#menu").classList.toggle("hidden");
    }))
})();
