document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        let start = 0;
        const end = 95;
        const duration = 5000; // duration in milliseconds
        const increment = (end - start) / (duration / 16); // assuming 60fps

        const tick = () => {
          start += increment;
          if (start < end) {
            counter.innerText = Math.ceil(start) + "%";
            requestAnimationFrame(tick);
          } else {
            counter.innerText = end + "%";
          }
        };

        tick();
        observer.unobserve(counter); // stop observing after animation
      }
    });
  });

  counters.forEach((counter) => {
    observer.observe(counter);
  });
});
