<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Borrow Here!</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    
    .contact-main {
        margin: 42px;
    }
    
    .contact-main h2 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 27px 0px;
        font-size: 3em;
    }
    
    .contact-main h2 span {
        color: rgb(180, 16, 16);
    }
    
    .contact-main .Details {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    
    .contact-main .Details .myInput {
        font-size: 16px;
        width: 40%;
        padding: 9px;
        margin: 8px;
        border: 1px solid rgb(10, 10, 10);
        border-radius: 5px;
        outline: none;
    }
    
    .contact-main .Details .btn {
        padding: 10px 45px;
        margin-top: 23px;
        border: 2px solid white;
        border-radius: 12px;
        background-color: black;
        cursor: pointer;
        color: white;
    }
</style>

<body>
    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="/" class="logo"> <i class="fas fa-book-open"></i> Library </a>


            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div href="#" class="fas fa-user"></div>
            </div>

        </div>



    </header>

    <!-- header section ends -->

    <div class="contact-main">
        <h2><span> To Borrow..!! </span> Fill The Below Form</h2>
        <form action="borrowData.php" class="Details" method="post">
            <input class="myInput" type="text"  name="user" placeholder="Enter Your Name" />
            <input class="myInput" type="text"  name="bookname" placeholder="Book Name" />
            <input class="myInput" type="number"  name="mobile" placeholder="Enter Your Mobile No." />
            <input class="myInput" type="e-mail"  name="email" placeholder="Enter Your E-mail" />
            <input class="myInput" type="text"  name="branch" placeholder="Branch " />
            <input class="myInput" type="number"  name="registration" placeholder="Registration No." />
            <input class="myInput" type="datetime-local" name="borrowdate">
            <button class="btn"  type="submit" onclick="popUp()">Submit</button>
        </form>
    </div>





    <!-- footer section starts  -->

    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> created by <span> pratik & shantee ram </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->

    <script>
        function popUp() {
            alert("TERMS & CONDITIONS" + "\n" + "Do not mark it in any way" + "\n" + "​Do not fold down the corners" + "\n" + "Return on time" + "\n" + "Additional Charge Will Be Applied After Time Expired");


        }
    </script>
</body>

</html>