const CACHE_NAME = "epd-v1";

const urlsToCache = [
    "/offline.html",
    "/style.css",
    "/script.js",
    "/img/epd-logo-2.png",
    "/manifest.json"
];

self.addEventListener("install", event => {
    event.waitUntil(caches.open(CACHE_NAME).then(cache => cache.addAll(urlsToCache)));
    fetch("/offline-faqs").then(response => response.json()).then(data => {
        caches.open(CACHE_NAME).then(cache => {
            cache.put(
                "/offline-faqs",
                new Response(JSON.stringify(data))
            );
        });
    });
    self.skipWaiting();
});

self.addEventListener("activate", event => {
    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(
                keys
                    .filter(key => key !== CACHE_NAME)
                    .map(key => caches.delete(key))
            )
        )
    );

    self.clients.claim();
});

self.addEventListener("fetch", event => {
    if (event.request.method !== "GET") return;
    event.respondWith(fetch(event.request).then(response => {
            const responseClone = response.clone();
            caches.open(CACHE_NAME).then(cache => cache.put(event.request, responseClone));
            return response;
        }).catch(() => {
            return caches.match(event.request).then(response => {
                return response || caches.match("/offline.html");
            });
        })
    );
});