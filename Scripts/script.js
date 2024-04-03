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
    $('#myTable').DataTable({
        "columnDefs": [
          { className: 'dt-body-left', targets: '_all' },
          { className: 'dt-head-left', targets: '_all' },
        ]
    });
});

// link highlighting feature
document.addEventListener("DOMContentLoaded", function () {
  // Check local storage and expand/collapse dropdowns accordingly
  const storedDropdowns = Object.keys(localStorage);
  storedDropdowns.forEach((dropdown) => {
    const element = document.querySelector(dropdown);
    if (element) {
      const state = localStorage.getItem(dropdown);
      if (state === "expanded") {
        element.classList.add("show");
        // Expand the dropdown's parent category
        const parentCollapse = element.closest(".sidebar-item").querySelector('[data-bs-toggle="collapse"]');
        if (parentCollapse) {
          parentCollapse.setAttribute("aria-expanded", "true");
        }
      }
    }
  });

  // Save the state of the dropdown in local storage when clicked
  const toggleButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');
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


// modal

document.addEventListener('DOMContentLoaded', function () {
  var myModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
  var schoolYearSpan = document.getElementById('schoolYearSpan');

  document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', event => {
      var schoolYear = event.target.getAttribute('data-school-year');
      schoolYearSpan.textContent = schoolYear;
      myModal.show();
    });
  });
});

//calendar component

const fullCalendarElement = document.querySelector('full-calendar')

fullCalendarElement.options = {
  headerToolbar: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth,dayGridWeek,dayGridDay'
  }
}