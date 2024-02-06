#!/bin/sh

git pull origin main

cd website/bedrock

composer install

cd web/app/themes/notesapp

npm i
npm run production