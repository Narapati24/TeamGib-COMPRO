import 'flowbite';
import TypeIt from "typeit";
import lozad from 'lozad'
// import $ from "jquery";
// import 'jquery-lazy';

const el = document.querySelector('img');
const observer = lozad(el); // passing a `NodeList` (e.g. `document.querySelectorAll()`) is also valid
observer.observe();