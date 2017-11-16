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
    "revision": "6a27a372a22c304639e5e816e497f817"
  },
  {
    "url": "img/header-bottom-bg.jpg",
    "revision": "f1a11fa57c1fc6c7958c8785b1a39118"
  },
  {
    "url": "img/slider1.jpg",
    "revision": "5868a2caae64bf42e450ea109b16beac"
  },
  {
    "url": "img/slider2.jpg",
    "revision": "018bd37d435c0bb8a05820dd2a69705f"
  },
  {
    "url": "img/slider3.jpg",
    "revision": "8ba3e13108d51dd226d424a9bfee6e80"
  },
  {
    "url": "img/testimonial.jpg",
    "revision": "a6b17d9f59ce16a02eada70039b1b3ae"
  },
  {
    "url": "js/app.js",
    "revision": "0930c466007df0388c4ba8b199bd6f80"
  },
  {
    "url": "products/1509573327.png",
    "revision": "e8dcc79ee3113e1b70a7cd3e3ed3bdcc"
  },
  {
    "url": "products/1509573902.png",
    "revision": "297a143290808cbfb6aa805ae6daaad0"
  },
  {
    "url": "products/1509574837.png",
    "revision": "e8c1dd20df83398877727a09be5d019c"
  },
  {
    "url": "products/product1.png",
    "revision": "02e221ef8936b9499ed91e3dedbaecc0"
  }
];

const workboxSW = new self.WorkboxSW();
workboxSW.precache(fileManifest);
