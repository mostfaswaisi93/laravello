# Laravello — Trello Clone

A Trello-style task board built as a single-page app: a **Vue 2** front end talking to a **GraphQL** API powered by **Laravel 8** and **Lighthouse**, styled with **Tailwind CSS**.

![Laravel](https://img.shields.io/badge/Laravel-8-FF2D20?logo=laravel&logoColor=white)
![GraphQL](https://img.shields.io/badge/GraphQL-Lighthouse-E10098?logo=graphql&logoColor=white)
![Vue](https://img.shields.io/badge/Vue-2-4FC08D?logo=vuedotjs&logoColor=white)
![Apollo](https://img.shields.io/badge/Apollo_Client-311C87?logo=apollographql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-1-06B6D4?logo=tailwindcss&logoColor=white)

## Features

- Register, login and logout (Laravel Sanctum, cookie-based SPA auth)
- Create boards with custom colors and switch between them
- Add lists to a board
- Add, edit and delete cards inside lists
- Authorization with **Laravel policies** wired into GraphQL via `@can` (only owners can update or delete their cards)
- Server-side validation with Lighthouse `@rules` and password hashing with `@hash`
- Vue Router, Vuex and Apollo Client on the front end, with `.gql` query files per operation
- GraphQL Playground and Laravel Telescope for development

## GraphQL API

```graphql
type Query {
  me: User
  board(id: ID!): Board
  userBoards(owner_id: ID!): [Board!]
}

type Mutation {
  register(name: String!, email: String!, password: String!): User
  login(email: String!, password: String!): User!
  logout: User
  boardAdd(title: String!, color: String!): Board!
  listAdd(title: String!, board_id: ID!): CardList!
  cardAdd(input: CardAddInput): Card!
  cardUpdate(id: ID!, title: String): Card
  cardDelete(id: ID!): Card
}
```

Data model: `User` → `Board` → `CardList` → `Card`. Full schema in [`graphql/schema.graphql`](graphql/schema.graphql).

## Getting Started

**Prerequisites:** PHP 7.3+ / 8, Composer, Node.js, MySQL

```bash
git clone https://github.com/mostfaswaisi93/laravello.git
cd laravello
composer install
npm install

cp .env.example .env
php artisan key:generate
# set DB_DATABASE / DB_USERNAME / DB_PASSWORD in .env
php artisan migrate

npm run dev
php artisan serve      # http://localhost:8000
```

GraphQL Playground: `http://localhost:8000/graphql-playground`

## Author

**Mustafa T. Al-Swaisi** · [LinkedIn](https://www.linkedin.com/in/mostfaswaisi93/) · [GitHub](https://github.com/mostfaswaisi93)
