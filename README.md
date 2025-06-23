# 🎓 StudentManager Laravel

Aplicação web desenvolvida com **Laravel 12** para gerir estudantes, incluindo criação, edição, visualização e eliminação de registos. Interface moderna e responsiva com Bootstrap 5, paginação customizada e validação de dados integrada.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8.2**
- **Laravel 12.19.3**
- Composer 2.8.6
- Blade (motor de templates Laravel)
- Bootstrap 5 (via Vite)
- Sass (pré-processador CSS)
- MySQL
- Eloquent ORM
- Laravel Pagination

---

## 🚀 Funcionalidades Principais

### 👨‍🎓 Gestão de Estudantes
- Adicionar novo estudante
- Listar estudantes com paginação
- Ver detalhes do estudante
- Editar dados do estudante
- Eliminar estudante (com confirmação via modal Bootstrap)

### 🎨 Interface Moderna
- Layout escuro com Bootstrap 5
- Formulários com validações integradas
- Paginação customizada com tema escuro

---

## 📂 Estrutura de Rotas

| Método | Rota                    | Descrição                        |
|--------|-------------------------|----------------------------------|
| GET    | `/students`             | Lista todos os estudantes        |
| GET    | `/students/create`      | Formulário de criação            |
| POST   | `/students`             | Guarda novo estudante            |
| GET    | `/students/{id}`        | Exibe detalhes de um estudante   |
| GET    | `/students/{id}/edit`   | Formulário de edição             |
| PUT    | `/students/{id}`        | Actualiza dados do estudante     |
| DELETE | `/students/{id}`        | Elimina estudante                |

---

## ✅ Validação de Dados

- `name`: obrigatório, texto entre 2 e 255 caracteres
- `email`: obrigatório, formato válido, único
- `phone_number`: obrigatório, 10 dígitos, único

---

## 💻 Instalação Local

### 📦 Pré-requisitos

- PHP **8.2** ou superior
- Composer **2.8.6** ou superior
- Node.js e NPM
- MySQL ou PostgreSQL

### 📥 Passos

**1. Clonar o repositório:**

```
git clone https://github.com/Didyon-Mondlhane/laravel_12_crud.git
cd laravel_12_crud
```

**2. Instalar dependências PHP e JS:**

```
composer install
npm install && npm run dev
```

**3. Configurar o ambiente:**

Copiar o `.env.example` para `.env` e configurar a base de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_db
DB_USERNAME=root
DB_PASSWORD=suapalavrapasse
```

**4. Gerar a chave da aplicação e migrar:**

```
php artisan key:generate
php artisan migrate
```

**5. Iniciar o servidor:**

```
php artisan serve
```

---

## 🌐 Acessar a Aplicação

http://localhost:8000/


---

## 📌 Licença

Este projecto é licenciado sob a [MIT License](https://spdx.org/licenses/MIT.html). Livre para uso pessoal, académico e educacional.

---