import preset from "./vendor/filament/support/tailwind.config.preset";

@tailwind base;
@tailwind components;
@tailwind utilities;
@tailwind variants;

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
};
