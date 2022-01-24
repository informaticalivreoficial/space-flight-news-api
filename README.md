# API Space News

## Sobre 

Projeto de uma API de artigos Space Flight News feito como desafio proposto pela Coodesh. Neste projeto, criei uma API, Lista, Lista por ID, deleta, cadastra, atualiza.

## Tech

Language: PHP
Framework: Lumen v8

## Ambiente Docker
Suba os containers do projeto
```sh
docker-compose up -d
```
Entre no Container do projeto
```sh
docker-compose exec space-flight-news bash
```

## Lumen
Inicialize o projeto
```sh
composer install
```
Rode as migrations
```sh
php artisan migrate
```
Rode as Seeders
```sh
php artisan db:seed
```

## Rotas

Criar Artigo
```sh
rota post http://localhost:8989/articles/:
```
```sh
{
	"title": "SpaceX Dragon departs International Space Station to return to Earth",
	"url": "https://www.teslarati.com/spacex-cargo-dragon-crs-24-space-station-departure/",
	"imageUrl": "https://www.teslarati.com/wp-content/uploads/2022/01/CRS-24-Dragon-C209-ISS-departure-012322-NASA-feature-1.jpg",
	"newsSite": "Teslarat",
	"summary": "SpaceX Crew Dragon capsule C209 has undocked from the International Space Station (ISS) and is now on track to reenter Earth’s atmosphere...",
	"featured": false,
	"launches": [
		{
			"id": "7323ed72-b69a-429c-8cfe-",
            "provider": "teste"
	  }
	],
	"events": []
}
```

Visualizar Artigo
```sh
rota get http://localhost:8989/articles/{id}:
```

Visualizar Todos os Artigos
```sh
rota get http://localhost:8989/articles/:
```

Excluir Artigos
```sh
rota delete http://localhost:8989/articles/{id}:
```

## License

[MIT license](https://opensource.org/licenses/MIT).

# This is a challenge by [Coodesh](https://www.coodesh.com)