// responsive sidebar function
document.addEventListener("DOMContentLoaded", function () {
  const sidebarToggle = document.querySelector("#sidebar-toggle");
  sidebarToggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
    document.querySelector("#sidebar1").classList.toggle("collapsed");
  });
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

//sidebar

document.addEventListener("DOMContentLoaded", function () {
  var activeLinks = document.querySelectorAll(".sidebar-link.active");

  activeLinks.forEach(function (link) {
    var collapseTarget = link.getAttribute("data-bs-target");
    if (collapseTarget) {
      var collapseElement = document.querySelector(collapseTarget);
      if (collapseElement) {
        collapseElement.classList.add("show");
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
  document.getElementById("semester-dropdown").innerText = semester;
}

//strand.php
function addSpecialization() {
  var specializationContainer = document.getElementById(
    "specializationsContainer"
  );
  var input = document.createElement("input");
  input.type = "text";
  input.className = "form-control mb-3";
  input.placeholder = "Enter Specialization Description";
  specializationContainer.appendChild(input);
}

function clearSpecializations() {
  var specializationContainer = document.getElementById(
    "specializationsContainer"
  );
  specializationContainer.innerHTML = ""; // Clear the contents of the container
}
