// responsive sidebar function
document.addEventListener("DOMContentLoaded", function () {
  const sidebarToggle = document.querySelector("#sidebar-toggle");
  sidebarToggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
    document.querySelector("#sidebar1").classList.toggle("collapsed");
  });

  // dark/light mode changer
  //   document.querySelector(".theme-toggle").addEventListener("click", () => {
  //     toggleLocalStorage();
  //     toggleRootClass();
  //   });

  //   function toggleRootClass() {
  //     const current = document.documentElement.getAttribute("data-bs-theme");
  //     const inverted = current == "dark" ? "light" : "dark";
  //     document.documentElement.setAttribute("data-bs-theme", inverted);
  //   }

  //   function toggleLocalStorage() {
  //     if (isLight()) {
  //       localStorage.removeItem("light");
  //     } else {
  //       localStorage.setItem("light", "set");
  //     }
  //   }

  //   function isLight() {
  //     return localStorage.getItem("light");
  //   }

  //   if (isLight()) {
  //     toggleRootClass();
  //   }
});

// data tables dashboard init
$(document).ready(function () {
  $("#myTable").DataTable();
});

// link highlighting feature
document.addEventListener("DOMContentLoaded", function () {
  // Check if any dropdown contains the active class
  const activeDropdown = document.querySelector(".sidebar-dropdown.show");
  if (activeDropdown) {
    // Expand the dropdown
    const parentCollapse = activeDropdown
      .closest(".sidebar-item")
      .querySelector('[data-bs-toggle="collapse"]');
    if (parentCollapse) {
      parentCollapse.setAttribute("aria-expanded", "true");
    }
  }

  // Save the state of the dropdown in local storage or cookie
  const toggleButtons = document.querySelectorAll(
    '[data-bs-toggle="collapse"]'
  );
  toggleButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const expanded = this.getAttribute("aria-expanded");
      const parent = this.getAttribute("data-bs-target");
      if (expanded === "true") {
        localStorage.setItem(parent, "expanded");
      } else {
        localStorage.removeItem(parent);
      }
    });
  });
});
