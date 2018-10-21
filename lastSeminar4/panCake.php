<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
         <link rel="stylesheet" type="text/css" href="reset">
         <link rel="stylesheet" type="text/css" href="myCss.css">
       <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <h1 class="headMain" >Tasty Recipes</h1>
         <nav>
                <ul class="navbar">
                    <li class="navbar1"><a href="recipes.php">Index</a></li>
                    <li class="navbar1"><a href="Calendar.php">Calendar</a></li>
                    <li class="navbar1"> <a href="meatBall.php">Lunch</a></li>
                    <li class="navbar1"><a href="PanCake.php">Dessert</a></li>
                    <li class="navbar1"><a href='Logout.php'>Logout</a></li>
                </ul>
            </nav>
        <h1 class="headRecipe">Pancakes recipe</h1>
        
        <img class="image" src="http://magicbelles.com/flutterbudclub/wp-content/uploads/2012/02/pancakes1.jpg" alt="Pancakes">
        <br>
        <p class="imageSummary">Pancakes recipe photo by magicbelles</p>
        <br>
         <pre class="cookingDetails">Prep: 5 m   Cook: 15 m   Ready In: 20 m  8 Servings </pre>
         <!--list ingredients-->
         <h1 class="head">Ingredients</h1>
         <ul>
             <li>1 1/2 cups all-purpose flour</li>
             <li>3 1/2 teaspoons baking powder</li>
             <li>1 egg</li>
             <li>1 teaspoon salt</li>
             <li>1 tablespoon white sugar</li>
             <li>1 1/4 cups milk</li>
             <li>3 tablespoons butter, melted</li>     
         </ul>
         <!--list directions-->
         <h1 class="head">Directions</h1>
         <ol>
             <li>In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center<br>
                 and pour in the milk, egg and melted butter; mix until smooth.</li>
             <li> Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto<br>
                 the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.</li>
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
    <td>227g</td>
  </tr>
  <tr>
    <td>Fat</td>
    <td>10g</td>
  </tr>
  <tr>
    <td>cholestol</td>
    <td>59g</td>
  </tr>
  <tr>
    <td>Protein</td>
    <td>6g</td>
  </tr>
  <tr>
    <td>Sodium</td>
    <td>0.439g</td>
  </tr>
  <tr>
    <td>Carbohydrates</td>
    <td>28g</td>
  </tr>
</table>
         </div>
         <h2 class="head">Comments</h2>
         <br>
         <!--pre class="commentUser">catherine sloane    17th Jun, 2016</pre>
         <p class="comment">"This is a great recipe that I found in my Grandma's <br>
             recipe book. Judging from the weathered look <br>
             of this recipe card, this was a family favorite."</p>
         <pre class="commentUser">benconnolli     23rd May, 2016</pre>
         <p class="comment">The pancakes turned out so salty and bitter I had <br>
        to throw them away.</p-->   
         <?php
 include 'commentForm.php';
 ?>
         
         
                  
    </body>
</html>
