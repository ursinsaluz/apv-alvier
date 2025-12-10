document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".dropdown");

  function handleDropdownHover() {
    if (window.matchMedia("(min-width: 768px)").matches) {
      dropdowns.forEach((dropdown) => {
        dropdown.addEventListener("mouseenter", showDropdown);
        dropdown.addEventListener("mouseleave", hideDropdown);
      });
    } else {
      dropdowns.forEach((dropdown) => {
        dropdown.removeEventListener("mouseenter", showDropdown);
        dropdown.removeEventListener("mouseleave", hideDropdown);
      });
    }
  }

  function showDropdown(e) {
    const dropdown = e.currentTarget;
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    dropdown.classList.add("show");
    if (toggle) toggle.setAttribute("aria-expanded", "true");
    if (menu) menu.classList.add("show");
  }

  function hideDropdown(e) {
    const dropdown = e.currentTarget;
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    dropdown.classList.remove("show");
    if (toggle) toggle.setAttribute("aria-expanded", "false");
    if (menu) menu.classList.remove("show");
  }

  // Initial check
  handleDropdownHover();

  // Re-check on resize
  window.addEventListener("resize", handleDropdownHover);
});
