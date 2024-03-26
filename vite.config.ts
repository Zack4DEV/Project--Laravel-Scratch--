import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import viteCompression from 'vite-plugin-compression2';
import { fileURLToPath, URL } from 'node:url';
import type { UserConfig, ConfigEnv } from 'vite';
import { defineConfig, loadEnv } from 'vite';
import pkg from './package.json';
import dayjs from 'dayjs';
import vue from '@vitejs/plugin-vue';
import vueJsx from '@vitejs/plugin-vue-jsx';
import legacy from '@vitejs/plugin-legacy';
import AutoComponents from 'unplugin-vue-components/vite';
import { createHtmlPlugin } from 'vite-plugin-html';

const root: string = process.cwd();
const assetsDir = './resources/js/assets';

const { dependencies, devDependencies, name, version } = pkg;
const appVersion = dayjs().format('YYYYMMDDHHmm');
const lastBuildTime = dayjs().format('YYYY-MM-DD HH:mm:ss');
const __APP_INFO__ = {
  pkg: { dependencies, devDependencies, name, version },
  version: appVersion,
  lastBuildTime,
};


/**
 * Configuring Vite
 *
 * @see https://vitejs.dev/config/
 */

export default defineConfig(({ mode }: ConfigEnv) : UserConfig => {
  const env = loadEnv(mode, root);

    return {
        base: './',
        plugins: [
          vue(),
          vueJsx(),         
          viteCompression(),
          laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
          }),
          AutoComponents({
            dirs: ['./resources/js/components'],
            extensions: ['vue', 'jsx', 'tsx'],
            dts: './auto-components.d.ts',
          }),
          createHtmlPlugin({
            inject: {
              data: {
                title: env.VITE_APP_TITLE,
              },
            },
            minify: true,
          }),
          env.VITE_LEGACY === 'true' ? legacy() : null,
        ],
        server: {
          host: true,
          port: Number(env.VITE_PORT),
          proxy: {
            '/dev-url': {
              target: `https://${env.VITE_APP_HOST}/${env.VITE_APP_SUB_DOMAIN}`, //http://0.0.0.0/
              changeOrigin: true,
              secure: false,
              rewrite: (path) => path.replace(/^\/dev-url/, ''),
            },
          },
        },
        build: {
          assetsDir: assetsDir,
          sourcemap: false,
          chunkSizeWarningLimit: 1500,
          rollupOptions: {
            output: {
              entryFileNames: `${assetsDir}/[name].${appVersion}.js`,
              chunkFileNames: `${assetsDir}/[name].${appVersion}.js`,
              assetFileNames: `${assetsDir}/[ext]/[name].${appVersion}.[ext]`,
            },
          },
        },
        resolve: {
          alias: {
            '@': fileURLToPath(new URL('./', import.meta.url)),
          },
        },
        define: {
          __APP_INFO__: JSON.stringify(__APP_INFO__),
        },
        css: {
          modules: {
            localsConvention: 'camelCaseOnly',
          },
          preprocessorOptions: {
            less: {
              modifyVars: {
                hack: `true; @import './src/styles/variable.less';`,
              },
              javascriptEnabled: true,
            },
          },
        }
        }
});
