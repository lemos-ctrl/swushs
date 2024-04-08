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
  $(".table").DataTable({
    paging: false,
    responsive: true,
    stateSave: true,
    // scrollX: "100vw",
    fixedHeader: true,
    columnDefs: [
      { className: "dt-body-left", targets: "_all" },
      { className: "dt-head-left", targets: "_all" },
    ],
    layout: {
      topEnd: "search",
      topStart: "info",
      bottomStart: null,
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Highlight current page link
  const currentPage = "<?php echo $current_page; ?>";
  const currentLink = document.querySelector(
    `.sidebar-link[href*='${currentPage}']`
  );
  if (currentLink) {
    currentLink.classList.add("active");
    // Expand the parent category if it's collapsed
    const parentCollapse = currentLink
      .closest(".sidebar-item")
      .querySelector('[data-bs-toggle="collapse"]');
    if (parentCollapse && !parentCollapse.getAttribute("aria-expanded")) {
      parentCollapse.setAttribute("aria-expanded", "true");
      const parentId = parentCollapse.getAttribute("data-bs-target");
      localStorage.setItem(parentId, "expanded");
    }
  }

  // Check local storage and expand/collapse dropdowns accordingly
  const storedDropdowns = Object.keys(localStorage);
  storedDropdowns.forEach((dropdown) => {
    const element = document.querySelector(dropdown);
    if (element) {
      const state = localStorage.getItem(dropdown);
      if (state === "expanded") {
        element.classList.add("show");
        // Expand the dropdown's parent category
        const parentCollapse = element
          .closest(".sidebar-item")
          .querySelector('[data-bs-toggle="collapse"]');
        if (parentCollapse) {
          parentCollapse.setAttribute("aria-expanded", "true");
        }
      } else {
        // Collapse dropdowns that are not expanded
        element.classList.remove("show");
      }
    }
  });

  // Save the state of the dropdown in local storage when clicked
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

  // Collapse all categories except the one containing the active link
  const activeCategory = document
    .querySelector(".sidebar-item.active")
    .closest(".sidebar-item");
  const categories = document.querySelectorAll(".sidebar-item");
  categories.forEach((category) => {
    if (category !== activeCategory) {
      const collapseButton = category.querySelector(
        '[data-bs-toggle="collapse"]'
      );
      if (
        collapseButton &&
        collapseButton.getAttribute("aria-expanded") === "true"
      ) {
        collapseButton.click();
      }
    }
  });
});

// modal

document.addEventListener("DOMContentLoaded", function () {
  var myModal = new bootstrap.Modal(
    document.getElementById("confirmationModal")
  );
  var schoolYearSpan = document.getElementById("schoolYearSpan");

  document.querySelectorAll(".dropdown-item").forEach((item) => {
    item.addEventListener("click", (event) => {
      var schoolYear = event.target.getAttribute("data-school-year");
      schoolYearSpan.textContent = schoolYear;
      myModal.show();
    });
  });
});

//calendar component

document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: "UTC",
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
    },
    weekNumbers: true,
    dayMaxEvents: true, // allow "more" link when too many events,
    eventDidMount: function (info) {
      info.el.style.color = "#000"; // Change event text color to black
    },
  });

  calendar.render();
});


//dashboard.php
function changeSemester(semester) {
    document.getElementById('semester-dropdown').innerText = semester;
}
