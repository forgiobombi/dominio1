// config.js
const config = {
  domain: "studiodanzanovara.it",
  email: "domainsalesofficial@protonmail.com",
  phone: "+39-1234567890",
  price: "50"
};

document.addEventListener("DOMContentLoaded", function() {
  // Set page title
  document.title = "Informazioni Vendita || " + config.domain;

  // Replace all elements with class .domain
  const domainElements = document.querySelectorAll(".domain");
  domainElements.forEach(function(el) {
    if (el) el.textContent = config.domain;
  });

  // Replace all elements with class .email
  const emailElements = document.querySelectorAll(".email");
  emailElements.forEach(function(el) {
    if (el) {
      el.textContent = config.email;
      el.href = "mailto:" + config.email;
    }
  });

  // Replace all elements with class .phone
  const phoneElements = document.querySelectorAll(".phone");
  phoneElements.forEach(function(el) {
    if (el) {
      el.textContent = config.phone;
      el.href = "tel:" + config.phone;
    }
  });

  // Replace all elements with class .price
  const priceElements = document.querySelectorAll(".price");
  priceElements.forEach(function(el) {
    if (el) el.textContent = "€" + config.price;
  });
});
