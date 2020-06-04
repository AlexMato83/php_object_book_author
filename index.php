<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP OOP prodotto</title>
  </head>
  <body>
  <?php



   //inizio libri-----------------
   class Book {

     public $title;
     public $author;
     public $price;

     public function __construct($title,$author,$price){

       $this -> title = $title;
       $this -> author = $author;
       $this -> price = $price;

     }


     public function printProduct(){

       echo "Book " . $this -> title . "<br>" . "Price: " . $this -> price . "€" . "<br>";
       $this -> author -> printProduct();
     }
   }



  // inizio autori----------------------
   class Author {

     public $name;
     public $lastname;
     public function __construct($name,$lastname){



       $this -> name = $name;
       $this -> lastname = $lastname;


     }
     public function printProduct(){

       echo "Autore: " . $this -> name . " " . $this -> lastname . "<br>---------<br>";

     }

   }

   // creo autore 1
   $author1 = new Author('Giuanin',"Gambacorta");


   // creo autore 3
   $author2 = new Author("Gelsomino","Verruca");

   // // stampo autori
   // $author1 -> printProduct();
   // $author2 -> printProduct();
   // $author3 -> printProduct();


   // creo libro1 con title, author, price
   $book1 = new Book('Lamenti di cani',$author1,"sedicenti");

   // creo libro2 con title, author, price
   $book2 = new Book('La nebbia razzista',$author1,"nessun");

   // creo libro3 con title, author, price
   $book3 = new Book('Puzzo',$author2,"svariati");

   // stampo libri
   $book1 -> printProduct();
   $book2 -> printProduct();
   $book3 -> printProduct();

   ?>
  </body>
</html>
