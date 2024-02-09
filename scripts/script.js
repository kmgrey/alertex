document.addEventListener("DOMContentLoaded", (event) => {
    document.getElementById("burger-nav").addEventListener("click", () => {
        const burgerPop = document.getElementById("burger-popout");
        if (burgerPop.style.maxHeight === "0px" || burgerPop.style.maxHeight === "") {
            burgerPop.style.display = "flex";
            burgerPop.style.zIndex = "2";
            burgerPop.style.maxHeight = burgerPop.scrollHeight + "px";
        } else {
            burgerPop.style.maxHeight = "0";
            setTimeout(() => {
                burgerPop.style.display = "none";
            }, 350);
        }
    });
});
