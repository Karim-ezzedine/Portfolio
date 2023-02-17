window.addEventListener("load", function () {
  const path = window.location.pathname; // get the path without the domain and query parameters
  if (path === "/portfolio") {
    const element = document.getElementById("portfolio");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  }
});
