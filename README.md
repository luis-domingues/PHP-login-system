# Devboard
devboard is a web dashboard designed to organize and optimize developers' time and projects. In it, you can organize your insights, ideas, analyze development time, monitor your financial statement, among other features.

![GitHub repo size](https://img.shields.io/github/repo-size/luis-domingues/devboard?style=flat)
![GitHub language count](https://img.shields.io/github/languages/count/luis-domingues/devboard?style=flat)
![GitHub forks](https://img.shields.io/github/forks/luis-domingues/devboard?style=flat)

> Project is under developer

## Features
* **Developer registration**: Makes it easier to save your documents on the dashboard

* **Security**: Password goes through an encryption process

<h3>Coming Features</h3>
[] - Responsive layout recreation

[] - CRUD operation on projects, documents, profile, among others

[] - Finance Management

## Installation
Firstly, make sure you have PHP version 8 or higher, Node.js and npm installed. After that, clone the repository:

```sh
git clone https://github.com/luis-domingues/devboard.git
```
1. Go to the project directory:
```sh
cd devboard
```
2. Install [Tailwindcss](https://awari.com.br/tailwind-css/#:~:text=Como%20instalar%20e%20configurar%20o%20Tailwind%20CSS,-A%20primeira%20etapa&text=Isso%20pode%20ser%20feito%20atrav%C3%A9s,em%20seu%20arquivo%20CSS%20principal.) dependencies:
```sh
npm install tailwindcss
```

3. Compile Tailwind CSS:
```json
"scripts": {
  "build:css": "tailwindcss build src/styles.css -o public/styles.css"
}
```
4. Then run the command to compile the CSS:
```sh
npm run build:css
```

5. Finally, run the PHP server:
```sh
php -S localhost:8000
```
 > [!NOTE]
 > Create and edit the `settings.php` file with your database settings to establish a connection with it.

6. Access the project in the browser:

 * Open your browser and go to `http://localhost:8000.`

Ready! Your project must be running on your local machine.

## Contributing
If you're interested in contributing to this project, consider reading the [Contributing Guide](https://github.com/luis-domingues/devboard/blob/main/CONTRIBUTING.md)

## Lincense
This project is licensed under the MIT License - see the [LICENSE file](https://github.com/luis-domingues/devboard?tab=MIT-1-ov-file) for details.