# Readme for worksuite
### Plugins used in the app

<ol>
    <li>
        <strong>Bootstrap 4 </strong> - <a href="https://getbootstrap.com/">https://getbootstrap.com/</a>
    </li>
    <li>
        <strong>Moment.js </strong> - <a href="https://momentjs.com/">https://momentjs.com/</a>
    </li>
    <li>
        <strong>Bootstrap Select</strong> - <a href="https://developer.snapappointments.com/bootstrap-select/">https://developer.snapappointments.com/bootstrap-select/</a>
    </li>
    <li>
        <strong>Datepicker </strong> - <a href="https://github.com/qodesmith/datepicker">https://github.com/qodesmith/datepicker</a>
    </li>
    <li>
        <strong>Fontawesome </strong> - <a href="https://fontawesome.com/">https://fontawesome.com/</a>
    </li>
    <li>
        <strong>Bootstrap Icons (used in menu) </strong> - <a href="https://icons.getbootstrap.com/">https://icons.getbootstrap.com/</a>
    </li>
    <li>
        <strong>Dropify (used for file uploads) </strong> - <a href="https://github.com/JeremyFagis/dropify">https://github.com/JeremyFagis/dropify</a>
    </li>
    <li>
        <strong>sweetalert2 (used for alerts and notifications)</strong> - <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
    </li>
    <li>
        <strong>Quilljs (used for rich text editor)</strong> - <a href="https://quilljs.com/">https://quilljs.com/</a>
    </li>
    <li>
        <strong>Frappe Charts</strong> - <a href="https://frappe.io/charts">https://frappe.io/charts</a>
    </li>
    <li>
        <strong>Bootstrap MultiDatesPicker</strong> - <a href="https://github.com/uxsolutions/bootstrap-datepicker">https://github.com/uxsolutions/bootstrap-datepicker</a>
    </li>
    <li>
        <strong>Bootstrap Colorpicker</strong> - <a href="https://github.com/itsjavi/bootstrap-colorpicker">https://github.com/itsjavi/bootstrap-colorpicker</a>
    </li>
    <li>
        <strong>jQuery UI (used for sortable items)</strong> - <a href="https://jqueryui.com/">https://jqueryui.com/</a>
    </li>
    <li>
        <strong>Highlight JS (used for highlight html content)</strong> - <a href="https://github.com/highlightjs/highlight.js">highlight.min.js</a>
    </li>
    <li>
        <strong>Chart.js</strong> - <a href="https://www.chartjs.org/">https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js</a>
    </li>
    <li>
        <strong>Image Picker</strong> - <a href="https://rvera.github.io/image-picker/">https://rvera.github.io/image-picker/</a>
    </li>
    <li>
        <strong>Cropper.js</strong> - <a href="https://github.com/fengyuanchen/cropperjs">https://github.com/fengyuanchen/cropperjs</a>
    </li>
</ol>




To implement the 'Chart of Accounts' functionality with the requirements you've provided, you'll need to make several modifications to your application. Here's a high-level overview of the steps you can follow:

Database Migration:

Create a new migration file to add a table for storing the chart of accounts. The table should have columns for account name, account type, account code, parent account (if applicable), and other relevant fields.
You can use the following Artisan command to create a new migration file:
php artisan make:migration create_chart_of_accounts_table



Model:

Create a new Eloquent model for the 'Chart of Accounts' table. You can generate the model using the following Artisan command:
php artisan make:model ChartOfAccount



Define the relationships between the 'Chart of Accounts' model and other models (e.g., transactions, income, expenses) as per your application's requirements.
Controller:

Modify the ChartOfAccountsController to handle the CRUD operations for the 'Chart of Accounts'.
Implement the logic for creating new accounts with different types (Assets, Liabilities, Equity, Income, Expense) and their respective sub-types.
Handle the linking of accounts to income or expense accounts based on the account type.
Views:

Create the necessary views for the 'Chart of Accounts' functionality.
In the index.blade.php view, display the list of existing accounts with their respective types and sub-types.
Add a button or link with the text '+ New Account' at the top-right corner of the index.blade.php view.
Create a create.blade.php view with a form to capture the account details (name, type, sub-type, code, parent account, etc.).
Create an edit.blade.php view to allow editing of existing accounts.
Implement the necessary form validations and error handling in the views.
Routes:

Update the routes in routes/web.php to include additional routes for handling the different account types and sub-types, if required.
Localization:

Add the necessary translation strings for the account types, sub-types, and other labels in the appropriate language files (e.g., resources/lang/en/app.php).
Permissions:

If your application has a permission system, ensure that the necessary permissions are set up for managing the 'Chart of Accounts' functionality.
Sidebar Menu:

Update the resources/views/sections/menu.blade.php file to include the 'Chart of Accounts' menu item, as you've already done.
Testing:

Write tests to ensure the proper functioning of the 'Chart of Accounts' functionality, including creating, updating, and deleting accounts of different types and sub-types.
This is a high-level overview of the steps required to implement the 'Chart of Accounts' functionality. You may need to adjust the implementation details based on your application's specific requirements and existing codebase.