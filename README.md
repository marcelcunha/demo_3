# Projeto de Demonstração
## Introdução
Esse projeto foi desenvolvido com Tall Stack ([Tailwind](https://tailwindcss.com/), [AlpineJs](https://alpinejs.dev/), [Laravel](http://laravel.com) e [Livewire](https://laravel-livewire.com)) e seguindo a filosofia da stack, não foi escrito código Javascript e CSS além do necessário proposto nas respectivas documentações.

Como template de painel administrativo foi usado [Cleopatra](https://moesaid.github.io/cleopatra/), um admin dashboard simples feito com Tailwind. Os recursos de Javascript e CSS do template foram ignorados. Para ícones e spinners foi usando [FontAwesome 5](https://fontawesome.com). 

Todas eslizações de cards, tabelas, inputs etc foram baseadas em conteúdos do [Tailwind Components](https://tailwindcomponents.com/) ou algum outro site de conteúdo semelhante.

Para sessão Github da aplicação, foi usada a [api de buscas de usuário](https://docs.github.com/en/rest/reference/search#search-users) da plataforma. Todas requisições são feitas visando usuários com mais de 500 seguidores. 
## Instalação

Para executar o projeto é recomendado que se use Docker. Caso prefira não usar, crie um banco de dados, siga as instruções a partir do passo 4 configurando as credenciais do banco no arquivo ```.env```.

### Passos

1. Abra a pasta do projeto em um terminal;
2. Execute o código do bloco para criar a pasta ```vendor```
    ```sh
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    ```
3. Execute ```./vendor/bin/sail up -d``` para baixar as dependências e subir os conteiners e desbloquear o terminal;

4. Clone o arquivo ```.env.example``` para ```.env```.

    Certifique-se de que haja uma chave `GITHUB_API_URL` com seu devido valor no `.env`
    Configure as credenciais do seu banco de dados nas chaves correspondentes

5. Execute `./vendor/bin/sail artisan key:generate` para gerar a APP_KEY no seu `.env`

6. Execute `./vendor/bin/sail artisan migrate --seed` para criar as tabelas no banco de dados e alimentá-la com dados fictícios;

7. Caso queira testar o cadastro do novos usuários e recuperação de senha, será necessário adicionar as credenciais de um servidor SMTP no seu `.env`. Para testes é recomendado usar o [MailTrap](https://mailtrap.io/). 

8. Os assets (Javascript e CSS) já estão compilados (para desenvolvimento), caso deseje alterar será necessário instalá-los e executá-los com o comando: `npm i && npm run dev` ou `yarn install && yarn dev`. Certifíque-se de que tenha [NodeJs](https://nodejs.org/en/) instalado antes de usar os comandos anteriores.
    
### Usuário de testes
**E-Mail:** admin@example.com

**Senha:** password

