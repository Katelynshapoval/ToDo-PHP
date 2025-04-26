# Simple PHP To-Do List

A minimalistic PHP web application to create and display a simple list of tasks.

## Features

- Add new tasks through a form.
- Tasks are stored persistently in a `tasks.txt` file.
- Prevents duplicate submissions with POST/Redirect/GET.
- Escapes output to protect against XSS vulnerabilities.

## Files

- `index.php` — Main PHP and HTML code.
- `tasks.txt` — Text file where tasks are saved.

## How It Works

1. Users submit a task using the form.
2. The task is appended to `tasks.txt`.
3. After submission, the page redirects itself to avoid form resubmission.
4. Tasks are read from the file and displayed in a list.

## Setup

1. Download or clone this repository.
2. Ensure your server (Apache, Nginx with PHP) can write to `tasks.txt`.
3. Place the files in your web server directory (e.g., `htdocs` for XAMPP).
4. Open `index.php` in your browser.
5. (Optional) Create a `style.css` file to customize the design.

## Example

```plaintext
- Buy groceries
- Finish homework
- Call Mom
