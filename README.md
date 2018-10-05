⚠️⚠️⚠️ ATENÇÃO ⚠️⚠️⚠️
Este projeto foi descontinuado.
O novo tema do portal BrazilJS está no repositório: [Porta WP Theme 2018](https://github.com/braziljs/portal-wp-theme-2018)

# BrazilJS Portal Theme

Tema Wordpress BrazilJS

## Duplicator -  Migrations & Backups

> Duplicador dá aos usuários do WordPress a capacidade de migrar, copiar, mover ou clonar  um site de um local para outro e também serve como um utilitário de backup simples. O duplicador  manipula a substituição de seqüência serializada e serializada de base64. A migração padrão do WordPress e os backups do WordPress são facilmente manipulados por este plugin, assim como as migrações de inatividade zero.


#### Dependências

+ Apache2
+ MySQL
+ Phpmyadmin

## How to use:

1. If Gulp is not installed, install [Gulp](http://gulpjs.com/).
2. Inside Your project folder run the command "npm install" in the terminal.
3. To start using the theme development, run the command "gulp" in the terminal.
4. To build the necessary assets for production environment, use the command "gulp build" in the terminal.

## Deploy

rsync -r --exclude=node_modules/ --exclude=.git ./ braziljs-wp:/var/www/html/wp-content/themes/portal-wp-theme-master/
