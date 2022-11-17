## Fibonacci Test

Steps :
- docker build --no-cache -t fibonacci-app .
- docker-compose up -d
- docker exec -it CONTAINER ID sh
- cp .env.example .env
- php artisan key:generate
- php artisan queue:work
- Login 
    - http://localhost:8000/api/login
        - email : user@email.com
        - password : password
- Run fibonacci
    - Header
        - Authorization Bearer token
    - http://localhost:8000/api/fibonacci?n=10
