## Requirements
- [NodeJS](https://nodejs.org/)
- [Gulp](https://gulpjs.com/)

## Install
```
npm install
```

## Install gulp sass
```
npm install node-sass gulp-sass --save-dev
```

## Copy config file
```
cp default.js config.js
```

## Run
```
gulp
```

To build sass files separately, run

```
gulp sass
```

Check text domain
```
gulp check-domain
```

To generate *.pot file, run
```
gulp translate
```

Zip
```
gulp zip
```

## Linter tools
#### Require
- [ESLint](https://eslint.org/)
- [Stylelint](https://stylelint.io/)
- [WordPress-Coding-Standards](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards)

```
npm run eslint
npm run eslint:fix
npm run stylelint
npm run stylelint:fix
npm run phpcs
npm run phpcs:fix
```
