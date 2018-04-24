
## About 

This app is built with laravel php web application framework, it stores user notes and appointment
> [Live Preview](https://onlinediary.herokuapp.com/)

- User Authentication
- C.R.U.D Functionalities

## Install

### 1. Clone the source code or create new project.

```shell
git clone https://github.com/dwinjnr/online-diary.git
```

### 2. Set the basic config

```shell
cp .env.example .env
```

Edit the `.env` file and set the `database` and other config for the system after you copy the `.env`.example file.

### 3. Install the extended package dependency.

Install the `Laravel` extended repositories: 

```shell
cd 'project-name'
```

```shell
composer install
```
### 4. Run migration 

```shell
php artisan migrate
```
