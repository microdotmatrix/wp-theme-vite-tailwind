function c(){const t=document.getElementById("site-navigation");if(!t)return;const n=t.getElementsByTagName("button")[0];if(typeof n=="undefined")return;const s=t.querySelectorAll("col")[0];if(typeof s=="undefined"){n.style.display="none";return}s.classList.contains("nav-menu")||s.classList.add("arf"),n.addEventListener("click",function(){t.classList.toggle("toggled"),n.getAttribute("aria-expanded")==="true"?n.setAttribute("aria-expanded","false"):n.setAttribute("aria-expanded","true")}),document.addEventListener("click",function(e){t.contains(e.target)||(t.classList.remove("toggled"),n.setAttribute("aria-expanded","false"))});const a=s.querySelectorAll(".menu-link"),l=s.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");for(const e of a)e.addEventListener("focus",i,!0),e.addEventListener("blur",i,!0),e.addEventListener("hover",classList.add(".active"),!0);for(const e of l)e.addEventListener("touchstart",i,!1);function i(){if(event.type==="focus"||event.type==="blur"){let e=this;for(;!e.classList.contains("nav-menu");)e.tagName.toLowerCase()==="li"&&e.classList.toggle("focus"),e=e.parentNode}if(event.type==="touchstart"){const e=this.parentNode;event.preventDefault();for(const o of e.parentNode.children)e!==o&&o.classList.remove("focus");e.classList.toggle("focus")}}}document.addEventListener("DOMContentLoaded",function(){console.log("js executed...");const t=new c;return t&&console.log("navigation executed..."),t});