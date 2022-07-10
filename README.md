
## About Assignment

The assignment was pretty straight forward. Was easy to implement and work on. Following are the key aspects you should consider while evaluating the assignment
- Minimum or no styling has been done.
- Only focussed on the functional aspect.
- **All core functions defined** **in assignment have been completed**.
- No auth has been implemented (as advised in assignment).
- Blade Files used for `/` (Home) page.
- Vue components used for `/admin` (admin) page.

## Environment
- php 8.0
- Laravel 9
- Mysql 8
- Vue 3
- Inbuilt dev server

## Libraries / templates
- No external libraries
- used homer template assets (at some places)
- used bootstrap (Mostly)

## How to use
- pull main branch from github
- install dependencies by running `composer install`
- install vue dependencies by running `npm install`
- Build assets by running `npm run dev`
- copy example env to env `cp .env.example .env`
- generate app key `php artisan key:generate`
- create a database named `remote_company` or something else
- Add your DB creds to .env
- run migrations `php artisan migrate`
- start the inbuilt dev server `php artisan serve`
- That is all - app should be working at this point
- try to add a few records on `/admin` side.

## What has been done
- A homepage at `/` to view data. -  **Developed in Blade**
  - Snippet data can be viewed in datatable format with working search, sort and pagination.
  - Link data can be viewed in datatable format with working search, sort and pagination.
    - Links in table can be clicked on and will open as per `open in new tab` flag
  - File data can be viewed in datatable format with working search, sort and pagination.
    - File can also be downloaded by clicking on the download icon against each row.
  - 
- An `/admin` page to view / add / edit / delete data. - **Developed in Vue**
    - Snippet data can be viewed / added / edited / deleted.
    - Link data can be viewed / added / edited / deleted.
    - File data can be viewed / added / edited / deleted.
      - On file update old file is being removed and new uploaded and linked to the record.


## Main Functionality
- start inbuilt dev server `php artisan serve`
- head over to homepage `127.0.0.1:8000`
- here you can view the data for different sections.
- You can sort them, search in them, and use pagination to go across pages
- There is an admin side (without any auth)
- head over to admin dashboard `127.0.0.1:8000/admin`
- On the dashboard (no / minimum styling), there are tables with records of data
- You can sort them, search in them, and use pagination to go across pages
- There are also two action buttons on each row one to edit and one to delete a row.
- clicking on the edit button will take you to the edit screen where you can edit the data
- clicking on the delete icon will delete the row.
- There is an add new button in each section to add new records via a modal.

## Improvements that can be made
- Auth can be implemented
- A proper design / template can be used
- Proper guards for frontend and admin side can be used
- proper frontend and backend validation
- tests can be written
- static analysis using phpstan to reduce snags
- quality tools can be run to check for syntactic issues
- Eloquent Relations can be used
- proper AJAX can be used to improve UX
- Thumbnail can be shown on edit page once uploaded
- repositories can be used to separate logic
- many more

## What has not been done / was unclear
- No validation has been used.. JQuery for client side and Laravel `Validator` for serverside validation can be used.

## Main aspects
- Used standard Laravel structure
- Most code in Http, Models, Views, components folders
