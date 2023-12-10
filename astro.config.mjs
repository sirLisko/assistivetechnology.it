import { defineConfig } from "astro/config";

import sitemap from "@astrojs/sitemap";

// https://astro.build/config
export default defineConfig({
  site: "https://assistivetechnology.it",
  integrations: [sitemap()],
  trailingSlash: "never",
});
