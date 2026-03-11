import './bootstrap';
import Alpine from 'alpinejs';
import Lenis from 'lenis';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { register } from 'swiper/element/bundle';

// Register Swiper standard web components
register();

// Initialize Smooth Scrolling
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
});
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Initialize AOS Animations
AOS.init({
    duration: 800,
    once: true,
    offset: 50,
});

window.Alpine = Alpine;
Alpine.start();
