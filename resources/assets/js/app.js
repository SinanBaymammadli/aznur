/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require("./bootstrap");

import "./header";
import "./slider";
import "./dropdown";
import "./product";
import "./image-upload";

// if ("serviceWorker" in navigator) {
//   // Register a service worker hosted at the root of the
//   // site using the default scope.
//   navigator.serviceWorker
//     .register("/sw.js")
//     .then(function(registration) {
//       console.log("Service worker registration succeeded:", registration);
//     })
//     .catch(function(error) {
//       console.log("Service worker registration failed:", error);
//     });
// } else {
//   console.log("Service workers are not supported.");
// }
