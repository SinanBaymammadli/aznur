const allDropdowns = $(".dropdown");

allDropdowns.each(function() {
  const dropdown = $(this);
  const dropdownToggle = dropdown.find(".dropdown-toggle");

  dropdownToggle.click(function() {
    if (dropdown.hasClass("open")) {
      dropdown.removeClass("open");
    } else {
      allDropdowns.removeClass("open");
      dropdown.addClass("open");
    }
  });
});

$(window).click(function(event) {
  if (!event.target.matches(".dropdown *")) {
    allDropdowns.removeClass("open");
  }
});
