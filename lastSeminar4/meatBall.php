<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="reset">
        <link rel="stylesheet" type="text/css" href="myCss.css">
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
          <h1 class="headMain" >Tasty Recipes</h1>
        <nav>
                <ul class="navbar">
                    <li class="navbar1"><a href="recipes.php">Index</a></li>
                    <li class="navbar1"><a href="Calendar.php">Calendar</a></li>
                    <li class="navbar1"><a href="MeatBall.php">Lunch</a></li>
                    <li class="navbar1"><a href="PanCake.php">Dessert</a></li>
                    <li class="navbar1"><a href='Logout.php'>Logout</a></li>
                </ul>
            
            </nav>
          <h2 class="headRecipe">Swedish meatballs recipe</h2>
        
          <img class="image" src="http://choicesaintlouis.com/wp-content/uploads/2015/08/Falafel-Mediterranean.jpg" alt="Swedish meatballs">
        <br>
        <p class="imageSummary">Swedish meatballs recipe photo  by choicesaintlouis</p>
        <br>
        <pre class="cookingDetails">Prep: 25 m   Cook: 1 h   Ready In: 1 h 25 m  6 Servings </pre>
         <!--list ingredients-->
         <h1 class="head">Ingredients</h1>
         <ul>
             <li>1 teaspoon salt</li>
             <li>1 tablespoon brown sugar (optional)</li>
             <li>1 egg</li>
             <li>1/3 pound finely ground pork</li>
             <li>2/3 pound ground beef</li>
             <li>1 small onion, minced</li>
             <li>1 teaspoon butter</li>
             <li>1/2 cup heavy cream</li>
             <li>2 slices day-old white bread, crumbled</li>
             <li>1/4 teaspoon ground black pepper</li>
             <li>1/4 teaspoon ground nutmeg</li>
             <li>1/4 teaspoon ground allspice</li>
             <li>1/8 teaspoon ground ginger (optional)</li>
             <li>1 tablespoon butter</li>
             <li>1/4 cup chicken broth</li>
             <li>3 tablespoons all-purpose flour, or as needed</li>
             <li>2 cups beef broth, or as needed</li>
             <li>1/2 (8 ounce) container sour cream</li>        
         </ul>
         <!--list directions-->
         <h1 class="head">Directions</h1>
         <ol>
             <li>Preheat oven to 350 degrees F (175 degrees C).</li>
             <li> Place the bread crumbs into a small bowl, and mix in the cream. Allow to stand until crumbs<br>
                 absorb the cream, about 10 minutes. While the bread is soaking, melt 1 teaspoon of butter in a<br>
                 skillet over medium heat, and cook and stir the onion until it turns light brown, about 10<br>
                 minutes. Place onion into a mixing bowl; mix with the ground beef, ground pork, egg, brown<br>
                 sugar, salt, black pepper, nutmeg, allspice, and ginger. Lightly mix in the bread crumbs and<br>
                 cream.</li>
             <li> Melt 1 tablespoon of butter in a large skillet over medium heat. Pinch off about 1 1/2<br>
                 tablespoon of the meat mixture per meatball, and form into balls. Place the meatballs into the<br>
                 skillet, and cook just until the outsides are brown, about 5 minutes, turning the meatballs <br>
                 often. Insides of the meatballs will still be pink. Place browned meatballs into a baking dish,<br>
                 pour in chicken broth, and cover with foil.</li>
             <li> Bake in the preheated oven until the meatballs are tender, about 40 minutes. Remove <br>
                 meatballs to a serving dish.</li>
                 <li> To make brown gravy, pour pan drippings into a saucepan over medium heat. Whisk the flour <br>
                     into the pan drippings until smooth, and gradually whisk in enough beef broth to total about 2 <br>
                     1/2 cups of liquid. Bring the gravy to a simmer, whisking constantly until thick, about 5<br>
                     minutes. Just before serving, whisk in the sour cream. Season to taste with salt and black<br>
                 pepper. Serve the gravy with the meatballs.</li>
         </ol>
         <div class="nutritonalFacts">
             
             <h2 class="head">NutirionFacts</h2>

<table class="nutritionFactsTable">
  <tr>
    <th>Nutrition</th>
    <th>Grams</th>
  </tr>
  <tr>
    <td>Calories</td>
    <td>290g</td>
  </tr>
  <tr>
    <td>Fat</td>
    <td>6g</td>
  </tr>
  <tr>
    <td>Fiber</td>
    <td>2g</td>
  </tr>
  <tr>
    <td>Protein</td>
    <td>16g</td>
  </tr>
  <tr>
    <td>Sodium</td>
    <td>0.61g</td>
  </tr>
  <tr>
    <td>Carbohydrates</td>
    <td>44g</td>
  </tr>
</table>
         </div>
         <h2 class="head">Comments</h2>
         <!--<pre class="commentUser">catherine sloane    17th Jun, 2016</pre>
         <p class="comment">"Our family's traditional Christmas recipe, frequently<br>
               doubled and kept warm in a crock pot. Worth the<br>
               effort, and the meatballs are even better the next day! <br>
               Reserve brown gravy and add sour cream to it the day you<br>
               serve the leftovers."</p>
         <pre class="commentUser">benconnolli     23rd May, 2016</pre>
         <p class="comment">"A little salty"</p>    -->
         
         <?php
 include 'commentForm.php';
 ?>
             
    </body>
</html>
