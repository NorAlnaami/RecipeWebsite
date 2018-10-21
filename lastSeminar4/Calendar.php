<?php

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
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="reset">
        <link rel="stylesheet" type="text/css" href="myCSS.css">
        <title>Calendar- Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body">
        <h1 class="headMain" >Tasty Recipes</h1>
        <nav>
                <ul class="navbar">
                    <li class="navbar1"><a href="recipes.php">Index</a></li>
                    <li class="navbar1"><a href="Calendar.php">Calendar</a></li>
                    <li class="navbar1"> <a href="MeatBall.php">Lunch</a></li>
                    <li class="navbar1"><a href="PanCake.php">Dessert</a></li>
                    <li class="navbar1"><a href='Logout.php'>Logout</a></li>
                </ul>
            </nav>
        <div class="month">
            <!--Unordered HTML list-->
            <ul>
                <li class="prev">&#10094;</li>
                <li class="next">&#10095;</li>
                <li style="text-align:center">August <br>
                    <!--spanning for 2016 to have a big font-->
                    <span style="font-size: 18px">2016</span>
                </li>
            </ul>
        </div>
        
        <ul class="weekdays">
            <li>mon</li>
            <li>tue</li>
            <li>wed</li>
            <li>thu</li>
            <li>fri</li>
            <li>sat</li>
            <li>sun</li>
        </ul>
        <ul class="days">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li class="chosenday"><a href="MeatBall.html"><span class="imageCalendar">10</span></a></li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li class="chosenday2"><a href="PanCake.html"><span class="imageCalendar">20</span></a></li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
        </ul>
    </body>
</html>
