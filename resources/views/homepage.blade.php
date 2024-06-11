<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kerala tourism</title>

       
        <style>
            *{
                margin: 0;
                padding:0;
            }
           .banner{
            width: 100%;
            height: 100vh;
          
            background-image: url('alleppey-tourism.jpg');
             /* background: skyblue; */
            background-size: cover;
            /* background-position: center; */
            /* position: relative; */
           }

        #heading{
            text-align:center;
            color:green;
            float:0;
            font-size: 50px;
        }
        .image-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .image-list li {
        margin: 0 50px; /* Adjust the margin between images as needed */
    }

    .image-list img {
       width:300px;
       height: 300px;px;
        height: center;
        display: block;
        box-shadow:  0 0 3px #FF0000,5px 2px 5px black;
    }

    .images{
        margin-top: 300px;  
        
    }
       
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="banner">
        <h1 id="heading">KERALA TOURISM</h1>
            <div class="images">
                <ul class="image-list">
                    <li ><img height=100px width=100px src="Alappuzha.jpeg" alt="alappuzha"></li>
                    <li><img height=100px width=100px src="kochi.jpeg" alt="kochi"></li>
                    <li><img height=100px width=100px src="thrissur.jpg" alt="kochi"></li>
                </ul>
            </div>
            <h1>

            </h1>
        </div>
    </body>
</html>
