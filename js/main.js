// Reveal sections on scroll
const cryptoSections = document.querySelectorAll(".cryptocurrency");
const revealSection = function (entries, observer) {
  const [entry] = entries;
  console.log(entry);
  if (!entry.isIntersecting) return;

  entry.target.classList.remove("cryptocurrency--hidden");
  observer.unobserve(entry.target);
};

const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0.15,
});
cryptoSections.forEach(function (section) {
  sectionObserver.observe(section);
  section.classList.add("cryptocurrency--hidden");
});
