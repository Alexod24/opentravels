export function toggleMenuMobile(open, close, menu) {
    const $buttonOpen = document.getElementById(open);
    const $buttonClose = document.getElementById(close);
    const $menuMobile = document.getElementById(menu);
    const toggleClass = () => $menuMobile.classList.toggle("hidden");
    $buttonOpen.addEventListener("click", toggleClass);
    $buttonClose.addEventListener("click", toggleClass);
}
