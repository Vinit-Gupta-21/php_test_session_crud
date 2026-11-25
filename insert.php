<?php
include 'db.php';

?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center my-3">Insert Form</h3>
             <div
        class="container col-5 shadow border rounded my-3"
       >
        <form method="POST">
           
            <div class="mb-3">
                <label for="" class="form-label">Book Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id=""
                    aria-describedby="emailHelpId"
                    placeholder="abc@mail.com"
                />
            </div>

           
            
            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <input
                    type="text"
                    class="form-control"
                    name="author"
                    id=""
                    placeholder=""
                />
            </div>

               <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input
                    type="text"
                    class="form-control"
                    name="category"
                    id=""
                    placeholder=""
                />
            </div>

               <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input
                    type="text"
                    class="form-control"
                    name="price"
                    id=""
                    placeholder=""
                />
            </div>

               <div class="mb-3">
                <label for="" class="form-label">quantity</label>
                <input
                    type="text"
                    class="form-control"
                    name="quantity"
                    id=""
                    placeholder=""
                />
            </div>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>

            
        </form>
       </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<?php

  if($_SERVER["REQUEST_METHOD"]==="POST"){
        $title = $_POST["title"];
        $author =$_POST["author"];
        $category = $_POST["category"];
       $price = $_POST["price"];
    $quantity = $_POST["quantity"];
       
         $sql= $conn->perpare("insert into books(book_title,author,category,price,quantity) values(?,?,?,?,?)");

        $sql->bind_param('sssii',$title,$author,$category,$price,$quantity);

        if ($sql->execute()) {
            header("Location:dashboard.php");
           
        }else{
            echo "insert failed!";
        }
       }

    

?>