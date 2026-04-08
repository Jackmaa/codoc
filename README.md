# Codoc Monorepo

Ce depot contient la nouvelle stack de Codoc, consolidee en deux applications:

- `codoc-api`: API Symfony (PHP 8.4+)
- `codoc-front`: Frontend Vue 3 + Vite

## Prerequis

- PHP `>= 8.4`
- Composer `>= 2`
- Node.js `>= 20.19` (ou `>= 22.12`)
- npm (ou pnpm/yarn si prefere)

## Structure

```text
codoc/
  codoc-api/
  codoc-front/
```

## Installation

### 1) API

```bash
cd codoc-api
composer install
```

Configurer ensuite les variables d'environnement Symfony selon ton environnement local (`.env.local`).

### 2) Front

```bash
cd codoc-front
npm install
```

Configurer ensuite les variables d'environnement front si necessaire (ex: URL d'API).

## Lancer en developpement

### API

```bash
cd codoc-api
symfony server:start
```

Alternative sans CLI Symfony:

```bash
cd codoc-api
php -S 127.0.0.1:8000 -t public
```

### Front

```bash
cd codoc-front
npm run dev
```

## Commandes utiles

### API

```bash
cd codoc-api
php bin/console doctrine:migrations:migrate
php bin/phpunit
```

### Front

```bash
cd codoc-front
npm run lint
npm run build
```

## Notes de migration

- L'ancienne stack PHP MVC de `codoc` a ete retiree completement.
- Le depot Git historique reste celui de `codoc`.
- Les contenus de `codoc-api` et `codoc-front` ont ete importes en mode snapshot (sans reprise d'historique Git).
