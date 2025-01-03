<p align="center">
<img src="https://i.ibb.co/hVf88B1/Elf-VApe-Shop.jpg" alt="">
</p>

## About Shop App (ElfVapeShop)

Shop App is an online store that lets users easily browse products, add them to their cart, adjust quantities, and quickly place orders. We offer a wide range of products and a user-friendly interface to make shopping a pleasant experience.

## Requirements

- **[PHP 8.2](https://www.php.net/downloads)**
- **[Laravel 11.x](https://laravel.com/docs/11.x)**
- **[Composer](https://getcomposer.org/download/)**
- **[Node.js](https://nodejs.org/en)**
- **[Livewire](https://laravel-livewire.com/docs/2.x/installation)**
- **[Shopping Cart Package](https://github.com/anayarojo/laravel-shopping-cart/tree/master)**


## Installation


1. *Clone the repository:*

```
git clone https://github.com/Dmytro-Shved/shop-app.git
```

2. *Install dependencies:*
 
```
composer install
npm install
```

3. *Environment configuration: copy code from `.env.example` to `.env`:*

```
copy .env.example .env
```

4. *Run migrations:*
 
```
php artisan migrate
```

5. *Seed the database:*

```
php artisan db:seed
```

6. *Publish the config file from shopping cart package:*
 
```
php artisan vendor:publish --provider="Gloudemans\Shoppingcart\ShoppingcartServiceProvider" --tag="config"
```

(If you would like to learn more about the functionality of the package, visit the **[package page](https://github.com/anayarojo/laravel-shopping-cart/tree/master)**)


7. *Create a link:*

```
php artisan storage:link 
``` 

8. *Run the application:*

```
php artisan serve 
npm run dev
``` 

## Using

This application is an online store where users can browse, add items to cart and place orders. A special control panel is provided for administrators, where they can manage products.

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

* Create a new admin:

 ```
    php artisan create:admin
```
  
* Authentication of an existing admin:
 
 ```
    /admin/login
 ```

* Access to admin panel:


```
    /admin/panel
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
