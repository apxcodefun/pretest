import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        port: 5137, // Set port ke 5137
        strictPort: true, // Pastikan hanya pakai port ini, kalau sudah dipakai, error
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
