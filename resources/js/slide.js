document.addEventListener('DOMContentLoaded', () => {
  const slider = document.getElementById('slider');
  const wrapper = slider.querySelector('.slides-wrapper');
  const slides = slider.querySelectorAll('.slide');
  const dots = slider.parentElement.querySelectorAll('.dot');

  let index = 0;
  let startX = 0;
  let isDragging = false;
  const threshold = 80;

  function update() {
    wrapper.style.transform = `translateX(-${index * 100}%)`;

    dots.forEach((d, i) => {
      d.classList.toggle('bg-[#106AD2]', i === index);
      d.classList.toggle('bg-gray-300', i !== index);
    });
  }

  // DOT
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      index = i;
      update();
    });
  });

  // MOUSE
  slider.addEventListener('mousedown', e => {
    startX = e.clientX;
    isDragging = true;
    wrapper.classList.remove('transition-transform');
  });

  window.addEventListener('mousemove', e => {
    if (!isDragging) return;
    const diff = e.clientX - startX;
    wrapper.style.transform = `translateX(calc(-${index * 100}% + ${diff}px))`;
  });

  window.addEventListener('mouseup', e => {
    if (!isDragging) return;
    isDragging = false;
    const diff = e.clientX - startX;

    if (diff < -threshold && index < slides.length - 1) index++;
    if (diff > threshold && index > 0) index--;

    wrapper.classList.add('transition-transform');
    update();
  });
});
