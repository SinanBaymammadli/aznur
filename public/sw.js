importScripts('workbox-sw.prod.v2.1.0.js');

/**
 * DO NOT EDIT THE FILE MANIFEST ENTRY
 *
 * The method precache() does the following:
 * 1. Cache URLs in the manifest to a local cache.
 * 2. When a network request is made for any of these URLs the response
 *    will ALWAYS comes from the cache, NEVER the network.
 * 3. When the service worker changes ONLY assets with a revision change are
 *    updated, old cache entries are left as is.
 *
 * By changing the file manifest manually, your users may end up not receiving
 * new versions of files because the revision hasn't changed.
 *
 * Please use workbox-build or some other tool / approach to generate the file
 * manifest which accounts for changes to local files and update the revision
 * accordingly.
 */
const fileManifest = [
  {
    "url": "css/app.css",
    "revision": "697be148bed01623a5f9790cfda3a746"
  },
  {
    "url": "images/header-bottom-bg.jpg",
    "revision": "f1a11fa57c1fc6c7958c8785b1a39118"
  },
  {
    "url": "img/header-bottom-bg.jpg",
    "revision": "f1a11fa57c1fc6c7958c8785b1a39118"
  },
  {
    "url": "img/img1.jpg",
    "revision": "83151c0b85262d5faebc505db7e2244b"
  },
  {
    "url": "img/img2.jpg",
    "revision": "64b72c7a3634130887bff746524c4216"
  },
  {
    "url": "img/product1.png",
    "revision": "02e221ef8936b9499ed91e3dedbaecc0"
  },
  {
    "url": "img/testimonial.jpg",
    "revision": "a6b17d9f59ce16a02eada70039b1b3ae"
  },
  {
    "url": "js/app.js",
    "revision": "841bd35f424cff8fa670513295404720"
  }
];

const workboxSW = new self.WorkboxSW();
workboxSW.precache(fileManifest);