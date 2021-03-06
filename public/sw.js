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
    "revision": "9310499a041183d5760a657e2f701dc6"
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
    "url": "js/app.js",
    "revision": "67be00c3c99e020b7be8fa16f5111e82"
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
    "url": "products/1511093326.png",
    "revision": "f41e7ad8dc8249a0c835869898e7370e"
  },
  {
    "url": "products/1511093612.png",
    "revision": "f41e7ad8dc8249a0c835869898e7370e"
  },
  {
    "url": "products/1511093777.png",
    "revision": "b1436dc7127e1ba2985f9a58ca13a8f5"
  },
  {
    "url": "products/1511094183.png",
    "revision": "f41e7ad8dc8249a0c835869898e7370e"
  },
  {
    "url": "products/1511095900.png",
    "revision": "f41e7ad8dc8249a0c835869898e7370e"
  },
  {
    "url": "products/1511112360.png",
    "revision": "f41e7ad8dc8249a0c835869898e7370e"
  },
  {
    "url": "products/1511112482.png",
    "revision": "b1436dc7127e1ba2985f9a58ca13a8f5"
  },
  {
    "url": "products/product1.png",
    "revision": "02e221ef8936b9499ed91e3dedbaecc0"
  }
];

const workboxSW = new self.WorkboxSW();
workboxSW.precache(fileManifest);
