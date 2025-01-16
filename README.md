<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System (LMS)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2, h3 {
            color: #0056b3;
        }
        code {
            background-color: #e9ecef;
            padding: 2px 4px;
            border-radius: 4px;
            font-family: monospace;
        }
        pre {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        ol {
            padding-left: 20px;
        }
        a {
            color: #0056b3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Learning Management System (LMS)</h1>
    <p>
        A comprehensive Learning Management System (LMS) designed to streamline school management tasks. This project is developed using modern web technologies to manage students, staff, class schedules, exam details, and other school operations efficiently.
    </p>

    <hr>

    <h2>Features</h2>

    <h3>1. Student Management</h3>
    <ul>
        <li>Add, edit, view, and delete student records.</li>
        <li>CRUD operations for managing student details effectively.</li>
    </ul>

    <h3>2. Staff Management</h3>
    <ul>
        <li>Categorized staff into:
            <ul>
                <li>Operative Staff</li>
                <li>Non-Operative Staff</li>
            </ul>
        </li>
        <li>Perform CRUD operations for staff management.</li>
    </ul>

    <h3>3. Expenditure Calculator</h3>
    <ul>
        <li>Record and calculate school expenditures.</li>
        <li>Features include:
            <ul>
                <li>Amount entry</li>
                <li>Source tracking</li>
                <li>Remarks for expenditures</li>
            </ul>
        </li>
    </ul>

    <h3>4. Fees Structure</h3>
    <ul>
        <li>Define and manage the fee structure for each grade level.</li>
        <li>Categories for tuition, transportation, and miscellaneous fees.</li>
    </ul>

    <h3>5. Events Management</h3>
    <ul>
        <li>Maintain a list of upcoming and past events.</li>
        <li>Features include event names, dates, and descriptions.</li>
    </ul>

    <h3>6. Class Timetable</h3>
    <ul>
        <li>Detailed timetables for all classes from UKG to 10th.</li>
        <li>View subject schedules for each class.</li>
    </ul>

    <h3>7. Exam Marks and Grades</h3>
    <ul>
        <li>Record and display marks for each student.</li>
        <li>Automatically calculate grades based on predefined criteria.</li>
    </ul>

    <h3>8. Exam Timetable</h3>
    <ul>
        <li>Define exam schedules for each class.</li>
        <li>Includes subject names, dates, and timing for exams.</li>
    </ul>

    <hr>

    <h2>Technologies Used</h2>

    <h3>Frontend</h3>
    <ul>
        <li><strong>HTML</strong>: Markup language for structuring web pages.</li>
        <li><strong>CSS</strong>: Styling for layout, colors, and typography.</li>
        <li><strong>Bootstrap</strong>: For responsive design and prebuilt components.</li>
    </ul>

    <h3>Backend</h3>
    <ul>
        <li><strong>Laravel</strong>: A PHP framework for server-side logic and routing.</li>
    </ul>

    <h3>Database</h3>
    <ul>
        <li><strong>MySQL</strong>: Database management system to store and manage data.</li>
        <li><strong>XAMPP</strong>: Local server environment to connect MySQL with Laravel.</li>
    </ul>

    <hr>

    <h2>Prerequisites</h2>
    <ul>
        <li>Install <strong>XAMPP</strong> for local server and database setup.</li>
        <li>Install <strong>Composer</strong> for Laravel dependencies.</li>
        <li>PHP version >= 8.0.</li>
        <li>Node.js and npm (for frontend asset compilation in Laravel).</li>
    </ul>

    <hr>

    <h2>Installation</h2>
    <ol>
        <li>Clone the repository:
            <pre><code>git clone https://github.com/your-repo/lms.git
cd lms</code></pre>
        </li>
        <li>Install dependencies:
            <pre><code>composer install
npm install</code></pre>
        </li>
        <li>Set up the environment file:
            <ul>
                <li>Duplicate <code>.env.example</code> and rename it <code>.env</code>.</li>
                <li>Configure database credentials in <code>.env</code>:
                    <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lms
DB_USERNAME=root
DB_PASSWORD=</code></pre>
                </li>
            </ul>
        </li>
        <li>Migrate and seed the database:
            <pre><code>php artisan migrate --seed</code></pre>
        </li>
        <li>Start the development server:
            <pre><code>php artisan serve</code></pre>
        </li>
        <li>Open the application in your browser:
            <pre><code>http://localhost:8000</code></pre>
        </li>
    </ol>

</body>
</html>


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
