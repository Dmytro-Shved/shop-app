<p align="center">
<img src="https://i.ibb.co/hVf88B1/Elf-VApe-Shop.jpg" alt="">
</p>

## About Shop App (ElfVapeShop)

Shop App is an online store where users can conveniently browse, add products to the cart, save their quantity and quickly place orders. We offer a wide range of products and an intuitive interface for comfortable shopping. 

## Requirements

- **[PHP 8.2](https://www.php.net/downloads)**
- **[Laravel 11.x](https://laravel.com/docs/11.x)**
- **[Composer](https://getcomposer.org/download/)**
- **[MySQL](https://www.mysql.com/downloads/)** or install local web server (for example **[WampServer](https://www.wampserver.com/en/)**)
- **[MySQL Workbench](https://dev.mysql.com/downloads/workbench/)** or **[PhpMyAdmin](https://www.phpmyadmin.net/)** (that comes with **[WampServer](https://www.wampserver.com/en/)**) to manage **[MySQL](https://www.mysql.com/downloads/)** queries
- **[Node.js](https://nodejs.org/en)**
- **[Livewire](https://laravel-livewire.com/docs/2.x/installation)**
- **[Shopping Cart Package](https://github.com/anayarojo/laravel-shopping-cart/tree/master)**


## Installation


*Install the **[Laravel 11.x](https://laravel.com/docs/11.x)** through **[Composer](https://getcomposer.org/download/)**.*



Run the Composer require command from the Terminal:
```
     composer create-project laravel/laravel example-app
```
   Now you're ready to start using the Laravel in your application.

*Install the Vite through **[Node.js](https://nodejs.org/en)**.*
```
     npm install
```

*Create a database in **[MySQL](https://www.mysql.com/downloads/)** and connect it to your project through .env*

For example:
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=example_db // name of your database+
    DB_USERNAME=root
    DB_PASSWORD=
```

*Run migrations in **[MySQL](https://www.mysql.com/downloads/)**.*
```
    php artisan migrate
```

[//]: # (*Install the **[Livewire]&#40;https://laravel-livewire.com/docs/2.x/installation&#41;**.*)

[//]: # ()
[//]: # (Install the package)

[//]: # (```)

[//]: # (    composer require livewire/livewire)

[//]: # (```)

*Install the **[Shopping Cart package](https://github.com/anayarojo/laravel-shopping-cart/tree/master)** through **[Composer](https://getcomposer.org/download/)**.*

Run the Composer require command from the Terminal:
```
    composer require anayarojo/shoppingcart
```

You definitely should publish the config file and take a look at it.
```
    php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"
```
This will give you a cart.php config file in which you can make changes to the packages behaivor.

(If you would like to learn more about the functionality of the package, visit the **[package page](https://github.com/anayarojo/laravel-shopping-cart/tree/master)**)

## Using

This application is an online store where users can browse, add items to cart and place orders. A special control panel is provided for administrators, where they can manage products and users.

#### Basic functionality

* View products:

    Users can view a list of all available products, including their descriptions and prices.


* Cart button:

    Each product has an "Add to Cart" button, allowing users to add selected items to their cart (session cart) for later purchase.

    The user can also: change the number of items, remove items from the cart and also completely clear the cart of items. By calculating the price of all items in the cart the user can find out how much he has to pay for all items


* Placing an order:

    After adding items to their cart, users can proceed to checkout and complete their purchase.


* Wholesale customer:

  Opportunity to become a wholesale customer using the form at the bottom of the site. 

  The data from the user will be sent to the Telegram bot, where the order will be visible to dealers.


* View reviews:

  The user can view reviews of purchases on the page, reviews are located at the bottom of the site and are designed as a convenient and beautiful carousel.


* Possibility to contact with manager:

  The user can contact the manager using the “Contact with manager” button and get to the Telegram chat where he can communicate with the manager.


#### Admin functionality

* Administrator registration:

  To register a new admin for the first time you will need the artisan command 
 ```
    php artisan create:admin
```
  
this command will create an admin in the admins table, once the admin is created you will have access to the form to register a new admin (done for security to prevent new users from becoming admins from the browser). 

then in the future you'll be able to create a new admin using this uri:
```
    http://127.0.0.1:8000/admin/register
```

* Authentication of an existing admin:
 
 ```
    http://127.0.0.1:8000/admin/login
 ```

  Admins can log in through the login page using this uri and providing their credentials (if the credentials are correct, the admin gets access to the admin panel).

to access the admin panel through the main page use this example uri:

```
    http://127.0.0.1:8000/admin/panel
```

* Admin panel (CRUD operations for products):

  Create products: Adding new products to the database using a form separately for cigarettes and separately for liquids

  Read products: Show selected product on the separate page (Show button).

  Update products: Editing information about existing products (Update button).

  Delete Product: Deletes products from the database (Delete button).


## Contributors
<!-- readme: contributors -start -->
<table>
<tr>
    <td align="center">
        <a href="https://github.com/Dmytro-Shved">
            <img src="https://avatars.githubusercontent.com/u/153960097?v=4" width="100;" alt="Dmytro Shved"/>
            <br />
            <sub><b>Dmytro Shved (back-end)</b></sub>
        </a>
    </td>
    <td align="center">
        <a href="https://github.com/sammri">
            <img src="https://avatars.githubusercontent.com/u/109173034?v=4" width="100;" alt="Samir Chub"/>
            <br />
            <sub><b>Samir Chub (front-end)</b></sub>
        </a>
    </td>
</table>


[//]: # (## Special thanks to )

[//]: # (<table>)

[//]: # (    <tr>)

[//]: # (        <td align="center">)

[//]: # (            <a href="https://github.com/kirchevsky">)

[//]: # (                <img src="https://avatars.githubusercontent.com/u/1301010?v=4" width="100;" alt="Igor Kyrchevskiy"/>)

[//]: # (                <br />)

[//]: # (                <sub><b>Igor Kyrchevskiy</b></sub>)

[//]: # (            </a>)

[//]: # (        </td>)

[//]: # (    </tr>)

[//]: # (</table>)
